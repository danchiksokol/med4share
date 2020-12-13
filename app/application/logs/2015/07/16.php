<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-16 11:09:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Date::ru_month() ~ APPPATH/views/news/news_index.php [ 9 ] in file:line
2015-07-16 11:09:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-16 15:36:53 --- EMERGENCY: Database_Exception [  ]:  ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/MySQL.php:75
2015-07-16 15:36:53 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('u415209_2')
#1 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('news')
#4 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Model.php(26): Kohana_ORM->__construct()
#8 /home/u415209/med4share.ru/www/application/classes/Controller/News.php(26): Kohana_Model::factory('News')
#9 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#12 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#15 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/MySQL.php:75