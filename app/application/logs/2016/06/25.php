<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-25 10:02:18 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1375-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (1375, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-25 10:02:18 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
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
2016-06-25 18:48:12 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1376-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (1376, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-25 18:48:12 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
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
2016-06-25 18:48:43 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1377-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (1377, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-25 18:48:43 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
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
2016-06-25 18:50:50 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1378-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (1378, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-25 18:50:50 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
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
2016-06-25 20:34:59 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1379-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (1379, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-25 20:34:59 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
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
2016-06-25 22:38:29 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1380-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (1380, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-06-25 22:38:29 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
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