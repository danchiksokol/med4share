<?php

class Model_DopMenuItems extends ORM {

    protected $_table_name = 'dop_menu_items'; // <== вручную установить имя таблицы
    protected $_primary_key = 'id_items'; //Названия поля первичного ключа находится в параметре _primary_key и по умолчанию оно установлено в id:


    public function getDopMenu( $id_menu ) {

        return $this
            ->where('id_menu', '=', $id_menu)
            ->order_by('sort', 'ASC')
            ->find_all();

    }

}