<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-28 08:31:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ APPPATH/classes/Controller/Admin/Photo.php [ 16 ] in file:line
2017-09-28 08:31:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 08:31:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ APPPATH/classes/Controller/Admin/Photo.php [ 16 ] in file:line
2017-09-28 08:31:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 08:31:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ APPPATH/classes/Controller/Admin/Photo.php [ 16 ] in file:line
2017-09-28 08:31:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 08:32:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ APPPATH/classes/Controller/Admin/Photo.php [ 16 ] in file:line
2017-09-28 08:32:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 08:32:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ APPPATH/classes/Controller/Admin/Photo.php [ 16 ] in file:line
2017-09-28 08:32:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 08:36:13 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/null could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2017-09-28 08:36:13 --- DEBUG: #0 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/null')
#1 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/null', NULL)
#2 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template/null')
#3 /home/u415209/med4share.ru/www/application/classes/Controller/Template/Null.php(13): Kohana_Controller_Template->before()
#4 /home/u415209/med4share.ru/www/application/classes/Controller/Module.php(13): Controller_Template_Null->before()
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(69): Controller_Module->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Module))
#8 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/u415209/med4share.ru/www/application/classes/Controller/PageStatic.php(105): Kohana_Request->execute()
#11 /home/u415209/med4share.ru/www/application/classes/Controller/PageStatic.php(13): Controller_PageStatic->get_static_content()
#12 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(69): Controller_PageStatic->before()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#15 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /home/u415209/med4share.ru/www/index.php(121): Kohana_Request->execute()
#18 {main} in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2017-09-28 08:36:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/null could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2017-09-28 08:36:26 --- DEBUG: #0 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/null')
#1 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/null', NULL)
#2 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template/null')
#3 /home/u415209/med4share.ru/www/application/classes/Controller/Template/Null.php(13): Kohana_Controller_Template->before()
#4 /home/u415209/med4share.ru/www/application/classes/Controller/Module.php(13): Controller_Template_Null->before()
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(69): Controller_Module->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Module))
#8 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/u415209/med4share.ru/www/application/classes/Controller/PageStatic.php(105): Kohana_Request->execute()
#11 /home/u415209/med4share.ru/www/application/classes/Controller/PageStatic.php(13): Controller_PageStatic->get_static_content()
#12 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(69): Controller_PageStatic->before()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#15 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /home/u415209/med4share.ru/www/index.php(121): Kohana_Request->execute()
#18 {main} in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2017-09-28 11:55:45 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH/image/classes/Kohana/Image/GD.php [ 147 ] in file:line
2017-09-28 11:55:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 13:56:25 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH/image/classes/Kohana/Image/GD.php [ 199 ] in file:line
2017-09-28 13:56:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 16:25:50 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH/image/classes/Kohana/Image/GD.php [ 147 ] in file:line
2017-09-28 16:25:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 16:48:21 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH/image/classes/Kohana/Image/GD.php [ 654 ] in file:line
2017-09-28 16:48:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 16:50:58 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH/image/classes/Kohana/Image/GD.php [ 147 ] in file:line
2017-09-28 16:50:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 17:03:18 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH/image/classes/Kohana/Image/GD.php [ 199 ] in file:line
2017-09-28 17:03:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line