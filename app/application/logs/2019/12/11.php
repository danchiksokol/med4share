<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-12-11 14:42:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Date::ru_month() ~ APPPATH/views/calendar/calendar.php [ 39 ] in file:line
2019-12-11 14:42:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-12-11 16:00:02 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH/image/classes/Kohana/Image/GD.php [ 199 ] in file:line
2019-12-11 16:00:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-12-11 16:05:19 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 5996 bytes) ~ MODPATH/image/classes/Kohana/Image/GD.php [ 654 ] in file:line
2019-12-11 16:05:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-12-11 16:07:54 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 5996 bytes) ~ MODPATH/image/classes/Kohana/Image/GD.php [ 654 ] in file:line
2019-12-11 16:07:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-12-11 16:10:09 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH/image/classes/Kohana/Image/GD.php [ 147 ] in file:line
2019-12-11 16:10:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-12-11 16:15:07 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory must be writable: DOCROOT/media/files/gallery/ZL-2019/review ~ MODPATH/image/classes/Kohana/Image.php [ 631 ] in /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Photo.php:95
2019-12-11 16:15:07 --- DEBUG: #0 /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Photo.php(95): Kohana_Image->save('/home/u415209/m...', 90)
#1 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Admin_Photo->action_processing()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Photo))
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/u415209/med4share.ru/www/index.php(121): Kohana_Request->execute()
#7 {main} in /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Photo.php:95
2019-12-11 16:16:12 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH/image/classes/Kohana/Image/GD.php [ 199 ] in file:line
2019-12-11 16:16:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line