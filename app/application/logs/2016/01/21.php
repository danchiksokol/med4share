<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-01-21 00:37:17 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'order clause' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`fio` AS `fio`, `user`.`position` AS `position`, `user`.`specialty` AS `specialty`, `user`.`phone` AS `phone`, `user`.`city` AS `city`, `user`.`spam` AS `spam`, `user`.`active` AS `active`, `user`.`create` AS `create` FROM `users` AS `user` ORDER BY `user_id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-01-21 00:37:17 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', 'Model_User', Array)
#1 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Users.php(24): Kohana_ORM->find_all()
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_users()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#10 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-01-21 00:37:17 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'order clause' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`fio` AS `fio`, `user`.`position` AS `position`, `user`.`specialty` AS `specialty`, `user`.`phone` AS `phone`, `user`.`city` AS `city`, `user`.`spam` AS `spam`, `user`.`active` AS `active`, `user`.`create` AS `create` FROM `users` AS `user` ORDER BY `user_id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-01-21 00:37:17 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', 'Model_User', Array)
#1 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Users.php(24): Kohana_ORM->find_all()
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_users()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#10 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-01-21 04:08:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Date::ru_month() ~ APPPATH/views/news/news_only.php [ 9 ] in file:line
2016-01-21 04:08:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line