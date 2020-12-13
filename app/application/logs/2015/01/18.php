<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-18 02:21:43 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/calendar/calendar_list could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\med4share\system\classes\Kohana\View.php:137
2015-01-18 02:21:43 --- DEBUG: #0 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/calendar/...')
#1 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/calendar/...', NULL)
#2 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Calendar.php(30): Kohana_View::factory('admin/calendar/...')
#3 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_calendar()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\med4share\system\classes\Kohana\View.php:137
2015-01-18 02:28:16 --- CRITICAL: Kohana_Exception [ 0 ]: The date property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 02:28:16 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('date')
#1 C:\OpenServer\domains\med4share\application\views\admin\calendar\calendar_list.php(15): Kohana_ORM->__get('date')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\med4share\application\views\admin\main.php(47): Kohana_View->__toString()
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\med4share\application\classes\Controller\Template\Admin.php(59): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Calendar.php(21): Controller_Template_Admin->after()
#11 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(87): Controller_Admin_Calendar->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#14 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 02:30:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::order_by() ~ APPPATH\classes\Controller\Admin\Calendar.php [ 29 ] in file:line
2015-01-18 02:30:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 03:10:55 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-18 03:10:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 03:11:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-18 03:11:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 03:11:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-18 03:11:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 03:11:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-18 03:11:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 03:12:59 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-18 03:12:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 03:13:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-18 03:13:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 03:15:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-18 03:15:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 11:51:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\Ajax\Event.php [ 19 ] in file:line
2015-01-18 11:51:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 11:51:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\Ajax\Event.php [ 19 ] in file:line
2015-01-18 11:51:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 11:51:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\Ajax\Event.php [ 19 ] in file:line
2015-01-18 11:51:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 11:51:41 --- CRITICAL: Kohana_Exception [ 0 ]: The badge property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 11:51:41 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('badge')
#1 C:\OpenServer\domains\med4share\application\classes\Controller\Ajax\Event.php(19): Kohana_ORM->__get('badge')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Ajax_Event->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Event))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 22:20:55 --- CRITICAL: Kohana_Exception [ 0 ]: The url property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 22:20:55 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('url')
#1 C:\OpenServer\domains\med4share\application\views\admin\calendar\calendar_edit.php(24): Kohana_ORM->__get('url')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\med4share\application\views\admin\main.php(47): Kohana_View->__toString()
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\med4share\application\classes\Controller\Template\Admin.php(59): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Calendar.php(21): Controller_Template_Admin->after()
#11 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(87): Controller_Admin_Calendar->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#14 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 22:24:08 --- CRITICAL: Kohana_Exception [ 0 ]: The url property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 22:24:08 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('url')
#1 C:\OpenServer\domains\med4share\application\views\admin\calendar\calendar_edit.php(19): Kohana_ORM->__get('url')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\med4share\application\views\admin\main.php(47): Kohana_View->__toString()
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\med4share\application\classes\Controller\Template\Admin.php(59): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Calendar.php(21): Controller_Template_Admin->after()
#11 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(87): Controller_Admin_Calendar->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#14 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 22:25:04 --- CRITICAL: Kohana_Exception [ 0 ]: The url property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 22:25:04 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('url')
#1 C:\OpenServer\domains\med4share\application\views\admin\calendar\calendar_edit.php(19): Kohana_ORM->__get('url')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\med4share\application\views\admin\main.php(47): Kohana_View->__toString()
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\med4share\application\classes\Controller\Template\Admin.php(59): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Calendar.php(21): Controller_Template_Admin->after()
#11 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(87): Controller_Admin_Calendar->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#14 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 22:25:20 --- CRITICAL: Kohana_Exception [ 0 ]: The url property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 22:25:20 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('url')
#1 C:\OpenServer\domains\med4share\application\views\admin\calendar\calendar_edit.php(19): Kohana_ORM->__get('url')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\med4share\application\views\admin\main.php(47): Kohana_View->__toString()
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\med4share\application\classes\Controller\Template\Admin.php(59): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Calendar.php(21): Controller_Template_Admin->after()
#11 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(87): Controller_Admin_Calendar->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#14 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 22:25:27 --- CRITICAL: Kohana_Exception [ 0 ]: The url property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 22:25:27 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('url')
#1 C:\OpenServer\domains\med4share\application\views\admin\calendar\calendar_edit.php(19): Kohana_ORM->__get('url')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\med4share\application\views\admin\main.php(47): Kohana_View->__toString()
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\med4share\application\classes\Controller\Template\Admin.php(59): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Calendar.php(21): Controller_Template_Admin->after()
#11 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(87): Controller_Admin_Calendar->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#14 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 22:25:43 --- CRITICAL: Kohana_Exception [ 0 ]: The pagestatic property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 22:25:43 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('pagestatic')
#1 C:\OpenServer\domains\med4share\application\views\admin\calendar\calendar_edit.php(27): Kohana_ORM->__get('pagestatic')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\med4share\application\views\admin\main.php(47): Kohana_View->__toString()
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\med4share\application\classes\Controller\Template\Admin.php(59): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Calendar.php(21): Controller_Template_Admin->after()
#11 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(87): Controller_Admin_Calendar->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#14 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 22:37:24 --- CRITICAL: Kohana_Exception [ 0 ]: The pagestatic property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 22:37:24 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('pagestatic')
#1 C:\OpenServer\domains\med4share\application\views\admin\calendar\calendar_edit.php(19): Kohana_ORM->__get('pagestatic')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\med4share\application\views\admin\main.php(47): Kohana_View->__toString()
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\med4share\application\classes\Controller\Template\Admin.php(59): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Calendar.php(21): Controller_Template_Admin->after()
#11 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(87): Controller_Admin_Calendar->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#14 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 23:04:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-18 23:04:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 23:08:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-18 23:08:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 23:14:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-18 23:14:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 23:15:00 --- CRITICAL: Kohana_Exception [ 0 ]: The links property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:702
2015-01-18 23:15:00 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('links', NULL)
#1 C:\OpenServer\domains\med4share\application\classes\Model\Calendar.php(52): Kohana_ORM->__set('links', NULL)
#2 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Calendar.php(81): Model_Calendar->save_event(Array)
#3 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:702
2015-01-18 23:15:40 --- CRITICAL: Kohana_Exception [ 0 ]: The links property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:702
2015-01-18 23:15:40 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('links', NULL)
#1 C:\OpenServer\domains\med4share\application\classes\Model\Calendar.php(52): Kohana_ORM->__set('links', NULL)
#2 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Calendar.php(81): Model_Calendar->save_event(Array)
#3 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:702