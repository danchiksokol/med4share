<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2020-05-19 10:35:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Date::ru_month() ~ APPPATH/views/calendar/calendar.php [ 39 ] in file:line
2020-05-19 10:35:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2020-05-19 17:05:48 --- EMERGENCY: Database_Exception [  ]:  ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /home/h003309542/med4share.ru/docs/modules/database/classes/Kohana/Database/MySQL.php:75
2020-05-19 17:05:48 --- DEBUG: #0 /home/h003309542/med4share.ru/docs/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('h003309542_3')
#1 /home/h003309542/med4share.ru/docs/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /home/h003309542/med4share.ru/docs/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /home/h003309542/med4share.ru/docs/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('redirects')
#4 /home/h003309542/med4share.ru/docs/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /home/h003309542/med4share.ru/docs/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /home/h003309542/med4share.ru/docs/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/h003309542/med4share.ru/docs/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /home/h003309542/med4share.ru/docs/application/classes/Controller/Admin/Redirects.php(69): Kohana_ORM::factory('Redirects')
#9 /home/h003309542/med4share.ru/docs/application/classes/Controller/Template/Main.php(10): Controller_Admin_Redirects::getRedirect('news/page20')
#10 /home/h003309542/med4share.ru/docs/application/classes/Controller/News.php(8): Controller_Template_Main->before()
#11 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Controller.php(69): Controller_News->before()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#14 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/h003309542/med4share.ru/docs/index.php(121): Kohana_Request->execute()
#17 {main} in /home/h003309542/med4share.ru/docs/modules/database/classes/Kohana/Database/MySQL.php:75