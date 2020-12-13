<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 26.09.2017
 * Time: 20:34
 */
class Controller_Template_Null extends Controller_Template {

    public $template = 'template/null';

    public function before() {
        parent::before();
    }

    public function after() {
 
        parent::after();
    }

}