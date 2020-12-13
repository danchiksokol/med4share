<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Admin extends Controller_Template_Admin {

	//Права доступа
    /*public $secure_actions = array('login','admin');
	
	public $assert_auth_actions = array(
		'private' => array('login'),
        'index' => array('test')
	);*/

    public function after()
	{
		$this->template->title = empty($this->template->title) ? 'Администрирование сайта' : $this->template->title;
		$this->template->breadcrumb = array_merge(array('admin'=>'Главная'), $this->template->breadcrumb);
		//parent::before();
		 parent::after();
	}


    public function before()
    {
        $session = Session::instance();
        /*$session->set('auth_redirect', $_SERVER['REQUEST_URI']);
        $auth = Auth::instance();
        if ( $auth->logged_in('admin') == 0) {
        //    Controller::redirect('account');
        }*/

        /*
        if($auth->logged_in() == 0)  Request::initial()->redirect('auth');
        if($auth->logged_in('admin') == 0)  Request::initial()->redirect('netprav');
        return parent::before();
        */

        return parent::before();
    }
	 
	public function action_index()
	{
		$this->template->title = 'Главная страница, Администрированние';
		$content = View::factory('admin/home');
		$this->template->content = $content;
	}
	
	public function action_login()
	{
		$this->template->title = 'Логин, Администрированние';
		$content = View::factory('admin/user/login');
		$this->template->content = $content;
	}

		
	public function action_test()
	{
		//$cat = ORM::factory('page', 3)->parents();
		//$cat = ORM::factory('page', 1)->children();
		$cat = ORM::factory('page',1)->descendants();
		//print_r($cat);
		//return;
		foreach ($cat as $key => $value) {
				
			echo $value->name.'<br>';
		}
	}
	
	
	
	
	
	
	
	
}
