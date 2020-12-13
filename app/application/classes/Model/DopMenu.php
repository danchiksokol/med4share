<?php
/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 11.02.15
 * Time: 3:02
 */

class Model_DopMenu extends ORM {

    protected $_table_name = 'dop_menu_name'; // <== вручную установить имя таблицы
    protected $_primary_key = 'id'; //Названия поля первичного ключа находится в параметре _primary_key и по умолчанию оно установлено в id:

    protected $_has_one = array(
        'DopMenuItems'    => array(
            'model'       => 'DopMenuItems',
            'foreign_key' => 'id_name',
        )
    );


    public function getAllMenu() {

    }

}