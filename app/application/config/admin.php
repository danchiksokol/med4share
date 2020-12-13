<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	// admin area views
	// ----------------------------------------------------------------------------------------------------------------------------
	'all' => array(
					'css' => array
					(
						array(
						'media/bootstrap-3.3.1/css/bootstrap.css',
				 		  array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet')
						),
						array(
						'media/css/admin/admin.css',
				 		  array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet')
						),
						array( //Отображение календаря
							'media/css/admin/datepicker.css',
								array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet')
						),
						array(
							'media/css/bootstrap/bootstrap-datetimepicker.min.css',
								array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet')
						),
                        array(
                            'media/css/jquery-ui-1.10.3/jquery-ui-1.10.3.custom.min.css',
                            array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet')
                        ),

                        array(
                            'media/css/admin/selectize.css',
                            array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet')
                        ),


						
							 
					),
					
					'scripts' => array
					(	
						array(
						'media/js/admin/jquery-2.0.3.min.js',
						  array('type' => 'text/javascript', 'charset' => 'utf-8')
						),

                        array(
                            'media/js/admin/jquery-migrate-1.2.1.min.js',
                            array('type' => 'text/javascript', 'charset' => 'utf-8')
                        ),

                        array(
                            'media/js/admin/jquery-ui-1.10.3.custom.min.js',
                            array('type' => 'text/javascript', 'charset' => 'utf-8')
                        ),

                        array(
                            'media/js/admin/admin.js',
                            array('type' => 'text/javascript', 'charset' => 'utf-8')
                        ),
						array(
						'media/js/admin/bootstrap.js',
						  array('type' => 'text/javascript', 'charset' => 'utf-8')
						),
						array(
							'media/js/admin/bootstrap-datepicker.js',
							  array('type' => 'text/javascript', 'charset' => 'utf-8')
						),
                        array(
                            'media/js/admin/bootstrap-datepicker.ru.js',
                            array('type' => 'text/javascript', 'charset' => 'utf-8')
                        ),

                        array(
                            'media/js/admin/moment-2.4.0.js',
                            array('type' => 'text/javascript', 'charset' => 'utf-8')
                        ),


						array(
							'media/js/admin/bootstrap-datetimepicker.min.js',
							  array('type' => 'text/javascript', 'charset' => 'utf-8')
						),
                        array(
                            'media/js/admin/bootstrap-datetimepicker.ru.js',
                            array('type' => 'text/javascript', 'charset' => 'utf-8')
                        ),

						array( //Автоизменение высоты textarea
							'media/js/admin/jquery.autogrowtextarea.js',
							  array('type' => 'text/javascript', 'charset' => 'utf-8')
						),
                        array(
                            'media/js/admin/prettify.js',
                            array('type' => 'text/javascript', 'charset' => 'utf-8')
                        ),

                        array(
                            'media/js/admin/selectize.js',
                            array('type' => 'text/javascript', 'charset' => 'utf-8')
                        ),
                        array(
                            'media/js/admin/edit_area/edit_area_full.js',
                            array('type' => 'text/javascript', 'charset' => 'utf-8')
                        ),
                        array(
                            'media/js/admin/jquery-sortable.js',
                            array('type' => 'text/javascript', 'charset' => 'utf-8')
                        ),
                        array(
                            'media/plugins/jquery.validate.js',
                            array('type' => 'text/javascript', 'charset' => 'utf-8')
                        ),


						
						
					),	
				)
);
