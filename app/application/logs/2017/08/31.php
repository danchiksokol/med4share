<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-08-31 11:17:15 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'drlizzy@yandex.ru' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`, `fio`, `position`, `specialty`, `phone`, `city`, `spam`, `spam_rheumatology`, `spam_neurology`, `processing`, `razdel_id`, `active`, `create`) VALUES ('drlizzy@yandex.ru', 'drlizzy@yandex.ru', '3d2d4d0744c6bf213c87e90cbe77bd767d8cf663d1d1acf1da828d76e05cff48', 'Григорьева Елизавета Владимировна', 'заведующая дневным стационаром', 'гематолог', '+79128777942', 'Ижевск', '1', '1', '1', '1', '0', 1, 1504167435) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2017-08-31 11:17:15 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /home/u415209/med4share.ru/www/application/classes/Model/UserControl.php(135): Kohana_ORM->save()
#4 /home/u415209/med4share.ru/www/application/classes/Controller/User/User.php(97): Model_UserControl->add_user(Array)
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_User_User->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_User))
#8 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/u415209/med4share.ru/www/index.php(121): Kohana_Request->execute()
#11 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251