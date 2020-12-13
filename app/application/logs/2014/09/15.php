<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-15 00:42:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'char_code' in 'where clause' [ SELECT `registracia`.`id` AS `id`, `registracia`.`date` AS `date`, `registracia`.`ip` AS `ip`, `registracia`.`name` AS `name`, `registracia`.`work` AS `work`, `registracia`.`position` AS `position`, `registracia`.`telefon` AS `telefon`, `registracia`.`email` AS `email`, `registracia`.`city` AS `city` FROM `registracia` AS `registracia` WHERE `char_code` IS NULL LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-09-15 00:42:36 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `registr...', false, Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Model/Registracia.php(14): Kohana_ORM->find()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Registracia.php(9): Model_Registracia->add(Array)
#5 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Registracia->action_send()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registracia))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#11 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-09-15 00:43:48 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'char_code' in 'where clause' [ SELECT `registracia`.`id` AS `id`, `registracia`.`date` AS `date`, `registracia`.`ip` AS `ip`, `registracia`.`name` AS `name`, `registracia`.`work` AS `work`, `registracia`.`position` AS `position`, `registracia`.`telefon` AS `telefon`, `registracia`.`email` AS `email`, `registracia`.`city` AS `city` FROM `registracia` AS `registracia` WHERE `char_code` IS NULL LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-09-15 00:43:48 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `registr...', false, Array)
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Model/Registracia.php(16): Kohana_ORM->find()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Registracia.php(9): Model_Registracia->add(Array)
#5 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Registracia->action_send()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registracia))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#11 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2014-09-15 01:12:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/left_menu could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php:137
2014-09-15 01:12:48 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('admin/left_menu')
#1 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/left_menu', Array)
#2 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Template/Admin.php(28): Kohana_View::factory('admin/left_menu', Array)
#3 /home/lamo8/www/subdomain/med4share.lamo8.ru/application/classes/Controller/Admin/Admin.php(36): Controller_Template_Admin->before()
#4 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Controller.php(69): Controller_Admin_Admin->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Admin))
#7 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share.lamo8.ru/system/classes/Kohana/View.php:137
2014-09-15 01:24:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Admin/Registracia.php [ 23 ] in file:line
2014-09-15 01:24:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line