<?php defined('SYSPATH') or die('No direct script access.');//защита от прямого вызова
/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 26.02.2017
 * Time: 2:43
 */

class Controller_Rheumatology_Experts extends Controller_Template_Main
{
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
    
    public function action_index()
    {
        
        $letter = $this->request->param('letter');

        $get = $this->request->query();
        $search = false;

        $data = ORM::factory('Experts')
            ->where('active', '=', 1)
            ->and_where('familia', 'LIKE', $letter.'%')
            ->and_where('active', '=', 1)
            ->and_where('razdel_id', 'IN', array(0, 3) )
            ->order_by('familia', 'ASC')
            ->find_all();


        $alfabet = ORM::factory('Experts')->getALfabet( 3 );


        //Передаем всё в шаблон
        $this->template->breadcrumb = array( 'rheumatology' => 'Ревматология', 'Наши эксперты' );

        $this->template->content = View::factory('experts/experts_list')
            ->bind('data', $data)
            ->bind('alfabet', $alfabet)
            ->bind('letter', $letter)
            ->bind('search', $search)
            ->set('url_expert_only', '/rheumatology/experts')
        ;
        $this->template->url = 'news';
    }
 
    public function action_experts_only() {

        $expert_url = $this->request->param('expert_url');
        //Модель
        $db_data = Model::factory('Experts')->get_expert_only($expert_url);


        //Хлебные крошки
        $this->template->breadcrumb = array('rheumatology' => 'Ревматология', 'rheumatology/experts' => 'Наши эксперты', $db_data['familia'].' '.$db_data['name'].' '.$db_data['otchestvo']);
        //Заголовки и т.п.
        $this->template->title = 'Наши эксперты '.$db_data['familia'].' '.$db_data['name'].' '.$db_data['otchestvo'];
        $this->template->description = 'Наши эксперты '.$db_data['familia'].' '.$db_data['name'].' '.$db_data['otchestvo'];
        $this->template->keywords = 'Наши эксперты '.$db_data['familia'].' '.$db_data['name'].' '.$db_data['otchestvo'];
        $this->template->subject_id = $db_data['id'];

        //Шаблон показа одного эксперта
        $this->template->content = View::factory('experts/experts_only')->bind('db_data', $db_data);

    }
}