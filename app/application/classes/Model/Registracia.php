<?php defined('SYSPATH') or die('No direct script access.');
/**
 */
class Model_Registracia extends ORM {
	
	protected $_table_name = 'registracia'; // <== вручную установить имя таблицы
	protected $_primary_key = 'id'; //Названия поля первичного ключа находится в параметре _primary_key и по умолчанию оно установлено в id:
	
	/**
	 * Достаем новости для главной страницы
	 */
	public function add( $data = array() )
	{
        $fileds = array('name', 'work', 'position', 'telefon', 'email', 'city', 'ip');
        /*foreach( $data as $k => $val ) {
            if( ! in_array($k, $fileds) ) {
                return false;
            }
        }*/

        foreach($data as $key => $val ) {
            if( in_array($key, $fileds) ) {
                $this->$key = $val;
            }

        }
        $this->save();
        return $this->pk();
	}
	
	/**
	 * Достаем одну новость по url
	 */
	public function getList()
	{
        $query = DB::select()
            ->from($this->_table_name)
            ->order_by('date')
            ->execute()
            ->as_array();

        return $query;
	}
}
