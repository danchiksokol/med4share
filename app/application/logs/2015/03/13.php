<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-13 03:16:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Date::ru_month() ~ APPPATH/views/news/news_only.php [ 9 ] in file:line
2015-03-13 03:16:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 12:41:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-13 12:41:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 12:41:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-13 12:41:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 12:45:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-13 12:45:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 12:47:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-13 12:47:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 12:47:29 --- EMERGENCY: View_Exception [ 0 ]: The requested view module/comments could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-13 12:47:29 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('module/comments')
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
2015-03-13 12:47:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-13 12:47:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 12:47:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-13 12:47:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 12:47:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view module/comments could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-13 12:47:50 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('module/comments')
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
2015-03-13 12:48:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-13 12:48:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 12:58:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Comment::get_new_comment() ~ APPPATH/classes/Controller/Admin/Comments.php [ 27 ] in file:line
2015-03-13 12:58:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 12:58:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Comment::get_new_comment() ~ APPPATH/classes/Controller/Admin/Comments.php [ 27 ] in file:line
2015-03-13 12:58:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 13:32:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Comment::getScope() ~ APPPATH/classes/Model/Comment.php [ 37 ] in file:line
2015-03-13 13:32:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 13:50:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-13 13:50:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 19:16:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PageStatic::get_url4id() ~ APPPATH/classes/Controller/Admin/Comments.php [ 37 ] in file:line
2015-03-13 19:16:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 19:17:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PageStatic::get_url4id() ~ APPPATH/classes/Controller/Admin/Comments.php [ 40 ] in file:line
2015-03-13 19:17:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 19:18:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::get_url4id() ~ APPPATH/classes/Controller/Admin/Comments.php [ 38 ] in file:line
2015-03-13 19:18:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 19:18:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::get_url4id() ~ APPPATH/classes/Controller/Admin/Comments.php [ 38 ] in file:line
2015-03-13 19:18:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 19:18:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::get_url4id() ~ APPPATH/classes/Controller/Admin/Comments.php [ 38 ] in file:line
2015-03-13 19:18:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 19:19:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::get_url4id() ~ APPPATH/classes/Controller/Admin/Comments.php [ 38 ] in file:line
2015-03-13 19:19:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-13 19:25:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view module/comments could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-13 19:25:00 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('module/comments')
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
2015-03-13 19:28:11 --- EMERGENCY: View_Exception [ 0 ]: The requested view module/comments could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-13 19:28:11 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('module/comments')
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