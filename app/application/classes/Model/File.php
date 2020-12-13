<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Model file class
 *
 * @author     Novichkov Sergey(Radik) <novichkovsergey@yandex.ru>
 * @copyright  Copyrights (c) 2012 Novichkov Sergey
 *
 * @property   integer    $id
 * @property   string     $file
 * @property   string     $type
 * @property   integer    $size
 * @property   string     $description
 */

class Model_File extends ORM {

    /**
     * Table columns
     *
     * Field name => Label
     *
     * @var array
     */
    protected  $_table_columns = array(
        'id'            => 'id',
        'action_id'     => 'action_id',
        'action'        => 'action',
        'file'          => 'file',
        'type'          => 'type',
        'size'          => 'size',
        'description'   => 'description',
    );


    /**
     * Upload file in upload directory and setup valid filename
     *
     * @param array $file
     *
     * @return boolean
     */
    public function file_save()
    {
        // set action
        $this->set('action_id', $this->action_id);
        $this->set('action', $this->action);


        // set file name
        //$this->set('file', $file['name']);

        // set file type
        //$this->set('type', strtolower(pathinfo($this->Filename, PATHINFO_EXTENSION)));

        // set file size
        $this->set('size', $this->size);

        $this->save();
        // return result
        //return $uploaded;
    }

} // end Model File class