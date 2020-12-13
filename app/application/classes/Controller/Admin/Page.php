<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Admin_Page extends Controller_Admin_Admin {

    public function before()
    {
        parent::before();
    }

    public function after()
    {
        $this->template->breadcrumb = array_merge( array('admin/page_list' => 'Список статических страниц'), $this->template->breadcrumb);
        parent::after();
    }

    /**
     * Список статических страниц из БД
     */
    public function action_page_list()
    {
        //Достаем всё дерево
        $pages = ORM::factory('Page')->fulltree();

        //Добавляем стиль для красивого дерева
        $this->template->styles[] = array('media/css/admin/tree.css',
            array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet')
        );
        $this->template->scripts[] = array(
            'media/js/admin/showtree.jquery.js',
            array('type' => 'text/javascript', 'charset' => 'utf-8')
        );
        //В шаблон
        $content = View::factory('admin/page/page_list')->bind('pages', $pages);
        $this->template->content = $content;
    }

    /**
     * Добавление статической страницы
     */
    public function action_page_add()
    {



        $this->template->breadcrumb = array('Добавление статической страницы');

        $pages = ORM::factory('Page')->fulltree();

        if(isset($_POST['page_add']))
        {
            $parent_id = Arr::get($_POST, 'parent_id', '');
            $name = Arr::get($_POST, 'name', '');
            $name = $name == '' ? 'Страница без имени' : $name;

            if($parent_id > 0) {
                $parent_cat = ORM::factory('Page', $parent_id);

                $cat = ORM::factory('Page');
                $cat->name = $name;
                // для дерева
                $cat->insert_as_last_child($parent_cat);

            } else { //Добавление главной страницы, у которой нет child
                $cat = ORM::factory('Page');
                $cat->name = $name;
                $cat->make_root();
            }

            // --> Добавляем контент в таблицу page_static
            $last_insert_id = $cat->id;
            $page = ORM::factory('PageStatic');
            $page->id    = $last_insert_id;
            $page->title = $name; //Title page
            $page->save();
            // <-- page_static

            Controller::redirect('admin/page_edit/'.$last_insert_id);
        }

        $get_parent_id = $this->request->param('id'); // Для подтягивание папы по умолчанию

        $this->template->content =  View::factory('admin/page/page_add')
            ->bind('pages', $pages)
            ->bind('get_parent_id', $get_parent_id)
            ;
    }
    /**
     * Редактированние страницы
     */
    public function action_page_edit()
    {

        $page_id = $this->request->param('id');
        $data = array();
        if($page_id) {
            //Достаем контент
            $data = ORM::factory ('Page', $page_id);
            //Достаем всё дерево
            $tree = $data->fulltree();
        }

        // Список меню
        $menu = ORM::factory('DopMenu')->find_all();



        //

        $this->template->scripts[] = array('media/ckeditor/ckeditor.js', array('type' => 'text/javascript', 'charset' => 'utf-8') );
        //$this->template->scripts[] = array('media/ckeditor/config.js', array('type' => 'text/javascript', 'charset' => 'utf-8') );
        // Для красивых checkbox
        $this->template->scripts[] = array('media/js/admin/bootstrap-toggle.js', array('type' => 'text/javascript', 'charset' => 'utf-8') );
        $this->template->styles[]  = array('media/css/bootstrap/bootstrap-toggle-buttons.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet'));


        $this->template->content   = View::factory('admin/page/page_edit')
            ->bind('tree', $tree)
            ->bind('data', $data)
            ->bind('menu', $menu)
            ->set('list_js', $this->get_list_js()) //Список доступных js файлов
            ->set('list_css', $this->get_list_css()) //Список доступных css файлов
            ->set('header_images', $this->get_header_images()) // Список картинок для шапки
        ;
    }

    /**
     * Сохранение страницы
     */
    public function action_page_save()
    {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            //Парсим ответ
            parse_str( $this->request->post('post_data'), $post_data);
            // Ну вот как то так
            $post_data['links'] = implode(',',$post_data['links']);


            //Модель работы со страница
            $model_page = new Model_Page();
            $validate = $model_page->validate($post_data, true);

            //проверяем правильность ввода
            if( $validate->check()){
                //Если валидация ок, сохраняемся
                $model_page->save_page($post_data);

                echo json_encode(array('status'=>true, 'message'=>'Успешно сохранено в БД'));
            } else {
                echo json_encode(array('status'=>false, 'message'=>$validate->errors('page_error')));
            }
            return;
        }
    }

    /**
     * Удаление страницы и всех её детей #TODO
     */
    public function action_page_delete()
    {
        $this->auto_render = false;
        $page_id = $this->request->param('id');
        if($page_id > 0){
            $tree = ORM::factory('Page', $page_id);
            //Определяем родителя удаляемой страницы
            $page_parent = $tree->parent();
            //Определяем всех детей удаляемой страницы
            $page_children = $tree->children();

            //Переносим всех детей на уровень выше
            foreach ($page_children as $key => $value) {

                //перемещаемая категория
                $catfromto = ORM::factory('Page', $value->id);
                //куда перемещаем
                $catfromto->move_to_last_child($page_parent);
            }
            // Со спокойной душой удаляем
            ORM::factory('Page', $page_id)->delete();
            ORM::factory('PageStatic', $page_id)->delete();
        }
        header('Location: /admin/page_list');
//        Controller::redirect('admin/page_list');
    }

    /**
     * Создание хлебных крошек для страницы
     */
    public function action_page_create_breadcrumb()
    {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            $page_id = Arr::get($_POST, 'page_id', false);
            if($page_id) {
                $data = ORM::factory('Page')->create_breadcrumb($page_id);
                $breadcrumb = '';

                foreach ($data['parents'] as $parent) {
                    //$breadcrumb .= '<li><a href="/'.$parent->url.'">'.$parent->name.'</a> <span class="divider">/</span></li>'."\n";
                    //$breadcrumb .= '['.$parent->url.'] => '.$parent->name."\n";
                    $breadcrumb .= '<a href="/'.$parent->url.'" class="pathway">'.$parent->name.'</a> | ';
                }
                //Текущая страница
                if( isset($data['current_page']) ) {
                    $breadcrumb .= '<span>'.$data['current_page']['name'].'</span>';
                    //$breadcrumb .= '[] => '.$data['current_page']['name'];
                }

                echo json_encode(array('status'=>true, 'breadcrumb'=>$breadcrumb));
                return;
            }
        }
    }



    /*public function action_page_tags_data() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            $page_ids = Arr::get($_POST, 'page_ids', false);
            if($page_ids) {
                $page_ids = explode(',', $page_ids);

                foreach($page_ids as $id){
                    $orm = ORM::factory('Page', $id);
                    $pages[] = array('id' => $orm->id, 'name' => $orm->name, 'url' => $orm->url);
                }

                echo json_encode(array('status' => true, 'pages' => $pages));
                return;
            }
            echo json_encode(array('status' => false, 'pages' => null));
            return;
        }
    }

    public function action_page_tags() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            //Достаем всё дерево
            $tree = ORM::factory ('Page')->fulltree();

            foreach($tree as $item) {
                $pages[] = array('id' => $item->id, 'name' => $item->name, 'url' => $item->url);
            }

            echo json_encode(array('status' => true, 'pages' => $pages));
            return;

        }
    }*/

    /**
     * Возращяет список доступных js - файлов
     */
    private function get_list_js()
    {
        $list_js = glob('media/js/*.js', GLOB_BRACE);
        if(is_array($list_js))
        {
            $i=0;
            foreach ($list_js as $path) {
                $js[$i]['path'] = $path;
                $js[$i]['size'] = Text::bytes( filesize($path) );
                $i++;
            }
            return $js;
        }
        return false;
    }

    /**
     * Возращяет список доступных js - файлов
     */
    private function get_list_css()
    {
        $list_css = glob('media/css/*.css', GLOB_BRACE);
        if(is_array($list_css))
        {
            $i=0;
            foreach ($list_css as $path) {
                $css[$i]['path'] = $path;
                $css[$i]['size'] = Text::bytes( filesize($path) );
                $i++;
            }
            return $css;
        }
        return false;
    }


    /**
     * Возращяет список доступных js - файлов
     */
    private function get_header_images()
    {
        $list_img = glob('media/img/content/header/*.jpg', GLOB_BRACE);
        if(is_array($list_img))
        {
            $i=0;
            foreach ($list_img as $path) {
                $images[$i]['path'] = $path;
                //$css[$i]['size'] = Text::bytes( filesize($path) );
                $i++;
            }
            return $images;
        }
        return false;
    }

}
