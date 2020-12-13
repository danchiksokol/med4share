<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Модель работы с главным меню
 */
class Model_Feedback extends ORM
{
    protected $_table_name = 'feedback'; // <== вручную установить имя таблицы
    protected $_primary_key = 'id'; //Названия поля первичного ключа находится в параметре _primary_key и по умолчанию оно установлено в id:

    /**
     * Добавляем комментарий
     * @param array $data
     */
    public function add_message( $data = array() )
    {

        $this->ip = Request::$client_ip;
        $this->name = $data['name'];
        $this->email  = $data['email'];
        $this->message = $data['message'];
        $this->save();
    }

}