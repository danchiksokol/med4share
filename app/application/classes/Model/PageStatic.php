<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Модель для работы со статическими страницами
 */
class Model_PageStatic extends ORM {
	protected $_table_name = 'page_static'; // <== вручную установить имя таблицы
	protected $_has_many = array (
  		'page' => array ('foreign_key' => 'id' )
	);


    /**
     * Получаем УРЛ страницы по id
     * @param $id
     * @return bool|mixed
     * @throws Kohana_Exception
     */
    public function get_url4id($id) {
        $result = ORM::factory('Page')
            ->where('id', '=', $id)
            ->find();
        return isset($result->url) ? array('url' => $result->url, 'name' => $result->name) : false;
    }

}
