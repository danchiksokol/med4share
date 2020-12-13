<?php defined('SYSPATH') or die('No direct script access.');//защита от прямого вызова

class Controller_Calendar extends Controller_Template_Main {

    public function action_index() {

        $this->template->title = 'Календарь событий';
        $this->template->description  = 'Календарь событий';
        $this->template->keywords  = 'Календарь событий';
        $this->template->show_not_reg   = 0; // Не показывать:)

            $data = ORM::factory('Calendar')
                ->where('razdel_id', '<', '3')
                ->and_where('active', '=', '1')
				//->and_where('date_begin', '>=', date('Y-m-d') )
                ->and_where('date_end', '>=', date('Y-m-d') )
                ->order_by('date_begin', 'ASC')
                ->find_all();

            $pastData = ORM::factory('Calendar')
                ->where('razdel_id', '<', '3')
                ->and_where('active', '=', '1')
                ->and_where('date_begin', '<', date('Y-m-d') )
                ->and_where('date_end', '<', date('Y-m-d') )
                ->order_by('date_begin', 'DESC')
                ->find_all();

            $this->template->breadcrumb = array( 'Календарь событий' );
            $this->template->content = View::factory('calendar/calendar')
                ->bind('pastData', $pastData) // прошедшие
                ->bind('data', $data)
                ->set('url_event_only', '/calendar')
            ;

        //Получаем страницы из БД
        $page = ORM::factory('Page')
            ->where('url', '=', 'calendar')
            ->find();

        if( ! empty($page->pagestatic) )
        {
            $this->template->page_id        = $page->pagestatic->id;
            $this->template->title 	        = $page->pagestatic->title;
            $this->template->description 	= $page->pagestatic->description;
            $this->template->keywords 	    = $page->pagestatic->keywords;
            $this->template->show_not_reg   = $page->pagestatic->show_not_reg;
        }
    }

    /**
     * Показываем одно событие
     * @throws Kohana_Exception
     */
    public function action_only() {

        $url = $this->request->param('event_url', false);

        $data = ORM::factory('Calendar')
            ->where('url', '=', $url)
            ->find();
        
        if($data->id > 0) {

            $this->template->breadcrumb = array( 'calendar' => 'Календарь событий', $data->event_title);
            $this->template->title = $data->title;
            $this->template->description  = $data->description;
            $this->template->keywords  = $data->keywords;

            $this->template->subject_id = $data->id;
            $this->template->is_comments = $data->is_comments;
            $this->template->show_not_reg   = $data->show_not_reg;

            $this->template->content = View::factory('calendar/calendar_event')->bind('data', $data);
        }


    }


}


?>