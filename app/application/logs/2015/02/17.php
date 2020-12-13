<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-17 02:02:38 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_DopMenuItems class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603
2015-02-17 02:02:38 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('id')
#1 C:\OpenServer\domains\med4share2\application\views\admin\dopmenu\list.php(40): Kohana_ORM->__get('id')
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\med4share2\application\views\admin\main.php(47): Kohana_View->__toString()
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\med4share2\application\classes\Controller\Template\Admin.php(59): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Admin.php(17): Controller_Template_Admin->after()
#11 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(15): Controller_Admin_Admin->after()
#12 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(87): Controller_Admin_DopMenu->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#15 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#18 {main} in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:603
2015-02-17 12:54:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '`' ~ APPPATH\classes\Controller\Admin\DopMenu.php [ 125 ] in file:line
2015-02-17 12:54:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-17 14:18:48 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php:141
2015-02-17 14:18:48 --- DEBUG: #0 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(141): Kohana_ORM->find_all()
#1 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_addItem()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php:141
2015-02-17 14:20:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'id-menu' in 'where clause' [ SELECT MAX(sort) AS `sort`, `dopmenuitems`.`id_items` AS `id_items`, `dopmenuitems`.`id_menu` AS `id_menu`, `dopmenuitems`.`url` AS `url`, `dopmenuitems`.`name` AS `name`, `dopmenuitems`.`sort` AS `sort` FROM `dop_menu_items` AS `dopmenuitems` WHERE `id-menu` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 14:20:46 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT MAX(sort...', 'Model_DopMenuIt...', Array)
#1 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(141): Kohana_ORM->find_all()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_addItem()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 14:25:36 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_DopMenuItems as array ~ APPPATH\classes\Controller\Admin\DopMenu.php [ 143 ] in file:line
2015-02-17 14:25:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-17 14:29:08 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_DopMenuItems as array ~ APPPATH\classes\Controller\Admin\DopMenu.php [ 27 ] in file:line
2015-02-17 14:29:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-17 14:29:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\classes\Controller\Admin\DopMenu.php [ 27 ] in file:line
2015-02-17 14:29:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-17 14:34:04 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'dop_menu_items' in 'field list' [ SELECT `dop_menu_items`, MAX(sort) AS `sort` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 14:34:04 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `dop_men...', false, Array)
#1 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(22): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_dopmenu()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 14:34:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'sort' in 'field list' [ SELECT MAX(sort) AS `sort` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 14:34:25 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT MAX(sort...', false, Array)
#1 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(22): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_dopmenu()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 14:35:59 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 '1'' at line 1 [ SELECT MAX(sort) AS `sort` FROM `dop_menu_items` WHERE `id_menu` 0 '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 14:35:59 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT MAX(sort...', false, Array)
#1 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(24): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_dopmenu()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 14:36:14 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 '1'' at line 1 [ SELECT MAX(sort) AS `sort` FROM `dop_menu_items` WHERE `id_menu` 0 '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 14:36:14 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT MAX(sort...', false, Array)
#1 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\DopMenu.php(25): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_DopMenu->action_dopmenu()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_DopMenu))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:251