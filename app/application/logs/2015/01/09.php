<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-09 22:32:09 --- CRITICAL: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php:75
2015-01-09 22:32:09 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('med4share.lamo8...')
#1 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('page_tree')
#4 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\OpenServer\domains\med4share\modules\orm-mptt\classes\Kohana\ORM\MPTT.php(61): Kohana_ORM->__construct(NULL)
#8 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM_MPTT->__construct(NULL)
#9 C:\OpenServer\domains\med4share\application\classes\Controller\PageStatic.php(31): Kohana_ORM::factory('Page')
#10 C:\OpenServer\domains\med4share\application\classes\Controller\PageStatic.php(13): Controller_PageStatic->get_static_content()
#11 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(69): Controller_PageStatic->before()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#14 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php:75
2015-01-09 22:33:26 --- CRITICAL: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php:75
2015-01-09 22:33:26 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('med4share.lamo8...')
#1 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('page_tree')
#4 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\OpenServer\domains\med4share\modules\orm-mptt\classes\Kohana\ORM\MPTT.php(61): Kohana_ORM->__construct(NULL)
#8 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM_MPTT->__construct(NULL)
#9 C:\OpenServer\domains\med4share\application\classes\Controller\PageStatic.php(31): Kohana_ORM::factory('Page')
#10 C:\OpenServer\domains\med4share\application\classes\Controller\PageStatic.php(13): Controller_PageStatic->get_static_content()
#11 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(69): Controller_PageStatic->before()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#14 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php:75
2015-01-09 22:33:43 --- CRITICAL: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php:75
2015-01-09 22:33:43 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('med4share')
#1 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('page_tree')
#4 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\OpenServer\domains\med4share\modules\orm-mptt\classes\Kohana\ORM\MPTT.php(61): Kohana_ORM->__construct(NULL)
#8 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM_MPTT->__construct(NULL)
#9 C:\OpenServer\domains\med4share\application\classes\Controller\PageStatic.php(31): Kohana_ORM::factory('Page')
#10 C:\OpenServer\domains\med4share\application\classes\Controller\PageStatic.php(13): Controller_PageStatic->get_static_content()
#11 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(69): Controller_PageStatic->before()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#14 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php:75
2015-01-09 22:33:46 --- CRITICAL: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php:75
2015-01-09 22:33:46 --- DEBUG: #0 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('med4share')
#1 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('page_tree')
#4 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\OpenServer\domains\med4share\modules\orm-mptt\classes\Kohana\ORM\MPTT.php(61): Kohana_ORM->__construct(NULL)
#8 C:\OpenServer\domains\med4share\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM_MPTT->__construct(NULL)
#9 C:\OpenServer\domains\med4share\application\classes\Controller\PageStatic.php(31): Kohana_ORM::factory('Page')
#10 C:\OpenServer\domains\med4share\application\classes\Controller\PageStatic.php(13): Controller_PageStatic->get_static_content()
#11 C:\OpenServer\domains\med4share\system\classes\Kohana\Controller.php(69): Controller_PageStatic->before()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_PageStatic))
#14 C:\OpenServer\domains\med4share\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\med4share\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\med4share\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\med4share\modules\database\classes\Kohana\Database\MySQL.php:75