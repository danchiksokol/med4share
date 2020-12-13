<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-07 00:49:06 --- EMERGENCY: Kohana_Exception [ 0 ]: The imagePreview property does not exist in the Model_Calendar class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php:702
2016-09-07 00:49:06 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('imagePreview', '')
#1 /home/u415209/med4share.ru/www/application/classes/Model/Experts.php(31): Kohana_ORM->__set('imagePreview', '')
#2 /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Experts.php(108): Model_Experts->save_event(Array)
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Admin_Experts->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Experts))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#9 {main} in /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php:702
2016-09-07 01:01:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save_expert() on a non-object ~ APPPATH/classes/Controller/Admin/Experts.php [ 108 ] in file:line
2016-09-07 01:01:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-07 01:01:48 --- EMERGENCY: Kohana_Exception [ 0 ]: The show_not_reg property does not exist in the Model_Experts class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php:702
2016-09-07 01:01:48 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('show_not_reg', 0)
#1 /home/u415209/med4share.ru/www/application/classes/Model/Experts.php(31): Kohana_ORM->__set('show_not_reg', 0)
#2 /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Experts.php(108): Model_Experts->save_expert(Array)
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Admin_Experts->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Experts))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#9 {main} in /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php:702
2016-09-07 01:03:07 --- EMERGENCY: Kohana_Exception [ 0 ]: The show_not_reg property does not exist in the Model_Experts class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php:702
2016-09-07 01:03:07 --- DEBUG: #0 /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('show_not_reg', 0)
#1 /home/u415209/med4share.ru/www/application/classes/Model/Experts.php(31): Kohana_ORM->__set('show_not_reg', 0)
#2 /home/u415209/med4share.ru/www/application/classes/Controller/Admin/Experts.php(109): Model_Experts->save_expert(Array)
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Admin_Experts->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Experts))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#9 {main} in /home/u415209/med4share.ru/www/modules/orm/classes/Kohana/ORM.php:702
2016-09-07 01:25:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Experts::get_news_only() ~ APPPATH/classes/Controller/Experts.php [ 47 ] in file:line
2016-09-07 01:25:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-07 01:25:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Experts::get_news_only() ~ APPPATH/classes/Controller/Experts.php [ 47 ] in file:line
2016-09-07 01:25:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-07 01:25:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Experts::get_news_only() ~ APPPATH/classes/Controller/Experts.php [ 47 ] in file:line
2016-09-07 01:25:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-07 01:25:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Experts::get_news_only() ~ APPPATH/classes/Controller/Experts.php [ 47 ] in file:line
2016-09-07 01:25:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-07 01:41:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Experts::get_news_only() ~ APPPATH/classes/Controller/Experts.php [ 46 ] in file:line
2016-09-07 01:41:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-07 01:41:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Experts::get_news_only() ~ APPPATH/classes/Controller/Experts.php [ 46 ] in file:line
2016-09-07 01:41:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-07 01:41:14 --- EMERGENCY: View_Exception [ 0 ]: The requested view experts/experts_list could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2016-09-07 01:41:14 --- DEBUG: #0 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('experts/experts...')
#1 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('experts/experts...', NULL)
#2 /home/u415209/med4share.ru/www/application/classes/Controller/Experts.php(31): Kohana_View::factory('experts/experts...')
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Experts->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Experts))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#9 {main} in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2016-09-07 01:41:14 --- EMERGENCY: View_Exception [ 0 ]: The requested view experts/experts_list could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2016-09-07 01:41:14 --- DEBUG: #0 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('experts/experts...')
#1 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('experts/experts...', NULL)
#2 /home/u415209/med4share.ru/www/application/classes/Controller/Experts.php(31): Kohana_View::factory('experts/experts...')
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Experts->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Experts))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#9 {main} in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2016-09-07 01:41:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view experts/experts_list could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2016-09-07 01:41:15 --- DEBUG: #0 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('experts/experts...')
#1 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('experts/experts...', NULL)
#2 /home/u415209/med4share.ru/www/application/classes/Controller/Experts.php(31): Kohana_View::factory('experts/experts...')
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Experts->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Experts))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#9 {main} in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2016-09-07 01:41:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view experts/experts_list could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2016-09-07 01:41:15 --- DEBUG: #0 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('experts/experts...')
#1 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('experts/experts...', NULL)
#2 /home/u415209/med4share.ru/www/application/classes/Controller/Experts.php(31): Kohana_View::factory('experts/experts...')
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Experts->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Experts))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#9 {main} in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2016-09-07 01:49:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/experts/experts_list.php [ 15 ] in file:line
2016-09-07 01:49:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-07 01:49:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/experts/experts_list.php [ 15 ] in file:line
2016-09-07 01:49:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-07 01:49:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/experts/experts_list.php [ 15 ] in file:line
2016-09-07 01:49:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-07 01:49:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/experts/experts_list.php [ 15 ] in file:line
2016-09-07 01:49:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-07 01:52:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Experts::get_news_only() ~ APPPATH/classes/Controller/Experts.php [ 46 ] in file:line
2016-09-07 01:52:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-07 01:52:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Experts::get_news_only() ~ APPPATH/classes/Controller/Experts.php [ 46 ] in file:line
2016-09-07 01:52:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-07 01:57:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view experts/experts_only could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2016-09-07 01:57:54 --- DEBUG: #0 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('experts/experts...')
#1 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('experts/experts...', NULL)
#2 /home/u415209/med4share.ru/www/application/classes/Controller/Experts.php(60): Kohana_View::factory('experts/experts...')
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Experts->action_experts_only()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Experts))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#9 {main} in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2016-09-07 01:57:55 --- EMERGENCY: View_Exception [ 0 ]: The requested view experts/experts_only could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137
2016-09-07 01:57:55 --- DEBUG: #0 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('experts/experts...')
#1 /home/u415209/med4share.ru/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('experts/experts...', NULL)
#2 /home/u415209/med4share.ru/www/application/classes/Controller/Experts.php(60): Kohana_View::factory('experts/experts...')
#3 /home/u415209/med4share.ru/www/system/classes/Kohana/Controller.php(84): Controller_Experts->action_experts_only()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Experts))
#6 /home/u415209/med4share.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u415209/med4share.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u415209/med4share.ru/www/index.php(118): Kohana_Request->execute()
#9 {main} in /home/u415209/med4share.ru/www/system/classes/Kohana/View.php:137