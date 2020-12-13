<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-02 03:18:49 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date_begins' in 'order clause' [ SELECT `calendar`.`id` AS `id`, `calendar`.`date_add` AS `date_add`, `calendar`.`date_modif` AS `date_modif`, `calendar`.`url` AS `url`, `calendar`.`name` AS `name`, `calendar`.`description` AS `description`, `calendar`.`keywords` AS `keywords`, `calendar`.`title` AS `title`, `calendar`.`date_begin` AS `date_begin`, `calendar`.`date_end` AS `date_end`, `calendar`.`badge` AS `badge`, `calendar`.`event_title` AS `event_title`, `calendar`.`text` AS `text`, `calendar`.`active` AS `active`, `calendar`.`is_comments` AS `is_comments` FROM `calendar_events` AS `calendar` WHERE `active` = '1' AND `date_begin` >= '2015-06-02' AND `date_end` >= '2015-06-02' ORDER BY `date_begins` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2015-06-02 03:18:49 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `calenda...', 'Model_Calendar', Array)
#1 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/u415209/med4share.ru/www/application/classes/Controller/Calendar.php(16): Kohana_ORM->find_all()
#4 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Calendar->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calendar))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#10 {main} in /home/u415209/med4share.ru/www/modules/database/classes/Kohana/Database/Query.php:251
2015-06-02 07:15:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Date::ru_month() ~ APPPATH/views/news/news_index.php [ 9 ] in file:line
2015-06-02 07:15:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line