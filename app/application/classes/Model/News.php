<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Модель для работы с новостями
 */
class Model_News extends ORM {
	
	protected $_table_name = 'news'; // <== вручную установить имя таблицы
	protected $_primary_key = 'news_id'; //Названия поля первичного ключа находится в параметре _primary_key и по умолчанию оно установлено в id:
	
	/**
	 * Достаем новости для главной страницы
	 */
	public function get_index_news()
	{
		return ORM::factory('News')
            ->where('active', '=', '1')
			->and_where('view_main', '=', '1')
			->and_where('publish_date', '<=', date('Y-m-d'))
            ->order_by('publish_date', 'DESC')
			->find_all();
	}
	
	/**
	 * Достаем одну новость по url
	 */
	public function get_news_only($url)
	{
		return DB::query(Database::SELECT, "SELECT * FROM `news` WHERE url = :url AND (type ='site' OR type='all') AND `active` = 1 AND `publish_date` <= CURDATE() LIMIT 1")
					->param(':url', $url)
					->execute()
					->current();	
	}

    /**
     * Получаем УРЛ новости по id
     * @param $id
     * @return bool|mixed
     * @throws Kohana_Exception
     */
    public function get_url4id($id) {
        $result = $this
            ->where('news_id', '=', $id)
            ->find();
        return isset($result->url) ? array('url' => $result->url, 'name' => $result->title) : false;
    }

	
	/**
	 * Достаем другие новые новости 
	 */
	 public function get_other_news($current_id, $limit = 2)
	 {
	 	return DB::query(Database::SELECT, "SELECT * 
											FROM  `news` 
											WHERE  `news_id` <> :current_id
											AND ( TYPE =  'site' OR TYPE =  'all')
											ORDER BY  `create_date`, `modified_date` DESC 
											LIMIT :limit")
					->param(':current_id', $current_id)
					->param(':limit', $limit)
					->execute()
					->as_array();
	 }
	 
	 /*
	 * $page_num - номер текущей страницы
	 * 
	 */
	public function get_news_index($page_num = 1, $razdel_id = 0 )
	{

		$offset = ($page_num - 1) * Kohana::$config->load('website.news.count_index_page');


		if( $razdel_id == 0 ) { // Обычной главной странице
			$razdel_id = '0, 1, 2';
		}

		$data = DB::query(Database::SELECT, "SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 AND `razdel_id` IN (:razdel) ORDER BY `publish_date` DESC  LIMIT :offset, :count")
			->param(':razdel', $razdel_id)
			->param(':count', Kohana::$config->load('website.news.count_index_page'))
			->param(':offset', $offset)
			->execute()
			->as_array();

		$count_news = DB::query(Database::SELECT, "SELECT FOUND_ROWS() AS found")->execute()->get('found');
			
		$data['count_news'] = $count_news;

		return $data;
	}
	 
	/*
	 * $page_num - номер текущей страницы
	 * 
	 */
	public function get_news_list($page_num = 1, $razdelId)
	{
		$offset   = ($page_num - 1) * Kohana::$config->load('website.news.count_news_page');


        // Быстро накидай потом поправлю
        if( $razdelId == 0 ) { // Все новости
			$razdel_id= '0, 1, 2';
        }
        else if( $razdelId == 1 ) {
			$razdel_id= '0, 1';
        }
        else if( $razdelId == 2 ) {
			$razdel_id= '0, 2';
        }
		else if( $razdelId == 3 ) {
			$razdel_id= '3';
		}
		else if( $razdelId == 4 ) {
			$razdel_id= '4';
		}

		$data = DB::query(Database::SELECT, "SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 AND `razdel_id` IN (:razdel_id) ORDER BY `publish_date` DESC  LIMIT :offset, :count")
			->param(':razdel_id', $razdel_id)
			->param(':count', Kohana::$config->load('website.news.count_news_page'))
			->param(':offset', $offset)
			->execute()
			->as_array();

		$count_news = DB::query(Database::SELECT, "SELECT FOUND_ROWS() AS found")->execute()->get('found');
			
		$data['count_news'] = $count_news;

		return $data;
	}

	/*
	 * $page_num - номер текущей страницы
	 *
	 */
	public function get_news_tag($page_num = 1, $tagname, $razdel_id = 0)
	{

		// Найдём id_tag_name
		$tag_id  = ORM::factory('NewsTagsName')
			->where('tag_url', '=', $tagname)
			->find();
		$tag_id = $tag_id->tag_id;


		// Найдём ids новостей
		$data  = ORM::factory('NewsTagsId')
			->where('tag_id', '=', $tag_id)
			->find_all();

		foreach( $data as $val ) {
			$news_ids[] = $val->new_id;
		}

		//
		if( count($news_ids) ) {
			$news_ids_str = implode(', ', $news_ids);
		}
		else { // Если у данного тега нет новостей
			return;
		}

		if( $tag_id > 0 ) {

			$offset   = ($page_num - 1) * Kohana::$config->load('website.news.count_news_page');

			$data = DB::query(Database::SELECT, "SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 AND `news_id` IN ($news_ids_str) AND `razdel_id` = :razdel_id  ORDER BY `publish_date` DESC  LIMIT :offset, :count")
				->param(':count', Kohana::$config->load('website.news.count_news_page'))
				->param(':offset', $offset)
				->param(':razdel_id', $razdel_id)
				->execute()
				->as_array();
			
			$count_news = DB::query(Database::SELECT, "SELECT FOUND_ROWS() AS found")->execute()->get('found');

			$data['count_news'] = $count_news;

			return $data;
		}
		else {
			return false; // Не нашел нужного тега
		}
	}
	
	
	/**
	 * Сохранение новости
	 */
	public function save_news($data)
	{
		$update_news = ORM::factory('News', $data['id']);
		//Удаляем не нужное
		unset($data['id']);

		$data['active'] = isset($data['active']) ? 1 : 0;
        $data['show_not_reg'] = isset($data['show_not_reg']) ? 1 : 0;
		$data['view_main'] = 1; //isset($data['view_main']) ? 1 : 0;
 		$data['modified_date'] = date('Y-m-d H:i:s');

		foreach ($data as $key => $value) {
			$update_news->$key = $value;
		}
		//Сохраняем
		$update_news->save();

        return $update_news->pk();
	}
	
	/**
	 * Добавление новой новости
	 */
	 public function add_news($post_data)
	 {
		 $add_news = ORM::factory('News');
		 $add_news->active = 0; // Не активна
		 $add_news->title = $post_data['title'];
		 $add_news->publish_date = date('Y-m-d');
		 $add_news->type = 'all';
		 $add_news->create_date = date('Y-m-d H:i:s');//DB::expr('NOW()');
		 $add_news->author_id = 0;
		 $add_news->save();
		 //last insert id
		 return $add_news->pk();

	 }
	
	 /**
     * Валидация данных
     * @param $array
     * @param bool $edit
     * @return Validation
     */
    public function validate($array, $edit = false)
    {
        $validation = Validation::factory($array);

        if($edit) { //передаём в валидацию модель
            $validation->bind( ':model', $array );
        }

        //Массив для проверки есть ли переменная для проверки
        $array_rules = $this->my_rules($edit);

        foreach ($array as $key => $val) {

            if(array_key_exists($key, $array_rules))
            {
                $rules = $array_rules[$key];
                $validation->rules($key, $rules, $edit);
            }
        }
        return $validation;
    }
	
	 /**
	 *
	 * Define the array of rules to be validated against
	 * the signup information
	 * @return array rules
	 */
	public function my_rules($edit = false)
	{
	    return array (
	        'news_id' => array(
	            array('not_empty'),
	        ),
	        'active' => array(
	            array('not_empty'),
	        ),
	        /*
	        'description' => array(
	            array('not_empty', NULL),
	            array('min_length', array(':value', 6)),
	        ),
	        */
	    );
	}
	
	
}
