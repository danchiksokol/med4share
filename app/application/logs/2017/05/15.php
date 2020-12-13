<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-05-15 21:45:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/main could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2017-05-15 21:45:39 --- DEBUG: #0 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/main')
#1 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/main', NULL)
#2 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template/main')
#3 /home/u415209/med4share.ru/www/application/classes/Controller/Template/Main.php(16): Kohana_Controller_Template->before()
#4 /home/u415209/med4share.ru/www/application/classes/Controller/PageStatic.php(10): Controller_Template_Main->before()
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(69): Controller_PageStatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#8 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/u415209/med4share.ru/www/index.php(121): Kohana_Request->execute()
#11 {main} in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2017-05-15 21:45:44 --- EMERGENCY: View_Exception [ 0 ]: The requested view account/header could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2017-05-15 21:45:44 --- DEBUG: #0 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('account/header')
#1 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('account/header', NULL)
#2 /home/u415209/med4share.ru/www/application/views/template/main.php(103): Kohana_View::factory('account/header')
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(61): include('/home/u415209/m...')
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/u415209/m...', Array)
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /home/u415209/med4share.ru/www/application/classes/Controller/Template/Main.php(98): Kohana_Controller_Template->after()
#7 /home/u415209/med4share.ru/www/application/classes/Controller/PageStatic.php(18): Controller_Template_Main->after()
#8 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(87): Controller_PageStatic->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#11 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/u415209/med4share.ru/www/index.php(121): Kohana_Request->execute()
#14 {main} in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137