<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Created by JetBrains PhpStorm.
 * User: lamo8
 * Date: 23.03.13
 * Time: 1:14
 * To change this template use File | Settings | File Templates.
 */

class Controller_Admin_User extends Controller_Admin_Admin {

    public function before()
    {
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
    public function action_user_list()
    {
        //Достаем всех пользователей системы
        $users = ORM::factory('User')->find_all();
        //Достаем все роли
        $roles = ORM::factory('Role')->find_all();

        $content = View::factory('admin/user/users')
            ->bind('users', $users)
            ->bind('roles', $roles);

        $this->template->content = $content;
    }

    /**
     * Обновление инфо на странице user_list ajax
     */
    public function action_user_refresh()
    {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;

            $user_id = $_POST['user_id'];
            $user_info = ORM::factory('user')
                ->where('id','=', $user_id)
                ->find()
                ->as_array();
            #TODO Доделать
            //print_r($user_info);
        }
    }

    /**
     * Смена статуса пользователя
     */
    public function action_user_active()
    {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            // Меняем статус на противоположный
            $active = DB::query(Database::UPDATE, 'UPDATE `users` SET active = NOT active WHERE id ='. $this->request->post('user_id'))->execute();
            echo json_encode(array('status'=>$active));
        }
    }


    /**
     * Добавление пользователя ajax
     */
    public function action_user_add()
    {
        if($this->request->is_ajax() && $this->request->post()){

            $this->auto_render = false;
            //Парсим POST, получаем массив данных
            parse_str($_POST['data'], $post_data);
            //Создаем объект
            $model_user = new Model_UserControl();
            //call the validation function
            $validate = $model_user->validate($post_data);

            //check if it satisfies all rules
            if($validate->check()) { //Проверка валидации
                //Добавляем пользователя если валидация ок
                $insert_id = $model_user->add_user($post_data);
                echo json_encode(array('status'=>true, 'message'=>'Роль успешно добавлена!', 'insert_id'=>$insert_id));
            }
            else{
                //if the validation fails, return the error message
                echo json_encode(array('status'=>false, 'message'=>$validate->errors('user_error')));
            }

        }
        return;
    }

    /**
     * Редактирование пользователя
     */
    public function action_user_edit()
    {
        //disable auto rendering if requested using ajax и сохраняемся
        if($this->request->is_ajax() && $this->request->post())
        {
            $this->auto_render = FALSE;

            parse_str($_POST['data'], $post_data); //Парсим ответ
            if( empty($post_data['password']) ) {
                unset($post_data['password']);
            }
            //создаем модель управления ролей
            $user_model  = new Model_UserControl;
            #TODO не доделано

            $validate = $user_model->validate($post_data, true);

            if($validate->check()) {
                //Обновляем роль
                $user_model->edit_user($post_data);
                echo json_encode(array('status'=>true, 'message' => 'Пользователь успешно изменён'));
            } else {
                //if the validation fails, return the error message
                echo json_encode(array('status'=>false, 'message'=>$validate->errors('user_error')));
            }
        } else { //Выводим данные
            $user_id = $this->request->param('id');
            $user = $users = ORM::factory('User')
                ->join('roles_users', 'LEFT OUTER')
                ->on('user.id', '=', 'roles_users.user_id')
                ->join('roles', 'LEFT OUTER')
                ->on('roles.id', '=', 'roles_users.role_id')
                ->where('user.id', '=', $user_id)
                ->select('roles.name')
                ->find_all();

            //Роли пользователя если есть
            $user_roles = array();
            foreach($user as $val)
            {
                $user_roles[] = $val->name;
            }

            //Достаем все Роли
            $roles = ORM::factory('Role')->find_all();
                // Для красивых checkbox
            $this->template->scripts[] = array('media/js/admin/bootstrap-toggle.js', array('type' => 'text/javascript', 'charset' => 'utf-8') );
            $this->template->styles[]  = array('media/css/admin/bootstrap-toggle.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet'));

            $content = View::factory('admin/user/user_edit')
                        ->bind('user', $user)
                        ->bind('user_roles', $user_roles)
                        ->bind('roles', $roles);

            $this->template->content = $content;
        }
    }

    /**
     * Удаление пользователя ajax
     */
    public function action_user_delete()
    {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            $user_id = $_POST['user_id'];
            echo json_encode(array('status'=>Model_UserControl::detele_user($user_id)));
            return;
        }
    }


    /**
     * Показывает все роли
     */
    public function action_role_list()
    {
        $roles = ORM::factory('Role')->find_all();

        $content = View::factory('admin/user/role_list')->bind('roles', $roles);
        $this->template->content = $content;
    }

    /**
     * Изменение роли для пользователей ajax
     */
    public function action_role_edit()
    {
        //Достаем данные для вывод на странице
        $role_id = $this->request->param('id');
        $role = ORM::factory('Role', $role_id);

        //disable auto rendering if requested using ajax и сохраняемся
        if($this->request->is_ajax() && $this->request->post())
        {
            $this->auto_render = FALSE;

            parse_str($_POST['data'], $post_data); //Парсим ответ
            //создаем модель управления ролей
            $role  = new Model_RoleControl;
            $validate = $role->validate($post_data, $edit = true);

            if($validate->check()) {
                //Обновляем роль
                $role->edit_role($post_data);
                echo json_encode(array('status'=>true, 'message' => 'Роль успешно изменена'));
            } else {
                //if the validation fails, return the error message
                echo json_encode(array('status'=>false, 'message'=>$validate->errors('role_error')));
            }
        } else {
            $content = View::factory('admin/user/role_edit')->bind('role', $role);
            $this->template->content = $content;
        }
    }

    /**
     * Создание новой роли
     */
    public function action_role_add()
    {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;

            $role  = new Model_RoleControl();

            $post_data = array('name' => $_POST['role_name'], 'description' => $_POST['role_desc']);
            //call the validation function
            $validate = $role->validate($post_data);
            //check if it satisfies all rules
            if($validate->check()) {
                //Добавляем новую роль
                $insert_id = $role->add_role($post_data);
                echo json_encode(array('status'=>true, 'message'=>'Роль успешно добавлена!', 'insert_id'=>$insert_id));
            }
            else{
                //if the validation fails, return the error message
                echo json_encode(array('status'=>false, 'message'=>$validate->errors('role_error')));
            }
        }
        return;
    }

    /**
     * Удаление роли
     */
    public function action_role_delete()
    {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            $role_id = $this->request->post('role_id');
            echo json_encode(array('status'=>Model_RoleControl::delete_role($role_id)));
            return;
        }
    }
}