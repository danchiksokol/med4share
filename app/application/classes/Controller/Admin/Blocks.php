<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 18.01.2015
 * Time: 1:06
 * db_table  = calendar_events
 */


class Controller_Admin_Blocks extends Controller_Template_Admin
{

    public function before()
    {
        parent::before();
    }

    public function after()
    {
        $this->template->breadcrumb = array_merge( array('admin/blocks' => 'Блоки'), $this->template->breadcrumb);
        parent::after();
    }

    public function action_index() {

    }

    public function action_sponsor() {

        $data = ORM::factory('Blocks')
            ->where('blocks_name', '=', 'sponsor')
            ->find();



        // Для красивых checkbox
        $this->template->scripts[] = array('media/js/admin/bootstrap-toggle.js', array('type' => 'text/javascript', 'charset' => 'utf-8') );
        $this->template->styles[]  = array('media/css/bootstrap/bootstrap-toggle-buttons.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet'));

        $this->template->content = View::factory('admin/blocks/sponsor')
            ->bind('data', $data);

        $this->template->breadcrumb = array('admin/blocks/sponsor/' => 'Блок спонсоры');
    }

    public function action_getdata(){
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            //Парсим ответ
            $id = (int) $this->request->post('id');



            $model = ORM::factory('Blocks', $id);

            echo json_encode(
                array(
                    'status'=>true,
                    'content'=> $model->content
                ));



            return;
        }
    }

    /**
     * ajax
     */
    public function action_save() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            //Парсим ответ
            $id = (int) $this->request->post('id');
            $name =     $this->request->post('name');
            $active =   $this->request->post('active') != 1 ? 0 : 1;
            $content =  $this->request->post('content');


            $model = ORM::factory('Blocks', $id);
            $model->content = $content;
            $model->active = $active;
            $model->save();



           if($model->pk()) {
                echo json_encode(array('status'=>true, 'message'=>'Успешно сохранено в БД'));
            } else {
                echo json_encode(array('status'=>false, 'message'=>'Ошибка'));
            }
            return;
        }
    }
}