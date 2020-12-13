<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-03 01:14:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Admin/Users.php [ 87 ] in file:line
2014-11-03 01:14:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 01:51:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Search.php [ 10 ] in file:line
2014-11-03 01:51:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 01:51:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Search.php [ 10 ] in file:line
2014-11-03 01:51:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 01:51:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Search.php [ 10 ] in file:line
2014-11-03 01:51:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 01:51:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Search.php [ 10 ] in file:line
2014-11-03 01:51:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 02:10:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_page_static' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-11-03 02:10:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 02:10:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_page_static' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-11-03 02:10:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 02:10:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::like() ~ APPPATH/classes/Controller/Search.php [ 25 ] in file:line
2014-11-03 02:10:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 02:10:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::like() ~ APPPATH/classes/Controller/Search.php [ 25 ] in file:line
2014-11-03 02:10:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 02:10:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::like() ~ APPPATH/classes/Controller/Search.php [ 25 ] in file:line
2014-11-03 02:10:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 02:10:30 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::like() ~ APPPATH/classes/Controller/Search.php [ 25 ] in file:line
2014-11-03 02:10:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 02:10:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PageStatic::like() ~ APPPATH/classes/Controller/Search.php [ 25 ] in file:line
2014-11-03 02:10:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 02:10:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PageStatic::like() ~ APPPATH/classes/Controller/Search.php [ 25 ] in file:line
2014-11-03 02:10:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 02:10:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PageStatic::like() ~ APPPATH/classes/Controller/Search.php [ 25 ] in file:line
2014-11-03 02:10:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 02:11:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date' in 'order clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE `contentCenter` LIKE '' ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:20 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(27): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:21 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date' in 'order clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE `contentCenter` LIKE '' ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:21 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(27): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:21 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date' in 'order clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE `contentCenter` LIKE '' ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:21 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(27): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:22 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date' in 'order clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE `contentCenter` LIKE '' ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:22 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(27): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:44 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date' in 'order clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE `contentCenter` LIKE '' ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:44 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(27): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:45 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date' in 'order clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE `contentCenter` LIKE '' ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:45 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(27): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:45 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date' in 'order clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE `contentCenter` LIKE '' ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:45 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(27): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:46 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date' in 'order clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE `contentCenter` LIKE '' ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:46 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(27): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:52 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date' in 'order clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE `contentCenter` LIKE '' ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:11:52 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(27): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:12:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '!' ~ APPPATH/classes/Controller/Search.php [ 21 ] in file:line
2014-11-03 02:12:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 02:12:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '!' ~ APPPATH/classes/Controller/Search.php [ 21 ] in file:line
2014-11-03 02:12:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 02:12:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '!' ~ APPPATH/classes/Controller/Search.php [ 21 ] in file:line
2014-11-03 02:12:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-03 02:13:21 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date' in 'order clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE `contentCenter` LIKE 'терапи' ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:13:21 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(27): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:14:05 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE% 'терапи' ORDER BY `date` DESC' at line 1 [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE `contentCenter` %LIKE% 'терапи' ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:14:05 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(27): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:14:06 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE% 'терапи' ORDER BY `date` DESC' at line 1 [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE `contentCenter` %LIKE% 'терапи' ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:14:06 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(27): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:14:17 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE% 'терапи' ORDER BY `date` DESC' at line 1 [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE `contentCenter` %LIKE% 'терапи' ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:14:17 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(27): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:15:12 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date' in 'order clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE `contentCenter` LIKE '%терапи%' ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:15:12 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(27): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:15:13 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date' in 'order clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE `contentCenter` LIKE '%терапи%' ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:15:13 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(27): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:15:33 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date' in 'order clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE (`contentCenter` LIKE '%терапи%') ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:15:33 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(31): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:15:33 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date' in 'order clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` WHERE (`contentCenter` LIKE '%терапи%') ORDER BY `date` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:15:33 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(31): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:24:22 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'PageStatic.contentCenter' in 'where clause' [ SELECT `page`.`id` AS `id`, `page`.`parent_id` AS `parent_id`, `page`.`level` AS `level`, `page`.`lft` AS `lft`, `page`.`rgt` AS `rgt`, `page`.`scope` AS `scope`, `page`.`name` AS `name`, `page`.`url` AS `url` FROM `page_tree` AS `page` WHERE `PageStatic`.`contentCenter` LIKE '%ап%' ORDER BY `PageStatic`.`title` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:24:22 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `page`.`...', 'Model_Page', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(30): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:24:23 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'PageStatic.contentCenter' in 'where clause' [ SELECT `page`.`id` AS `id`, `page`.`parent_id` AS `parent_id`, `page`.`level` AS `level`, `page`.`lft` AS `lft`, `page`.`rgt` AS `rgt`, `page`.`scope` AS `scope`, `page`.`name` AS `name`, `page`.`url` AS `url` FROM `page_tree` AS `page` WHERE `PageStatic`.`contentCenter` LIKE '%ап%' ORDER BY `PageStatic`.`title` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:24:23 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `page`.`...', 'Model_Page', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(30): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:26:12 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_PageStatic class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2014-11-03 02:26:12 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/views/page/search.php(9): Kohana_ORM->__get('url')
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/views/template/main.php(55): Kohana_View->__toString()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Template/Main.php(54): Kohana_Controller_Template->after()
#10 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_Template_Main->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#13 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#16 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2014-11-03 02:26:13 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_PageStatic class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2014-11-03 02:26:13 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/views/page/search.php(9): Kohana_ORM->__get('url')
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/views/template/main.php(55): Kohana_View->__toString()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Template/Main.php(54): Kohana_Controller_Template->after()
#10 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_Template_Main->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#13 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#16 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2014-11-03 02:26:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_PageStatic class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2014-11-03 02:26:21 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/views/page/search.php(9): Kohana_ORM->__get('url')
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/views/template/main.php(55): Kohana_View->__toString()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Template/Main.php(54): Kohana_Controller_Template->after()
#10 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_Template_Main->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#13 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#16 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2014-11-03 02:26:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The Page property does not exist in the Model_PageStatic class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2014-11-03 02:26:22 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('Page')
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/views/page/search.php(9): Kohana_ORM->__get('Page')
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/views/template/main.php(55): Kohana_View->__toString()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Template/Main.php(54): Kohana_Controller_Template->after()
#10 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_Template_Main->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#13 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#16 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2014-11-03 02:26:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_PageStatic class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2014-11-03 02:26:25 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/views/page/search.php(9): Kohana_ORM->__get('url')
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/views/template/main.php(55): Kohana_View->__toString()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Template/Main.php(54): Kohana_Controller_Template->after()
#10 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_Template_Main->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#13 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#16 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2014-11-03 02:27:17 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'med4share.lamo8.ru.Page' doesn't exist [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` LEFT JOIN `Page` ON (`Page`.`period_id` = `PageStatic`.`id`) WHERE `contentCenter` LIKE '%ап%' ORDER BY `title` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:27:17 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(31): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:27:17 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'med4share.lamo8.ru.Page' doesn't exist [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` LEFT JOIN `Page` ON (`Page`.`period_id` = `PageStatic`.`id`) WHERE `contentCenter` LIKE '%ап%' ORDER BY `title` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:27:17 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(31): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:29:04 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'med4share.lamo8.ru.Page' doesn't exist [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` LEFT JOIN `Page` ON (`page_tree`.`period_id` = `page_static`.`id`) WHERE `contentCenter` LIKE '%ап%' ORDER BY `title` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:29:04 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(31): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:29:04 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'med4share.lamo8.ru.Page' doesn't exist [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` LEFT JOIN `Page` ON (`page_tree`.`period_id` = `page_static`.`id`) WHERE `contentCenter` LIKE '%ап%' ORDER BY `title` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:29:04 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(31): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:29:14 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'page_tree.period_id' in 'on clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` LEFT JOIN `page_tree` ON (`page_tree`.`period_id` = `page_static`.`id`) WHERE `contentCenter` LIKE '%ап%' ORDER BY `title` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:29:14 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(31): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:29:14 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'page_tree.period_id' in 'on clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` LEFT JOIN `page_tree` ON (`page_tree`.`period_id` = `page_static`.`id`) WHERE `contentCenter` LIKE '%ап%' ORDER BY `title` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:29:14 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(31): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:29:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'page_static.id' in 'on clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` LEFT JOIN `page_tree` ON (`page_tree`.`id` = `page_static`.`id`) WHERE `contentCenter` LIKE '%ап%' ORDER BY `title` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:29:36 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(31): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:29:38 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'page_static.id' in 'on clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` LEFT JOIN `page_tree` ON (`page_tree`.`id` = `page_static`.`id`) WHERE `contentCenter` LIKE '%ап%' ORDER BY `title` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:29:38 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(31): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:30:23 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'page_static.contentCenter' in 'where clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` LEFT JOIN `page_tree` ON (`page_tree`.`id` = `page_static`.`id`) WHERE `page_static`.`contentCenter` LIKE '%ап%' ORDER BY `page_static`.`title` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:30:23 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(31): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:30:24 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'page_static.contentCenter' in 'where clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` LEFT JOIN `page_tree` ON (`page_tree`.`id` = `page_static`.`id`) WHERE `page_static`.`contentCenter` LIKE '%ап%' ORDER BY `page_static`.`title` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:30:24 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(31): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:30:24 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'page_static.contentCenter' in 'where clause' [ SELECT `pagestatic`.`id` AS `id`, `pagestatic`.`lang` AS `lang`, `pagestatic`.`parent` AS `parent`, `pagestatic`.`h1` AS `h1`, `pagestatic`.`h2` AS `h2`, `pagestatic`.`title` AS `title`, `pagestatic`.`description` AS `description`, `pagestatic`.`keywords` AS `keywords`, `pagestatic`.`contentCenter` AS `contentCenter`, `pagestatic`.`contentLeft` AS `contentLeft`, `pagestatic`.`contentRight` AS `contentRight`, `pagestatic`.`breadcrumb` AS `breadcrumb`, `pagestatic`.`links` AS `links`, `pagestatic`.`js` AS `js`, `pagestatic`.`css` AS `css`, `pagestatic`.`header_images` AS `header_images`, `pagestatic`.`active` AS `active`, `pagestatic`.`create` AS `create`, `pagestatic`.`modified` AS `modified` FROM `page_static` AS `pagestatic` LEFT JOIN `page_tree` ON (`page_tree`.`id` = `page_static`.`id`) WHERE `page_static`.`contentCenter` LIKE '%ап%' ORDER BY `page_static`.`title` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:30:24 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagesta...', 'Model_PageStati...', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(31): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:32:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') ORDER BY `page`.`lft` ASC' at line 1 [ SELECT `page`.`id` AS `id`, `page`.`parent_id` AS `parent_id`, `page`.`level` AS `level`, `page`.`lft` AS `lft`, `page`.`rgt` AS `rgt`, `page`.`scope` AS `scope`, `page`.`name` AS `name`, `page`.`url` AS `url` FROM `page_tree` AS `page` LEFT JOIN `PageStatic` ON () ORDER BY `page`.`lft` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:32:26 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `page`.`...', 'Model_Page', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(29): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:32:27 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') ORDER BY `page`.`lft` ASC' at line 1 [ SELECT `page`.`id` AS `id`, `page`.`parent_id` AS `parent_id`, `page`.`level` AS `level`, `page`.`lft` AS `lft`, `page`.`rgt` AS `rgt`, `page`.`scope` AS `scope`, `page`.`name` AS `name`, `page`.`url` AS `url` FROM `page_tree` AS `page` LEFT JOIN `PageStatic` ON () ORDER BY `page`.`lft` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:32:27 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `page`.`...', 'Model_Page', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(29): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:33:00 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'med4share.lamo8.ru.PageStatic' doesn't exist [ SELECT `page`.`id` AS `id`, `page`.`parent_id` AS `parent_id`, `page`.`level` AS `level`, `page`.`lft` AS `lft`, `page`.`rgt` AS `rgt`, `page`.`scope` AS `scope`, `page`.`name` AS `name`, `page`.`url` AS `url` FROM `page_tree` AS `page` LEFT JOIN `PageStatic` ON (`PageStatic`.`id` = `Page`.`id`) ORDER BY `page`.`lft` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:33:00 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `page`.`...', 'Model_Page', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(29): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:33:01 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'med4share.lamo8.ru.PageStatic' doesn't exist [ SELECT `page`.`id` AS `id`, `page`.`parent_id` AS `parent_id`, `page`.`level` AS `level`, `page`.`lft` AS `lft`, `page`.`rgt` AS `rgt`, `page`.`scope` AS `scope`, `page`.`name` AS `name`, `page`.`url` AS `url` FROM `page_tree` AS `page` LEFT JOIN `PageStatic` ON (`PageStatic`.`id` = `Page`.`id`) ORDER BY `page`.`lft` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:33:01 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `page`.`...', 'Model_Page', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(29): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:33:12 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'Page.id' in 'on clause' [ SELECT `page`.`id` AS `id`, `page`.`parent_id` AS `parent_id`, `page`.`level` AS `level`, `page`.`lft` AS `lft`, `page`.`rgt` AS `rgt`, `page`.`scope` AS `scope`, `page`.`name` AS `name`, `page`.`url` AS `url` FROM `page_tree` AS `page` LEFT JOIN `page_static` ON (`page_static`.`id` = `Page`.`id`) ORDER BY `page`.`lft` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:33:12 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `page`.`...', 'Model_Page', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(29): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:33:13 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'Page.id' in 'on clause' [ SELECT `page`.`id` AS `id`, `page`.`parent_id` AS `parent_id`, `page`.`level` AS `level`, `page`.`lft` AS `lft`, `page`.`rgt` AS `rgt`, `page`.`scope` AS `scope`, `page`.`name` AS `name`, `page`.`url` AS `url` FROM `page_tree` AS `page` LEFT JOIN `page_static` ON (`page_static`.`id` = `Page`.`id`) ORDER BY `page`.`lft` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:33:13 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `page`.`...', 'Model_Page', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(29): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:33:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'page_tree.id' in 'on clause' [ SELECT `page`.`id` AS `id`, `page`.`parent_id` AS `parent_id`, `page`.`level` AS `level`, `page`.`lft` AS `lft`, `page`.`rgt` AS `rgt`, `page`.`scope` AS `scope`, `page`.`name` AS `name`, `page`.`url` AS `url` FROM `page_tree` AS `page` LEFT JOIN `page_static` ON (`page_static`.`id` = `page_tree`.`id`) ORDER BY `page`.`lft` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:33:20 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `page`.`...', 'Model_Page', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(29): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:33:21 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'page_tree.id' in 'on clause' [ SELECT `page`.`id` AS `id`, `page`.`parent_id` AS `parent_id`, `page`.`level` AS `level`, `page`.`lft` AS `lft`, `page`.`rgt` AS `rgt`, `page`.`scope` AS `scope`, `page`.`name` AS `name`, `page`.`url` AS `url` FROM `page_tree` AS `page` LEFT JOIN `page_static` ON (`page_static`.`id` = `page_tree`.`id`) ORDER BY `page`.`lft` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:33:21 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `page`.`...', 'Model_Page', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(29): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:34:04 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'page_tree.id' in 'on clause' [ SELECT `page`.`id` AS `id`, `page`.`parent_id` AS `parent_id`, `page`.`level` AS `level`, `page`.`lft` AS `lft`, `page`.`rgt` AS `rgt`, `page`.`scope` AS `scope`, `page`.`name` AS `name`, `page`.`url` AS `url` FROM `page_tree` AS `page` LEFT JOIN `page_static` ON (`page_static`.`id` = `page_tree`.`id`) ORDER BY `page`.`lft` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:34:04 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `page`.`...', 'Model_Page', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(30): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:34:04 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'page_tree.id' in 'on clause' [ SELECT `page`.`id` AS `id`, `page`.`parent_id` AS `parent_id`, `page`.`level` AS `level`, `page`.`lft` AS `lft`, `page`.`rgt` AS `rgt`, `page`.`scope` AS `scope`, `page`.`name` AS `name`, `page`.`url` AS `url` FROM `page_tree` AS `page` LEFT JOIN `page_static` ON (`page_static`.`id` = `page_tree`.`id`) ORDER BY `page`.`lft` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:34:04 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `page`.`...', 'Model_Page', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(30): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:34:05 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'page_tree.id' in 'on clause' [ SELECT `page`.`id` AS `id`, `page`.`parent_id` AS `parent_id`, `page`.`level` AS `level`, `page`.`lft` AS `lft`, `page`.`rgt` AS `rgt`, `page`.`scope` AS `scope`, `page`.`name` AS `name`, `page`.`url` AS `url` FROM `page_tree` AS `page` LEFT JOIN `page_static` ON (`page_static`.`id` = `page_tree`.`id`) ORDER BY `page`.`lft` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-11-03 02:34:05 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `page`.`...', 'Model_Page', Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Search.php(30): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Search->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251