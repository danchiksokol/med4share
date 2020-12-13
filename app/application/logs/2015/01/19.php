<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-19 02:37:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Calendar::save() ~ APPPATH\classes\Controller\Admin\Calendar.php [ 76 ] in file:line
2015-01-19 02:37:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-19 03:08:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-19 03:08:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-19 03:14:11 --- CRITICAL: View_Exception [ 0 ]: The requested view page/calendar/calendar_event could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\med4share\system\classes\Kohana\View.php:137
2015-01-19 03:14:11 --- DEBUG: #0 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(137): Kohana_View->set_filename('page/calendar/c...')
#1 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(30): Kohana_View->__construct('page/calendar/c...', NULL)
#2 C:\OpenServer\domains\med4share\application\classes\Controller\Calendar.php(15): Kohana_View::factory('page/calendar/c...')
#3 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Calendar->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calendar))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\med4share\system\classes\Kohana\View.php:137
2015-01-19 03:14:12 --- CRITICAL: View_Exception [ 0 ]: The requested view page/calendar/calendar_event could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\med4share\system\classes\Kohana\View.php:137
2015-01-19 03:14:12 --- DEBUG: #0 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(137): Kohana_View->set_filename('page/calendar/c...')
#1 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(30): Kohana_View->__construct('page/calendar/c...', NULL)
#2 C:\OpenServer\domains\med4share\application\classes\Controller\Calendar.php(15): Kohana_View::factory('page/calendar/c...')
#3 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Calendar->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calendar))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\med4share\system\classes\Kohana\View.php:137