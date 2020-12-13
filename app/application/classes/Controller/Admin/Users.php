<?php defined('SYSPATH') or die('No direct script access.');



class Controller_Admin_Users extends Controller_Admin_Admin {

    private $inputFileName;

    public function before()
    {
        $this->inputFileName = DOCROOT.'media'.DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR.'users'.DIRECTORY_SEPARATOR.'list.xlsx';
        parent::before();
    }

    public function after()
    {
        $this->template->breadcrumb = array_merge( array('admin/users' => 'Список пользователей'), $this->template->breadcrumb);
        parent::after();
    }

    /**
     * Список пользователей
     */
    public function action_users()
    {
        //Достаем всех пользователей системы
        $users = ORM::factory('User')
                        ->order_by('id', 'DESC')
                        ->find_all();
        //Достаем все роли
        //$roles = ORM::factory('Role')->find_all();

        $content = View::factory('admin/user/user_list')
            ->bind('users', $users);

        $this->template->content = $content;
    }

    public function action_changePassword() {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;

            $user_id = $this->request->post('user_id');

            if($user_id > 0) {
                $user = ORM::factory('User', $user_id);
                
                $user->password = $this->request->post('password');
                $user->save();
                
                echo json_encode(array('status'=>true, 'message'=>'Успешно сохранено в БД'));
                
               // echo $user->email;
              /*  $update['username'] = $user->username;
                $update['email']    = $user->email;
                $update['password'] = $this->request->post('password'); // Генерим новый пароль
                $update['password_confirm'] = $update['password'];

                $user->update_user($update, array('email', 'password'));*/


            }
        }
    }

    public function action_deleteUser() {
        if($this->request->is_ajax() && $this->request->post()){

            $this->auto_render = false;

            $user_id = $this->request->post('user_id');

            if($user_id > 0) {
                $user = ORM::factory('User', $user_id);
                $user->remove('roles'); // роли не удаляются
                $user->delete();

                echo json_encode(array('status'=>true, 'message'=>'Успешно удалено из БД'));
            }
        }
    }

    public function action_add() {

        // Достану всех пользователей
        $usersDB = ORM::factory('User')
            ->order_by('id', 'DESC')
            ->find_all();


        try {
            $inputFileType = PHPExcel_IOFactory::identify($this->inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($this->inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($this->inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }


        //  Get worksheet dimensions
        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();

//  Loop through each row of the worksheet in turn
        $kk = 0;
        for ($row = 2; $row <= $highestRow; $row++){
            //  Read a row of data into an array
            $usersXLS = $user = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                NULL,
                TRUE,
                FALSE
            );
          //  $users[$kk][0]['double'] = false;

            if( isset( $usersXLS[0] ) ) {


                $users[$kk] = $usersXLS[0];

                $email = $usersXLS[0][4];
                $users[$kk]['double'] = false;

                foreach ($usersDB as $val) {
                    if( $val->email == trim( $email ) ) {
                        $users[$kk]['double'] = true;
                    }
                }

            }

            $kk++;
            //  Insert row data array into your database of choice here
        }


        $content = View::factory('admin/user/user_add')
            ->bind('users', $users);
        $this->template->content = $content;
    }


    /**
     * Добавляем всех из excel
     */
    public function action_addAll() {
        try {
            $inputFileType = PHPExcel_IOFactory::identify($this->inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($this->inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($this->inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }


        //  Get worksheet dimensions
        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();



        for ($row = 2; $row <= $highestRow; $row++) {
            //  Read a row of data into an array
            $usersXLS = $user = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                NULL,
                TRUE,
                FALSE
            );

            if( isset( $usersXLS[0] ) ) {

                $user = $usersXLS[0];


                $post_data = array(
                    'fio' => (string) $user[0],
                    'position' => (string) $user[1],
                    'specialty'=> (string) $user[2],
                    'city'=> (string) $user[5],
                    'phone' => (string) $user[3],
                    'email' => (string) $user[4],
                    'active' => 1,
                    'password' => TEXT::randstr(8), // Генерим новый пароль
                    'roles' => array('login'),
                );


                //Создаем объект
                $model_user = new Model_UserControl();
                //call the validation function
                $validate = $model_user->validate($post_data);

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
            }
        }
    }

    /**
     * Выгрузка пользователь в excel
     * @throws Kohana_Exception
     * @throws PHPExcel_Exception
     * @throws PHPExcel_Reader_Exception
     */
    public function action_excel() {

        $users = ORM::factory('User')->order_by('id', 'DESC')->find_all();



        //алфавит
        $alphabet = range('A', 'Z');
        // Create new PHPExcel object
        $objPHPExcel = new PHPExcel();

        // Set properties
        $objPHPExcel->getProperties()->setCreator('База данных')
            ->setLastModifiedBy('База данных')
            ->setTitle("Office 2007 XLSX Document")
            ->setSubject("Office 2007 XLSX Document")
            ->setDescription('')
            ->setKeywords('')
            ->setCategory('');

        $poles = array(
            'id' => '#',
            'email' => 'Почта',
            'create' => 'Дата регистрации',
            'fio' => 'ФИО',
            'city' => 'Город',
            'position' => 'Должность',
            'specialty' => 'Специализация',
            'phone' => 'Мобильный телефон',
            'spam' => 'Получать рассылки по Онкологии/Гематологии',
            'spam_rheumatology' => 'Получать рассылки по Ревматологии',
            'spam_neurology' => 'Получать рассылки по Неврологии',
        );

        $row = 0;
        $col = 1;
        foreach($poles as $k => $v) {
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alphabet[$row].''.$col, $v); // A1
            $objPHPExcel->getActiveSheet()->getColumnDimension($alphabet[$row])->setWidth(15);
            // Перенос текста в ячейке
            $objPHPExcel->setActiveSheetIndex(0); // Выбираем первую страницу
            $activeSheet = $objPHPExcel->getActiveSheet(); // Делаем ее активной

            $activeSheet->getStyle($alphabet[$row])->getAlignment()->setWrapText(true);
            $row++;
        }



        $col = 2;
        foreach( $users as $user ) {

            $row = 0;
            foreach($poles as $k => $v) {

                if( $k == 'create' ) {
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alphabet[$row].''.$col,  date('d.m.Y H:i:s', $user->$k) ); // A1
                }
                elseif( in_array($k, array('spam', 'spam_rheumatology', 'spam_neurology') ) ) {
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alphabet[$row].''.$col,  $user->$k == 1 ? 'Да' : 'Нет' ); // A1
                } else {
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alphabet[$row].''.$col, $user->$k); // A1
                }



                $row++;
            }
            $col++;
        }

        /*$row = 0;
        $col = 1;
        foreach($this->child_poles as $k => $v) {
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alphabet[$row].''.$col, $v); // A1
            $objPHPExcel->getActiveSheet()->getColumnDimension($alphabet[$row])->setWidth(15);
            // Перенос текста в ячейке
            $objPHPExcel->setActiveSheetIndex(0); // Выбираем первую страницу
            $activeSheet = $objPHPExcel->getActiveSheet(); // Делаем ее активной

            $activeSheet->getStyle($alphabet[$row])->getAlignment()->setWrapText(true);
            $row++;
        }


        $col = 2;
        foreach( $child_list as $child ) {
            $row = 0;
            foreach($this->child_poles as $k => $v) {
                if( $k == 'region_id' ) {
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alphabet[$row].''.$col, $child->region->region_name); // A1
                } elseif($k == 'country_id') {
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alphabet[$row].''.$col, $child->country->country_name); // A1
                } elseif($k == 'nationality_id') {
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alphabet[$row].''.$col, $child->nationality->nationality_name); // A1
                } else {
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alphabet[$row].''.$col, $child->$k); // A1
                }
                $row++;
            }
            $col++;
        }*/

        // Rename sheet
        $objPHPExcel->getActiveSheet()->setTitle('Лист1');
        //
        $objPHPExcel->getActiveSheet()->calculateColumnWidths();

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);


        // Redirect output to a client’s web browser (Excel5)
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Список зарегистрированных.xls"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }

}