<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Experts extends Controller_Admin_Admin {
	
	public function before()
	{
		//echo 		$this->request->action();
		parent::before();
	}
	
	public function after()
	{
		
		$this->template->breadcrumb = array_merge( array('admin/experts' => 'Наши Эксперты'), $this->template->breadcrumb);
		parent::after();
	}
		
	public function action_index()
	{
	
	}
	
	public function action_experts()
	{
		$data = ORM::factory('Experts')
            ->order_by('familia', 'ASC')
            ->find_all();
		
		$content = View::factory('admin/experts/experts_list')
            //->bind('blocks', $blocks)
            ->bind('experts', $data)
            ;

        $this->template->content = $content;
	}

	public function action_add() {
		
		if(isset($_POST['familia'])) 
		{
            $model_experts = new Model_Experts();

            $model_experts->familia = Arr::get($_POST, 'familia', '');
            $model_experts->name = Arr::get($_POST, 'name', '');
            $model_experts->otchestvo   =  Arr::get($_POST, 'otchestvo', '');
            $model_experts->save();
            $last_insert_id = $model_experts->pk();

            Controller::redirect('admin/experts/edit/'.$last_insert_id);
        }
		
		$this->template->breadcrumb = array('admin/experts/add' => 'Добавление нового Эксперта'); 
        $this->template->content =  View::factory('admin/experts/experts_add');
		
	}
	
	public function action_edit() {
		
		$expert_id = $this->request->param('id');
		 
		$data = array();
        if($expert_id) {
            //Достаем контент
            $data = ORM::factory ('Experts', $expert_id);
        }
	
		
		// Для красивых checkbox
		$this->template->scripts[] = array('media/js/admin/bootstrap-toggle.js', array('type' => 'text/javascript', 'charset' => 'utf-8') );
		$this->template->styles[]  = array('media/css/bootstrap/bootstrap-toggle-buttons.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet'));
		
		$this->template->scripts[] = array('media/elfiles/js/elfinder.min.js', array('type' => 'text/javascript', 'charset' => 'utf-8'));
		$this->template->scripts[] = array('media/elfiles/js/i18n/elfinder.ru.js', array('type' => 'text/javascript', 'charset' => 'utf-8'));
		
		$this->template->styles[]  = array('media/elfiles/css/elfinder.full.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet'));
		$this->template->styles[]  = array('media/elfiles/css/theme.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet'));
		
		
		$this->template->styles[]  = array('media/plugins/bootstrap-chosen/bootstrap-chosen.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet'));
		$this->template->scripts[]  = array('media/plugins/bootstrap-chosen/chosen.jquery.js', array('type' => 'text/javascript', 'charset' => 'utf-8'));
		
		$this->template->breadcrumb = array('admin/experts/edit/'.$expert_id => 'Редактирование Эксперта');
        $this->template->content =  View::factory('admin/experts/experts_edit')
         							->bind('data', $data);
	}
	
	
	
    public function action_save() {
    	
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            //Парсим ответ
            parse_str( $this->request->post('post_data'), $post_data);

            //Модель работы со страница
            $model_experts = new Model_Experts();
            $validate = $model_experts->validate($post_data, true);

            //проверяем правильность ввода
            if( $validate->check()){
                //Если валидация ок, сохраняемся
                
                $expert_id = $model_experts->save_expert($post_data);

                // Добавляем ветку комментариев
               /* if($post_data['is_comments'] > 0 && $event_id > 0) {
                    if( Model::factory('Comment')->add_scope( 'Calendar', $event_id ) === false ) {
                        echo json_encode(array('status'=>false, 'message'=> 'Ошибка в реализации комментариев' ) );
                        return;
                    }
                }*/

                echo json_encode(array('status'=>true, 'message'=>'Успешно сохранено в БД'));
            } else {
                echo json_encode(array('status'=>false, 'message'=>$validate->errors('page_error')));
            }
            return;
        }
    }
	
	
	public function action_delete() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            ORM::factory('Experts', $this->request->post('experts_id') )->delete();

            echo json_encode(array('status'=>true) );
        }
    }
	
	 /**
     * Смена статуса на противоположный
     */
    public function action_active()
    {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            // Меняем статус на противоположный
            $active = DB::query(Database::UPDATE, "UPDATE `experts` SET active = NOT active, modified_date = '".date('Y-m-d H:i:s')."' WHERE id =". $this->request->post('experts_id'))->execute();
            echo json_encode(array('status'=>$active, 'modified_date' => date('Y-m-d H:i:s')));
        }
    }
	

}	