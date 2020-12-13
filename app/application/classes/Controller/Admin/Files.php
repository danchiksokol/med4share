<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Files extends Controller_Admin_Admin {

    public function before()
    {
        parent::before();
    }

    public function after()
    {
        $this->template->breadcrumb = array('admin/files'=>'Файловый менеджер');
        $this->template->title = 'Файловый менеджер';
        parent::after();
    }

    /**
     * Файловый менеджер
     */
    public function action_files()
    {
        $this->template->scripts[] = array('media/elfiles/js/elfinder.min.js', array('type' => 'text/javascript', 'charset' => 'utf-8'));
        $this->template->scripts[] = array('media/elfiles/js/i18n/elfinder.ru.js', array('type' => 'text/javascript', 'charset' => 'utf-8'));
        
        $this->template->styles[]  = array('media/elfiles/css/elfinder.full.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet'));
        $this->template->styles[]  = array('media/elfiles/css/theme.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet'));

        $this->template->content = View::factory('admin/files/file_manager');

    }

    /**
     * View all tree action
     */
    public function action_files_list()
    {
        // files list
        $files = ORM::factory('File')->find_all();

        $content = View::factory('admin/files/files_list')
            ->bind('files', $files);

        $this->template->content = $content;

            // errors from user session
            //'errors' => Session::instance()->get_once('errors', array()),
 
            // message from user session
            //'message' => Session::instance()->get_once('message'),
    }


} // End Controller Files
