<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Rheumatology_Search extends Controller_Template_Main
{

    public function before()
    {
        parent::before();
        //Получаем имя страницы
        $this->url = $this->request->param('url', 'search');

        // Проверяем, имеет ли пользователь
        if( ! Auth::instance()->logged_in('login') && ! in_array( $this->url, array('index', 'login', 'registracia') ) ) {
            $this->template->content = View::factory('user/login')->bind('url', $url);
        }
    }

    public function after()
    {
        $this->template->site_razdel_id = 3;
        $this->template->site_razdel = 'rheumatology';
        parent::after(); // TODO: Change the autogenerated stub
    }

    public function action_index()
    {
        $this->template->breadcrumb = array( 'rheumatology' => 'Ревматология', 'Поиск' );

        $get = $this->request->query();

        $value = isset($get['text']) && $get['text'] != '' ? $get['text'] : false; // Строка поиск с меню сверху или с футера

        if( $value !== false && ! isset($get['search']) && $get['search'] == '' ) {
            $search = array(
                'text' => $value,
                'article' => 1,
                'calendar' => 1,
                'news'     => 1,
                'experts' => 1
            );

        }
        elseif ( isset($get['search']) && $get['search']['text'] != '' ) {
            $search = $get['search'];
        }
        else {
            $search = array(
                'text' => false,
                'article' => 1,
                'calendar' => 1,
                'news'     => 1,
                'experts' => 1
            );
        }


        if( $search['text'] !== false) {

            if( $search['article'] == 1 ) { // Поиск по статьям

                $data['article'] = $query_result = DB::select('*')
                    ->distinct(true)
                    ->from('page_tree')
                    ->join('page_static')->on('page_tree.id', '=', 'page_static.id')
                    ->where('page_static.razdel_id', '=', '3')
                    ->and_where('page_static.contentCenter', 'like', '%'.$search['text'].'%')
                    ->order_by('page_static.create', 'DESC')
                    ->execute();
            }

            if( $search['news'] == 1 ) { // Поиск по новостям
                $data['news'] = $query_result = DB::select('*')
                    ->distinct(true)
                    ->from('news')
                    ->where('razdel_id', '=', '3')
                    ->and_where('contentFull', 'like', '%'.$search['text'].'%')
                    ->order_by('publish_date', 'DESC')
                    ->execute();
            }

            if( $search['calendar'] == 1 ) { // Поиск по calendar
                $data['calendar'] = $query_result = DB::select('*')
                    ->distinct(true)
                    ->from('calendar_events')
                    ->where('razdel_id', '=', '3')
                    ->and_where('text', 'like', '%'.$search['text'].'%')
                    ->order_by('date_begin', 'DESC')
                    ->execute();
            }

            if( $search['experts'] == 1 ){ // Поиск по экспертам
                $data['experts'] = $query_result = DB::select('*')
                    ->distinct(true)
                    ->from('experts')
                    ->where('familia', 'like', '%'.$search['text'].'%')
                    ->or_where('name', 'like', '%'.$search['text'].'%')
                    ->or_where('otchestvo', 'like', '%'.$search['text'].'%')
                    ->or_where('content', 'like', '%'.$search['text'].'%')
                    ->or_where('contentFull', 'like', '%'.$search['text'].'%')
                    ->and_where('razdel_id', '=', '3')
                    ->and_where('active', '=', 1)
                    ->order_by('familia', 'ASC')
                    ->execute();
            }


        } else {
            $data = false;
        }


        $this->template->content = View::factory('page/search')
            ->bind('data', $data)
            ->bind('search', $search)
            ->set('url_search_only', '/rheumatology/search')
            ->set( 'site_razdel', 'rheumatology' )
        ;

    }
}