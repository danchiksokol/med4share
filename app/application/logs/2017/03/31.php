<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-03-31 12:45:47 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete pagestatic model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Page.php:179
2017-03-31 12:45:47 --- DEBUG: #0 /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Page.php(179): Kohana_ORM->delete()
#1 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Admin_Page->action_page_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Page))
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/u415209/med4share.ru/www/index.php(121): Kohana_Request->execute()
#7 {main} in /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Page.php:179