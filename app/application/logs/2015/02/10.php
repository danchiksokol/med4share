<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-10 01:12:28 --- CRITICAL: Kohana_Exception [ 0 ]: The sort property does not exist in the Model_MainMenu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:702
2015-02-10 01:12:28 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('sort', 1)
#1 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Menu.php(91): Kohana_ORM->__set('sort', 1)
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Menu->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:702
2015-02-10 01:47:26 --- CRITICAL: Kohana_Exception [ 0 ]: The date_event property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:702
2015-02-10 01:47:26 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('date_event', '2015-02-10')
#1 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Calendar.php(77): Kohana_ORM->__set('date_event', '2015-02-10')
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:702
2015-02-10 02:43:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE or '$' ~ APPPATH\classes\Model\MainMenu.php [ 65 ] in file:line
2015-02-10 02:43:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 04:09:11 --- CRITICAL: View_Exception [ 0 ]: The requested view module/menu could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php:137
2015-02-10 04:09:11 --- DEBUG: #0 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(137): Kohana_View->set_filename('module/menu')
#1 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(30): Kohana_View->__construct('module/menu', NULL)
#2 C:\OpenServer\domains\med4share2\application\views\template\main.php(163): Kohana_View::factory('module/menu')
#3 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 C:\OpenServer\domains\med4share2\application\classes\Controller\Template\Main.php(56): Kohana_Controller_Template->after()
#7 C:\OpenServer\domains\med4share2\application\classes\Controller\PageStatic.php(18): Controller_Template_Main->after()
#8 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(87): Controller_PageStatic->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#11 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\med4share2\system\classes\Kohana\View.php:137
2015-02-10 04:20:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\module\main_menu.php [ 40 ] in file:line
2015-02-10 04:20:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 04:20:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\module\main_menu.php [ 40 ] in file:line
2015-02-10 04:20:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 04:20:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\module\main_menu.php [ 40 ] in file:line
2015-02-10 04:20:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 04:20:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\module\main_menu.php [ 40 ] in file:line
2015-02-10 04:20:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 04:21:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\views\module\main_menu.php [ 80 ] in file:line
2015-02-10 04:21:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 04:21:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\views\module\main_menu.php [ 80 ] in file:line
2015-02-10 04:21:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 04:21:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\module\main_menu.php [ 79 ] in file:line
2015-02-10 04:21:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 04:21:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\module\main_menu.php [ 79 ] in file:line
2015-02-10 04:21:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 04:22:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\module\main_menu.php [ 79 ] in file:line
2015-02-10 04:22:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 04:22:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\module\main_menu.php [ 79 ] in file:line
2015-02-10 04:22:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 04:24:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\module\main_menu.php [ 137 ] in file:line
2015-02-10 04:24:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 04:24:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\module\main_menu.php [ 137 ] in file:line
2015-02-10 04:24:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line