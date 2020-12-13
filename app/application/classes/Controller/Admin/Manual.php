<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 06.03.2015
 * Time: 1:30
 */

class Controller_Admin_Manual extends Controller_Admin_Admin
{
    public function before()
    {
        
        parent::before();
    }

    public function after()
    {
        $this->template->breadcrumb = array_merge( array('admin/manual' => 'Документация'), $this->template->breadcrumb);

        //Добавляем стиль для красивого дерева
        $this->template->styles[] = array('/media/fonts/font-awesome/css/font-awesome.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet') );
        $this->template->styles[] = array('/media/fonts/fontello/css/fontello.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet') );
        $this->template->styles[] = array('/media/css/style.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet') );




        parent::after();
    }

    public function action_manual() {


        $this->template->content = View::factory('admin/manual/main');


    }


}