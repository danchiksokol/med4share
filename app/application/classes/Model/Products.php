<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Модель для работы с новостями
 */
class Model_Products extends ORM {
    protected $_table_name = 'products'; // <== вручную установить имя таблицы
    protected $_primary_key = 'product_id'; //Названия поля первичного ключа находится в параметре _primary_key и по умолчанию оно установлено в id:


    /**
     *
     * Define the array of rules to be validated against
     * the signup information
     * @return array rules
     */
    public function my_rules($edit = false)
    {
        return array (

            'name' => array(
                array('not_empty'),
            ),
            /*
            'description' => array(
                array('not_empty', NULL),
                array('min_length', array(':value', 6)),
            ),
            */
        );
    }

    /**
     * Валидация данных
     * @param $array
     * @param bool $edit
     * @return Validation
     */
    public function validate($array, $edit = false)
    {
        $validation = Validation::factory($array);

        if($edit) { //передаём в валидацию модель
            $validation->bind( ':model', $array );
        }

        //Массив для проверки есть ли переменная для проверки
        $array_rules = $this->my_rules($edit);

        foreach ($array as $key => $val) {

            if(array_key_exists($key, $array_rules))
            {
                $rules = $array_rules[$key];
                $validation->rules($key, $rules, $edit);
            }
        }
        return $validation;
    }

    /**
     * Сохранение акции
     */
    public function save_stock($data)
    {
        $update_stock = ORM::factory('Products', $data['id']);
        //Удаляем не нужное
        unset($data['id']);

        //Активность страницы
        if( ! isset($data['active']) ) {
            $data['active'] = 0;
        }

        foreach ($data as $key => $value) {
            $update_stock->$key = $value;
        }
        //Сохраняем
        $update_stock->save();
    }


    /**
     * Добавление новой новости
     */
    public function add_product($post_data)
    {
        $add_news = ORM::factory('Products');
        $add_news->name = $post_data['name'];
        $add_news->create_date = date('Y-m-d H:i:s');//DB::expr('NOW()');
        //$add_news->author_id = 0;
        $add_news->save();
        //last insert id
        return $add_news->pk();

    }
}