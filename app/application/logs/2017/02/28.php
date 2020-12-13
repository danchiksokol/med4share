<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-02-28 23:49:01 --- EMERGENCY: View_Exception [ 0 ]: The requested view photo/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2017-02-28 23:49:01 --- DEBUG: #0 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('photo/index')
#1 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('photo/index', NULL)
#2 /home/u415209/med4share.ru/www/application/classes/Controller/Photo.php(23): Kohana_View::factory('photo/index')
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Photo->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u415209/med4share.ru/www/index.php(121): Kohana_Request->execute()
#9 {main} in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137