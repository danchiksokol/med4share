<?php defined('SYSPATH') or die('No direct script access.');//защита от прямого вызова
/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 10.03.2017
 * Time: 0:40
 */

class Controller_Neurology_PageStatic extends Controller_Template_Main
{
    private $url;

    public function before()
    {
        parent::before();
        //Получаем имя страницы
        $this->url = $this->request->param('url', 'index');

        if( $this->url == 'index' ) {
            $this->url = 'neurology';
        }


        $this->get_static_content();
    }

    public function after()
    {
        
        parent::after();
    }

    /**
     * Запрашивает статическую страницу в БД
     */
    private function get_static_content($url = null)
    {
        if($url == null) { // $url - можно указать или будет использоваться текущий
            $url = $this->url;
        }

        //Получаем страницы из БД
        $page = ORM::factory('Page')->where('url', '=', $url)->find();

        if( $page->pagestatic->id > 0 && $page->pagestatic->active == 1 )
        {

            $this->template->url            = $page->url;
            $this->template->subject_id     = $page->pagestatic->id;
            $this->template->title 	        = $page->pagestatic->title;
            $this->template->description 	= $page->pagestatic->description;
            $this->template->keywords 	    = $page->pagestatic->keywords;
            $this->template->contentRight 	= $page->pagestatic->contentRight;
            $this->template->contentMenu    = $page->pagestatic->contentMenu;
            $this->template->is_comments    = $page->pagestatic->is_comments;
            $this->template->show_not_reg   = $page->pagestatic->show_not_reg;
            $this->template->content 	    .= $page->pagestatic->contentCenter;



            $page_js = json_decode($page->pagestatic->js);
            $page_css = json_decode($page->pagestatic->css);

            //Подключаем js
            if(is_array($page_js))
            {
                foreach ($page_js as $path) {
                    $this->template->scripts[] = array($path, array('type' => 'text/javascript', 'charset' => 'utf-8') );
                }
            }
            //Подключаем css

            if(is_array($page_css))
            {
                foreach ($page_css as $path) {
                    $this->template->styles[]  = array($path, array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet'));
                }
            }


            if( $page->pagestatic->menu_left > 0 ) {
                $this->template->menu_left = View::factory('menu/menu_left')->bind('menuId', $page->pagestatic->menu_left);
            }

            if( $page->pagestatic->menu_right > 0 ) {
                $this->template->menu_right = View::factory('menu/menu_right')->bind('menuId', $page->pagestatic->menu_right);
            }

            // Собираем хлебные крошки
            $breadcrumbs = ORM::factory('Page', $page->pagestatic->id)
                ->parents()
                ->as_array();

            foreach( $breadcrumbs as $val ) {
                $this->template->breadcrumb += array( $val->url => $val->pagestatic->breadcrumb );
            }
            if( $this->url != 'index' ) {
                $this->template->breadcrumb += array($page->pagestatic->breadcrumb);
            }


            /*if( preg_match('#<!--module (.*)-->#iu', $this->template->content, $module)  ) {
                $mod = view::factory('module/'.$module[1]);
                $this->template->content = str_replace($module[0], $mod, $this->template->content);
            }*/

        } else {
            $this->template->content = view::factory('errors/404');
            $this->request->status = 404;
            $this->request->headers['HTTP/1.1'] = '404';
        }
    } // end get_static_content

    public function action_index()
    {

    }

}