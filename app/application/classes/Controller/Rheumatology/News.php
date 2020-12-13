<?php defined('SYSPATH') or die('No direct script access.');//защита от прямого вызова

class Controller_Rheumatology_News extends Controller_Template_Main {

	public function before()
	{
		parent::before();
	}

	public function after()
	{
		$this->template->site_razdel_id = 3;
		$this->template->site_razdel = 'rheumatology';
		parent::after();
	}

	/**
	 * Все новости /news/page1
	 */
	public function action_news_list()
	{



		$this->template->breadcrumb = array( 'rheumatology' => 'Ревматология', 'Новости' );
		//Текущая страница в url /page2
		$page_num = $this->request->param('page', 1); 
		$tagname 	= $this->request->param('tagname', false);


		$razdelId =  3; // 

		if( $tagname !== false ) { // Получаем новости по tagname
			$news_data = Model::factory('News')->get_news_tag($page_num, $tagname, $razdelId);
			if( $news_data === false ) { // Если не правильный тег
				$this->redirect('/rheumatology/news/');
			}
		}
		else { // Получаем все новости
			$razdel = 'all';
			$news_data = Model::factory('News')->get_news_list($page_num, $razdelId);
		}

		$count_news = $news_data['count_news'];
		unset($news_data['count_news']);

		//Получаем страницы из БД
		$page = ORM::factory('Page')
			->where('url', '=', 'news')
			->find();

		// Получаем теги из БД
		$newstags = ORM::factory('NewsTagsName')
			->where('razdel_id', 'IN', array(0, 3))
			->order_by('sort', 'ASC')
			->where('active', '=', '1')
			->find_all();

		if( ! empty($page->pagestatic) )
		{
			$this->template->page_id        = $page->pagestatic->id;
			$this->template->title 	        = $page->pagestatic->title;
			$this->template->description 	= $page->pagestatic->description;
			$this->template->keywords 	    = $page->pagestatic->keywords;
			$this->template->content 	    = $page->pagestatic->contentCenter;
			$this->template->show_not_reg   = $page->pagestatic->show_not_reg;
		}


		//Передаем всё в шаблон
		$this->template->content .= View::factory('news/news_list')
			->bind('page_num', $page_num)
			->bind('count_news', $count_news)
			->bind('news_data', $news_data)
			->bind('newstags', $newstags)
			->bind('tagname', $tagname)
			->bind('razdel', $razdel)
			
			->set('url_news_only', '/rheumatology/news')
			;

		$this->template->url = 'rheumatology/news';
	}



	/**
	 * Одна новость
	 */
	public function action_news_only()
	{
		$news_url = $this->request->param('news_url');
		//Модель
		$news_data = Model::factory('News')->get_news_only($news_url);
		//Достаем другие новости 
		//$other_data = Model::factory('News')->get_other_news($news_data['news_id'], 2);

		//Хлебные крошки
		$this->template->breadcrumb = array('rheumatology' => 'Ревматология', 'rheumatology/news' => 'Новости', $news_data['title']);
		//Заголовки и т.п.
		$this->template->title = $news_data['title'];
		$this->template->description = $news_data['description'];
		$this->template->keywords = $news_data['keywords'];
		$this->template->show_not_reg = $news_data['show_not_reg'];

		//Шаблон показа одной новости
		$this->template->content = View::factory('news/news_only')->bind('news_data', $news_data);
		$this->template->subject_id = $news_data['news_id'];

		$this->template->is_comments = $news_data['is_comments']; // Auth::instance()->logged_in('admin');

		//Шаблон показа другие новости
		//$this->template->contentLeft = View::factory('news/other_news')->bind('other_data', $other_data);
	}






}
