<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Модель для работы со статическими страницами
 */
class Model_Blocks extends ORM {
    protected $_table_name = 'blocks'; // <== вручную установить имя таблицы
    protected $_primary_key = 'id'; //Названия поля первичного ключа находится в параметре _primary_key и по умолчанию оно установлено в id:


    public function getBlock( $name ) {

        $notes = $this
            ->where('blocks_name', '=', $name)
            ->find_all();


    }

}