<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-10 21:14:14 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 't577xk@Gmail.com' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`, `fio`, `position`, `specialty`, `phone`, `city`, `active`, `create`) VALUES ('t577xk@Gmail.com', 't577xk@Gmail.com', '0b43e3a7e108eed0e079ebd3b7a2d429bf656ca96228d29fbf19efbeea9b4b0c', 'левина оксана владимировна', 'врач', 'онколог', '89053325873', 'волгоград', 1, 1457633654) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2016-03-10 21:14:14 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /home/u415209/med4share.ru/www/application/classes/Model/UserControl.php(128): Kohana_ORM->save()
#4 /home/u415209/med4share.ru/www/application/classes/Controller/User/User.php(89): Model_UserControl->add_user(Array)
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_User_User->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_User))
#8 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#11 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251