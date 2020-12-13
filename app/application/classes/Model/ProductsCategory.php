<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Модель для работы со статическими страницами
 */
class Model_ProductsCategory extends ORM {
	protected $_table_name = 'products_category'; // <== вручную установить имя таблицы
	protected $_has_many = array (
  		'id' => array ('foreign_key' => 'id' )
	);


    /**
     *
     * Define the array of rules to be validated against
     * the signup information
     * @return array rules
     */
    public function my_rules($edit = false)
    {
        return array (
            'url' => array(
                array('not_empty'),
            ),
            'name' => array(
                array('not_empty'),
            ),
            'title' => array(
                array('not_empty'),
            ),

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
     * Добавление новой новости
     */
    public function add_product_category($post_data)
    {
        $add_category = ORM::factory('ProductsCategory');

        $add_category->url  = $post_data['url'];
        $add_category->name = $post_data['name'];
        $add_category->title = $post_data['title'];
        $add_category->active = 1;

        //$add_news->create_date = date('Y-m-d H:i:s');//DB::expr('NOW()');
        //$add_news->author_id = 0;
        $add_category->save();
        //last insert id
        return $add_category->pk();

    }


    /**
     * Сохранение акции
     */
    public function save_stock($data)
    {
        $update_stock = ORM::factory('Stock', $data['id']);
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
     * Удаление роли из БД
     */
    public static function delete_category($id)
    {
        $rows = DB::delete('products_category')->where('id', '=', $id)->execute();
        return $rows ? true : false;
    }
	
}
