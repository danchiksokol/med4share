<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 16.10.2015
 * Time: 0:50
 */

class Controller_Admin_NewsTags extends Controller_Admin_Admin
{

    public function before()
    {
        //echo 		$this->request->action();
        parent::before();
    }

    public function after()
    {
        $this->template->breadcrumb = array_merge(array('admin/news_list' => 'Теги новостей'), $this->template->breadcrumb);
        parent::after();
    }

    public function action_index()
    {
        echo "action index";
    }

    /**
     * Список новостей
     */
    public function action_newstags()
    {

        $data = ORM::factory('NewsTagsName')
            ->order_by('sort', 'ASC')
            ->find_all();
        $content = View::factory('admin/newstags/list')
            ->bind('data', $data);

        $this->template->content = $content;
    }

    public function action_add() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            $add = ORM::factory('NewsTagsName');
            $add->razdel_id = $this->request->post('razdel_id');
            $add->tag_name = $this->request->post('tag_name');
            $add->tag_url = str_replace(' ', '_', trim( $this->request->post('tag_name')) );
            $add->save();
            //last insert id
            echo json_encode( array('status'=>true, 'tag_id' => $add->pk()) );

        }
    }

    public function action_edit() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;


            if( $this->request->post('tag_id') < 0 ) {
                echo json_encode( array('status'=> false ));
                return false;
            }
            $edit = ORM::factory('NewsTagsName', $this->request->post('tag_id'));
            $edit->razdel_id = $this->request->post('razdel_id');
            $edit->tag_name = $this->request->post('tag_name');
            $edit->tag_url = str_replace(' ', '_', trim( $this->request->post('tag_name')) );
            $edit->save();
            //last insert id
            echo json_encode( array('status'=>true) );

        }
    }

    public function action_active() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            // Меняем статус на противоположный
            $active = DB::query(Database::UPDATE, "UPDATE `news_tags_name` SET active = NOT active, modified_date = '".date('Y-m-d H:i:s')."' WHERE tag_id =". $this->request->post('id'))->execute();
            echo json_encode(array('status'=>$active, 'modified_date' => date('Y-m-d H:i:s')));
        }
    }

    public function action_delete() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            ORM::factory('NewsTagsName', $this->request->post('id') )->delete();

            echo json_encode(array('status'=>true) );
        }
    }

    public function action_get_edit_news() {


        $this->auto_render = false;

        $data = ORM::factory('NewsTagsName')
            ->order_by('tag_name', 'ASC')
            ->where('active', '=', '1')
            ->find_all();

        foreach($data as $val) {
            $json[] =  array('value' => $val->tag_id, 'text' => $val->tag_name, 'continent' => 'fdgdfg');
        }


        // $this->response->headers( 'Content-type', 'text/javascript; charset=UTF-8' );
        $this->response->headers('Content-Type', 'application/json');
        $this->response->body( json_encode( $json ) );
        //if ($this->request->is_ajax() && $this->request->post()) {}
    }

    public function action_sort() {

        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;

            $post_data = $this->request->post('data');
            unset($post_data[0]);

            foreach( $post_data as $k => $id ) {

                DB::query(Database::UPDATE, "UPDATE `news_tags_name` SET `sort` = ".(int)$k." WHERE tag_id =". $id)->execute();

            }
            echo json_encode(array('status'=>1));
        }


    }

}