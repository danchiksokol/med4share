<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 03.03.2015
 * Time: 22:48
 */

class Controller_Admin_Comments extends Controller_Template_Admin {

    public function before()
    {
        parent::before();
    }

    public function after()
    {
        $this->template->breadcrumb = array_merge( array('admin/comments' => 'Комментарии'), $this->template->breadcrumb);
        parent::after();
    }

    /**
     * Достаем весь список событий
     */
    public function action_comments()
    {
        $dd = ORM::factory('Comment')->get_new_comments();

        $data = array();


        foreach($dd as $val) {

            $controller = $val->CommentType->controller;
            $subject_id = $val->CommentType->subject_id;

            $db_data = ORM::factory($controller)->get_url4id($subject_id); // Получаем урл по ид

            // Далее будет АД

            if( array_key_exists( $controller.'-'.$subject_id, $data )) {
                $data[ $controller.'-'.$subject_id ] = array(
                    'controller' => $val->CommentType->controller,
                    'subject_id' => $val->CommentType->subject_id,
                    'url'       => $db_data['url'],
                    'name'      => $db_data['name'],
                    'count' => $data[ $controller.'-'.$subject_id ]['count'] + 1
                );
            }
            else {
                $data[ $controller.'-'.$subject_id ] = array(
                    'controller' => $val->CommentType->controller,
                    'subject_id' => $val->CommentType->subject_id,
                    'url'       => $db_data['url'],
                    'name'      => $db_data['name'],
                    'count' => 1
                );
            }
        }

        ksort($data);

        $this->template->content = View::factory('admin/comment/list')
            ->bind('data', $data);

    }


    public function action_test() {

        $model = ORM::factory('Comment')->test(13);

        $content =  View::factory('admin/comment/list');
        $this->template->content = $content;
    }
}