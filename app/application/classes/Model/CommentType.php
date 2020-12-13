<?php defined('SYSPATH') or die('No direct access allowed.');


class Model_CommentType extends ORM {
    protected $_table_name = 'comment_types'; // <== вручную установить имя таблицы

    protected $_primary_key = 'id'; //Названия поля первичного ключа находится в параметре _primary_key и по умолчанию оно установлено в id:

    protected $_has_many = array( // Один ко многим
        'comments'    => array(
            'model'       => 'Comment',
            'far_key'     => 'scope_id',
            'foreign_key' => 'scope',
        )
    );

    /*
        $data = ORM::factory('CommentType', 1);
        $data= $data->comments->find_all();
    */


    /**
     * Получаем номер ветки комметария
     * @param $controller  News or Calendar or Page
     * @param $subject_id  id <- News or Calendar or Page
     * @return bool|mixed
     * @throws Kohana_Exception
     */
    public function getScope($controller, $subject_id) {

        $d = $this
                ->where('controller', '=', $controller)
                ->and_where('subject_id', '=', $subject_id)
                ->limit(1)
                ->find();

        return isset($d->scope_id) ? $d->scope_id : false;
    }
    
    /**
     * ПОлучаем название конроллера по scope_id
     *
     * @param unknown_type $scope_id
     */
    public function getController( $scope_id ) {
    	$data = $this
            ->where('scope_id', '=', $scope_id)
            ->limit(1)
            ->find();

        return isset($data->controller) ? $data : false;
    }


    /**
     * Привязываем ветку комментариев
     * @param $controller
     * @param $subject_id
     * @param $scope_id
     * @return mixed
     */
    public function addScope($controller, $subject_id, $scope_id) {

        $this->scope_id = $scope_id;
        $this->controller = $controller;
        $this->subject_id = $subject_id;
        $this->save();

        return $this->pk();

    }


}