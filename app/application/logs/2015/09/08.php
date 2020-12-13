<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-08 01:51:08 --- EMERGENCY: Kohana_Exception [ 0 ]: Required route parameter not passed: razdel ~ SYSPATH/classes/Kohana/Route.php [ 572 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Route.php:554
2015-09-08 01:51:08 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Route.php(554): Kohana_Route->{closure}('/<razdel>(/page...', false)
#1 [internal function]: Kohana_Route->{closure}(Array)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Route.php(568): preg_replace_callback('#(?:<([a-zA-Z0-...', Object(Closure), 'news(/<razdel>(...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Route.php(581): Kohana_Route->{closure}('news(/<razdel>(...', true)
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/pagination/classes/Kohana/Pagination.php(219): Kohana_Route->uri(Array)
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/pagination/bootstrap.php(14): Kohana_Pagination->url(2)
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/pagination/classes/Kohana/Pagination.php(266): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/pagination/classes/Kohana/Pagination.php(361): Kohana_Pagination->render()
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/news/news_list.php(92): Kohana_Pagination->__toString()
#11 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#12 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#13 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#14 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(51): Kohana_View->__toString()
#15 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#18 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#21 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Route.php:554
2015-09-08 01:57:32 --- EMERGENCY: Kohana_Exception [ 0 ]: Required route parameter not passed: razdel ~ SYSPATH/classes/Kohana/Route.php [ 572 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Route.php:554
2015-09-08 01:57:32 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Route.php(554): Kohana_Route->{closure}('/<razdel>(/page...', false)
#1 [internal function]: Kohana_Route->{closure}(Array)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Route.php(568): preg_replace_callback('#(?:<([a-zA-Z0-...', Object(Closure), 'news(/<razdel>(...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Route.php(581): Kohana_Route->{closure}('news(/<razdel>(...', true)
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/pagination/classes/Kohana/Pagination.php(219): Kohana_Route->uri(Array)
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/pagination/bootstrap.php(14): Kohana_Pagination->url(2)
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/pagination/classes/Kohana/Pagination.php(266): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/pagination/classes/Kohana/Pagination.php(361): Kohana_Pagination->render()
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/news/news_list.php(92): Kohana_Pagination->__toString()
#11 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#12 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#13 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#14 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(51): Kohana_View->__toString()
#15 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#18 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#21 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Route.php:554
2015-09-08 01:58:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/News.php [ 29 ] in file:line
2015-09-08 01:58:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 01:58:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/News.php [ 29 ] in file:line
2015-09-08 01:58:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 01:58:27 --- EMERGENCY: Kohana_Exception [ 0 ]: Required route parameter not passed: razdel ~ SYSPATH/classes/Kohana/Route.php [ 572 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Route.php:554
2015-09-08 01:58:27 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Route.php(554): Kohana_Route->{closure}('/<razdel>(/page...', false)
#1 [internal function]: Kohana_Route->{closure}(Array)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Route.php(568): preg_replace_callback('#(?:<([a-zA-Z0-...', Object(Closure), 'news(/<razdel>(...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Route.php(581): Kohana_Route->{closure}('news(/<razdel>(...', true)
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/pagination/classes/Kohana/Pagination.php(219): Kohana_Route->uri(Array)
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/pagination/bootstrap.php(14): Kohana_Pagination->url(2)
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/pagination/classes/Kohana/Pagination.php(266): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/pagination/classes/Kohana/Pagination.php(361): Kohana_Pagination->render()
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/news/news_list.php(92): Kohana_Pagination->__toString()
#11 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#12 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#13 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#14 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(55): Kohana_View->__toString()
#15 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#18 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#21 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Route.php:554
2015-09-08 02:11:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Model/News.php [ 76 ] in file:line
2015-09-08 02:11:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:11:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Model/News.php [ 76 ] in file:line
2015-09-08 02:11:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:13:53 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 :'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:13:53 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(92): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(42): Model_News->get_news_list(1, 1)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:13:53 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 :'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:13:53 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(92): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(42): Model_News->get_news_list(1, 1)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:14:15 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 :'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:14:15 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(92): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(42): Model_News->get_news_list(1, 1)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:14:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_News' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2015-09-08 02:14:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:14:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_News' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2015-09-08 02:14:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:14:52 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0,' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:14:52 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(92): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(42): Model_News->get_news_list(1, 2)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:14:54 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0,' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:14:54 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(92): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(42): Model_News->get_news_list(1, 2)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:22 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0,' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:22 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(92): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(42): Model_News->get_news_list(1, 1)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0,' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:26 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(92): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(42): Model_News->get_news_list(1, 0)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:44 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0,' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:44 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(92): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(42): Model_News->get_news_list(1, 0)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:45 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0,' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:45 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(92): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(42): Model_News->get_news_list(1, 0)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:45 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0,' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:45 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(92): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(42): Model_News->get_news_list(1, 0)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:46 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0,' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:46 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(92): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(42): Model_News->get_news_list(1, 0)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:46 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0,' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:46 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(92): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(42): Model_News->get_news_list(1, 0)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:52 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0,' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:52 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(92): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(42): Model_News->get_news_list(1, 0)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:52 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0,' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:52 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(92): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(42): Model_News->get_news_list(1, 0)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:52 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0,' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 'AND `razdel_id` = 0 AND `razdel_id` = 1' ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:15:52 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(92): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(42): Model_News->get_news_list(1, 0)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 02:16:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Model/News.php [ 79 ] in file:line
2015-09-08 02:16:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:16:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Model/News.php [ 79 ] in file:line
2015-09-08 02:16:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:17:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Model/News.php [ 79 ] in file:line
2015-09-08 02:17:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:17:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Model/News.php [ 79 ] in file:line
2015-09-08 02:17:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:17:07 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ APPPATH/classes/Model/News.php [ 90 ] in file:line
2015-09-08 02:17:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:17:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ APPPATH/classes/Model/News.php [ 90 ] in file:line
2015-09-08 02:17:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:17:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ APPPATH/classes/Model/News.php [ 89 ] in file:line
2015-09-08 02:17:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:17:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ APPPATH/classes/Model/News.php [ 89 ] in file:line
2015-09-08 02:17:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:17:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ APPPATH/classes/Model/News.php [ 89 ] in file:line
2015-09-08 02:17:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:17:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/News.php [ 78 ] in file:line
2015-09-08 02:17:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:17:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/News.php [ 78 ] in file:line
2015-09-08 02:17:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:17:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/News.php [ 78 ] in file:line
2015-09-08 02:17:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:17:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/News.php [ 78 ] in file:line
2015-09-08 02:17:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:17:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/News.php [ 78 ] in file:line
2015-09-08 02:17:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:18:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/News.php [ 78 ] in file:line
2015-09-08 02:18:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:18:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/News.php [ 78 ] in file:line
2015-09-08 02:18:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:18:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/News.php [ 78 ] in file:line
2015-09-08 02:18:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:18:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/News.php [ 78 ] in file:line
2015-09-08 02:18:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:18:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/News.php [ 78 ] in file:line
2015-09-08 02:18:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 02:18:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_News' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2015-09-08 02:18:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 23:56:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Date::ru_month() ~ APPPATH/views/news/news_index.php [ 47 ] in file:line
2015-09-08 23:56:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line