<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-10-24 02:07:26 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home/u415209/med4share.ru/www/modules/image/classes/Kohana/Image/GD.php:91
2017-10-24 02:07:26 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct(0)
#1 /home/u415209/med4share.ru/www/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct(0)
#2 /home/u415209/med4share.ru/www/application/classes/Controller/Module.php(42): Kohana_Image::factory(0)
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Module->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Module))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u415209/med4share.ru/www/application/classes/Controller/PageStatic.php(105): Kohana_Request->execute()
#9 /home/u415209/med4share.ru/www/application/classes/Controller/PageStatic.php(13): Controller_PageStatic->get_static_content()
#10 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(69): Controller_PageStatic->before()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#13 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/u415209/med4share.ru/www/index.php(121): Kohana_Request->execute()
#16 {main} in /home/u415209/med4share.ru/www/modules/image/classes/Kohana/Image/GD.php:91
2017-10-24 02:07:28 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home/u415209/med4share.ru/www/modules/image/classes/Kohana/Image/GD.php:91
2017-10-24 02:07:28 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct(0)
#1 /home/u415209/med4share.ru/www/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct(0)
#2 /home/u415209/med4share.ru/www/application/classes/Controller/Module.php(42): Kohana_Image::factory(0)
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Module->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Module))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u415209/med4share.ru/www/application/classes/Controller/PageStatic.php(105): Kohana_Request->execute()
#9 /home/u415209/med4share.ru/www/application/classes/Controller/PageStatic.php(13): Controller_PageStatic->get_static_content()
#10 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(69): Controller_PageStatic->before()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#13 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/u415209/med4share.ru/www/index.php(121): Kohana_Request->execute()
#16 {main} in /home/u415209/med4share.ru/www/modules/image/classes/Kohana/Image/GD.php:91