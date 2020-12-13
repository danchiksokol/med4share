<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'seo' 	=>  array(
						'title' => '',
						'description' => '',
						'keywords'	=> '',
				),
    'news'	=> array(
        'count_news_page' => 10,
        'count_index_page' => 7,
    ),
	// admin area views
	// ----------------------------------------------------------------------------------------------------------------------------
	'views' => array(
            'css' => array
            (
                array(
                'media/bootstrap-3.3.1/css/bootstrap.min.css',
                  array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet')
                ),

                array(
                    'media/bootstrap-3.3.1/css/bootstrap-theme.css',
                    array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet')
                ),


                array(
                    'media/calendar_zabuto/zabuto_calendar.min.css',
                    array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet')
                ),

                array(
                    'media/css/style.css',
                    array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet')
                ),
            ),

            'scripts' => array
            (
                array(
                    'media/js/jquery-1.11.2.min.js',
                    array('type' => 'text/javascript', 'charset' => 'utf-8')
                ),

                array(
                    'media/bootstrap-3.3.1/js/bootstrap.min.js',
                    array('type' => 'text/javascript', 'charset' => 'utf-8')
                ),
                array(
                    'media/calendar_zabuto/zabuto_calendar.js',
                    array('type' => 'text/javascript', 'charset' => 'utf-8')
                ),
            ),
        ),
    /*'Login' => array(
            'css' => array
            (
                array(
                    'media/css/login.css',
                    array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet')
                ),
            ),
    ),*/
);
