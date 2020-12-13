<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Registracia extends Controller_Admin_Admin {

    public function before()
    {
        parent::before();
    }

    public function after()
    {
        $this->template->breadcrumb = array('admin/registracia'=>'Список зарегистрированных');
        $this->template->title = 'Список зарегистрированных';
        parent::after();
    }

    public function action_registracia() {

        $data = ORM::factory('Registracia')->getList();

        $content = View::factory('admin/registracia/registracia_list')->bind('data', $data);
        $this->template->content = $content;

    }

}