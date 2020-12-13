<?php defined('SYSPATH') or die('No direct script access.');//защита от прямого вызова
/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 08.12.2016
 * Time: 2:05
 */


class Controller_Easy extends Controller_Template_Main {

    public function before()
    {
        parent::before();
    }

    public function after()
    {
        $this->template->title = 'Раздел EASY';
        $this->template->breadcrumb = array( 'Раздел EASY' );

        if( ! Auth::instance()->logged_in('easy') ) {
            $this->template->content = '<h2>К данному разделу нет доступа</h2>';
        }

        parent::after();
    }

    /**
     *
     */
    public function action_index()
    {

        $this->template->content .= View::factory('easy/easy_menu');

        $this->template->url = 'easy';
    }
}