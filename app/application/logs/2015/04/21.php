<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-21 00:53:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Date::ru_month() ~ APPPATH/views/news/news_index.php [ 9 ] in file:line
2015-04-21 00:53:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-21 01:45:09 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/Ajax/Feedback.php [ 13 ] in file:line
2015-04-21 01:45:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-21 01:45:10 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/Ajax/Feedback.php [ 13 ] in file:line
2015-04-21 01:45:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-21 01:45:11 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/Ajax/Feedback.php [ 13 ] in file:line
2015-04-21 01:45:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-21 01:45:11 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/Ajax/Feedback.php [ 13 ] in file:line
2015-04-21 01:45:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-21 01:45:12 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/Ajax/Feedback.php [ 13 ] in file:line
2015-04-21 01:45:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-21 01:45:12 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/Ajax/Feedback.php [ 13 ] in file:line
2015-04-21 01:45:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-21 01:45:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/Ajax/Feedback.php [ 13 ] in file:line
2015-04-21 01:45:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-21 02:37:38 --- EMERGENCY: Database_Exception [  ]:  ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/MySQL.php:75
2015-04-21 02:37:38 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('med4share.lamo8...')
#1 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('page_tree')
#4 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/u415209/med4share.ru/www/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(61): Kohana_ORM->__construct(NULL)
#8 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM_MPTT->__construct(NULL)
#9 /home/u415209/med4share.ru/www/application/classes/Controller/PageStatic.php(31): Kohana_ORM::factory('Page')
#10 /home/u415209/med4share.ru/www/application/classes/Controller/PageStatic.php(13): Controller_PageStatic->get_static_content()
#11 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(69): Controller_PageStatic->before()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#14 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#17 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/MySQL.php:75
2015-04-21 02:37:56 --- EMERGENCY: Database_Exception [  ]:  ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/MySQL.php:75
2015-04-21 02:37:56 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('med4share.lamo8...')
#1 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('page_tree')
#4 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/u415209/med4share.ru/www/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(61): Kohana_ORM->__construct(NULL)
#8 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM_MPTT->__construct(NULL)
#9 /home/u415209/med4share.ru/www/application/classes/Controller/PageStatic.php(31): Kohana_ORM::factory('Page')
#10 /home/u415209/med4share.ru/www/application/classes/Controller/PageStatic.php(13): Controller_PageStatic->get_static_content()
#11 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(69): Controller_PageStatic->before()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#14 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#17 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/MySQL.php:75