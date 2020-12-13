<?php
/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 14.10.2015
 * Time: 22:41
 */
class Model_NewsTagsName extends ORM
{
    protected $_table_name = 'news_tags_name'; // <== вручную установить имя таблицы
    protected $_primary_key = 'tag_id'; //Названия поля первичного ключа находится в параметре _primary_key и по умолчанию оно установлено в id:

}
