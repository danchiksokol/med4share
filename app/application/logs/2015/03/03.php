<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-03 01:44:57 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: comment/tree ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Photo.php:82
2015-03-03 01:44:57 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Photo.php(82): Kohana_Route::get('comment/tree')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Photo->action_test2()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Photo.php:82
2015-03-03 01:50:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Jelly' not found ~ APPPATH/classes/Controller/Comment.php [ 36 ] in file:line
2015-03-03 01:50:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-03 01:50:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Jelly' not found ~ APPPATH/classes/Controller/Comment.php [ 36 ] in file:line
2015-03-03 01:50:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-03 01:50:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Jelly' not found ~ APPPATH/classes/Controller/Comment.php [ 36 ] in file:line
2015-03-03 01:50:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-03 02:03:02 --- EMERGENCY: View_Exception [ 0 ]: The requested view frontend/form/blog/comment could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-03 02:03:02 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('frontend/form/b...')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('frontend/form/b...', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Comment.php(157): Kohana_View::factory('frontend/form/b...')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Comment->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Comment))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-03 02:03:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view comment could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-03 02:03:18 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('comment')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('comment', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Comment.php(157): Kohana_View::factory('comment')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Comment->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Comment))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-03 02:03:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view comment/list could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-03 02:03:51 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('comment/list')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('comment/list', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Comment.php(157): Kohana_View::factory('comment/list')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Comment->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Comment))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-03 02:03:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view comment/list could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-03 02:03:52 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('comment/list')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('comment/list', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Comment.php(157): Kohana_View::factory('comment/list')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Comment->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Comment))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-03 02:03:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view comment/list could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-03 02:03:52 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('comment/list')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('comment/list', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Comment.php(157): Kohana_View::factory('comment/list')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Comment->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Comment))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-03 02:03:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view comment/list could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-03 02:03:52 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(137): Kohana_View->set_filename('comment/list')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('comment/list', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Comment.php(157): Kohana_View::factory('comment/list')
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Comment->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Comment))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/View.php:137
2015-03-03 23:18:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_page' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-03 23:18:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-03 23:18:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:18:29 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('name', '???????????????...')
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(25): Kohana_ORM->__set('name', '???????????????...')
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:19:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Comment::insert_as_new_root() ~ APPPATH/classes/Model/Comment.php [ 26 ] in file:line
2015-03-03 23:19:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-03 23:20:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Comment::insert_as_new_root() ~ APPPATH/classes/Model/Comment.php [ 26 ] in file:line
2015-03-03 23:20:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-03 23:21:20 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:21:20 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(244): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(26): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:21:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:21:23 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(244): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(26): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:22:04 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:22:04 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(244): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(26): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:22:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:22:05 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(244): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(26): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:22:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:22:05 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(244): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(26): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:22:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:22:05 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(244): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(26): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:22:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:22:05 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(244): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(26): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:23:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Comment' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-03 23:23:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-03 23:24:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:24:58 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(244): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(27): Kohana_ORM_MPTT->make_root(NULL, 1)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:24:59 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:24:59 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(244): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(27): Kohana_ORM_MPTT->make_root(NULL, 1)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:24:59 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:24:59 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(244): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(27): Kohana_ORM_MPTT->make_root(NULL, 1)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:24:59 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:24:59 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(244): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(27): Kohana_ORM_MPTT->make_root(NULL, 1)
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:27:03 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:27:03 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(244): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(28): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:27:04 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:27:04 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(244): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(28): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:29:07 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:29:07 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(28): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:29:08 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:29:08 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(28): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:29:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:29:27 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(28): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:29:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:29:28 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(28): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:29:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:29:28 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('level', 1)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(28): Kohana_ORM->__set('level', 1)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:13 --- EMERGENCY: Kohana_Exception [ 0 ]: The parent_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:13 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('parent_id', 0)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(29): Kohana_ORM->__set('parent_id', 0)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The parent_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:25 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('parent_id', NULL)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(247): Kohana_ORM->__set('parent_id', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(28): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The parent_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:26 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('parent_id', NULL)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(247): Kohana_ORM->__set('parent_id', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(28): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The parent_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:27 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('parent_id', NULL)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(247): Kohana_ORM->__set('parent_id', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(28): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The parent_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:27 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('parent_id', NULL)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(247): Kohana_ORM->__set('parent_id', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(28): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The parent_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:27 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('parent_id', NULL)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(247): Kohana_ORM->__set('parent_id', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(28): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The parent_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:27 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('parent_id', NULL)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(247): Kohana_ORM->__set('parent_id', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(28): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The parent_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:27 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('parent_id', NULL)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(247): Kohana_ORM->__set('parent_id', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(28): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The parent_id property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702
2015-03-03 23:34:28 --- DEBUG: #0 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('parent_id', NULL)
#1 /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm-mptt/classes/Kohana/ORM/MPTT.php(247): Kohana_ORM->__set('parent_id', NULL)
#2 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Model/Comment.php(28): Kohana_ORM_MPTT->make_root()
#3 /home/lamo8/www/subdomain/med4share2.lamo8.ru/application/classes/Controller/Admin/Comments.php(33): Model_Comment->add_comment()
#4 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Controller.php(84): Controller_Admin_Comments->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#7 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/lamo8/www/subdomain/med4share2.lamo8.ru/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/lamo8/www/subdomain/med4share2.lamo8.ru/index.php(118): Kohana_Request->execute()
#10 {main} in /home/lamo8/www/subdomain/med4share2.lamo8.ru/modules/orm/classes/Kohana/ORM.php:702