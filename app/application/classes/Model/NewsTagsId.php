<?php
/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 14.10.2015
 * Time: 22:41
 */
class Model_NewsTagsId extends ORM
{
    protected $_table_name = 'news_tags_id'; // <== вручную установить имя таблицы
    protected $_primary_key = 'new_id'; //Названия поля первичного ключа находится в параметре _primary_key и по умолчанию оно установлено в id:

    public function addNewTags( $news_id, $tags_id = array() ) {

        DB::delete($this->_table_name)
            ->where('new_id', '=', $news_id)
            ->execute();


        if( count($tags_id) ) {

            foreach($tags_id as $tagId) {
                $this->new_id = $news_id;
                $this->tag_id = $tagId;
                $this->save();
                $this->reset()->clear();
            }

        }



    }
}
