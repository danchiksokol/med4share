<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-24 01:32:04 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Admin/Users.php [ 55 ] in file:line
2016-06-24 01:32:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-24 01:32:09 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Admin/Users.php [ 55 ] in file:line
2016-06-24 01:32:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-24 01:32:26 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Admin/Users.php [ 55 ] in file:line
2016-06-24 01:32:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-24 01:32:57 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Admin/Users.php [ 55 ] in file:line
2016-06-24 01:32:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-24 01:34:32 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Admin/Users.php [ 52 ] in file:line
2016-06-24 01:34:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-24 01:36:18 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '"roles_users" ("user_id", "role_id") VALUES (654, 1)' at line 1 [ INSERT INTO "roles_users" ("user_id", "role_id") VALUES (654, 1) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 01:36:18 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO "ro...', false, Array)
#1 /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Users.php(52): Kohana_Database_Query->execute()
#2 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_changePassword()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#8 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 01:38:00 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''user_id', 'role_id) VALUES (655, 1)' at line 1 [ INSERT INTO roles_users ('user_id', 'role_id) VALUES (655, 1) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 01:38:00 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO rol...', false, Array)
#1 /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Users.php(52): Kohana_Database_Query->execute()
#2 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_changePassword()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#8 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 01:38:12 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''user_id', 'role_id') VALUES (655, 1)' at line 1 [ INSERT INTO roles_users ('user_id', 'role_id') VALUES (655, 1) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 01:38:12 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO rol...', false, Array)
#1 /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Users.php(52): Kohana_Database_Query->execute()
#2 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_changePassword()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#8 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 01:38:44 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''user_id', 'role_id') VALUES ('655', '1')' at line 1 [ INSERT INTO roles_users ('user_id', 'role_id') VALUES ('655', '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 01:38:44 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO rol...', false, Array)
#1 /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Users.php(52): Kohana_Database_Query->execute()
#2 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_changePassword()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#8 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 01:39:36 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''user_id', 'role_id') VALUES ('656', '1')' at line 1 [ INSERT INTO `roles_users` ('user_id', 'role_id') VALUES ('656', '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 01:39:36 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Users.php(52): Kohana_Database_Query->execute()
#2 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_changePassword()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#8 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 01:42:19 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1-1' for key 'PRIMARY' [ INSERT INTO  `roles_users` (`user_id` ,`role_id`) VALUES ('1',  '1'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 01:42:19 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO  `r...', false, Array)
#1 /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Users.php(52): Kohana_Database_Query->execute()
#2 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_changePassword()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#8 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 04:51:58 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1371-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (1371, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 04:51:58 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/u415209/med4share.ru/www/application/classes/Model/UserControl.php(133): Kohana_ORM->add('roles', Object(Model_Role))
#3 /home/u415209/med4share.ru/www/application/classes/Controller/User/User.php(89): Model_UserControl->add_user(Array)
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_User_User->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_User))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#10 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 16:16:04 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1372-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (1372, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 16:16:04 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/u415209/med4share.ru/www/application/classes/Model/UserControl.php(133): Kohana_ORM->add('roles', Object(Model_Role))
#3 /home/u415209/med4share.ru/www/application/classes/Controller/User/User.php(89): Model_UserControl->add_user(Array)
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_User_User->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_User))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#10 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 16:17:12 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1373-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (1373, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 16:17:12 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/u415209/med4share.ru/www/application/classes/Model/UserControl.php(133): Kohana_ORM->add('roles', Object(Model_Role))
#3 /home/u415209/med4share.ru/www/application/classes/Controller/User/User.php(89): Model_UserControl->add_user(Array)
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_User_User->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_User))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#10 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 16:18:28 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1374-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (1374, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-24 16:18:28 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/u415209/med4share.ru/www/application/classes/Model/UserControl.php(133): Kohana_ORM->add('roles', Object(Model_Role))
#3 /home/u415209/med4share.ru/www/application/classes/Controller/User/User.php(89): Model_UserControl->add_user(Array)
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_User_User->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_User))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#10 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251