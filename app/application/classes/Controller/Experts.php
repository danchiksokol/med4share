<?php defined('SYSPATH') or die('No direct script access.');//защита от прямого вызова

class Controller_Experts extends Controller_Template_Main {


	public function before()
	{
		parent::before();
	}
	
	public function after()
	{
		parent::after();
	}

	/**
	 * Все эксперты
	 */
	public function action_index()
	{
		$letter = $this->request->param('letter');
		
		$get = $this->request->query();
		$search = false; 
		
		if( isset($get['search']) && strlen( $get['search'] ) > 0 ) { // Поиск активирован
			
			$search = $get['search'];
			
	       
             // Поиск по статьям
             $data['article'] = $query_result = DB::select('*')
                ->distinct(true)
                ->from('page_tree')
                ->join('page_static')->on('page_tree.id', '=', 'page_static.id')
                ->where('page_static.contentCenter', 'like', '%'.$search.'%')
                ->order_by('page_static.create', 'DESC')
                ->execute();   
	          
           
     		// Поиск по новостям
            $data['news'] = $query_result = DB::select('*')
                ->distinct(true)
                ->from('news')
                ->where('contentFull', 'like', '%'.$search.'%')
                ->order_by('publish_date', 'DESC')
                ->execute();
             

             // Поиск по calendar
            $data['calendar'] = $query_result = DB::select('*')
                ->distinct(true)
                ->from('calendar_events')
                ->where('text', 'like', '%'.$search.'%')
                ->order_by('date_begin', 'DESC')
                ->execute();  
                
			// Поиск по экспертам
        	$data['experts'] = $query_result = DB::select('*')
                ->distinct(true)
                ->from('experts')
                ->where('familia', 'like', '%'.$search.'%')
                ->or_where('name', 'like', '%'.$search.'%')
                ->or_where('otchestvo', 'like', '%'.$search.'%')
                ->or_where('content', 'like', '%'.$search.'%')
                ->or_where('contentFull', 'like', '%'.$search.'%')
                ->and_where('active', '=', 1)
                ->order_by('familia', 'ASC')
                ->execute();
	            
   
			
		}
		else {
			 $data = ORM::factory('Experts')
				->where('active', '=', 1)
				->and_where('familia', 'LIKE', $letter.'%')
				->and_where('active', '=', 1)
				->and_where('razdel_id', 'IN', array(0, 1, 2) )
	            ->order_by('familia', 'ASC')
	            ->find_all(); 
		}
		
		
		

		
		$alfabet = array();
		
		$dataAll = ORM::factory('Experts')
				->where('active', '=', 1)
				->and_where('razdel_id', 'IN', array(0, 1, 2) )
				->order_by('familia', 'ASC')
	            ->find_all(); 

        foreach ($dataAll as $val) {
			$alfabet[] = mb_substr($val->familia, 0, 1, 'utf-8');
			//	
		}
		$alfabet = array_unique($alfabet);
		//print_r($alfabet);    
	
            
           
		//Передаем всё в шаблон
		$this->template->breadcrumb = array( 'Наши эксперты' );
		
		$this->template->content = View::factory('experts/experts_list')
			->bind('data', $data)
			->bind('alfabet', $alfabet)
			->bind('letter', $letter)	
			->bind('search', $search)
			->set('url_expert_only', '/experts')
		;
        $this->template->url = 'experts';
    }


	
	/**
	 * Эксперт подробнее
	 */
	public function action_experts_only()
	{
		$expert_url = $this->request->param('expert_url');
		//Модель
		$db_data = Model::factory('Experts')->get_expert_only($expert_url);
				
		
		//Хлебные крошки
		$this->template->breadcrumb = array('experts' => 'Наши эксперты', $db_data['familia'].' '.$db_data['name'].' '.$db_data['otchestvo']);
		//Заголовки и т.п.
		$this->template->title = 'Наши эксперты '.$db_data['familia'].' '.$db_data['name'].' '.$db_data['otchestvo'];
		$this->template->description = 'Наши эксперты '.$db_data['familia'].' '.$db_data['name'].' '.$db_data['otchestvo'];
		$this->template->keywords = 'Наши эксперты '.$db_data['familia'].' '.$db_data['name'].' '.$db_data['otchestvo'];
        $this->template->subject_id = $db_data['id'];

		//Шаблон показа одного эксперта
		$this->template->content = View::factory('experts/experts_only')->bind('db_data', $db_data); 
	}
	
	
	
	
	
	
}
