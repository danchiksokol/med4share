<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_User extends Controller_Template_Main {

    public function action_index() {

//        if( ! Auth::instance()->logged_in('login')) {
//            $this->redirect('index');
//        }

        //$data = Auth::instance()->get_user();
        $this->template->breadcrumb = array('Ваш профиль');
        $this->template->content = View::factory('user/profile'); //->bind('data', $data);
    }

	public function action_login()
	{
        if(Auth::instance()->force_login('admin')) {
            $this->redirect('/admin');
        }
        // Если юзер уже авторизирован
        if (Auth::instance()->logged_in())
        {
            $this->redirect('/index');
        }




        if($this->request->post()) {

            $success = Auth::instance()->login(
                $this->request->post('login'),
                $this->request->post('password'),
                true
                // $this->request->post('remember-me') == 1 ? TRUE : FALSE
            );


           if ($success) // Login successful, send to app
            {
                if( Auth::instance()->get_user()->razdel_id == 3) {
                    $this->redirect('/rheumatology');
                }
                else if( Auth::instance()->get_user()->razdel_id == 4) {
                    $this->redirect('/neurology');
                }

				$this->redirect( $this->request->referrer() );
				return;
			
                // $this->redirect('/'.$this->request->post('url'));
                // return;
            }
            else // Login failed, send back to form with error message
            {
                $data['error_message'] = 'Ошибка авторизации';
            }
        }

        $this->template->content = View::factory('user/login')->bind('data', $data);
    }
    
    public function action_logout() // экшн выхода
	{
		Auth::instance()->logout(); // выходим и перекитываем на страницу с авторизацией
		$this->redirect('index');
	}

    /**
     * Регистрация
     */
    public function action_register() {

		// Если юзер уже авторизирован
        if (Auth::instance()->logged_in())
        {
            $this->redirect('/index');
        }

        if($this->request->is_ajax() && $this->request->post()) {
            $this->auto_render = false;

            if($this->request->post()) {

                $post_data = $this->request->post();

                $post_data['roles'] = array('login');
                $post_data['active'] = 1;

                //Создаем объект
                $model_user = new Model_UserControl();
                //call the validation function
                $validate = $model_user->validate($post_data);


                //check if it satisfies all rules
                if($validate->check()) { //Проверка валидации
                    //Добавляем пользователя если валидация ок
                    $insert_id = $model_user->add_user($post_data);
                    // Отправляем письмо если всё ок
                    $subjectMail = "Регистрация на сайте med4share.ru";

                    $messageMail = '<p>Здравствуйте, '.$post_data['fio'].'</p>';
                    $messageMail .= '<p>&nbsp;</p>';
                    $messageMail .= '<p>Благодарим Вас за регистрацию на портале <a href="http://www.med4share.ru"  target="_blank">www.med4share.ru</a>!</p>';
                    $messageMail .= '<p>Для входа в закрытые разделы сайта Вам понадобится следующая информация:<br />';
                    $messageMail .= 'E-mail: '.$post_data['email'].'<br />';
                    $messageMail .= 'Пароль: '.$post_data['password'].'</p>';
                    $messageMail .= '<p>&nbsp;</p>';
                    $messageMail .= '<p>Начните просмотр сайта прямо сейчас!<br />';
                    $messageMail .= 'Новости:&nbsp;<a href="http://med4share.ru/news/all" target="_blank">http://med4share.ru/news/all</a><br />';
                    $messageMail .= 'Календарь мероприятий:<a href="http://med4share.ru/calendar" target="_blank">http://med4share.ru/calendar</a><br />';
                    $messageMail .= 'Записи всех прошедших мероприятий:&nbsp;<a href="http://med4share.ru/calendar#past" target="_blank">http://med4share.ru/calendar#past</a></p>';
                    $messageMail .= '<p>&nbsp;</p>';
                    $messageMail .= '<p>Администрация <a href="http://www.med4share.ru/" target="_blank">www.med4share.ru</a></p>';
                    // Отправляем письмо
                    Mailer::send($post_data['email'], $post_data['email'], $subjectMail, $messageMail);


                    $data = array('response' => 'success');
                    echo json_encode( $data );
                }
                else{
                    //if the validation fails, return the error message
                    $data = array('response' => 'fail', 'errors' => $validate->errors('user_error') );
                    echo json_encode( $data );
                }
            }


        } else {

           //$this->action_test();

            $this->template->url = 'register';
            $this->template->breadcrumb = array('Регистрация');
            $this->template->content = View::factory('user/register')->bind('data', $data);
        }


    }

    public function action_edit() {

        if($this->request->post()) {

            //Создаем объект
            $model_user = new Model_UserControl();
            //call the validation function
            $this->request->post('id',  Auth::instance()->get_user()->id);

            $validate = $model_user->validate($this->request->post(), true);
            //check if it satisfies all rules
            if($validate->check()) { //Проверка валидации
                //Добавляем пользователя если валидация ок
                $insert_id = $model_user->edit_user($this->request->post());
                $data = array('status' => 1);
                //echo json_encode(array('status'=>true, 'message'=>'Роль успешно добавлена!', 'insert_id'=>$insert_id));
                $this->redirect('profile');
            }
            else{
                //if the validation fails, return the error message
                $data = array('errors' => $validate->errors('user_error'), 'post' => $this->request->post(), 'status' => 0 );
                // echo json_encode( array('status'=>false, 'message'=>$validate->errors('user_error')));
            }


        }

        $this->template->breadcrumb = array('Настройки вашего профиля');
        $this->template->content = View::factory('user/profile_edit')->bind('data', $data);
    }


    public function action_forgot() {
 
        $data = array();

        if ($this->request->method() == HTTP_Request::POST)
        {
            $user = ORM::factory('User')
                ->where('email', '=', $this->request->post('email'))
                ->find();
            
            if ($user->loaded())
            {
                $password_reset = $this->reset_password($user);

                if ($password_reset === TRUE)
                {
                    $data['message'] = "Письмо, содержащее Ваш новый пароль было отправлено.";
                    $data['error'] = false;
                }
                else
                {
                    $errors = $password_reset;
                }
            }
            else
            {
                $data['message'] = "Пользователь с таким Email не найден";
                $data['error']   = true;
            }
        }

        $this->template->url = 'forgot';
        $this->template->breadcrumb = array('Восстановление пароля');
        $this->template->content = View::factory('user/forgot')->bind('data', $data);

    }

    public function reset_password(Model_User $user)
    {
        /**
         *  Model_User::update_user() requires an array as the first argument
         */
        $update['username'] = $user->username;
        $update['email']    = $user->email;
        $update['password'] = TEXT::randstr(8); // Генерим новый пароль
        $update['password_confirm'] = $update['password'];

        try
        {
            $user->update_user($update, array('email', 'password'));

            //$msg_body = file_get_contents('media/templates/forgot_password.txt');
            //$msg_body = str_replace('{@PASSWORD}', $update['password'], $msg_body);
            $messageMail = '<p>Ваш новый пароль на сайте med4share.ru: '. $update['password'].'</p>';
            $subjectMail = "Сброс пароля на сайте med4share.ru";

            // Отправляем новый пароль
            Mailer::send($user->email, $user->email, $subjectMail, $messageMail);
        }
        catch (ORM_Validation_Exception $e)
        {
            //print_r($e->errors('controllers'));

            //echo $errors = $e->errors('controllers');
        }

        return (isset($errors)) ? $errors : TRUE;
    }


    public function action_test() {
    	
		$email = 'mail@lamo8.ru';
		$subjectMail = 'Добавлен новый комментарий';
		$messageMail = 'Востанвщытащоытващфы ыфваыва';
		$messageMail .= 'ыфвафываыфва';
		Mailer::send($email, $email, $subjectMail, $messageMail);
    	
		echo 3;
		die();

        header('Content-Type: text/html; charset=utf-8');


      $data = 'Голубева Ольга Ефимовна	Зав. Лабораторией		Волгоград	89033278320	golubeva_olya@mail.ru
Шкалова Любовь Владимировна	Зав. Паталогоанатомическим отделением	Паталогическая анатомия	Нижний Новгород	89038485197	L_Shkalova@mail.ru
Федоровская Надежда Станиславовна	Зав. Лабораторией патоморфологией крови	Гемоцитология, гемапатология, патанатомия, ИГХ	Киров (обл.)	89128245918	fednadst@mail.ru
Бахарев Сергей Юрьевич	Врач паталогоанатом		Барнаул	89132572150	bachero@mail.ru
Лебедева Оксана Евгеньевна	Врач паталогоанатом		Тула	89531900174	ksu_med@mail.ru
Гарлоев Роман Анатольевич	Зав. ПАО Мурманской областной клинической больницы		Мурманск	89114024697	garloev@mail.ru
Соколенко Екатерина Григорьевна	Зав. Отделение патоморфологии КАЗНИИ		Алматы, Казахстан	87012659061	unitra@list.ru
Ботина Анна Вячеславовна	Врач паталогоанатом		Санкт-Петербург	89213518668	botinaanna@mail.ru
Чухрай Ольга Юрьевна	Врач паталогоанатом		Краснодар	89181506884	lecabel@rambler.ru
Югина Оксана Васильевна	Зав. ПАО, врач паталогоанатом	Паталогическая анатомия	Самара	89179427344	o.yugina@mail.ru
Пономарева Елена Евгеньевна	Зав. ПАО	Паталогическая анатомия	Пенза	89273675892	penzapatood@mail.ru';

        $data = explode("\n", $data);
        
        $specialtys = array('онколог', 'гематолог', 'эндокринолог', 'кардиолог', 'гинеколог', 'нефролог', 'дерматолог', 'уролог', 'офтальмолог', 'иммунолог', 'другая');
 
           
        
        
        $keys = array('fio', 'position',  'specialty', 'city', 'phone', 'email');
        
        foreach($data as  $key => $val ) {
        	
        	$vvv = explode('	', $val);
        	
        	
        	
        	 foreach($vvv as  $k => $v ) {
        	 	
        	 	if($k == 6) {
        	 		$v = 1;
        	 	}
        	 	
        	 	if( $k == 2 ) {
        	 		if( ! in_array($v, $specialtys) ) {
        	 			$v = 'другая';
        	 		}
        	 	}
        	 	
        	 	 
        	 	$post_data[ $keys[$k] ]  = $v;
        	 }
        	
        	 
        	 
        	 
        	 
        		$post_data['roles'] = array('login');
                $post_data['active'] = 1;
                
                
                $post_data['password'] = TEXT::randstr(8); // Генерим новый пароль

                //Создаем объект
                $model_user = new Model_UserControl();
                //call the validation function
                $validate = $model_user->validate($post_data);


                //check if it satisfies all rules
                if($validate->check()) { //Проверка валидации
                    //Добавляем пользователя если валидация ок
                    $insert_id = $model_user->add_user($post_data);
                    // Отправляем письмо если всё ок
                    $subjectMail = "Регистрация на сайте med4share.ru";

                    $messageMail = '<p>Здравствуйте, '.$post_data['fio'].'</p>';
                    $messageMail .= '<p>&nbsp;</p>';
                    $messageMail .= '<p>Благодарим Вас за регистрацию на портале <a href="http://www.med4share.ru"  target="_blank">www.med4share.ru</a>!</p>';
                    $messageMail .= '<p>Для входа в закрытые разделы сайта Вам понадобится следующая информация:<br />';
                    $messageMail .= 'E-mail: '.$post_data['email'].'<br />';
                    $messageMail .= 'Пароль: '.$post_data['password'].'</p>';
                    $messageMail .= '<p>&nbsp;</p>';
                    $messageMail .= '<p>Начните просмотр сайта прямо сейчас!<br />';
                    $messageMail .= 'Новости:&nbsp;<a href="http://med4share.ru/news/all" target="_blank">http://med4share.ru/news/all</a><br />';
                    $messageMail .= 'Календарь мероприятий:<a href="http://med4share.ru/calendar" target="_blank">http://med4share.ru/calendar</a><br />';
                    $messageMail .= 'Записи всех прошедших мероприятий:&nbsp;<a href="http://med4share.ru/calendar#past" target="_blank">http://med4share.ru/calendar#past</a></p>';
                    $messageMail .= '<p>&nbsp;</p>';
                    $messageMail .= '<p>Администрация <a href="http://www.med4share.ru/" target="_blank">www.med4share.ru</a></p>';
                    // Отправляем письмо
                    Mailer::send($post_data['email'], $post_data['email'], $subjectMail, $messageMail);



                }

            print_r($post_data);
        }

        
        

        die();



    }

   /* public function action_add() {
        // Добавить админа (естественно через временный контроллер)
        $model = ORM::factory('User');
        $model->values(array(
            'username' => 'lamo8',
            'password' => '3562',
            'password_confirm' => '3562',
            'email' => 'mail@lamo8.ru',
        ));
        $model->save();
        // не забудьте добавить login и admin роли
        // добавляем роль; add() выполнит запрос немедленно:
        $model->add('roles', ORM::factory('Role')->where('name', '=', 'login')->find());
        //$model->add('roles', ORM::factory('Role')->where('name', '=', 'admin')->find());
    }*/


} // End Welcome
