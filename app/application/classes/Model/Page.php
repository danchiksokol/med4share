<?php defined('SYSPATH') or die('No direct script access.');

class Model_Page extends ORM_MPTT
{
	protected $_table_name = 'page_tree'; // <== вручную установить имя таблицы
	// /protected $level_column = 'level'; //database column where level values are stored

   	protected $_has_one = array( // Один к одному http://kohana3.ru/module/orm
        'pagestatic' => array(
            'model' => 'PageStatic',
            'foreign_key' => 'id',
        ),
    );


	/**
	 * Обновление страницы
	 */
	 public function save_page($data)
	 {
         $page_id = $data['page_id'];
       
         $update_tree = ORM::factory('Page', (int) $data['page_id']);
         $update_tree->name = $data['name'];
         $update_tree->url = $data['url'];
		 //Переносим по дереву, если изменился родитель
		 if($update_tree->parent_id != $data['parent_id'] && $update_tree->parent_id != 0) // <-- костыль для главной страницы
		 {
		 	$update_tree->move_to_first_child( $data['parent_id'] );
		 }
		 //Сохраняем дерево
         $update_tree->save();

         unset($data['page_id'], $data['url'], $data['parent_id'], $data['name']);
      

	 	$update_static = ORM::factory('PageStatic', (int)$page_id);
		//Дата обновления 
		$date_modified = new DateTime($data['date-change'].' '.$data['time-change']);
		$data['modified'] = $date_modified->format( 'Y-m-d H:i:s' ); //2012-11-17 21:59:10
		unset($data['date-change'], $data['time-change']);
		//Активность страницы
		isset($data['active']) ? $data['active'] = 1 : $data['active'] = 0;

        isset($data['show_not_reg']) ? $data['show_not_reg'] = 1 : $data['show_not_reg'] = 0;

		// is_comments
		//$data['js'] = isset($data['js']) ? json_encode($data['js']) : null;
		//$data['css'] = isset($data['css']) ? json_encode($data['css']) : null;
        //$data['header_images'] =  isset($data['header_images']) ? json_encode($data['header_images']) : null;
		
		foreach($data as $key => $value)
		{
			$update_static->$key = $value;
		}
		$update_static->save();

         // Добавляем ветку комментариев
         if($data['is_comments'] > 0 && $page_id > 0) {
             if( Model::factory('Comment')->add_scope( 'PageStatic', $page_id ) === false ) {
                 echo json_encode(array('status'=>false, 'message'=> 'Ошибка в реализации комментариев' ) );
                 return;
             }
         }


	 	//$rows = DB::update('roles')->set(array('name' => $data['name'], 'description' => $data['description']))->where('id', '=', $data['id'])->execute();
		
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
            'page_id' => array(
                array('not_empty'),
            ),
            'active' => array(
                array('not_empty'),
            ),
            'name' => array(
                array('not_empty'),
                array('min_length', array(':value', 2)),
                array('max_length', array(':value', 255)),
                //array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),

                /*$edit == false ?
                    array(array($this, 'check_page_create'), array(':validation', ':field')) : //Добавление новой страницы
                    array(array($this, 'check_page_edit' ), array(':validation', ':field', ':model' )) //Редактированние существующей*/

            ),
            /*
            'description' => array(
                array('not_empty', NULL),
                array('min_length', array(':value', 6)),
            ),
            */
        );
    }

    /**
     * Custom validation function to check if the value exists in the db
     * in the given field. Used by the validation function
     * @param Validation $array
     * @param <type> $field
     */
    public function check_page_create(Validation $array, $field)
    {
        if( ORM::factory( 'page', array( $field => $array[$field]) )->loaded() )
        {
            $array->error($field, 'check_role_create', array($array[$field]));
        }
    }

    /**
     * Проверка уникальности имени роли
     */
    public function check_page_edit( Validation $array, $field, $model )
    {
        $result = ORM::factory( 'page', array( $field => $array[$field]) );

        if( $result->loaded() && $result->id != $model['page_id'])
        {
            $array->error($field, 'check_page_edit', array($array[$field]));
        }
    }




    /**
	 * Получение всех родителей страницы формирование хлебных крошек
	 */
	public function create_breadcrumb($page_id)
	{
        //Данные по родителям
		$data['parents'] = ORM::factory('Page', $page_id)->parents()->as_array();
        //Данные по текущей странице
        $data['current_page'] = ORM::factory('Page', $page_id)->as_array();

        return $data;
	} 
    
    
	/*
    protected $nstree;
    protected $tableName = 'page_tree';
	protected $errors = array();
	
	 
	public function __construct()
    {
    	//Создаем объект класса для работы с деревьями
        $this->nstree = new NSTree($this->tableName);
    }
	  

	public function getTree()
    {
		return $this->nstree->getTree();
    }
	
	public function catInsert($parentId, $data = array())
    {
    
		$this->nstree->insert($parentId, $data);
        return TRUE;
    }

	public function getErrors()
    {
        return $this->errors;
    }
	
	public function delete_page($page_id)
	{
		$this->nstree->delete($page_id);
	}
	
	public function getNode($id)
	{
		return $this->nstree->getNode($id);
	}
	
	public function getPath($id)
	{
		return $this->nstree->getPath($id);
	}
	
	public function move($id, $parentId)
	{
		return $this->nstree->move($id, $parentId);
	}
	

	
	public function getCategoryIdByUrl($url)
	{
		$data = DB::select('id')
			->from($this->tableName)
			->where('url', '=', $url)
			->execute()
			->current();
			
			if (!isset($data['id'])) return FALSE;
			return $data['id'];
	}
	
	*/
	
}
