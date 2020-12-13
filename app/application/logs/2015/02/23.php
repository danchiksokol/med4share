<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-23 03:34:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Admin\Calendar.php [ 79 ] in file:line
2015-02-23 03:34:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-23 03:59:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_BOOLEAN_AND ~ APPPATH\views\calendar\calendar.php [ 17 ] in file:line
2015-02-23 03:59:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-23 05:24:52 --- CRITICAL: Kohana_Exception [ 0 ]: The event_title property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603
2015-02-23 05:24:52 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('event_title')
#1 C:\OpenServer\domains\med4share2\application\views\admin\calendar\calendar_edit.php(50): Kohana_ORM->__get('event_title')
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\med4share2\application\views\admin\main.php(47): Kohana_View->__toString()
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\med4share2\application\classes\Controller\Template\Admin.php(59): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Calendar.php(21): Controller_Template_Admin->after()
#11 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(87): Controller_Admin_Calendar->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#14 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603
2015-02-23 05:25:31 --- CRITICAL: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603
2015-02-23 05:25:31 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('title')
#1 C:\OpenServer\domains\med4share2\application\views\admin\calendar\calendar_edit.php(82): Kohana_ORM->__get('title')
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\med4share2\application\views\admin\main.php(47): Kohana_View->__toString()
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\med4share2\application\classes\Controller\Template\Admin.php(59): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Calendar.php(21): Controller_Template_Admin->after()
#11 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(87): Controller_Admin_Calendar->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#14 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603