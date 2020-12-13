<?php defined('SYSPATH') or die('No direct script access.');//защита от прямого вызова

class Controller_Ajax_Comment extends Controller_Ajax
{

    public function action_index()
    {
        if( ! Auth::instance()->logged_in('comment') ) {
            return;
        }

        $action = $this->request->post('action');
        $id     = (int) $this->request->post('id');



        switch( $action ) {

            case 'delete' : // Удаление коммента
                $model = ORM::factory('Comment', $id);
                $model->delete();
                break;

            case 'show' :

                $model = ORM::factory('Comment', $id);
                $model->is_active = 1;
                $model->save();

                if( $model->pk() ) {
                    //$this->error = 'Ошибка';
                    $this->data[] = array( 'id' => $model->pk() ) ;
                }

                break;

            case 'hide' :
                $model = ORM::factory('Comment', $id);
                $model->is_active = 0;
                $model->save();
                if( $model->pk() ) {
                    //$this->error = 'Ошибка';
                    $this->data[] = array( 'id' => $model->pk() ) ;
                }
                break;

        }
    }

    public function action_add() {

        if( ! Auth::instance()->logged_in('login') ) {
            return false;
        }

        $data = array();

        $data['scope']= (int)$this->request->post('scope');
        $data['parent_id'] = (int)$this->request->post('reply');
        $data['title'] = $this->request->post('commentTitle');
        $data['text'] = $this->request->post('commentText');

        $model = Model::factory('Comment');
       	$model->add_comment( $data );


       	// Отправка письма
        $commentData = Model::factory('CommentType')->getController( $data['scope'] ); // Определяем контролер и id страницы
        
        if( $commentData !== false ) {
            $db_data = ORM::factory( $commentData->controller )->get_url4id( $commentData->subject_id ); // Получаем урл по ид


            if ( $commentData->controller == 'News') {

                $pageUrl = URL::base(true).'news/'.$db_data['url'];
            }
            elseif ( $commentData->controller == 'PageStatic') {

                $pageUrl = URL::base(true).'news/'.$db_data['url'];
            }
            elseif ( $commentData->controller == 'Calendar') {

                $pageUrl = URL::base(true).'calendar/'.$db_data['url'];
            }

        	//Отправляем письмо админу о добавлении комментария
            if( ! Auth::instance()->logged_in('admin') && ! Auth::instance()->logged_in('comment') ) {
                $email = 'dmitri.stefanov@tsoncology.com'; //'info@tsoncology.com';
                $subjectMail = 'Добавлен новый комментарий';
                $messageMail = '<p>На странице <a href="'.$pageUrl.'">'.$pageUrl.'</a>, добавлен новый комментарий</p>';
                $messageMail .= '<p>Тема: '.$data['title'].', Сообщение: '.$data['text'].'</p>';
                Mailer::send($email, $email, $subjectMail, $messageMail);
                
                $email = 'alexandra.strizhevskaya@tsoncology.com'; //'info@tsoncology.com';
                $subjectMail = 'Добавлен новый комментарий';
                $messageMail = '<p>На странице <a href="'.$pageUrl.'">'.$pageUrl.'</a>, добавлен новый комментарий</p>';
                $messageMail .= '<p>Тема: '.$data['title'].', Сообщение: '.$data['text'].'</p>';
                Mailer::send($email, $email, $subjectMail, $messageMail);
            }
        }        
    }

    public function action_refresh() {

        $controller =  $this->request->post('controller');
        $subject_id = $this->request->post('subject_id');
        $is_comments = $this->request->post('is_comments');

        $data = View::factory('module/comments') // комментарии
                    ->bind('subject_id', $subject_id)
                    ->bind('controller', $controller)
                    ->bind('is_comments', $is_comments)
                    ->set('refresh', true)
                    ->render();

        echo $data;
        die();
        //$this->data = $data;

    }

}