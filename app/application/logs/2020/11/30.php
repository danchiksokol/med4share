<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2020-11-30 08:54:25 --- EMERGENCY: Kohana_Exception [ 0 ]: Required route parameter not passed: tagname ~ SYSPATH/classes/Kohana/Route.php [ 572 ] in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:25 --- DEBUG: #0 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(554): Kohana_Route->{closure}('/<tagname>(/pag...', false)
#1 [internal function]: Kohana_Route->{closure}(Array)
#2 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(568): preg_replace_callback('#(?:<([a-zA-Z0-...', Object(Closure), 'news/tag(/<tagn...')
#3 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(581): Kohana_Route->{closure}('news/tag(/<tagn...', true)
#4 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(219): Kohana_Route->uri(Array)
#5 /home/h003309542/med4share.ru/docs/application/views/pagination/bootstrap.php(14): Kohana_Pagination->url(2)
#6 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#7 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#8 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(266): Kohana_View->render()
#9 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(361): Kohana_Pagination->render()
#10 /home/h003309542/med4share.ru/docs/application/views/news/news_list.php(111): Kohana_Pagination->__toString()
#11 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#12 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#13 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(228): Kohana_View->render()
#14 /home/h003309542/med4share.ru/docs/application/classes/Controller/News.php(70): Kohana_View->__toString()
#15 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#18 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/h003309542/med4share.ru/docs/index.php(121): Kohana_Request->execute()
#21 {main} in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:26 --- EMERGENCY: Kohana_Exception [ 0 ]: Required route parameter not passed: tagname ~ SYSPATH/classes/Kohana/Route.php [ 572 ] in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:26 --- DEBUG: #0 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(554): Kohana_Route->{closure}('/<tagname>(/pag...', false)
#1 [internal function]: Kohana_Route->{closure}(Array)
#2 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(568): preg_replace_callback('#(?:<([a-zA-Z0-...', Object(Closure), 'news/tag(/<tagn...')
#3 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(581): Kohana_Route->{closure}('news/tag(/<tagn...', true)
#4 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(219): Kohana_Route->uri(Array)
#5 /home/h003309542/med4share.ru/docs/application/views/pagination/bootstrap.php(14): Kohana_Pagination->url(2)
#6 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#7 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#8 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(266): Kohana_View->render()
#9 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(361): Kohana_Pagination->render()
#10 /home/h003309542/med4share.ru/docs/application/views/news/news_list.php(111): Kohana_Pagination->__toString()
#11 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#12 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#13 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(228): Kohana_View->render()
#14 /home/h003309542/med4share.ru/docs/application/classes/Controller/News.php(70): Kohana_View->__toString()
#15 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#18 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/h003309542/med4share.ru/docs/index.php(121): Kohana_Request->execute()
#21 {main} in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:27 --- EMERGENCY: Kohana_Exception [ 0 ]: Required route parameter not passed: tagname ~ SYSPATH/classes/Kohana/Route.php [ 572 ] in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:27 --- DEBUG: #0 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(554): Kohana_Route->{closure}('/<tagname>(/pag...', false)
#1 [internal function]: Kohana_Route->{closure}(Array)
#2 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(568): preg_replace_callback('#(?:<([a-zA-Z0-...', Object(Closure), 'news/tag(/<tagn...')
#3 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(581): Kohana_Route->{closure}('news/tag(/<tagn...', true)
#4 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(219): Kohana_Route->uri(Array)
#5 /home/h003309542/med4share.ru/docs/application/views/pagination/bootstrap.php(14): Kohana_Pagination->url(2)
#6 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#7 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#8 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(266): Kohana_View->render()
#9 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(361): Kohana_Pagination->render()
#10 /home/h003309542/med4share.ru/docs/application/views/news/news_list.php(111): Kohana_Pagination->__toString()
#11 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#12 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#13 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(228): Kohana_View->render()
#14 /home/h003309542/med4share.ru/docs/application/classes/Controller/News.php(70): Kohana_View->__toString()
#15 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#18 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/h003309542/med4share.ru/docs/index.php(121): Kohana_Request->execute()
#21 {main} in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:30 --- EMERGENCY: Kohana_Exception [ 0 ]: Required route parameter not passed: tagname ~ SYSPATH/classes/Kohana/Route.php [ 572 ] in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:30 --- DEBUG: #0 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(554): Kohana_Route->{closure}('/<tagname>(/pag...', false)
#1 [internal function]: Kohana_Route->{closure}(Array)
#2 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(568): preg_replace_callback('#(?:<([a-zA-Z0-...', Object(Closure), 'news/tag(/<tagn...')
#3 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(581): Kohana_Route->{closure}('news/tag(/<tagn...', true)
#4 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(219): Kohana_Route->uri(Array)
#5 /home/h003309542/med4share.ru/docs/application/views/pagination/bootstrap.php(14): Kohana_Pagination->url(2)
#6 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#7 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#8 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(266): Kohana_View->render()
#9 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(361): Kohana_Pagination->render()
#10 /home/h003309542/med4share.ru/docs/application/views/news/news_list.php(111): Kohana_Pagination->__toString()
#11 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#12 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#13 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(228): Kohana_View->render()
#14 /home/h003309542/med4share.ru/docs/application/classes/Controller/News.php(70): Kohana_View->__toString()
#15 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#18 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/h003309542/med4share.ru/docs/index.php(121): Kohana_Request->execute()
#21 {main} in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:32 --- EMERGENCY: Kohana_Exception [ 0 ]: Required route parameter not passed: tagname ~ SYSPATH/classes/Kohana/Route.php [ 572 ] in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:32 --- DEBUG: #0 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(554): Kohana_Route->{closure}('/<tagname>(/pag...', false)
#1 [internal function]: Kohana_Route->{closure}(Array)
#2 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(568): preg_replace_callback('#(?:<([a-zA-Z0-...', Object(Closure), 'news/tag(/<tagn...')
#3 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(581): Kohana_Route->{closure}('news/tag(/<tagn...', true)
#4 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(219): Kohana_Route->uri(Array)
#5 /home/h003309542/med4share.ru/docs/application/views/pagination/bootstrap.php(14): Kohana_Pagination->url(2)
#6 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#7 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#8 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(266): Kohana_View->render()
#9 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(361): Kohana_Pagination->render()
#10 /home/h003309542/med4share.ru/docs/application/views/news/news_list.php(111): Kohana_Pagination->__toString()
#11 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#12 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#13 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(228): Kohana_View->render()
#14 /home/h003309542/med4share.ru/docs/application/classes/Controller/News.php(70): Kohana_View->__toString()
#15 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#18 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/h003309542/med4share.ru/docs/index.php(121): Kohana_Request->execute()
#21 {main} in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:35 --- EMERGENCY: Kohana_Exception [ 0 ]: Required route parameter not passed: tagname ~ SYSPATH/classes/Kohana/Route.php [ 572 ] in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:35 --- DEBUG: #0 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(554): Kohana_Route->{closure}('/<tagname>(/pag...', false)
#1 [internal function]: Kohana_Route->{closure}(Array)
#2 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(568): preg_replace_callback('#(?:<([a-zA-Z0-...', Object(Closure), 'news/tag(/<tagn...')
#3 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(581): Kohana_Route->{closure}('news/tag(/<tagn...', true)
#4 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(219): Kohana_Route->uri(Array)
#5 /home/h003309542/med4share.ru/docs/application/views/pagination/bootstrap.php(14): Kohana_Pagination->url(2)
#6 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#7 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#8 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(266): Kohana_View->render()
#9 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(361): Kohana_Pagination->render()
#10 /home/h003309542/med4share.ru/docs/application/views/news/news_list.php(111): Kohana_Pagination->__toString()
#11 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#12 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#13 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(228): Kohana_View->render()
#14 /home/h003309542/med4share.ru/docs/application/classes/Controller/News.php(70): Kohana_View->__toString()
#15 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#18 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/h003309542/med4share.ru/docs/index.php(121): Kohana_Request->execute()
#21 {main} in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:38 --- EMERGENCY: Kohana_Exception [ 0 ]: Required route parameter not passed: tagname ~ SYSPATH/classes/Kohana/Route.php [ 572 ] in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:38 --- DEBUG: #0 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(554): Kohana_Route->{closure}('/<tagname>(/pag...', false)
#1 [internal function]: Kohana_Route->{closure}(Array)
#2 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(568): preg_replace_callback('#(?:<([a-zA-Z0-...', Object(Closure), 'news/tag(/<tagn...')
#3 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(581): Kohana_Route->{closure}('news/tag(/<tagn...', true)
#4 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(219): Kohana_Route->uri(Array)
#5 /home/h003309542/med4share.ru/docs/application/views/pagination/bootstrap.php(14): Kohana_Pagination->url(2)
#6 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#7 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#8 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(266): Kohana_View->render()
#9 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(361): Kohana_Pagination->render()
#10 /home/h003309542/med4share.ru/docs/application/views/news/news_list.php(111): Kohana_Pagination->__toString()
#11 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#12 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#13 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(228): Kohana_View->render()
#14 /home/h003309542/med4share.ru/docs/application/classes/Controller/News.php(70): Kohana_View->__toString()
#15 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#18 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/h003309542/med4share.ru/docs/index.php(121): Kohana_Request->execute()
#21 {main} in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:38 --- EMERGENCY: Kohana_Exception [ 0 ]: Required route parameter not passed: tagname ~ SYSPATH/classes/Kohana/Route.php [ 572 ] in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:38 --- DEBUG: #0 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(554): Kohana_Route->{closure}('/<tagname>(/pag...', false)
#1 [internal function]: Kohana_Route->{closure}(Array)
#2 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(568): preg_replace_callback('#(?:<([a-zA-Z0-...', Object(Closure), 'news/tag(/<tagn...')
#3 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(581): Kohana_Route->{closure}('news/tag(/<tagn...', true)
#4 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(219): Kohana_Route->uri(Array)
#5 /home/h003309542/med4share.ru/docs/application/views/pagination/bootstrap.php(14): Kohana_Pagination->url(2)
#6 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#7 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#8 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(266): Kohana_View->render()
#9 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(361): Kohana_Pagination->render()
#10 /home/h003309542/med4share.ru/docs/application/views/news/news_list.php(111): Kohana_Pagination->__toString()
#11 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#12 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#13 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(228): Kohana_View->render()
#14 /home/h003309542/med4share.ru/docs/application/classes/Controller/News.php(70): Kohana_View->__toString()
#15 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#18 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/h003309542/med4share.ru/docs/index.php(121): Kohana_Request->execute()
#21 {main} in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:38 --- EMERGENCY: Kohana_Exception [ 0 ]: Required route parameter not passed: tagname ~ SYSPATH/classes/Kohana/Route.php [ 572 ] in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:38 --- DEBUG: #0 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(554): Kohana_Route->{closure}('/<tagname>(/pag...', false)
#1 [internal function]: Kohana_Route->{closure}(Array)
#2 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(568): preg_replace_callback('#(?:<([a-zA-Z0-...', Object(Closure), 'news/tag(/<tagn...')
#3 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(581): Kohana_Route->{closure}('news/tag(/<tagn...', true)
#4 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(219): Kohana_Route->uri(Array)
#5 /home/h003309542/med4share.ru/docs/application/views/pagination/bootstrap.php(14): Kohana_Pagination->url(2)
#6 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#7 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#8 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(266): Kohana_View->render()
#9 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(361): Kohana_Pagination->render()
#10 /home/h003309542/med4share.ru/docs/application/views/news/news_list.php(111): Kohana_Pagination->__toString()
#11 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#12 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#13 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(228): Kohana_View->render()
#14 /home/h003309542/med4share.ru/docs/application/classes/Controller/News.php(70): Kohana_View->__toString()
#15 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#18 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/h003309542/med4share.ru/docs/index.php(121): Kohana_Request->execute()
#21 {main} in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:41 --- EMERGENCY: Kohana_Exception [ 0 ]: Required route parameter not passed: tagname ~ SYSPATH/classes/Kohana/Route.php [ 572 ] in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:41 --- DEBUG: #0 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(554): Kohana_Route->{closure}('/<tagname>(/pag...', false)
#1 [internal function]: Kohana_Route->{closure}(Array)
#2 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(568): preg_replace_callback('#(?:<([a-zA-Z0-...', Object(Closure), 'news/tag(/<tagn...')
#3 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(581): Kohana_Route->{closure}('news/tag(/<tagn...', true)
#4 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(219): Kohana_Route->uri(Array)
#5 /home/h003309542/med4share.ru/docs/application/views/pagination/bootstrap.php(14): Kohana_Pagination->url(2)
#6 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#7 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#8 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(266): Kohana_View->render()
#9 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(361): Kohana_Pagination->render()
#10 /home/h003309542/med4share.ru/docs/application/views/news/news_list.php(111): Kohana_Pagination->__toString()
#11 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#12 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#13 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(228): Kohana_View->render()
#14 /home/h003309542/med4share.ru/docs/application/classes/Controller/News.php(70): Kohana_View->__toString()
#15 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#18 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/h003309542/med4share.ru/docs/index.php(121): Kohana_Request->execute()
#21 {main} in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:42 --- EMERGENCY: Kohana_Exception [ 0 ]: Required route parameter not passed: tagname ~ SYSPATH/classes/Kohana/Route.php [ 572 ] in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 08:54:42 --- DEBUG: #0 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(554): Kohana_Route->{closure}('/<tagname>(/pag...', false)
#1 [internal function]: Kohana_Route->{closure}(Array)
#2 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(568): preg_replace_callback('#(?:<([a-zA-Z0-...', Object(Closure), 'news/tag(/<tagn...')
#3 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php(581): Kohana_Route->{closure}('news/tag(/<tagn...', true)
#4 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(219): Kohana_Route->uri(Array)
#5 /home/h003309542/med4share.ru/docs/application/views/pagination/bootstrap.php(14): Kohana_Pagination->url(2)
#6 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#7 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#8 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(266): Kohana_View->render()
#9 /home/h003309542/med4share.ru/docs/modules/pagination/classes/Kohana/Pagination.php(361): Kohana_Pagination->render()
#10 /home/h003309542/med4share.ru/docs/application/views/news/news_list.php(111): Kohana_Pagination->__toString()
#11 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(61): include('/home/h00330954...')
#12 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/h00330954...', Array)
#13 /home/h003309542/med4share.ru/docs/system/classes/Kohana/View.php(228): Kohana_View->render()
#14 /home/h003309542/med4share.ru/docs/application/classes/Controller/News.php(70): Kohana_View->__toString()
#15 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Controller.php(84): Controller_News->action_news_list()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#18 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/h003309542/med4share.ru/docs/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/h003309542/med4share.ru/docs/index.php(121): Kohana_Request->execute()
#21 {main} in /home/h003309542/med4share.ru/docs/system/classes/Kohana/Route.php:554
2020-11-30 11:05:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Date::ru_month() ~ APPPATH/views/calendar/calendar.php [ 39 ] in file:line
2020-11-30 11:05:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line