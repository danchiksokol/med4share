<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-25 02:21:19 --- CRITICAL: Database_Exception [ 1146 ]: Table 'med4share.blocks' doesn't exist [ SHOW FULL COLUMNS FROM `blocks` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\MySQL.php:359
2015-02-25 02:21:19 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('blocks')
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Calendar.php(33): Kohana_ORM::factory('Blocks')
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_calendar()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#10 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\MySQL.php:359
2015-02-25 02:21:32 --- CRITICAL: Database_Exception [ 1146 ]: Table 'med4share.blocks' doesn't exist [ SHOW FULL COLUMNS FROM `blocks` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\MySQL.php:359
2015-02-25 02:21:32 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('blocks')
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Calendar.php(33): Kohana_ORM::factory('Blocks')
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_calendar()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#10 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\MySQL.php:359
2015-02-25 02:21:46 --- CRITICAL: Database_Exception [ 1146 ]: Table 'med4share.blocks' doesn't exist [ SHOW FULL COLUMNS FROM `blocks` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\MySQL.php:359
2015-02-25 02:21:46 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('blocks')
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Calendar.php(33): Kohana_ORM::factory('Blocks')
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_calendar()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#10 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\MySQL.php:359
2015-02-25 02:22:32 --- CRITICAL: Database_Exception [ 1146 ]: Table 'med4share.blocks' doesn't exist [ SHOW FULL COLUMNS FROM `blocks` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\MySQL.php:359
2015-02-25 02:22:32 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('blocks')
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Calendar.php(33): Kohana_ORM::factory('Blocks')
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_calendar()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#10 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\MySQL.php:359
2015-02-25 02:23:11 --- CRITICAL: Database_Exception [ 1146 ]: Table 'med4share.blocks' doesn't exist [ SHOW FULL COLUMNS FROM `blocks` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\MySQL.php:359
2015-02-25 02:23:11 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('blocks')
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Calendar.php(33): Kohana_ORM::factory('Blocks')
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_calendar()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#10 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\MySQL.php:359
2015-02-25 02:37:27 --- CRITICAL: Kohana_Exception [ 0 ]: The text property does not exist in the Model_Blocks class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603
2015-02-25 02:37:27 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('text')
#1 C:\OpenServer\domains\med4share2\application\views\admin\calendar\calendar_list.php(65): Kohana_ORM->__get('text')
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
2015-02-25 02:37:32 --- CRITICAL: Kohana_Exception [ 0 ]: The text property does not exist in the Model_Blocks class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603
2015-02-25 02:37:32 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('text')
#1 C:\OpenServer\domains\med4share2\application\views\admin\calendar\calendar_list.php(65): Kohana_ORM->__get('text')
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
2015-02-25 02:45:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'content' in 'field list' [ UPDATE `blocks` SET `content` = 0 WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 02:45:46 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `blocks`...', false, Array)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Blocks.php(32): Kohana_ORM->save()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Blocks->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blocks))
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 02:46:09 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'content' in 'field list' [ UPDATE `blocks` SET `content` = 0 WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 02:46:09 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `blocks`...', false, Array)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Blocks.php(32): Kohana_ORM->save()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Blocks->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blocks))
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 02:54:04 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'content' in 'field list' [ UPDATE `blocks` SET `content` = 0 WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 02:54:04 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `blocks`...', false, Array)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Blocks.php(32): Kohana_ORM->save()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Blocks->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blocks))
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 03:00:39 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'content' in 'field list' [ UPDATE `blocks` SET `content` = 0 WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 03:00:39 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `blocks`...', false, Array)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Blocks.php(32): Kohana_ORM->save()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Blocks->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blocks))
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 03:00:56 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'content' in 'field list' [ UPDATE `blocks` SET `content` = 0 WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 03:00:56 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `blocks`...', false, Array)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Blocks.php(32): Kohana_ORM->save()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Blocks->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blocks))
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 03:04:19 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'content' in 'field list' [ UPDATE `blocks` SET `content` = 'ewfwe feraggr sefgregrgsdf sdf sfsdf' WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 03:04:19 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `blocks`...', false, Array)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Blocks.php(32): Kohana_ORM->save()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Blocks->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blocks))
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 03:04:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'content' in 'field list' [ UPDATE `blocks` SET `content` = 'ewfwe feraggr sefgregrg sdfsdfsdfsdfsdf' WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 03:04:57 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `blocks`...', false, Array)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Blocks.php(32): Kohana_ORM->save()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Blocks->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blocks))
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 03:05:53 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'content' in 'field list' [ UPDATE `blocks` SET `content` = 'ewfwe feraggr sefgregrg afddsfsdfdsf' WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 03:05:53 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `blocks`...', false, Array)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Blocks.php(32): Kohana_ORM->save()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Blocks->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blocks))
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 03:06:34 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'content' in 'field list' [ UPDATE `blocks` SET `content` = 's' WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 03:06:34 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `blocks`...', false, Array)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Blocks.php(32): Kohana_ORM->save()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Blocks->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blocks))
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-25 03:12:48 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\views\template\main.php [ 257 ] in file:line
2015-02-25 03:12:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line