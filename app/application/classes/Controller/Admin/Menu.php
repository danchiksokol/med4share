<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Menu extends Controller_Admin_Admin
{

    public function before()
    {
        //echo 		$this->request->action();
        parent::before();
    }

    public function after()
    {
        $this->template->breadcrumb = array_merge(array('admin/menu' => 'Меню Онкология'), $this->template->breadcrumb);
        parent::after();
    }

    public function action_menu() {

        $menu = Model::factory('MainMenu')->getMenu();

        $content = View::factory('admin/menu/main')->bind('menu', $menu);


        $this->template->content = $content;
    }




    public function action_sort() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            $post = $this->request->post();

            $data  = json_decode($post['post_data'],1);


            $newData = array();

            $i = 0;
            foreach( $data[0] as $val ){
                $id_1 = $val['id'];
                $i++;

                $newData[] = array(
                    'id' => $id_1,
                    'parent_id' => 0,
                    'order' => $i,
                    'level' => 1
                );

                //$sqlData[$i]['id'] = $val['id'];
                if( isset($val['children'][0]) && count( $val['children'][0]) ) {

                    $child1 = $val['children'][0];

                    foreach( $child1 as $vv ) {

                        $id_2 = $vv['id'];
                        $i++;

                        $newData[] = array(
                            'id' => $id_2,
                            'parent_id' => $id_1,
                            'order' => $i,
                            'level' => 2
                        );


                        if( isset($vv['children'][0]) && count( $vv['children'][0]) ) {
                            $child2 = $vv['children'][0];
                            foreach( $child2 as $v ) {

                                $id_3 = $v['id'];
                                $i++;

                                $newData[] = array(
                                    'id' => $id_3,
                                    'parent_id' => $id_2,
                                    'order' => $i,
                                    'level' => 3
                                );
                                // Двойной вложености хватит
                            }
                        }
                    }
                }
            }

           // массив нужно записать в БД
            foreach( $newData as $val ) {

                $update = ORM::factory('MainMenu', $val['id']);
                $update->parent_id = $val['parent_id'];
                $update->order = $val['order'];
                $update->level = $val['level'];
                //Сохраняем
                $update->save();

            }

        }
    }

    public function action_add() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;



            $update = ORM::factory('MainMenu',0);
            $update->razdel_id = 0;
            $update->name = $this->request->post('name');
            $update->url = $this->request->post('url');
            $update->save();
            $pk = $update->pk();

            if( $pk ) {
                echo json_encode(array('status'=>true, 'pk' => $pk, 'message'=>'Успешно сохранено в БД'));
            } else {
                echo json_encode(array('status'=>false, 'message'=>'Ошибка'));
            }

        }
    }

    public function action_edit() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            $id = $this->request->post('id');


            $update = ORM::factory('MainMenu', (int)$id);
            $update->razdel_id = 0;
            $update->name = $this->request->post('name');
            $update->url = $this->request->post('url');
            if( $update->save() ) {
                echo json_encode(array('status'=>true, 'message'=>'Успешно сохранено в БД'));
            } else {
                echo json_encode(array('status'=>false, 'message'=>'Ошибка'));
            }

        }
    }

    public function action_delete() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            $id = $this->request->post('id');

            $data = DB::query(Database::SELECT, "
            SELECT
                  t1.id AS lev1,
                  t2.id AS lev2,
                  t3.id AS lev3,
                  t4.id AS lev4
            FROM main_menu AS t1
            LEFT JOIN main_menu AS t2 ON t2.parent_id = t1.id
            LEFT JOIN main_menu AS t3 ON t3.parent_id = t2.id
            LEFT JOIN main_menu AS t4 ON t4.parent_id = t3.id
            WHERE t1.id = :id")
                ->parameters(array( ':id' => $id ))->as_assoc()->execute();

            $ids = array();
            foreach($data as $val) {
                foreach($val as $v) {
                   if( ! in_array($v, $ids) && $v > 0) {
                       $ids[] = $v;

                       DB::query(Database::DELETE, 'DELETE FROM main_menu WHERE id = :id')
                           ->param(':id', $v)
                           ->execute();

                   }
                }
            }
            echo json_encode(array('status'=>true, 'message'=>'Успешно удалено'));
        }
    }

}