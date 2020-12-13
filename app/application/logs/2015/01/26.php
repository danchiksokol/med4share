<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-26 00:22:05 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=34' at line 1 [ UPDATE `news` SET view_main = NOT view_main, modified_date = '2015-01-26 00:22:05' WHERE news_id =34 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-26 00:22:05 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `news` S...', false, Array)
#1 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\News.php(141): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_news_view_main()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-26 00:22:13 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=34' at line 1 [ UPDATE `news` SET active = NOT active, modified_date = '2015-01-26 00:22:13' WHERE news_id =34 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-26 00:22:13 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `news` S...', false, Array)
#1 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\News.php(128): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_news_active()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-26 00:23:35 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=34' at line 1 [ UPDATE `news` SET active = NOT active, modified_date = '2015-01-26 00:23:35' WHERE news_id =34 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-26 00:23:35 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `news` S...', false, Array)
#1 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\News.php(128): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_news_active()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-26 00:23:44 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=34' at line 1 [ UPDATE `news` SET view_main = NOT view_main, modified_date = '2015-01-26 00:23:44' WHERE news_id =34 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-26 00:23:44 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `news` S...', false, Array)
#1 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\News.php(141): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_news_view_main()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-26 00:24:28 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=34' at line 1 [ UPDATE `news` SET view_main = NOT view_main, modified_date = '2015-01-26 00:24:28' WHERE news_id =34 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-26 00:24:28 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `news` S...', false, Array)
#1 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\News.php(141): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_news_view_main()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-26 00:32:32 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=34' at line 1 [ UPDATE `news` SET active = NOT active, modified_date = '2015-01-26 00:32:32' WHERE news_id =34 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-26 00:32:32 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `news` S...', false, Array)
#1 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\News.php(128): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_news_active()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\Query.php:251
2015-01-26 02:06:15 --- CRITICAL: Kohana_Exception [ 0 ]: The publich_date property does not exist in the Model_News class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-26 02:06:15 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('publich_date')
#1 C:\OpenServer\domains\med4share\application\views\admin\news\news_list.php(24): Kohana_ORM->__get('publich_date')
#2 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\med4share\application\views\admin\main.php(47): Kohana_View->__toString()
#6 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\med4share\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\med4share\application\classes\Controller\Template\Admin.php(59): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\Admin.php(17): Controller_Template_Admin->after()
#11 C:\OpenServer\domains\med4share\application\classes\Controller\Admin\News.php(14): Controller_Admin_Admin->after()
#12 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(87): Controller_Admin_News->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#15 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#18 {main} in C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php:603
2015-01-26 03:09:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\calendar\calendar.php [ 7 ] in file:line
2015-01-26 03:09:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line