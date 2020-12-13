<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-21 02:05:26 --- CRITICAL: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php:75
2015-01-21 02:05:26 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('med4share.lamo8...')
#1 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('page_tree')
#4 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\OpenServer\domains\med4share\modules\orm-mptt\classes\Kohana\ORM\MPTT.php(61): Kohana_ORM->__construct(NULL)
#8 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM_MPTT->__construct(NULL)
#9 C:\OpenServer\domains\med4share\application\classes\Controller\PageStatic.php(31): Kohana_ORM::factory('Page')
#10 C:\OpenServer\domains\med4share\application\classes\Controller\PageStatic.php(13): Controller_PageStatic->get_static_content()
#11 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(69): Controller_PageStatic->before()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#14 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php:75
2015-01-21 03:57:40 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: breadcrumb ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\OpenServer\domains\med4share\application\classes\Controller\Template\Main.php:26
2015-01-21 03:57:40 --- DEBUG: #0 C:\OpenServer\domains\med4share\application\classes\Controller\Template\Main.php(26): Kohana_View->__get('breadcrumb')
#1 C:\OpenServer\domains\med4share\application\classes\Controller\News.php(8): Controller_Template_Main->before()
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(69): Controller_News->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\application\classes\Controller\Template\Main.php:26
2015-01-21 04:23:09 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'modified_date' in 'field list' [ UPDATE `calendar_events` SET active = NOT active, modified_date = '2015-01-21 04:23:09' WHERE id =2 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-21 04:23:09 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `calenda...', false, Array)
#1 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Calendar.php(99): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_active()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-21 04:23:26 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'modif_date' in 'field list' [ UPDATE `calendar_events` SET active = NOT active, modif_date = '2015-01-21 04:23:26' WHERE id =2 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-21 04:23:26 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `calenda...', false, Array)
#1 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Calendar.php(99): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_active()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-21 04:26:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH\views\template\main.php [ 130 ] in file:line
2015-01-21 04:26:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-21 04:32:04 --- CRITICAL: View_Exception [ 0 ]: The requested view news/index_news could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\med4share\system\classes\Kohana\View.php:137
2015-01-21 04:32:04 --- DEBUG: #0 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(137): Kohana_View->set_filename('news/index_news')
#1 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(30): Kohana_View->__construct('news/index_news', NULL)
#2 C:\OpenServer\domains\med4share\application\classes\Controller\PageStatic.php(53): Kohana_View::factory('news/index_news')
#3 C:\OpenServer\domains\med4share\application\classes\Controller\PageStatic.php(13): Controller_PageStatic->get_static_content()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(69): Controller_PageStatic->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\med4share\system\classes\Kohana\View.php:137
2015-01-21 04:32:28 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_News as array ~ APPPATH\views\news\news_index.php [ 3 ] in file:line
2015-01-21 04:32:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line