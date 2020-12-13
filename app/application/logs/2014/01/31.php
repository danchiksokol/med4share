<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-31 02:25:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::go_back() ~ APPPATH/classes/Controller.php [ 22 ] in file:line
2014-01-31 02:25:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 03:53:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::go_back() ~ APPPATH/classes/Controller.php [ 22 ] in file:line
2014-01-31 03:53:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 03:55:59 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::go_back() ~ APPPATH/classes/Controller.php [ 22 ] in file:line
2014-01-31 03:55:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 04:21:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Website' not found ~ APPPATH/classes/Controller/News.php [ 3 ] in file:line
2014-01-31 04:21:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 04:22:08 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 ORDER BY `create_date` DESC  LIMIT 0, NULL ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/yapriedu.com/modules/database/classes/Kohana/Database/Query.php:251
2014-01-31 04:22:08 --- DEBUG: #0 /home/lamo8/www/yapriedu.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/yapriedu.com/application/classes/Model/News.php(63): Kohana_Database_Query->execute()
#2 /home/lamo8/www/yapriedu.com/application/classes/Controller/News.php(25): Model_News->get_news_list(1, 10)
#3 /home/lamo8/www/yapriedu.com/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/yapriedu.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/yapriedu.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/yapriedu.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/yapriedu.com/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/yapriedu.com/modules/database/classes/Kohana/Database/Query.php:251
2014-01-31 04:23:02 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 ORDER BY `create_date` DESC  LIMIT 0, NULL ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/yapriedu.com/modules/database/classes/Kohana/Database/Query.php:251
2014-01-31 04:23:02 --- DEBUG: #0 /home/lamo8/www/yapriedu.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/yapriedu.com/application/classes/Model/News.php(63): Kohana_Database_Query->execute()
#2 /home/lamo8/www/yapriedu.com/application/classes/Controller/News.php(25): Model_News->get_news_list(1, 10)
#3 /home/lamo8/www/yapriedu.com/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/yapriedu.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/yapriedu.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/yapriedu.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/yapriedu.com/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/yapriedu.com/modules/database/classes/Kohana/Database/Query.php:251