<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Модель для работы с новостями
 */
class Model_Expertsf extends ORM {
	
	protected $_table_name = 'expertsf'; // <== вручную установить имя таблицы
	protected $_primary_key = 'id'; //Названия поля первичного ключа находится в параметре _primary_key и по умолчанию оно установлено в id:
	
	 
     /**
	 * Достаем одну новость по url
	 */
	public function get_expert_only($url)
	{
		return DB::query(Database::SELECT, "SELECT * FROM `expertsf` WHERE url = :url AND `active` = 1 LIMIT 1")
					->param(':url', $url)
					->execute()
					->current();	
	}
	
	
	
	/**
	 * Сохранение новости
	 */
	public function save_expert($data)
	{
		$update = ORM::factory('Expertsf', $data['id']);
		//Удаляем не нужное
		unset($data['id']);
		// дата обновления
		//$data['date_modif'] =  date('Y-m-d H:i:s');//DB::expr('NOW()');

		foreach ($data as $key => $value) {

			/*if( $key == 'date_begin' || $key == 'date_end' ) {
                $value = strtotime($value) === false ? date ('Y-m-d') : date ("Y-m-d", strtotime($value) );
			}*/
			$update->$key = $value;
		}
		//Сохраняем
		$update->save();

        return $update->pk();
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

	/**
	 * Массив начальных букв фамилий
	 * @param string $razdel
	 * @return array
	 * @throws Kohana_Exception
	 */
	public function getAlfabet($razdel_id = false) {
		
		$alfabet = array();

		if( $razdel_id == false) {
			$dataAll = ORM::factory('Expertsf')
				->where('active', '=', 1)
				->and_where('razdel_id', '<>', '3')
				->order_by('familia', 'ASC')
				->find_all();
		}
		else {

			$dataAll = ORM::factory('Expertsf')
				->where('active', '=', 1)
				->and_where('razdel_id', '=', $razdel_id)
				->order_by('familia', 'ASC')
				->find_all();
		}



		foreach ($dataAll as $val) {
			$alfabet[] = mb_substr($val->familia, 0, 1, 'utf-8');
			//
		}
		$alfabet = array_unique($alfabet);
		
		return $alfabet;
	}
	
	
}
