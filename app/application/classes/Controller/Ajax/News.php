<?php defined('SYSPATH') or die('No direct script access.');//защита от прямого вызова


/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 14.10.2015
 * Time: 2:03
 */

class Controller_Ajax_News extends Controller_Ajax
{
    public function action_index() {

        $page_num = intval($this->request->post('page'));
        $page_num  = $page_num < 1 ? 1 : $page_num;

        $razdel = $this->request->post('razdel');
        $razdel_id = 0;

        if( $razdel == 'rheumatology' ) { // Раздел Ревматология
            $razdel_id = 3;
        }
        else if( $razdel == 'neurology' ) { // Раздел Неврология
            $razdel_id = 4;
        }

        $news_data = Model::factory('News')->get_news_index( $page_num, $razdel_id);


        $count_news = $news_data['count_news']; //Общее кол-во новостей
        unset( $news_data['count_news'] );
        

        $count_page = floor(  $count_news / Kohana::$config->load('website.news.count_index_page') ) ;

        $url_news_only = '/news';
        
        if( $razdel_id == 3 ){
            $url_news_only = '/rheumatology/news';
        }
        else if( $razdel_id == 4 ){
            $url_news_only = '/neurology/news';
        }

        $html = View::factory('news/news_index_ajax')
            ->set('news_data', $news_data )
            ->set('page_num', $page_num)
            ->set('count_page', $count_page)
            ->set('url_news_only', $url_news_only)
            ->set()
            ->render();
        //$html = $this->response->body($view);

        echo $html;
        die();
    }
}