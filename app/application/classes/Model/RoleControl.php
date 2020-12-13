<?php defined('SYSPATH') or die('No direct script access.');

class Model_RoleControl extends Kohana_ORM {
		
	protected $_table_name = 'roles'; // <== вручную установить имя таблицы
	
	/**
     *
     * Define the array of rules to be validated against
     * the signup information
     * @return array rules
     */
    public function rules($edit = false) 
    {
        return array(
            'name' => array(
            	array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 32)),
                array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
                $edit == false ? 
                	array(array($this, 'check_role_create'), array(':validation', ':field')) : 
					array(array( $this, 'check_role_edit' ), array(':validation', ':field', ':model' ))
            ),
            'description' => array(array('not_empty', NULL),
                array('min_length', array(':value', 6)),
            ),
			'id' => array(
				array('not_empty')
			)
        );
    }
	
	/**
	 * Function to validate the input //Хороший пример тут http://blog.shameerc.com/2011/05/simple-ajax-validation-for-kohana.html
    	http://kohana3.ru/validation
	 * 
	 * @param array $array Post data to be validated
	 * @return Validation object with rules applied
	 */
    public function validate($array, $edit = false) 
    {
        $validation = Validation::factory($array);
        
		if($edit) { //передаём в валидацию модель
			$validation->bind( ':model', $array );
		}
			
        $array_rules = $this->rules($edit);
        foreach ($array as $key => $val) {
            $rules = $array_rules[$key];
            $validation->rules($key, $rules, $edit);
        }
        return $validation;
    }
	
	/**
	 * Custom validation function to check if the value exists in the db
	 * in the given field. Used by the validation function
	 * @param Validation $array
	 * @param <type> $field
	 */
    public function check_role_create(Validation $array, $field) 
    {
    	if( ORM::factory( 'Role', array( $field => $array[$field]) )->loaded() )
		{
			$array->error($field, 'check_role_create', array($array[$field]));
		}
    }
	
	/**
	 * Проверка уникальности имени роли
	 */
	public function check_role_edit( Validation $array, $field, $model )
    {
        $result = ORM::factory( 'Role', array( $field => $array[$field]) );
			
        if( $result->loaded() && $result->id != $model['id'])
        {
			$array->error($field, 'check_role_edit', array($array[$field]));
        }
    }	 
	
	/**
	 * Добавление роли в БД
	 */
	public function add_role($data)
	{
		list($insert_id, $total_rows_affected) = DB::insert('roles', array('name', 'description'))->values(array($data['name'], $data['description']))->execute();
		return $insert_id; //Последний вставленый id
	}
	
	public function edit_role($data) 
	{
		$rows = DB::update('roles')->set(array('name' => $data['name'], 'description' => $data['description']))->where('id', '=', $data['id'])->execute();
		return $rows ? true : false;
	}
	
	/**
	 * Удаление роли из БД
	 */
	public static function delete_role($id)
	{
		$rows = DB::delete('roles')->where('id', '=', $id)->execute();
		return $rows ? true : false;
	}
	
}