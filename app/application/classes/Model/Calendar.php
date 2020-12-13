<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Модель для работы с новостями
 */
class Model_Calendar extends ORM {
	
	protected $_table_name = 'calendar_events'; // <== вручную установить имя таблицы
	protected $_primary_key = 'id'; //Названия поля первичного ключа находится в параметре _primary_key и по умолчанию оно установлено в id:
	
	/**
	 * Достаем для главной страницы
	 */
	public function getEventDate( $date )
	{
		return $this
			->where('date_event', '=', $date)
			->find_all();
		//			->as_array();
	}


	public function getMainPage( $month, $year, $razdel_id = 0 ) {

		return $this
			->where(DB::expr('MONTH(`date_begin`)'), '=', $month)
			->where(DB::expr('MONTH(`date_end`)'), '=', $month)
			->and_where(DB::expr('YEAR(`date_begin`)'), '=', $year)
			->and_where(DB::expr('YEAR(`date_end`)'), '=', $year)
			->and_where('razdel_id', '=', $razdel_id)
			->and_where('active', '=', '1')
			->order_by('date_begin', 'ASC')
			->find_all();

	}

    /**
     * Получаем УРЛ события по id
     * @param $id
     * @return bool|mixed
     * @throws Kohana_Exception
     */
    public function get_url4id($id) {
        $result = $this
            ->where('id', '=', $id)
            ->find();
        return isset($result->url) ? array('url' => $result->url, 'name' => $result->name) : false;
    }
	
	
	
	/**
	 * Сохранение новости
	 */
	public function save_event($data)
	{
		$update = ORM::factory('Calendar', $data['id']);
		//Удаляем не нужное
		unset($data['id']);
		// дата обновления
		$data['date_modif'] =  date('Y-m-d H:i:s');//DB::expr('NOW()');

		foreach ($data as $key => $value) {

			if( $key == 'date_begin' || $key == 'date_end' ) {
                $value = strtotime($value) === false ? date ('Y-m-d') : date ("Y-m-d", strtotime($value) );
			}
			$update->$key = $value;
		}
		//Сохраняем
		$update->save();

        return $update->pk();
	}
	
	/**
	 * Добавление новой новости
	 */
	 public function add_event($post_data)
	 {
	 	$add_news = ORM::factory($this);
		$add_news->title = $post_data['title'];
		$add_news->type  = 'all';
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
	        'id' => array(
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
