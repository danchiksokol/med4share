<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-02 03:39:03 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\module\news.php [ 2 ] in file:line
2015-02-02 03:39:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-02 03:39:04 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\module\news.php [ 2 ] in file:line
2015-02-02 03:39:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-02 03:39:14 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\module\news.php [ 2 ] in file:line
2015-02-02 03:39:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-02 03:39:15 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\module\news.php [ 2 ] in file:line
2015-02-02 03:39:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-02 03:39:19 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\module\news.php [ 2 ] in file:line
2015-02-02 03:39:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-02 03:49:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH\views\module\breadcrumb.php [ 9 ] in file:line
2015-02-02 03:49:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-02 03:49:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH\views\module\breadcrumb.php [ 9 ] in file:line
2015-02-02 03:49:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-02 03:49:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH\views\module\breadcrumb.php [ 9 ] in file:line
2015-02-02 03:49:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-02 03:49:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH\views\module\breadcrumb.php [ 9 ] in file:line
2015-02-02 03:49:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-02 04:15:14 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\OpenServer\domains\med4share2\modules\image\classes\Kohana\Image\GD.php:91
2015-02-02 04:15:14 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('C:\OpenServer\d...')
#1 C:\OpenServer\domains\med4share2\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('C:\OpenServer\d...')
#2 C:\OpenServer\domains\med4share2\application\classes\Controller\Photo.php(43): Kohana_Image::factory('C:\OpenServer\d...')
#3 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Photo->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\med4share2\modules\image\classes\Kohana\Image\GD.php:91
2015-02-02 03:23:09 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/image/classes/Kohana/Image/GD.php:91
2015-02-02 03:23:09 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/home/lamo8/www...')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('/home/lamo8/www...')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Photo.php(43): Kohana_Image::factory('/home/lamo8/www...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Photo->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/image/classes/Kohana/Image/GD.php:91
2015-02-02 03:28:27 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory must be writable: DOCROOT/media/photo/1/preview ~ MODPATH/image/classes/Kohana/Image.php [ 631 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Photo.php:54
2015-02-02 03:28:27 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Photo.php(54): Kohana_Image->save('/home/lamo8/www...', 90)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Photo->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Photo.php:54
2015-02-02 14:53:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Date::ru_month() ~ APPPATH/views/news/news_index.php [ 9 ] in file:line
2015-02-02 14:53:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line