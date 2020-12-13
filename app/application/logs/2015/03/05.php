<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-05 00:21:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view module/comments could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-05 00:21:39 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('module/comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('module/comments', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/template/main.php(204): Kohana_View::factory('module/comments')
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
2015-03-05 00:23:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view module/comments could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-05 00:23:37 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('module/comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('module/comments', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/template/main.php(204): Kohana_View::factory('module/comments')
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
2015-03-05 00:27:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Date::ru_month() ~ APPPATH/views/news/news_index.php [ 9 ] in file:line
2015-03-05 00:27:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 00:32:43 --- EMERGENCY: View_Exception [ 0 ]: The requested view module/comments could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-05 00:32:43 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('module/comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('module/comments', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/template/main.php(204): Kohana_View::factory('module/comments')
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
2015-03-05 00:33:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view module/comments could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-05 00:33:09 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('module/comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('module/comments', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/template/main.php(204): Kohana_View::factory('module/comments')
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
2015-03-05 00:33:23 --- EMERGENCY: View_Exception [ 0 ]: The requested view module/comments could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-05 00:33:23 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('module/comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('module/comments', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/template/main.php(204): Kohana_View::factory('module/comments')
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
2015-03-05 00:33:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view module/comments could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-05 00:33:50 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('module/comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('module/comments', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/template/main.php(204): Kohana_View::factory('module/comments')
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
2015-03-05 01:21:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Comment::childrens() ~ APPPATH/classes/Controller/Ajax/Comment.php [ 28 ] in file:line
2015-03-05 01:21:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 02:42:57 --- EMERGENCY: View_Exception [ 0 ]: The requested view module/comments could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-05 02:42:57 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('module/comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('module/comments', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/template/main.php(204): Kohana_View::factory('module/comments')
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
2015-03-05 03:17:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Comment' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2015-03-05 03:17:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 03:18:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Comment::addComment() ~ APPPATH/classes/Controller/Ajax/Comment.php [ 60 ] in file:line
2015-03-05 03:18:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 03:18:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Comment::addComment() ~ APPPATH/classes/Controller/Ajax/Comment.php [ 60 ] in file:line
2015-03-05 03:18:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 03:29:31 --- EMERGENCY: View_Exception [ 0 ]: The requested view module/comments could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-05 03:29:31 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('module/comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('module/comments', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/template/main.php(204): Kohana_View::factory('module/comments')
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
2015-03-05 11:57:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Date::ru_month() ~ APPPATH/views/news/news_only.php [ 9 ] in file:line
2015-03-05 11:57:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line