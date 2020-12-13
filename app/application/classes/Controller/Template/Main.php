<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template_Main extends Controller_Template {

    public $template = 'template/main';

    public function before() {

        // --> Редирект
        $redirect = Controller_Admin_Redirects::getRedirect( trim(Request::detect_uri(), '/') );
        if( $redirect !== false ) {
            $this->redirect($redirect, 301);
        }
        // <-- Редирект

        parent::before();

        if ($this->auto_render) {
            // Initialize empty values
            $this->template->page_id = 0; // номер стараницы в БД
            $this->template->title   = Kohana::$config->load('website.seo.title');
            $this->template->description = Kohana::$config->load('website.seo.description');
			$this->template->keywords = Kohana::$config->load('website.seo.keywords');
            $this->template->contentRight = '';
            $this->template->content = '';
            $this->template->styles = array();
            $this->template->scripts = array();

            $this->template->controller = $this->request->controller();
            $this->template->action     = $this->request->action();
            $this->template->is_comments = 0; // показывать комметарии или нет 0

			$this->template->url = $this->request->param('url');

            $this->template->show_not_reg = 0;
			
			$this->template->breadcrumb = array();
            $this->template->site_razdel = null; // создаю разделения разделов, типа Ревматология
            $this->template->site_razdel_id = 0; // создаю разделения разделов, типа Ревматология
        }
    }

    public function after() {
        if ($this->auto_render) {

            // --> Редирект
            $url = array_values( $this->request->param() );
            $redirect = Controller_Admin_Redirects::getRedirect( $url[0] );
            if( $redirect !== false ) {
                $this->redirect($redirect, 301);
            }
            // <-- Редирект

            $this->template->breadcrumb = array_merge(array('index' =>'Главная'), $this->template->breadcrumb);

        	//Загружаем из конфига config/wibsite.php
        	$config = Kohana::$config->load('website.views');

            //Стили для конкретного контроллера
            if( Kohana::$config->load('website.'.$this->request->controller()) ) {
                 $more_config = Kohana::$config->load('website.'.$this->request->controller() );
            }


            isset($more_config['css']) ? $this->template->styles = array_merge( $more_config['css'], $this->template->styles) : null;
			$this->template->styles = array_merge( $config['css'], $this->template->styles);

            isset($more_config['scripts']) ? $this->template->scripts = array_merge( $more_config['scripts'], $this->template->scripts) : null;


			$this->template->scripts = array_merge( $config['scripts'], $this->template->scripts);


            // Проверяем, имеет ли пользователь
            if( ! Auth::instance()->logged_in('login')
                &&  ! in_array( $this->template->url, array('login', 'registracia', 'forgot', 'register') )
                && $this->template->show_not_reg != 1 // Флаг в БД
            ) {
                // Обнуляем
                $this->template->menu_left = null;
                $this->template->menu_right = null;
                $this->template->contentMenu = null;

                $this->template->content = View::factory('user/login')->bind('url', $url);
            }



            // Статистика
           // if( Auth::instance()->logged_in('login') ){
                // Auth::instance()->get_user('id');
        //        Simplestats::factory('simplestats')->update('1', $url);
         //   }

		} else {
            //ajax
        }
        parent::after();
    }
	
}