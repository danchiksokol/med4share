<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Feedback extends Controller_Template_Admin
{

    public function before()
    {
        parent::before();
    }

    public function after()
    {
        $this->template->breadcrumb = array_merge( array('admin/feedback' => 'Отзывы и пожелания'), $this->template->breadcrumb);
        parent::after();
    }

    public function action_index() {

    }

    public function action_feedback() {

        $data = ORM::factory('Feedback')
            ->order_by('date_add', 'DESC')
            ->find_all();


        $content = View::factory('admin/feedback/list')
            ->bind('data', $data);

        $this->template->content = $content;

    }


}