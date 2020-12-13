<?php defined('SYSPATH') or die('No direct script access.');//защита от прямого вызова

class Controller_Sitemap extends Controller_Template_Main {

    public function before()
    {
        parent::before();
    }

    public function after()
    {
        parent::after();
    }


    public function action_index() {

        //Достаем всё дерево
        $pages = ORM::factory('Page')->fulltree();


        $this->template->content = View::factory('page/sitemap')
            ->bind('pages', $pages);

    }
}