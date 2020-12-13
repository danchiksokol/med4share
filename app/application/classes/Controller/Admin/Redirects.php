<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 14.10.2015
 * Time: 0:49
 */


class Controller_Admin_Redirects extends Controller_Admin_Admin
{
    public function before()
    {
        parent::before();
    }

    public function after()
    {
        $this->template->breadcrumb = array_merge( array('admin/redirects' => 'Редиректы'), $this->template->breadcrumb);
        parent::after();
    }

    public function action_redirects() {

        $data = ORM::factory('Redirects')
            ->order_by('id', 'DESC')
            ->find_all();

        $content = View::factory('admin/redirects/index')
            ->bind('data', $data);

        $this->template->content = $content;

    }

    public function action_add() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            $add = ORM::factory('Redirects');
            $add->from = $this->request->post('from');
            $add->to  = $this->request->post('to');
            $add->save();
            //last insert id
            echo json_encode( array('status'=>true, 'redirect_id' => $add->pk()) );

        }
    }

    public function action_active() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            // Меняем статус на противоположный
            $active = DB::query(Database::UPDATE, "UPDATE `redirects` SET active = NOT active, modified_date = '".date('Y-m-d H:i:s')."' WHERE id =". $this->request->post('id'))->execute();
            echo json_encode(array('status'=>$active, 'modified_date' => date('Y-m-d H:i:s')));
        }
    }

    public function action_delete() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            ORM::factory('Redirects', $this->request->post('id') )->delete();

            echo json_encode(array('status'=>true) );
        }
    }

    public static function getRedirect( $from ) {

        $data = ORM::factory('Redirects')
            ->where('from',  '=', $from )
            ->where('active', '=', 1)
            ->find();

        return isset($data->to) ? $data->to : false;
    }

}