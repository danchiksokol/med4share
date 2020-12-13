<?php defined('SYSPATH') or die('No direct script access.');//защита от прямого вызова

class Controller_Ajax_Feedback extends Controller_Ajax
{

    public function action_index()
    {
        $data['name'] = $this->request->post('name');
        $data['email']     = $this->request->post('email');
        $data['message'] = $this->request->post('message');


        $model = Model::factory('Feedback');
        $model->add_message( $data );


        $this->data['response'] = 'success';

    }

}