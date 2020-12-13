<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Comment Model for Jelly ORM
 *
 * @package SCSeed
 * @package Comments
 * @author Sergei Gladkovskiy <smgladkovskiy@gmail.com>
 */
class Model_Comment extends ORM_MPTT
{
    protected $_table_name = 'comments'; // <== вручную установить имя таблицы
    protected $_primary_key = 'id'; //Названия поля первичного ключа находится в параметре _primary_key и по умолчанию оно установлено в id:

    protected $_belongs_to   = array(
        'CommentType'  => array(
            'model'       => 'CommentType',
            'far_key'     => 'scope_id',
            'foreign_key' => 'scope',
        )
    );

    // /protected $level_column = 'level'; //database column where level values are stored

    /*protected $_has_one = array( // Один к одному http://kohana3.ru/module/orm
        'pagestatic' => array(
            'model' => 'PageStatic',
            'foreign_key' => 'id',
        ),
    );*/

    /**
     * Добавляем новую ветку комментариев
     */
    public function add_scope( $controller = '', $subject_id = '' ) {

        if( ORM::factory('CommentType')->getScope($controller, $subject_id) === false ) {

            $comment = $this->make_root();
            $comment->title = 'Ветка ' . $controller . '-' . $subject_id;
            $comment->is_active = 1;
            $comment->author_id = Auth::instance()->get_user()->id;
            $comment->save();




            if ($comment->scope > 0) {
                // Привязываем к CommentType
                if ( ! ORM::factory('CommentType')->addScope($controller, $subject_id, $comment->scope) ) {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return true; // Значит уже есть такая ветка
        }
    }

    /**
     * Добавляем комментарий
     * @param array $data
     */
    public function add_comment( $data = array() )
    {
        if( $data['parent_id'] > 0 ) {
            $this->title = $data['title'];
            $this->text  = $data['text'];
            $this->author_id = Auth::instance()->get_user()->id;
            $this->is_active = 0;
            $this->insert_as_last_child( $data['parent_id'] );
        }
        
        return $this->pk();
    }

    /**
     * Получаем все новые комментарии
     * @return Database_Result
     * @throws Kohana_Exception
     */
    public function get_new_comments() {
        $return = $this
            ->where('is_active', '=', 0)
            ->find_all();

        return $return;
    }

    /**
     * Получаем кол-во не активных комментариев
     * @return int
     * @throws Kohana_Exception
     */
    public function get_count_new_comments() {

        $result = $this
            ->where('is_active', '=', 0)
            ->find_all();
        return $result->count();

    }


    public function test( $parent_id ) {
        $this->title = 'Номер 3';
        $this->insert_as_last_child($parent_id);

        //$pages = $this->fulltree(1);

        /*foreach($pages as $v) {
            echo $v->id.'  '.$v->text.' '. $v->is_active ."<br>";
        }*/



        /*$this->title = 'Номер 10';
        $this->insert_as_last_child(1);*/


        /*$cat = ORM::factory('Comment');
        $this->title = 'Номер 1';
        $cat->make_root();*/

    }


}