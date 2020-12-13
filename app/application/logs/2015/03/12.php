<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-12 02:10:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Calendar' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 02:10:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 11:21:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/views/news/news_list.php [ 24 ] in file:line
2015-03-12 11:21:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 11:21:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/views/news/news_list.php [ 24 ] in file:line
2015-03-12 11:21:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 11:21:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/views/news/news_list.php [ 24 ] in file:line
2015-03-12 11:21:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 11:21:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/views/news/news_list.php [ 24 ] in file:line
2015-03-12 11:21:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 11:26:16 --- EMERGENCY: View_Exception [ 0 ]: The requested view news/news_list could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-12 11:26:16 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('news/news_list')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('news/news_list', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/News.php(47): Kohana_View::factory('news/news_list')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-12 12:56:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/left_menu could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-12 12:56:17 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('admin/left_menu')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/left_menu', Array)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Template/Admin.php(28): Kohana_View::factory('admin/left_menu', Array)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Admin.php(37): Controller_Template_Admin->before()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(69): Controller_Admin_Admin->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Admin))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-12 18:18:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_CommentType' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2015-03-12 18:18:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 18:51:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_CommentType' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2015-03-12 18:51:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 18:52:09 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Comment as array ~ APPPATH/classes/Model/CommentType.php [ 32 ] in file:line
2015-03-12 18:52:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 18:52:11 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Comment as array ~ APPPATH/classes/Model/CommentType.php [ 32 ] in file:line
2015-03-12 18:52:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 18:52:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_CommentType' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2015-03-12 18:52:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 18:59:13 --- EMERGENCY: Kohana_Exception [ 0 ]: The model property does not exist in the Model_CommentType class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 18:59:13 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('model')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM->__get('model')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 18:59:14 --- EMERGENCY: Kohana_Exception [ 0 ]: The model property does not exist in the Model_CommentType class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 18:59:14 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('model')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM->__get('model')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:08 --- EMERGENCY: Kohana_Exception [ 0 ]: The scope_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:08 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('scope_id')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('scope_id')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('scope_id')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The scope_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:09 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('scope_id')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('scope_id')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('scope_id')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The scope_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:09 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('scope_id')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('scope_id')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('scope_id')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The scope_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:09 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('scope_id')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('scope_id')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('scope_id')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Comment' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 19:04:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 19:04:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:22 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('commenttype')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:23 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('commenttype')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:23 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('commenttype')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:23 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('commenttype')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:04:25 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('commenttype')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:18 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_CommentType class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:18 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(29): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:19 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_CommentType class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:19 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(29): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_CommentType class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:29 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(29): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_CommentType class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:30 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(29): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_CommentType class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:30 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(29): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_CommentType class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:30 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(29): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_CommentType class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:37 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(29): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_CommentType class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:37 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('comment')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(29): Kohana_ORM->__get('comment')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_CommentType class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:38 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('comment')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(29): Kohana_ORM->__get('comment')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:45 --- EMERGENCY: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_CommentType class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:07:45 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('comment')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(29): Kohana_ORM->__get('comment')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:09:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The comments property does not exist in the Model_CommentType class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:09:55 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(32): Kohana_ORM->__get('comments')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:09:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The comments property does not exist in the Model_CommentType class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:09:56 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(32): Kohana_ORM->__get('comments')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:09:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The comments property does not exist in the Model_CommentType class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:09:56 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(32): Kohana_ORM->__get('comments')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:19:36 --- EMERGENCY: Kohana_Exception [ 0 ]: The comments property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:19:36 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('comments')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Kohana_ORM_MPTT->__get('comments')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:19:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The comments property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:19:37 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('comments')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('comments')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Kohana_ORM_MPTT->__get('comments')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:21:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH/classes/Controller/Admin/Comments.php [ 30 ] in file:line
2015-03-12 19:21:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 19:28:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The CommentType property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:28:49 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('CommentType')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('CommentType')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('CommentType')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:29:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:29:58 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('commenttype')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:29:59 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:29:59 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('commenttype')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:30:00 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:30:00 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('commenttype')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:30:00 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:30:00 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('commenttype')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:30:00 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:30:00 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('commenttype')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:30:00 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:30:00 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('commenttype')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:30:01 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:30:01 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('commenttype')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:30:13 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:30:13 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(30): Kohana_ORM_MPTT->__get('commenttype')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:31:40 --- EMERGENCY: Kohana_Exception [ 0 ]: The scope_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:31:40 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('scope_id')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('scope_id')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Kohana_ORM_MPTT->__get('scope_id')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:31:41 --- EMERGENCY: Kohana_Exception [ 0 ]: The scope_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:31:41 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('scope_id')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('scope_id')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Kohana_ORM_MPTT->__get('scope_id')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:31:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The scope_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:31:42 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('scope_id')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('scope_id')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Kohana_ORM_MPTT->__get('scope_id')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:31:45 --- EMERGENCY: Kohana_Exception [ 0 ]: The scope_ property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:31:45 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('scope_')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('scope_')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Kohana_ORM_MPTT->__get('scope_')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:35:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:35:29 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(43): Kohana_ORM_MPTT->__get('commenttype')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:35:31 --- EMERGENCY: Kohana_Exception [ 0 ]: The commenttype property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:35:31 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('commenttype')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(1019): Kohana_ORM->__get('commenttype')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(43): Kohana_ORM_MPTT->__get('commenttype')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:38:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Controller/Admin/Comments.php [ 38 ] in file:line
2015-03-12 19:38:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 19:38:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Controller/Admin/Comments.php [ 38 ] in file:line
2015-03-12 19:38:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 19:48:05 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'news_url' in 'where clause' [ SELECT `news`.`news_id` AS `news_id`, `news`.`title` AS `title`, `news`.`type` AS `type`, `news`.`url` AS `url`, `news`.`description` AS `description`, `news`.`keywords` AS `keywords`, `news`.`content` AS `content`, `news`.`contentFull` AS `contentFull`, `news`.`publish_date` AS `publish_date`, `news`.`active` AS `active`, `news`.`view_main` AS `view_main`, `news`.`create_date` AS `create_date`, `news`.`modified_date` AS `modified_date`, `news`.`author_id` AS `author_id`, `news`.`is_comments` AS `is_comments` FROM `news` AS `news` WHERE `news_url` = '17' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-03-12 19:48:05 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `news`.`...', false, Array)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(38): Kohana_ORM->find('url')
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(37): Model_News->get_url4id('17')
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#11 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/database/classes/Kohana/Database/Query.php:251
2015-03-12 19:49:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_News' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 19:49:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 19:50:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_News' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 19:50:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 19:51:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_News' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 19:51:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 19:51:07 --- EMERGENCY: Kohana_Exception [ 0 ]: The news_url property does not exist in the Model_News class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:51:07 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('news_url')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(40): Kohana_ORM->__get('news_url')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(37): Model_News->get_url4id('17')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:51:07 --- EMERGENCY: Kohana_Exception [ 0 ]: The news_url property does not exist in the Model_News class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:51:07 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('news_url')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(40): Kohana_ORM->__get('news_url')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(37): Model_News->get_url4id('17')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:51:08 --- EMERGENCY: Kohana_Exception [ 0 ]: The news_url property does not exist in the Model_News class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:51:08 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('news_url')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/News.php(40): Kohana_ORM->__get('news_url')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(37): Model_News->get_url4id('17')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:603
2015-03-12 19:51:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_News::get_news_only() ~ APPPATH/classes/Controller/News.php [ 61 ] in file:line
2015-03-12 19:51:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 19:51:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_News::get_news_only() ~ APPPATH/classes/Controller/News.php [ 61 ] in file:line
2015-03-12 19:51:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 19:53:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_News' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 19:53:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 20:14:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/comment/list could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-12 20:14:09 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('admin/comment/l...')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/comment/l...', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(61): Kohana_View::factory('admin/comment/l...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-12 20:16:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/admin/comment/list.php [ 31 ] in file:line
2015-03-12 20:16:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 20:16:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/admin/comment/list.php [ 31 ] in file:line
2015-03-12 20:16:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 20:16:53 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/comment/list could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-12 20:16:53 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('admin/comment/l...')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/comment/l...', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(61): Kohana_View::factory('admin/comment/l...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-12 20:33:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Date::ru_month() ~ APPPATH/views/news/news_only.php [ 9 ] in file:line
2015-03-12 20:33:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 20:35:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view news/news_index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-12 20:35:39 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('news/news_index')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('news/news_index', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/template/main.php(226): Kohana_View::factory('news/news_index')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Template/Main.php(57): Kohana_Controller_Template->after()
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/PageStatic.php(18): Controller_Template_Main->after()
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_PageStatic->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#11 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#14 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-12 20:35:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view news/news_index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-12 20:35:45 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('news/news_index')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('news/news_index', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/views/template/main.php(226): Kohana_View::factory('news/news_index')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(61): include('/home/lamo8/www...')
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/lamo8/www...', Array)
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Template/Main.php(57): Kohana_Controller_Template->after()
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/PageStatic.php(18): Controller_Template_Main->after()
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(87): Controller_PageStatic->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#11 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#14 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-12 20:41:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 20:41:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 20:41:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 20:41:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 20:41:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 20:41:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 20:41:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 20:41:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 20:41:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 20:41:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 20:54:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 20:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 21:26:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 21:26:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 21:27:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 21:27:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 21:27:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 21:27:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 21:28:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 21:28:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-12 21:28:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-12 21:28:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line