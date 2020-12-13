<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Template_Admin extends Controller_Template
{
    public $template = 'admin/main';

    /**
     * The before() method is called before your controller action.
     * In our template controller we override this method so that we can
     * set up default values. These variables are then available to our
     * controllers if they need to be modified.
     */
    public function before() {
        parent::before();

        $action = $this->request->action();
        // Проверяем, имеет ли пользователь админ-доступ, в том числе и к текущему действию
        if ( ! Auth::instance()->logged_in('admin') && ! Auth::instance()->logged_in('comment') )
        {
            // Если доступ запрещен, то генерируем ошибку 403 Forbidden
            $this->redirect('login');
        }

        if ($this->auto_render) {

            //Собираем меню
            $this->template->left_menu = View::factory( 'admin/left_menu', array(
                'action' => $this->request->action()
            ));

            // Initialize empty values
            $this->template->title   = '';
            $this->template->content = '';
            $this->template->styles = array();
            $this->template->scripts = array();
            $this->template->breadcrumb = array();
        }
    }

    /**
     * The after() method is called after your controller action.
     * In our template controller we override this method so that we can
     * make any last minute modifications to the template before anything
     * is rendered.
     */
    public function after() {
        if ($this->auto_render) {
            //Собираем хлебные крошки breadcrumbs
            $this->template->breadcrumbs = View::factory('admin/breadcrumbs', array('breadcrumbs' => $this->template->breadcrumb));

            //Загружаем из конфига config/wibsite.php
            $config = Kohana::$config->load('admin.all');

            $this->template->styles = array_merge( $config['css'], $this->template->styles);
            $this->template->scripts = array_merge( $config['scripts'], $this->template->scripts);

        }
        parent::after();
    }


}
