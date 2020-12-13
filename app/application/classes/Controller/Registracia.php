<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Registracia extends Controller_Template_Main {

	 public function before()
    {
        parent::before();
    }

    public function after()
    {
       
        parent::after();
    }

    /**
     * Все новости /news/page1
     */
    public function action_index()
    {
        $this->template->title = 'Регистрация на конференцию "Злокачественные лимфомы"';
        $this->template->description  = 'Регистрация на конференцию "Злокачественные лимфомы"';
        $this->template->keywords  = 'Регистрация на конференцию "Злокачественные лимфомы"';
        $this->template->breadcrumb = array( 'Регистрация на конференцию "Злокачественные лимфомы"' );
        //Передаем всё в шаблон
        $this->template->content .= View::factory('module/registracia');
        $this->template->url = 'registracia';
    }
	
    public function action_send() {

    	
    	if($this->request->is_ajax() && $this->request->post()) {
    		
    		$this->auto_render = false;
	        $post = $this->request->post();
	
	        $post['ip'] = Request::$client_ip;
	
	
	        $headers  = 'MIME-Version: 1.0' . "\r\n";
	        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	
	        /*$fileds = array('name' => 'Ф.И.О.', 'work' => 'Место работы', 'position' => 'Должность',
	                        'telefon' => 'Мобильный телефон', 'email' => 'Адрес электронной почты',
	                        'city' => 'Город'
	        );
	
	        $message = '';
	        foreach($post as $key => $val) {
	            if( array_key_exists($key, $fileds) ) {
	                $message .= '<p><strong>'.$fileds[$key].'</strong>: '.$val;
	            }
	        }
	
	        $to = 'Dmitri.Stefanov@smart-pharma.ru'; 
	
	        $subject = 'On-line регистрация на конференцию';
	        // Отправляем
	        mail($to, $subject, $message, $headers);*/


            $userAdd = null;
            $userError = null;

	        $id = Model::factory('Registracia')->add( $post );

            // Регистрация нового человека
            if( isset($post['reg_site']) && $post['reg_site'] == 1 ) {

                $post['active'] = 1;

                $model_user = new Model_UserControl();
                //call the validation function
                $validate = $model_user->validate($post);


                //check if it satisfies all rules
                if($validate->check()) { //Проверка валидации
                    //Добавляем пользователя если валидация ок
                    $post['phone'] = $post['telefon'];

                    $insert_id = $model_user->add_user($post);
                    if($insert_id) {
                        $userAdd = 1; // Регисрация успешна
                    }
                    //echo json_encode(array('status'=>true, 'message'=>'Роль успешно добавлена!', 'insert_id'=>$insert_id));
                }
                else{
                    $userAdd = 0; // Регисрация с ошибкой
                    //if the validation fails, return the error message
                    $userError = $validate->errors('user_error');
                }

            }

	        if( $id > 0 ) {
	            $data = array('response' => 'success', 'userAdd' => $userAdd, 'userError' => $userError);
                echo json_encode( $data );
	        } else {
	        	$data = array('response' => 'fail', 'errors' => 'Произошла ошибка. Повторите попытку позже' );
                echo json_encode( $data ); 
	        }
    	}

    }

}