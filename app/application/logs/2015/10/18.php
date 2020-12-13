<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-18 12:54:16 --- EMERGENCY: Kohana_Exception [ 0 ]: The news_id property does not exist in the Model_NewsTagsName class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-10-18 12:54:16 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('news_id')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/newstags/list.php(20): Kohana_ORM->__get('news_id')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/main.php(47): Kohana_View->__toString()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Template/Admin.php(57): Kohana_Controller_Template->after()
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Admin.php(18): Controller_Template_Admin->after()
#11 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/NewsTags.php(21): Controller_Admin_Admin->after()
#12 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_Admin_NewsTags->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_NewsTags))
#15 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#18 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-10-18 12:55:17 --- EMERGENCY: Kohana_Exception [ 0 ]: The news_id property does not exist in the Model_NewsTagsName class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-10-18 12:55:17 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('news_id')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/newstags/list.php(20): Kohana_ORM->__get('news_id')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/main.php(47): Kohana_View->__toString()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Template/Admin.php(57): Kohana_Controller_Template->after()
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Admin.php(18): Controller_Template_Admin->after()
#11 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/NewsTags.php(21): Controller_Admin_Admin->after()
#12 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_Admin_NewsTags->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_NewsTags))
#15 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#18 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-10-18 12:56:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/newstags/list could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-10-18 12:56:18 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('admin/newstags/...')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/newstags/...', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/NewsTags.php(38): Kohana_View::factory('admin/newstags/...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_NewsTags->action_tags_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_NewsTags))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-10-18 12:58:32 --- EMERGENCY: Kohana_Exception [ 0 ]: The view_main property does not exist in the Model_NewsTagsName class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-10-18 12:58:32 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('view_main')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/newstags/list.php(25): Kohana_ORM->__get('view_main')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/main.php(47): Kohana_View->__toString()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Template/Admin.php(57): Kohana_Controller_Template->after()
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Admin.php(18): Controller_Template_Admin->after()
#11 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/NewsTags.php(21): Controller_Admin_Admin->after()
#12 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_Admin_NewsTags->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_NewsTags))
#15 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#18 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-10-18 12:58:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The view_main property does not exist in the Model_NewsTagsName class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-10-18 12:58:33 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('view_main')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/newstags/list.php(25): Kohana_ORM->__get('view_main')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/admin/main.php(47): Kohana_View->__toString()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Template/Admin.php(57): Kohana_Controller_Template->after()
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Admin.php(18): Controller_Template_Admin->after()
#11 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/NewsTags.php(21): Controller_Admin_Admin->after()
#12 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_Admin_NewsTags->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_NewsTags))
#15 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#18 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-10-18 13:36:20 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ UPDATE `news_tags_name` SET active = NOT active, modified_date = '2015-10-18 13:36:20' WHERE id = ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 13:36:20 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `news_ta...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/NewsTags.php(61): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_NewsTags->action_active()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_NewsTags))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 13:37:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'id' in 'where clause' [ UPDATE `news_tags_name` SET active = NOT active, modified_date = '2015-10-18 13:37:06' WHERE id =1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 13:37:06 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `news_ta...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/NewsTags.php(61): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_NewsTags->action_active()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_NewsTags))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 13:39:44 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete news model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php:178
2015-10-18 13:39:44 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(178): Kohana_ORM->delete()
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php:178
2015-10-18 13:40:46 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete news model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php:178
2015-10-18 13:40:46 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(178): Kohana_ORM->delete()
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php:178
2015-10-18 13:41:03 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete news model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php:178
2015-10-18 13:41:03 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(178): Kohana_ORM->delete()
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php:178
2015-10-18 13:41:12 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete news model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php:178
2015-10-18 13:41:12 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(178): Kohana_ORM->delete()
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php:178
2015-10-18 16:30:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$json' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/classes/Controller/Admin/NewsTags.php [ 86 ] in file:line
2015-10-18 16:30:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-18 16:30:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$json' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/classes/Controller/Admin/NewsTags.php [ 86 ] in file:line
2015-10-18 16:30:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-18 17:20:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/news/news_edit could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-10-18 17:20:39 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('admin/news/news...')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/news/news...', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(67): Kohana_View::factory('admin/news/news...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-10-18 17:38:57 --- EMERGENCY: Kohana_Exception [ 0 ]: The newstags property does not exist in the Model_News class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:38:57 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('newstags', '1,4,7,10,13')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(153): Kohana_ORM->__set('newstags', '1,4,7,10,13')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(94): Model_News->save_news(Array)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:38:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The newstags property does not exist in the Model_News class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:38:58 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('newstags', '1,4,7,10,13')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(153): Kohana_ORM->__set('newstags', '1,4,7,10,13')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(94): Model_News->save_news(Array)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:39:06 --- EMERGENCY: Kohana_Exception [ 0 ]: The newstags property does not exist in the Model_News class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:39:06 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('newstags', '1,4,7,10,13')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(153): Kohana_ORM->__set('newstags', '1,4,7,10,13')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(94): Model_News->save_news(Array)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:39:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The newstags property does not exist in the Model_News class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:39:09 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('newstags', '')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(153): Kohana_ORM->__set('newstags', '')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(94): Model_News->save_news(Array)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:39:10 --- EMERGENCY: Kohana_Exception [ 0 ]: The newstags property does not exist in the Model_News class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:39:10 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('newstags', '')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(153): Kohana_ORM->__set('newstags', '')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(94): Model_News->save_news(Array)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:39:10 --- EMERGENCY: Kohana_Exception [ 0 ]: The newstags property does not exist in the Model_News class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:39:10 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('newstags', '')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(153): Kohana_ORM->__set('newstags', '')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(94): Model_News->save_news(Array)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:39:10 --- EMERGENCY: Kohana_Exception [ 0 ]: The newstags property does not exist in the Model_News class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:39:10 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('newstags', '')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(153): Kohana_ORM->__set('newstags', '')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(94): Model_News->save_news(Array)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:39:10 --- EMERGENCY: Kohana_Exception [ 0 ]: The newstags property does not exist in the Model_News class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:39:10 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('newstags', '')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(153): Kohana_ORM->__set('newstags', '')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(94): Model_News->save_news(Array)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:39:10 --- EMERGENCY: Kohana_Exception [ 0 ]: The newstags property does not exist in the Model_News class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 17:39:10 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('newstags', '')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(153): Kohana_ORM->__set('newstags', '')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(94): Model_News->save_news(Array)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 18:20:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_News' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2015-10-18 18:20:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-18 18:26:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'tags_id' in 'where clause' [ SELECT `newstagsid`.`new_id` AS `new_id`, `newstagsid`.`tag_id` AS `tag_id` FROM `news_tags_id` AS `newstagsid` WHERE `tags_id` = '7' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:26:20 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `newstag...', 'Model_NewsTagsI...', Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(126): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(41): Model_News->get_news_tag(1, '???????????????...')
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#11 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:26:21 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'tags_id' in 'where clause' [ SELECT `newstagsid`.`new_id` AS `new_id`, `newstagsid`.`tag_id` AS `tag_id` FROM `news_tags_id` AS `newstagsid` WHERE `tags_id` = '7' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:26:21 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `newstag...', 'Model_NewsTagsI...', Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(126): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(41): Model_News->get_news_tag(1, '???????????????...')
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#11 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:26:28 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'tags_id' in 'where clause' [ SELECT `newstagsid`.`new_id` AS `new_id`, `newstagsid`.`tag_id` AS `tag_id` FROM `news_tags_id` AS `newstagsid` WHERE `tags_id` = '7' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:26:28 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `newstag...', 'Model_NewsTagsI...', Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(126): Kohana_ORM->find_all()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(41): Model_News->get_news_tag(1, '???????????????...')
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#11 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:30:31 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'news_ids' in 'where clause' [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 AND `news_ids` IN ('38, 7') ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:30:31 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(145): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(41): Model_News->get_news_tag(1, '???????????????...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:32:24 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'news_ids' in 'where clause' [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 AND `news_ids` IN (38, 7) ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:32:24 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(144): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(41): Model_News->get_news_tag(1, '???????????????...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:32:25 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'news_ids' in 'where clause' [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 AND `news_ids` IN (38, 7) ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:32:25 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(144): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(41): Model_News->get_news_tag(1, '???????????????...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:32:25 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'news_ids' in 'where clause' [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 AND `news_ids` IN (38, 7) ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:32:25 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(144): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(41): Model_News->get_news_tag(1, '???????????????...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:34:45 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 AND `news_id` IN (38, 7) ORDER BY `publish_date` DESC  LIMIT 0, NULL ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:34:45 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(144): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(41): Model_News->get_news_tag(1, '???????????????...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:52:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') ORDER BY `publish_date` DESC  LIMIT 0, 10' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 AND `news_id` IN () ORDER BY `publish_date` DESC  LIMIT 0, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 18:52:26 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(144): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(41): Model_News->get_news_tag(1, '??????????')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 19:13:59 --- EMERGENCY: Kohana_Exception [ 0 ]: The newstags property does not exist in the Model_News class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 19:13:59 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('newstags', Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(178): Kohana_ORM->__set('newstags', Array)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(100): Model_News->save_news(Array)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 19:23:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The newstags property does not exist in the Model_News class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 19:23:49 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('newstags', Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(178): Kohana_ORM->__set('newstags', Array)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(112): Model_News->save_news(Array)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-10-18 19:29:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_NewsTagsId::addNewTags() ~ APPPATH/classes/Controller/Admin/News.php [ 126 ] in file:line
2015-10-18 19:29:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-18 19:30:02 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete newstagsid model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/NewsTagsId.php:16
2015-10-18 19:30:02 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/NewsTagsId.php(16): Kohana_ORM->delete()
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(126): Model_NewsTagsId->addNewTags('39', Array)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/NewsTagsId.php:16
2015-10-18 19:30:26 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete newstagsid model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/NewsTagsId.php:19
2015-10-18 19:30:26 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/NewsTagsId.php(19): Kohana_ORM->delete()
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(126): Model_NewsTagsId->addNewTags('39', Array)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/NewsTagsId.php:19
2015-10-18 19:30:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete newstagsid model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/NewsTagsId.php:18
2015-10-18 19:30:45 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/NewsTagsId.php(18): Kohana_ORM->delete()
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(126): Model_NewsTagsId->addNewTags('39', Array)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/NewsTagsId.php:18
2015-10-18 19:30:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete newstagsid model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/NewsTagsId.php:18
2015-10-18 19:30:59 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/NewsTagsId.php(18): Kohana_ORM->delete()
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(126): Model_NewsTagsId->addNewTags('39', Array)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/NewsTagsId.php:18
2015-10-18 19:31:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete() ~ APPPATH/classes/Model/NewsTagsId.php [ 20 ] in file:line
2015-10-18 19:31:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-18 19:32:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-10-18 19:32:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-18 19:34:31 --- EMERGENCY: Kohana_Exception [ 0 ]: The _table property does not exist in the Model_NewsTagsId class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-10-18 19:34:31 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('_table')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/NewsTagsId.php(15): Kohana_ORM->__get('_table')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(126): Model_NewsTagsId->addNewTags('39', Array)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-10-18 19:36:16 --- EMERGENCY: Kohana_Exception [ 0 ]: The 6 property does not exist in the Model_NewsTagsId class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-10-18 19:36:16 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('6')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/NewsTagsId.php(24): Kohana_ORM->__get('6')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/News.php(126): Model_NewsTagsId->addNewTags('39', Array)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_news_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-10-18 20:00:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/Admin/NewsTags.php [ 65 ] in file:line
2015-10-18 20:00:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-18 21:33:19 --- EMERGENCY: View_Exception [ 0 ]: The requested view news/news_index_ajax could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-10-18 21:33:19 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('news/news_index...')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('news/news_index...', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Ajax/News.php(25): Kohana_View::factory('news/news_index...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax_News->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-10-18 21:58:04 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10, 10' at line 1 [ SELECT SQL_CALC_FOUND_ROWS * FROM news WHERE `active` = 1 AND `razdel_id` IN (0, 1, 2) ORDER BY `publish_date` DESC  LIMIT -10, 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 21:58:04 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SQL_CALC...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(81): Kohana_Database_Query->execute()
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Ajax/News.php(19): Model_News->get_news_list(0, 0)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax_News->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 21:59:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/Controller/Ajax/News.php [ 18 ] in file:line
2015-10-18 21:59:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-18 21:59:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/Controller/Ajax/News.php [ 18 ] in file:line
2015-10-18 21:59:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-18 22:08:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/Controller/Ajax/News.php [ 44 ] in file:line
2015-10-18 22:08:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-18 22:08:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/Controller/Ajax/News.php [ 44 ] in file:line
2015-10-18 22:08:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-18 22:08:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/Controller/Ajax/News.php [ 44 ] in file:line
2015-10-18 22:08:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-18 22:11:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view news/news_index_ajax could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-10-18 22:11:52 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('news/news_index...')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('news/news_index...', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Ajax/News.php(35): Kohana_View::factory('news/news_index...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax_News->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137