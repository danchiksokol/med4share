<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Модель работы с главным меню
 */
class Model_MainMenu extends ORM
{
    protected $_table_name = 'main_menu'; // <== вручную установить имя таблицы
    protected $_primary_key = 'id'; //Названия поля первичного ключа находится в параметре _primary_key и по умолчанию оно установлено в id:


    public function getMenu( $razdel_id = 0 ) {

        $notes = $this
            ->where('razdel_id', '=', $razdel_id)
            ->order_by('order', 'ASC')
            ->order_by('parent_id', 'ASC')
            ->find_all();

        foreach($notes as $val){
            $data[] = $val->as_array();
        }

        $menu = array();
        $menu_index = array();


        foreach ($data as $val) {
            if($val['parent_id'] == 0) {
                $menu[] = $val;
                $menu[sizeof($menu)-1]['child'] = array();
                $menu_index[$val['id']] = &$menu[sizeof($menu)-1];
            } else {
                $menu_index[$val['parent_id']]['child'][] = $val;
                $menu_index[$val['id']] = &$menu_index[$val['parent_id']]['child'][sizeof($menu_index[$val['parent_id']]['child'])-1];
            }
        }

        return $menu;
    }

    public function deleteMenu( $id ) {

       // $note = ORM::factory('MainMenu', $id)->as_array();

       //if( $note['level'] < 3 ) {

           $data = $this
               ->where('parent_id', '=', $id)
               ->find_all();

           foreach( $data as $val ) {

               $data2 = $this
                   ->where('parent_id', '=', $val->id)
                   ->find_all();
               foreach($data2 as $v) {

               }
           }
    }
}