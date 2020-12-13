<?php defined('SYSPATH') or die('No direct script access.');


/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 03.02.2017
 * Time: 2:04
 */

class Controller_Sponsory extends Controller_Template_Main
{
    public function before(){
        parent::before();
    }

    public function after()
    {
        parent::after();
    }

    public function action_index() {

 


        $this->template->content = View::factory('page/sponsory')
            ->bind('pages', $pages);

    }
}
