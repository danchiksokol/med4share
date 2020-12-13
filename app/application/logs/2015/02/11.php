<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-11 01:23:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ APPPATH\classes\Controller\Admin\Menu.php [ 162 ] in file:line
2015-02-11 01:23:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 01:31:52 --- CRITICAL: Kohana_Exception [ 0 ]: Database type not defined in lev1 configuration ~ MODPATH\database\classes\Kohana\Database.php [ 70 ] in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:220
2015-02-11 01:31:52 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance('lev1')
#1 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Menu.php(162): Kohana_Database_Query->execute('lev1')
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Menu->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share2\modules\database\classes\Kohana\Database\Query.php:220
2015-02-11 02:10:43 --- CRITICAL: Kohana_Exception [ 0 ]: The date_event property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:702
2015-02-11 02:10:43 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('date_event', '2015-02-13')
#1 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Calendar.php(75): Kohana_ORM->__set('date_event', '2015-02-13')
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:702
2015-02-11 02:12:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting T_VARIABLE or '$' ~ APPPATH\classes\Controller\Admin\Calendar.php [ 75 ] in file:line
2015-02-11 02:12:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 02:13:03 --- CRITICAL: Kohana_Exception [ 0 ]: The date_event property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:702
2015-02-11 02:13:03 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('date_event', '2015-02-11')
#1 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Calendar.php(75): Kohana_ORM->__set('date_event', '2015-02-11')
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:702
2015-02-11 02:13:23 --- CRITICAL: Kohana_Exception [ 0 ]: The date_event property does not exist in the Model_Calendar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:702
2015-02-11 02:13:23 --- DEBUG: #0 C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('date_event', '2015-02-11')
#1 C:\OpenServer\domains\med4share2\application\classes\Controller\Admin\Calendar.php(75): Kohana_ORM->__set('date_event', '2015-02-11')
#2 C:\OpenServer\domains\med4share2\system\classes\Kohana\Controller.php(84): Controller_Admin_Calendar->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calendar))
#5 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\med4share2\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\med4share2\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\med4share2\modules\orm\classes\Kohana\ORM.php:702