<?php defined('SYSPATH') or die('No direct script access.');

/*return array(
    // Application defaults
    'default' => array(
        'base_url'         	=> '/news/index/',
        'current_page'      => array('source' => 'route', 'key' => 'page'), // source: "query_string" or "route"
        'total_items'       => 0, //Всего элементов
        'items_per_page'    => 10, //элементов на страницу
        'view'              => 'pagination/bootstrap',
        'auto_hide'         => TRUE, // Скрывать вывод пагинации, если он не нужен
        'first_page_in_url' => FALSE, // подставлять единицу в url к первой странице
    ),

);*/
return array(
    // Application defaults
    'default' => array(
        // source: "query_string" or "route"
        'current_page'      => array('source' => 'route', 'key'    => 'page'),
        'total_items'       => 0, //Всего элементов
        'items_per_page'    => 10, //элементов на страницу
        'view'              => 'pagination/bootstrap',
        'auto_hide'         => TRUE,
        'first_page_in_url' => FALSE,

        //NEW! Use limited template.
        'max_left_pages'    => 10,
        'max_right_pages'   => 10,
    ),
);