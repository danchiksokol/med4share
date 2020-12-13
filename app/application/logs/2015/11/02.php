<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-02 01:17:27 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'sort' in 'field list' [ UPDATE `news` SET `sort` = 1 WHERE news_id =3 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-11-02 01:17:27 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `news` S...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(224): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-11-02 01:17:29 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'sort' in 'field list' [ UPDATE `news` SET `sort` = 1 WHERE news_id =3 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-11-02 01:17:29 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `news` S...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(224): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-11-02 01:17:31 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'sort' in 'field list' [ UPDATE `news` SET `sort` = 1 WHERE news_id =3 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-11-02 01:17:31 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `news` S...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(224): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-11-02 01:17:43 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'sort' in 'field list' [ UPDATE `news` SET `sort` = 1 WHERE news_id =3 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-11-02 01:17:43 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `news` S...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(224): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-11-02 01:18:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'sort' in 'field list' [ UPDATE `news` SET `sort` = 1 WHERE news_id =4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-11-02 01:18:06 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `news` S...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(224): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-11-02 01:19:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'sort' in 'field list' [ UPDATE `news` SET `sort` = 1 WHERE news_id =3 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-11-02 01:19:06 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `news` S...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(224): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251