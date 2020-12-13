<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-14 01:59:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The pagestatic property does not exist in the Model_Calendar class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-14 01:59:05 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('pagestatic')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/calendar/calendar_edit.php(112): Kohana_ORM->__get('pagestatic')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/main.php(47): Kohana_View->__toString()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Template/Admin.php(57): Kohana_Controller_Template->after()
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Calendar.php(21): Controller_Template_Admin->after()
#11 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_Admin_Calendar->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#14 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#17 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-14 01:59:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The pagestatic property does not exist in the Model_Calendar class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-14 01:59:09 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('pagestatic')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/calendar/calendar_edit.php(112): Kohana_ORM->__get('pagestatic')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/main.php(47): Kohana_View->__toString()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Template/Admin.php(57): Kohana_Controller_Template->after()
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Calendar.php(21): Controller_Template_Admin->after()
#11 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_Admin_Calendar->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#14 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#17 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-14 01:59:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The is_comments property does not exist in the Model_Calendar class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-14 01:59:29 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('is_comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/calendar/calendar_edit.php(112): Kohana_ORM->__get('is_comments')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/main.php(47): Kohana_View->__toString()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Template/Admin.php(57): Kohana_Controller_Template->after()
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Calendar.php(21): Controller_Template_Admin->after()
#11 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_Admin_Calendar->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#14 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#17 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-14 01:59:32 --- EMERGENCY: Kohana_Exception [ 0 ]: The is_comments property does not exist in the Model_Calendar class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-14 01:59:32 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('is_comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/calendar/calendar_edit.php(112): Kohana_ORM->__get('is_comments')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/main.php(47): Kohana_View->__toString()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Template/Admin.php(57): Kohana_Controller_Template->after()
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Calendar.php(21): Controller_Template_Admin->after()
#11 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_Admin_Calendar->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#14 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#17 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-14 02:37:25 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Calendar as array ~ APPPATH/classes/Controller/Calendar.php [ 48 ] in file:line
2015-03-14 02:37:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 02:37:26 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Calendar as array ~ APPPATH/classes/Controller/Calendar.php [ 48 ] in file:line
2015-03-14 02:37:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 02:38:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The is_comment property does not exist in the Model_Calendar class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-14 02:38:21 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('is_comment')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Calendar.php(56): Kohana_ORM->__get('is_comment')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Calendar->action_only()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calendar))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-14 02:38:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The is_comment property does not exist in the Model_Calendar class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-14 02:38:21 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('is_comment')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Calendar.php(56): Kohana_ORM->__get('is_comment')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Calendar->action_only()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calendar))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-14 02:41:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view module/comments could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 02:41:58 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('module/comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('module/comments', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/template/main.php(203): Kohana_View::factory('module/comments')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Template/Main.php(57): Kohana_Controller_Template->after()
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/PageStatic.php(18): Controller_Template_Main->after()
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_PageStatic->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#11 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#14 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 02:58:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/views/module/comments.php [ 69 ] in file:line
2015-03-14 02:58:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 02:58:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/views/module/comments.php [ 69 ] in file:line
2015-03-14 02:58:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 03:09:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Calendar::get_url4id() ~ APPPATH/classes/Controller/Admin/Comments.php [ 37 ] in file:line
2015-03-14 03:09:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 03:09:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Calendar::get_url4id() ~ APPPATH/classes/Controller/Admin/Comments.php [ 37 ] in file:line
2015-03-14 03:09:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 03:10:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Calendar::get_url4id() ~ APPPATH/classes/Controller/Admin/Comments.php [ 37 ] in file:line
2015-03-14 03:10:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 03:10:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Calendar::get_url4id() ~ APPPATH/classes/Controller/Admin/Comments.php [ 37 ] in file:line
2015-03-14 03:10:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 03:12:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Calendar::get_url4id() ~ APPPATH/classes/Controller/Admin/Comments.php [ 37 ] in file:line
2015-03-14 03:12:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 03:14:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view module/comments could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 03:14:35 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('module/comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('module/comments', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/template/main.php(203): Kohana_View::factory('module/comments')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Template/Main.php(57): Kohana_Controller_Template->after()
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(13): Controller_Template_Main->after()
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_News->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#11 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#14 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 11:16:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-14 11:16:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 11:16:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-14 11:16:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 11:34:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-14 11:34:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 11:34:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-14 11:34:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 11:34:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-14 11:34:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 11:35:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-14 11:35:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 12:11:44 --- EMERGENCY: ErrorException [ 1 ]: Cannot access private property Controller_PageStatic::$url ~ APPPATH/classes/Controller/Template/Main.php [ 55 ] in file:line
2015-03-14 12:11:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 13:10:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/admin/left_menu.php [ 25 ] in file:line
2015-03-14 13:10:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 13:10:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/admin/left_menu.php [ 25 ] in file:line
2015-03-14 13:10:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 13:19:16 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/left_menu could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 13:19:16 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('admin/left_menu')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/left_menu', Array)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Template/Admin.php(28): Kohana_View::factory('admin/left_menu', Array)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Admin.php(37): Controller_Template_Admin->before()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(69): Controller_Admin_Admin->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Admin))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 13:51:12 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/search could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 13:51:12 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/search')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/search', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Search.php(46): Kohana_View::factory('page/search')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 14:06:28 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/search could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 14:06:28 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/search')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/search', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Search.php(65): Kohana_View::factory('page/search')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 14:27:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/search could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 14:27:35 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/search')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/search', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Search.php(85): Kohana_View::factory('page/search')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 14:33:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/search could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 14:33:51 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/search')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/search', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Search.php(85): Kohana_View::factory('page/search')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 15:20:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/search could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 15:20:48 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/search')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/search', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Search.php(85): Kohana_View::factory('page/search')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 15:58:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Date::ru_month() ~ APPPATH/views/news/news_index.php [ 9 ] in file:line
2015-03-14 15:58:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 15:58:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/search could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 15:58:37 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/search')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/search', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Search.php(85): Kohana_View::factory('page/search')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:06:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/search could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:06:26 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/search')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/search', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Search.php(85): Kohana_View::factory('page/search')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:08:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana_UTF8::stripos() ~ APPPATH/views/page/search.php [ 59 ] in file:line
2015-03-14 16:08:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 16:08:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana_UTF8::stripos() ~ APPPATH/views/page/search.php [ 59 ] in file:line
2015-03-14 16:08:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 16:09:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana_UTF8::stripos() ~ APPPATH/views/page/search.php [ 59 ] in file:line
2015-03-14 16:09:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 16:09:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana_UTF8::stripos() ~ APPPATH/views/page/search.php [ 59 ] in file:line
2015-03-14 16:09:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 16:09:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/search could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:09:26 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/search')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/search', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Search.php(85): Kohana_View::factory('page/search')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:09:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/search could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:09:45 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/search')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/search', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Search.php(85): Kohana_View::factory('page/search')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:12:53 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/search could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:12:53 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/search')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/search', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Search.php(85): Kohana_View::factory('page/search')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:23:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/search could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:23:26 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/search')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/search', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Search.php(85): Kohana_View::factory('page/search')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:23:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/search could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:23:50 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/search')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/search', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Search.php(85): Kohana_View::factory('page/search')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:28:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Date::ru_month() ~ APPPATH/views/news/news_index.php [ 9 ] in file:line
2015-03-14 16:28:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 16:30:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/search could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:30:45 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/search')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/search', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Search.php(85): Kohana_View::factory('page/search')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:31:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/search could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:31:18 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/search')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/search', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Search.php(85): Kohana_View::factory('page/search')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:32:40 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/search could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-14 16:32:40 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/search')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/search', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Search.php(85): Kohana_View::factory('page/search')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137