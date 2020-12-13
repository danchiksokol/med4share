<?php defined('SYSPATH') or die('No direct script access.');
error_reporting(0); // Set E_ALL for debuging

Route::set('elfinder_media', 'elfinder/media(/<file>)', array('file' => '.+'))
	->defaults(array(
            'controller' => 'Elfinder',
            'action'     => 'media',
            'file'       => NULL,
	)
);

Route::set('elfinder', 'elfinder(/<action>)')
        ->defaults(array(
            'controller'    => 'Elfinder',
            'action'        => 'index'
        )
);
