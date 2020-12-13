<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Default auth user
 *
 * @package    Kohana/Auth
 * @author     Kohana Team
 * @copyright  (c) 2007-2011 Kohana Team
 * @license    http://kohanaframework.org/license
 */
class Model_UserControl extends ORM {
		 
	protected $_table_name = 'users'; // <== вручную установить имя таблицы
	/**
	 * Rules for the user model. Because the password is _always_ a hash
	 * when it's set,you need to run an additional not_empty rule in your controller
	 * to make sure you didn't hash an empty string. The password rules
	 * should be enforced outside the model or with a model helper method.
	 *
	 * @return array Rules
	 */
	public function rules($edit = false)
	{
		$rules = array(
            'id' => array(
                array('not_empty'),
            ),
			'username' => array(
				array('not_empty'),
				//array('max_length', array(':value', 128)),
                $edit == false ?
				    array(array($this, 'unique'), array('username', ':value')) :
                    array(array($this, 'check_user_edit'), array(':validation', ':field', ':model')),
			),
			'password' => array(
				array('not_empty'),
				array('min_length', array(':value', 6))
			),
			'email' => array(
				array('not_empty'),
				array('email'),
                $edit == false ?
                    array(array($this, 'unique'), array('email', ':value')) :
                    array(array($this, 'check_user_edit'), array(':validation', ':field', ':model')),

			),
			'fio' => array(
		        array('not_empty'),
    		),
            'position' => array(
                array('not_empty'),
            ),
            'city' => array(
                array('not_empty'),
            ),
            'phone' => array(
                array('not_empty'),
            ),
            'roles' => array(),
		);

        if( $edit == true ) {
            $rules['password'] = array(  array('min_length', array(':value', 6)));
            $rules['password_confirm'] = array( array('matches', array(':validation', ':field', 'password')) );

        }


        return $rules;
	}

		
	/**
	 * Function to validate the input //Хороший пример тут http://blog.shameerc.com/2011/05/simple-ajax-validation-for-kohana.html
    	http://kohana3.ru/validation
	 * 
	 * @param array $array Post data to be validated
	 * @return Validation object with rules applied
	 */
    public function validate($array, $edit = false)
    {
        $validation = Validation::factory($array);

        if($edit) { //передаём в валидацию модель
            $validation->bind( ':model', $array );
        }

        $array_rules = $this->rules($edit);
        foreach ($array as $key => $val) {
            $rules = $array_rules[$key];
            $validation->rules($key, $rules, $edit);
        }
        return $validation;
    }


	
	
	/**
	 * Добавление пользователя через админку + роли для него
	 *
	 * @param array $post_data
	 */
	public function add_user($post_data)
	{
        
		// Создаем переменную, отвечающую за связь с моделью данных User
		$user_model = ORM::factory('User');
		// Вносим в эту переменную значения, переданные из POST
		$user_model->values(
            array(
			'email'		=> $post_data['email'],
			'username' 	=> $post_data['email'],
			'password'	=> $post_data['password'],
			'create' 	=> time(), //Добавляем время добавление пользователя
            'fio'       => $post_data['fio'],
            'active'    =>  $post_data['active'],
            'position'  =>  $post_data['position'],
            'specialty' =>  $post_data['specialty'],
            'phone'     =>  $post_data['phone'],
            'city'      =>  $post_data['city'],
            'spam'      =>  $post_data['spam_email'],
			'spam_rheumatology'      =>  $post_data['spam_rheumatology'],
			'spam_neurology'      =>  $post_data['spam_neurology'],
            //'spam_sms'      =>  $post_data['spam_sms'],
            //'lso'      =>  $post_data['lso'],
            //'loz'      =>  $post_data['loz'],
            //'dzn'      =>  $post_data['dzn'],
            'processing' =>  $post_data['processing'],
			'razdel_id' =>  $post_data['razdel_id'],
            )
        );
				
		try {
			// Пытаемся сохранить пользователя (то есть, добавить в базу)
			$user_model->save();
			//Если были указаны роли добавляем их
			if( isset($post_data['roles']) && is_array($post_data['roles']) ) {
				//Пробегаем по массиву добавляемых ролей
				foreach ($post_data['roles'] as $role) {
					$user_model->add('roles', ORM::factory('Role')->where('name', '=', $role)->find());
				}
			}
		} catch (ORM_Validation_Exception $e) {
            // Это если возникли какие-то ошибки
            echo $e;
        }
		
		//Получаем id созданого пользователя
		return $user_model->pk(); // or $model->id();
	}

	public function edit_user($post_data)
	{

		// Создаем переменную, отвечающую за связь с моделью данных User
		$user_model = ORM::factory('User', Auth::instance()->get_user()->id);
		// Вносим в эту переменную значения, переданные из POST

		$user_model->values(array(
            'id'        => Auth::instance()->get_user()->id,
			///'email'		=> $post_data['email'],
			//'username' 	=> $post_data['email'],
			'active' 	=> isset($post_data['active']) ? 1 : 0,
            'fio' => $post_data['fio'],

            'position' =>  $post_data['position'],
            'specialty' =>  $post_data['specialty'],
            'phone' =>  $post_data['phone'],
            'city' =>  $post_data['city'],
            'spam' =>  $post_data['spam'],
			'spam_rheumatology' =>  $post_data['spam_rheumatology'],
			'spam_neurology' =>  $post_data['spam_neurology'],
            //'spam_sms' =>  $post_data['spam_sms'],
            // 'lso'      =>  $post_data['lso'],
            //'loz'      =>  $post_data['loz'],
            //'dzn'      =>  $post_data['dzn'],
            //'processing' =>  $post_data['processing'],
			'razdel_id' =>  $post_data['razdel_id'],
		));

        if( $post_data['password'] != '' && $post_data['password'] == $post_data['password_confirm'] ) {
            $user_model->values(array(
                'password' =>  $post_data['password'],
            ));
        }


       /* //Удаляем все роли, что выбрано добавим ниже
        $user_model->remove('roles');
        //Если были указаны роли добавляем их
        if( isset($post_data['roles']) && is_array($post_data['roles']) ) {

            //Пробегаем по массиву добавляемых ролей
            foreach ($post_data['roles'] as $role) {
                $user_model->add('roles', ORM::factory('Role')->where('name', '=', $role)->find());
            }
        }*/
		
		try {
			// Пытаемся сохранить пользователя (то есть, добавить в базу)
			$user_model->save();
		} catch (ORM_Validation_Exception $e) {
            // Это если возникли какие-то ошибки
            echo $e;
        }


	}


	/**
	 * Удаление пользователя из БД
	 */
	public static function detele_user($user_id)
	{
		$rows = DB::delete('users')->where('id', '=', $user_id)->execute();
		return $rows ? true : false;
	}


    /**
     * Проверка уникальности пользователя
     */
    public function check_user_edit( Validation $array, $field, $model )
    {
        $result = ORM::factory( 'User', array( $field => $array[$field]) );

        if( $result->loaded() && $result->id != $model['id'])
        {
            $array->error($field, 'check_user_edit', array($array[$field]));
        }
    }


} // End Auth User Model