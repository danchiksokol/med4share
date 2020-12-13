<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_DopMenu extends Controller_Admin_Admin
{

    public function before()
    {
        //echo 		$this->request->action();
        parent::before();
    }

    public function after()
    {
        $this->template->breadcrumb = array_merge(array('admin/dopmenu' => 'Дополнительное меню'), $this->template->breadcrumb);
        parent::after();
    }

    public function action_dopmenu() {
        $data = ORM::factory('DopMenu')
            ->find_all();

        $content = View::factory('admin/dopmenu/list')->bind('data', $data);


        $this->template->content = $content;
    }

    /**
     * Добавляем новое меню
     */
    public function action_add() {

        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            $name = $this->request->post('name');

            $menu = ORM::factory('DopMenu');
            $menu->name = $name;
            $menu->active = 1;
            $menu->save();
            $pk = $menu->pk();

            if( $pk > 0 ) {
                echo json_encode(array('status'=>true, 'pk'=>$pk));
            } else {
                echo json_encode(array('status'=>false, 'message' => 'При добавлении меню произошла ошибка'));
            }
        }
    }


    public function action_save() {

        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;

            $id = $this->request->post('id');
            $name = $this->request->post('name');

            $menu = ORM::factory('DopMenu', $id);
            $menu->name = $name;
            $menu->active = 1;
            $menu->save();
            $pk = $menu->pk();

            if( $pk > 0 ) {
                echo json_encode(array('status'=>true, 'pk'=>$pk));
            } else {
                echo json_encode(array('status'=>false, 'message' => 'При добавлении меню произошла ошибка'));
            }
        }
    }

    public function action_delete() {

        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            $id = $this->request->post('id');

            $menu = ORM::factory('DopMenu', $id);

            if( $menu->delete() ) {
                echo json_encode(array('status'=>true));
            } else {
                echo json_encode(array('status'=>false, 'message' => 'При удалении меню произошла ошибка'));
            }


        }
    }


    // Разделы в меню

    public function action_sort() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;

            $post_data =  json_decode($this->request->post('post_data'), 1);

            foreach($post_data as $key => $val) {

                $menuId = null;
                $itemId = null;
                $sort = 0;

                foreach($val as $k => $v) {
                    if( isset( $v['menuid'] ) &&  $v['menuid'] > 0 ) {
                        $menuId = $v['menuid'];
                    }
                }

                foreach( $val as $v) {
                    if( isset( $v['itemId'] ) &&  $v['itemId'] > 0 ) {
                        $itemId = $v['itemId'];
                    }

                    if( $menuId > 0 && $itemId > 0) {

                        $orm = ORM::factory('DopMenuItems', $itemId);
                        $orm->id_menu = $menuId;
                        $orm->sort = $sort++;
                        $orm->save();
                        unset($orm);
                    }
                }
            }
        }
        echo json_encode(array('status'=>true));
    }

    public function action_addItem() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;


            $maxSort = DB::select(array(DB::expr('MAX(sort)'), 'sort'))
                ->where('id_menu', '=', $this->request->post('menu_id'))
                ->from('dop_menu_items')
                ->execute()
                ->as_array();

            $maxSort = $maxSort[0]['sort'] + 1;

            $item = ORM::factory('DopMenuItems');
            $item->id_menu = $this->request->post('menu_id');
            $item->url = $this->request->post('item_url');
            $item->name = $this->request->post('item_name');
            $item->sort = $maxSort;
            $item->save();

            $pk = $item->pk();

            if( $pk > 0 ) {
                echo json_encode(array('status'=>true, 'pk'=>$pk));
            } else {
                echo json_encode(array('status'=>false, 'message' => 'При добавлении пункт произошла ошибка'));
            }

        }
    }

    public function action_saveItem() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;

            $id = $this->request->post('id');
            $name = $this->request->post('name');
            $url  = $this->request->post('url');

            $menu = ORM::factory('DopMenuItems', $id);
            $menu->name = $name;
            $menu->url = $url;
            //$menu->active = 1;
            $menu->save();
            $pk = $menu->pk();

            if( $pk > 0 ) {
                echo json_encode(array('status'=>true, 'pk'=>$pk));
            } else {
                echo json_encode(array('status'=>false, 'message' => 'При добавлении меню произошла ошибка'));
            }
        }
    }


    public function action_deleteItem() {

        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            $id = $this->request->post('id');

            $menu = ORM::factory('DopMenuItems', $id);

            if( $menu->delete() ) {
                echo json_encode(array('status'=>true));
            } else {
                echo json_encode(array('status'=>false, 'message' => 'При удалении меню произошла ошибка'));
            }


        }
    }


}