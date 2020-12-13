<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_News extends Controller_Admin_Admin {
	
	public function before()
	{
		//echo 		$this->request->action();
		parent::before();
	}
	
	public function after()
	{
		$this->template->breadcrumb = array_merge( array('admin/news_list' => 'Список новостей'), $this->template->breadcrumb);
		parent::after();
	}
		
	public function action_index()
	{
		echo "action index";
	}
	
	/**
	 * Список новостей
	 */
	public function action_news_list()
	{
	 
		$data = ORM::factory('News')
            ->order_by('publish_date', 'DESC')
            ->find_all();

		$content = View::factory('admin/news/news_list')
					->bind('news', $data);
					
		$this->template->content = $content;
	}
	
	/**
	 * Открытие новости для редактирования
	 */
	public function action_news_edit() 
	{
        //$files = Request::factory('files/list')->execute();

		$news_id = (int) $this->request->param('id');

		if($news_id > 0)
		{
			$this->template->breadcrumb = array('admin/news_edit/'.$news_id => 'Редактирование новости');
			$data = ORM::factory('News', $news_id);


			$newstags = ORM::factory('NewsTagsName')
				->order_by('tag_name', 'ASC')
				->find_all();

			// Какие теги уже выбраны для данной новости
			$newsTagsIds = ORM::factory('NewsTagsId')
				->where('new_id', '=', $news_id)
				->find_all();

			$news_tags_ids = array();
			foreach( $newsTagsIds as $val ) {
				$select_tags_ids[] = $val->tag_id;
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

            $content = View::factory('admin/news/news_edit')
						->bind('news', $data)
						->bind('newstags', $newstags)
						->bind('select_tags_ids', $select_tags_ids)
			;
					
			$this->template->content = $content;
		}
	}
	
	/**
	 * Созранение новости ajax
	 */
	public function action_news_save()
	{
		if($this->request->is_ajax() && $this->request->post()){

            //Request::factory('files/upload')->execute();

			$this->auto_render = false;
			//Парсим ответ
			parse_str( $this->request->post('post_data'), $post_data);

			$newstags = $post_data['newstags'];
			unset($post_data['newstags']);

            //Модель работы с новостями
            $model_news = new Model_News();
            $validate = $model_news->validate($post_data, true);

            //проверяем правильность ввода
            if( $validate->check()){
                //Если валидация ок, сохраняемся
                $news_id = $model_news->save_news($post_data);

                // Добавляем ветку комментариев
                if($post_data['is_comments'] > 0 && $news_id > 0) {
                    if( Model::factory('Comment')->add_scope( 'News', $news_id ) === false ) {
                        echo json_encode(array('status'=>false, 'message'=> 'Ошибка в реализации комментариев' ) );
                        return;
                    }
                }
				// Теги новости
				$model_tags = new Model_NewsTagsId();
				$model_tags->addNewTags($news_id, $newstags);


				echo json_encode(array('status'=>true, 'message'=>'Успешно сохранено в БД'));
            } else {
                echo json_encode(array('status'=>false, 'message'=>$validate->errors('page_error')));
            }
			return;
	 
		}
	}

	/**
	 * Добавляем новую новость
	 */
	 public function action_news_add()
	 {
	 	if($this->request->is_ajax() && $this->request->post()){
			$this->auto_render = false;
			//Название новости
			$post_data['title'] = $this->request->post('news_title');	
			
			$news_model = ORM::factory('News');
			//validation
			$validate = $news_model->validate($post_data);
			//check
			if($validate->check()) {
              //Добавляем новую новость
              $insert_id = $news_model->add_news($post_data);

            // Добавляем ветку комментариев
            if($post_data['is_comments'] > 0 && $insert_id > 0) {
                if( Model::factory('Comment')->add_scope( 'News', $insert_id ) === false ) {
                    echo json_encode(array('status'=>false, 'message'=> 'Ошибка в реализации комментариев' ) );
                    return;
                }
            }

			  echo json_encode(array('status'=>true, 'message'=>'Новость успешно добавлена!', 'insert_id'=>$insert_id));
            }
            else{
                //if the validation fails, return the error message
                echo json_encode(array('status'=>false, 'message'=>$validate->errors('news_error')));
            }
		}
	 }

	/**
	 * Смена статуса на противоположный
	 */
	public function action_news_active()
	{
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
			// Меняем статус на противоположный
            $active = DB::query(Database::UPDATE, "UPDATE `news` SET active = NOT active, modified_date = '".date('Y-m-d H:i:s')."' WHERE news_id =". $this->request->post('news_id'))->execute();
            echo json_encode(array('status'=>$active, 'modified_date' => date('Y-m-d H:i:s')));
        }
	}

	/**
	 *
	 */
	public function action_news_view_main()
	{
		if($this->request->is_ajax() && $this->request->post()){
			$this->auto_render = false;
			// Меняем статус на противоположный
			$view_main = DB::query(Database::UPDATE, "UPDATE `news` SET view_main = NOT view_main, modified_date = '".date('Y-m-d H:i:s')."' WHERE news_id =". $this->request->post('news_id'))->execute();
			echo json_encode(array('status'=>$view_main, 'modified_date' => date('Y-m-d H:i:s')));
		}
	}


	/**
	 *
	 */
	public function action_news_delete()
	{
		if($this->request->is_ajax() && $this->request->post()){
			$this->auto_render = false;
			ORM::factory('News', $this->request->post('news_id') )->delete();

			echo json_encode(array('status'=>true) );
		}
	}


	public function action_news_sort() {

		if($this->request->is_ajax() && $this->request->post()){
			$this->auto_render = false;

			$post_data = $this->request->post('data');
			unset($post_data[0]);

			foreach( $post_data as $k => $id ) {

				DB::query(Database::UPDATE, "UPDATE `news` SET `sort` = ".(int)$k." WHERE news_id =". $id)->execute();

			}
			echo json_encode(array('status'=>1));
		}


	}
	

}	