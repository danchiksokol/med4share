<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 18.01.2015
 * Time: 1:06
 * db_table  = calendar_events
 */


class Controller_Admin_Calendar extends Controller_Template_Admin
{
    public function before()
    {
        parent::before();
    }

    public function after()
    {
        $this->template->breadcrumb = array_merge( array('admin/calendar' => 'Список календарных событий'), $this->template->breadcrumb);
        parent::after();
    }

    /**
     * Достаем весь список событий
     */
    public function action_calendar() {

        $data = ORM::factory('Calendar')
            ->order_by('date_begin', 'DESC')
            ->find_all();

        $blocks = ORM::factory('Blocks')
            ->where('blocks_name', '=', 'calendar_index')
            ->find();

        $content = View::factory('admin/calendar/calendar_list')
            ->bind('blocks', $blocks)
            ->bind('calendar', $data);

        $this->template->content = $content;
    }

    public function action_edit() {


        $event_id = $this->request->param('id');
        $this->template->breadcrumb = array('admin/calendar/edit/'.$event_id => 'Редактирование событий');

        $data = array();
        if($event_id) {
            //Достаем контент
            $data = ORM::factory ('Calendar', $event_id);
        }


        $this->template->scripts[] = array('media/ckeditor/ckeditor.js', array('type' => 'text/javascript', 'charset' => 'utf-8') );
        //$this->template->scripts[] = array('media/ckeditor/config.js', array('type' => 'text/javascript', 'charset' => 'utf-8') );
        // Для красивых checkbox
        $this->template->scripts[] = array('media/js/admin/bootstrap-toggle.js', array('type' => 'text/javascript', 'charset' => 'utf-8') );
        $this->template->styles[]  = array('media/css/bootstrap/bootstrap-toggle-buttons.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet'));


        $this->template->content = View::factory('admin/calendar/calendar_edit')
            ->bind('data', $data);
    }

    public function action_add() {

        if(isset($_POST['event_title']))
        {
            $event_title = Arr::get($_POST, 'event_title', '');
            $date_begin = Arr::get($_POST, 'date_begin', '');
            $date_end = Arr::get($_POST, 'date_end', '');


            $model_calendar = new Model_Calendar();

            $model_calendar->event_title = $event_title;
            $model_calendar->date_begin = strtotime($date_begin) === false ? date ('Y-m-d') : date ("Y-m-d", strtotime($date_begin) );
            $model_calendar->date_end   = strtotime($date_end) === false ? date ('Y-m-d') : date ("Y-m-d", strtotime($date_end) );
            $model_calendar->save();
            $last_insert_id = $model_calendar->pk();



            Controller::redirect('admin/calendar/edit/'.$last_insert_id);
        }

        $this->template->breadcrumb = array('admin/calendar/add' => 'Добавление нового события');
        $this->template->content =  View::factory('admin/calendar/calendar_add');
    }


    /**
     * Смена статуса на противоположный
     */
    public function action_active()
    {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            // Меняем статус на противоположный
            $active = DB::query(Database::UPDATE, "UPDATE `calendar_events` SET active = NOT active, date_modif = '".date('Y-m-d H:i:s')."' WHERE id =". $this->request->post('event_id'))->execute();
            echo json_encode(array('status'=>$active, 'modified_date' => date('Y-m-d H:i:s')));
        }
    }


    public function action_save() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            //Парсим ответ
            parse_str( $this->request->post('post_data'), $post_data);


            $post_data['active'] = isset($post_data['active']) ? 1 : 0;
            $post_data['show_not_reg'] = isset($post_data['show_not_reg']) ? 1 : 0;
            $post_data['badge']  = isset($post_data['badge']) ? 1 : 0;

            //Модель работы со страница
            $model_calendar = new Model_Calendar();
            $validate = $model_calendar->validate($post_data, true);

            //проверяем правильность ввода
            if( $validate->check()){
                //Если валидация ок, сохраняемся
                $event_id = $model_calendar->save_event($post_data);

                // Добавляем ветку комментариев
                if($post_data['is_comments'] > 0 && $event_id > 0) {
                    if( Model::factory('Comment')->add_scope( 'Calendar', $event_id ) === false ) {
                        echo json_encode(array('status'=>false, 'message'=> 'Ошибка в реализации комментариев' ) );
                        return;
                    }
                }

                echo json_encode(array('status'=>true, 'message'=>'Успешно сохранено в БД'));
            } else {
                echo json_encode(array('status'=>false, 'message'=>$validate->errors('page_error')));
            }
            return;
        }
    }

    public function action_delete() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            ORM::factory('Calendar', $this->request->post('event_id') )->delete();

            echo json_encode(array('status'=>true) );
        }
    }


}
