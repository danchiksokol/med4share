<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-15 01:57:08 --- CRITICAL: Kohana_Exception [ 0 ]: The dop_menu_name property does not exist in the Model_DopMenu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603
2015-02-15 01:57:08 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('dop_menu_name')
#1 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(26): Kohana_ORM->__get('dop_menu_name')
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_dopmenu()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603
2015-02-15 01:57:18 --- CRITICAL: Kohana_Exception [ 0 ]: The dop_menu_name property does not exist in the Model_DopMenu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603
2015-02-15 01:57:18 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('dop_menu_name')
#1 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(26): Kohana_ORM->__get('dop_menu_name')
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_dopmenu()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603
2015-02-15 01:58:56 --- CRITICAL: Kohana_Exception [ 0 ]: The DopMenuItems property does not exist in the Model_DopMenu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603
2015-02-15 01:58:56 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('DopMenuItems')
#1 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(26): Kohana_ORM->__get('DopMenuItems')
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_dopmenu()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603
2015-02-15 01:59:01 --- CRITICAL: Kohana_Exception [ 0 ]: The DopMenuItems property does not exist in the Model_DopMenu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603
2015-02-15 01:59:01 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('DopMenuItems')
#1 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(26): Kohana_ORM->__get('DopMenuItems')
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_dopmenu()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603
2015-02-15 02:09:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\Admin\DopMenu.php [ 25 ] in file:line
2015-02-15 02:09:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-15 02:12:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\Admin\DopMenu.php [ 25 ] in file:line
2015-02-15 02:12:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-15 02:23:42 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'dopmenu.id_name' in 'where clause' [ SELECT `dopmenu`.`id` AS `id`, `dopmenu`.`name` AS `name`, `dopmenu`.`active` AS `active` FROM `dop_menu_name` AS `dopmenu` WHERE `dopmenu`.`id_name` = 1 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-15 02:23:42 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `dopmenu...', false, Array)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(271): Kohana_ORM->find()
#4 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(1)
#5 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(22): Kohana_ORM::factory('DopMenu', 1)
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_dopmenu()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#9 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-15 02:24:07 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'dopmenu.id_name' in 'where clause' [ SELECT `dopmenu`.`id` AS `id`, `dopmenu`.`name` AS `name`, `dopmenu`.`active` AS `active` FROM `dop_menu_name` AS `dopmenu` WHERE `dopmenu`.`id_name` = 1 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-15 02:24:07 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `dopmenu...', false, Array)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(271): Kohana_ORM->find()
#4 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(1)
#5 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(22): Kohana_ORM::factory('DopMenu', 1)
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_dopmenu()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#9 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-15 02:24:12 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'dopmenu.id_name' in 'where clause' [ SELECT `dopmenu`.`id` AS `id`, `dopmenu`.`name` AS `name`, `dopmenu`.`active` AS `active` FROM `dop_menu_name` AS `dopmenu` WHERE `dopmenu`.`id_name` = 1 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-15 02:24:12 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `dopmenu...', false, Array)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(271): Kohana_ORM->find()
#4 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(1)
#5 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(22): Kohana_ORM::factory('DopMenu', 1)
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_dopmenu()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#9 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-15 02:25:58 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php:22
2015-02-15 02:25:58 --- DEBUG: #0 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(22): Kohana_ORM->find()
#1 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_dopmenu()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php:22
2015-02-15 02:26:04 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php:22
2015-02-15 02:26:04 --- DEBUG: #0 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(22): Kohana_ORM->find_all()
#1 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_dopmenu()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php:22
2015-02-15 02:29:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_DopMenuItems::array() ~ APPPATH\classes\Controller\Admin\DopMenu.php [ 24 ] in file:line
2015-02-15 02:29:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-15 03:01:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\views\admin\dopmenu\list.php [ 14 ] in file:line
2015-02-15 03:01:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-15 03:01:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\views\admin\dopmenu\list.php [ 14 ] in file:line
2015-02-15 03:01:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-15 03:02:12 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\OpenServer\domains\med4share2\application\views\admin\dopmenu\list.php:14
2015-02-15 03:02:12 --- DEBUG: #0 C:\OpenServer\domains\med4share2\application\views\admin\dopmenu\list.php(14): Kohana_ORM->find_all()
#1 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\med4share2\application\views\admin\main.php(47): Kohana_View->__toString()
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\med4share2\application\classes\Controller\Template\Admin.php(59): Kohana_Controller_Template->after()
#9 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Admin.php(17): Controller_Template_Admin->after()
#10 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(15): Controller_Admin_Admin->after()
#11 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(87): Controller_Admin_DopMenu->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#14 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share2\application\views\admin\dopmenu\list.php:14
2015-02-15 03:08:46 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php:20
2015-02-15 03:08:46 --- DEBUG: #0 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(20): Kohana_ORM->find_all()
#1 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_dopmenu()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php:20
2015-02-15 03:12:57 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-02-15 03:12:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-15 03:13:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-02-15 03:13:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-15 03:13:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-02-15 03:13:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-15 03:18:29 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_DopMenu as array ~ APPPATH\views\admin\dopmenu\list.php [ 29 ] in file:line
2015-02-15 03:18:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line