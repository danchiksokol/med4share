<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-10-20 00:37:04 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory must be writable: DOCROOT/media/files/gallery/test/review ~ MODPATH/image/classes/Kohana/Image.php [ 631 ] in /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Photo.php:95
2017-10-20 00:37:04 --- DEBUG: #0 /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Photo.php(95): Kohana_Image->save('/home/u415209/m...', 90)
#1 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Admin_Photo->action_processing()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Photo))
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/u415209/med4share.ru/www/index.php(121): Kohana_Request->execute()
#7 {main} in /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Photo.php:95