<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-27 02:52:02 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'date_event' in 'order clause' [ SELECT `calendar`.`id` AS `id`, `calendar`.`date_add` AS `date_add`, `calendar`.`date_modif` AS `date_modif`, `calendar`.`name` AS `name`, `calendar`.`description` AS `description`, `calendar`.`keywords` AS `keywords`, `calendar`.`date_begin` AS `date_begin`, `calendar`.`date_end` AS `date_end`, `calendar`.`badge` AS `badge`, `calendar`.`title` AS `title`, `calendar`.`preview` AS `preview`, `calendar`.`text` AS `text`, `calendar`.`active` AS `active` FROM `calendar_events` AS `calendar` ORDER BY `date_event` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-27 02:52:02 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `calenda...', 'Model_Calendar', Array)
#1 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Calendar.php(31): Kohana_ORM->find_all()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_calendar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-27 02:52:20 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'date_event' in 'order clause' [ SELECT `calendar`.`id` AS `id`, `calendar`.`date_add` AS `date_add`, `calendar`.`date_modif` AS `date_modif`, `calendar`.`name` AS `name`, `calendar`.`description` AS `description`, `calendar`.`keywords` AS `keywords`, `calendar`.`date_begin` AS `date_begin`, `calendar`.`date_end` AS `date_end`, `calendar`.`badge` AS `badge`, `calendar`.`title` AS `title`, `calendar`.`preview` AS `preview`, `calendar`.`text` AS `text`, `calendar`.`active` AS `active` FROM `calendar_events` AS `calendar` ORDER BY `date_event` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-27 02:52:20 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `calenda...', 'Model_Calendar', Array)
#1 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Calendar.php(31): Kohana_ORM->find_all()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_calendar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-27 02:54:07 --- CRITICAL: Kohana_Exception [ 0 ]: The date_event property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-27 02:54:07 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('date_event')
#1 C:\OpenServer\domains\med4share\application\views\admin\calendar\calendar_edit.php(34): Kohana_ORM->__get('date_event')
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
2015-01-27 02:54:34 --- CRITICAL: Kohana_Exception [ 0 ]: The date_event property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-27 02:54:34 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('date_event')
#1 C:\OpenServer\domains\med4share\application\views\admin\calendar\calendar_edit.php(34): Kohana_ORM->__get('date_event')
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
2015-01-27 02:54:41 --- CRITICAL: Kohana_Exception [ 0 ]: The date_event property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-27 02:54:41 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('date_event')
#1 C:\OpenServer\domains\med4share\application\views\admin\calendar\calendar_edit.php(34): Kohana_ORM->__get('date_event')
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
2015-01-27 03:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: The date_event property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-27 03:24:50 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('date_event')
#1 C:\OpenServer\domains\med4share\application\classes\Controller\Ajax\Event.php(18): Kohana_ORM->__get('date_event')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Ajax_Event->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Event))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-27 03:25:19 --- CRITICAL: Kohana_Exception [ 0 ]: The date_event property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-27 03:25:19 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('date_event')
#1 C:\OpenServer\domains\med4share\application\classes\Controller\Ajax\Event.php(18): Kohana_ORM->__get('date_event')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Ajax_Event->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Event))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-27 03:25:27 --- CRITICAL: Kohana_Exception [ 0 ]: The date_event property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-27 03:25:27 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('date_event')
#1 C:\OpenServer\domains\med4share\application\classes\Controller\Ajax\Event.php(18): Kohana_ORM->__get('date_event')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Ajax_Event->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Event))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-27 03:26:07 --- CRITICAL: Kohana_Exception [ 0 ]: The date_event property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-27 03:26:07 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('date_event')
#1 C:\OpenServer\domains\med4share\application\classes\Controller\Ajax\Event.php(18): Kohana_ORM->__get('date_event')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Ajax_Event->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Event))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-27 03:26:13 --- CRITICAL: Kohana_Exception [ 0 ]: The date_event property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-27 03:26:13 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('date_event')
#1 C:\OpenServer\domains\med4share\application\classes\Controller\Ajax\Event.php(18): Kohana_ORM->__get('date_event')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Ajax_Event->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Event))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-27 03:27:34 --- CRITICAL: Kohana_Exception [ 0 ]: The date_event property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-27 03:27:34 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('date_event')
#1 C:\OpenServer\domains\med4share\application\classes\Controller\Ajax\Event.php(18): Kohana_ORM->__get('date_event')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Ajax_Event->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Event))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603