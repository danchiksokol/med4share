<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Admin_Products extends Controller_Admin_Admin {
	
	public function before()
	{
		parent::before();
	}
	
	public function after()
	{
		$this->template->breadcrumb =  array_merge( array('admin/products_list'=>'Продукция'), $this->template->breadcrumb);
		$this->template->title = 'Продукция';
		parent::after();
	}
	
	
	/**/
	public function action_products_list()
	{
        $products_category = ORM::factory('ProductsCategory')->find_all();
        $products = ORM::factory('Products')->find_all();

        //В шаблон
        $content = View::factory('admin/products/products_list')
            ->bind('products_category', $products_category)
            ->bind('products', $products);

        $this->template->content = $content;
	}

    /**
     * Добавление нового продукта
     */
    public function action_products_add()
    {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            //Название продукта
            $post_data['name'] = $this->request->post('name');

            $product_model = ORM::factory('Products');
            //validation
            $validate = $product_model->validate($post_data);
            if($validate->check()) {
                //Добавляем новую новость
                $insert_id = $product_model->add_product($post_data);
                echo json_encode(array('status'=>true, 'message'=>'Продукт успешно добавлена!', 'insert_id'=>$insert_id));
            }
            else{
                //if the validation fails, return the error message
                echo json_encode(array('status'=>false, 'message'=>$validate->errors('news_error')));
            }
        }


    }

    /**
     * Редактирование нового продукта
     */
    public function action_products_edit()
    {
        $this->template->breadcrumb = array('/admin/products_list/products_add' => 'Добавление продукта');
        $this->template->title = 'Добавление продукта';

        $product_id = (int) $this->request->param('id');



        $content = View::factory('admin/products/product_edit')
            ->bind('products_category', ORM::factory('ProductsCategory')->find_all())
            ->bind('product', ORM::factory('Products', $product_id));

        $this->template->content = $content;
    }




    /**
     * Редактирование акции
     */
    public function action_stock_edit()
    {
        $stock_id = (int) $this->request->param('id');


        if($stock_id > 0)
        {
            $this->template->breadcrumb = array('admin/news_edit/'.$stock_id => 'Редактирование акции');
            $data = ORM::factory('Stock', $stock_id);




            // Для красивых checkbox
            $this->template->scripts[] = array('media/js/admin/bootstrap-toggle.js', array('type' => 'text/javascript', 'charset' => 'utf-8') );
          //  $this->template->styles[]  = array('media/css/admin/bootstrap-toggle.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet'));


          //  $this->template->styles[]  = array('media/css/admin/elfinder/elfinder.min.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet'));
          //  $this->template->styles[]  = array('media/css/admin/elfinder/theme.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet'));

            $this->template->scripts[] = array('media/js/uploadify/jquery.uploadify.js', array('type' => 'text/javascript', 'charset' => 'utf-8') );
           // $this->template->styles[]  = array('media/js/uploadify/uploadify.css', array('media' => 'screen', 'type' => 'text/css', 'rel' => 'stylesheet'));



            // $this->template->scripts[] = array('media/js/admin/elfinder/elfinder.min.js', array('type' => 'text/javascript', 'charset' => 'utf-8') );

           // $this->template->scripts[] = array('media/js/admin/elfinder/elfinder.min.js', array('type' => 'text/javascript', 'charset' => 'utf-8') );
           // $this->template->scripts[] = array('media/js/admin/elfinder/i18n/elfinder.ru.js', array('type' => 'text/javascript', 'charset' => 'utf-8') );

            $content = View::factory('admin/stock/stock_edit')
                ->bind('stock', $data);

            $this->template->content = $content;
        }
    }

    /**
     * Сохранение акции
     */
    public function action_stock_save()
    {

        if($this->request->is_ajax() && $this->request->post()){

            $this->auto_render = false;
            //Парсим ответ
            parse_str( $this->request->post('post_data'), $post_data);

            //Модель работы с новостями
            $model_stock = new Model_Stock();
            $validate = $model_stock->validate($post_data, true);

            //проверяем правильность ввода
            if( $validate->check()){
                //Если валидация ок, сохраняемся
                $model_stock->save_stock($post_data);

                echo json_encode(array('status'=>true, 'message'=>'Успешно сохранено в БД'));
            } else {
                echo json_encode(array('status'=>false, 'message'=>$validate->errors('page_error')));
            }
            return;

        }
    }

    //////// Работа с категориями

    // Добавление категории
    public function action_products_category_add()
    {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            $post_data['url'] = $this->request->post('url');
            //Название категории
            $post_data['name'] = $this->request->post('name');
            $post_data['title'] = $this->request->post('title');

            $product_category_model = ORM::factory('ProductsCategory');
            //validation
            $validate = $product_category_model->validate($post_data);
            if($validate->check()) {
                //Добавляем новую новость
                $insert_id = $product_category_model->add_product_category($post_data);
                echo json_encode(array('status'=>true, 'message'=>'Категория успешно добавлена!', 'insert_id'=>$insert_id));
            }
            else{
                //if the validation fails, return the error message
                echo json_encode(array('status'=>false, 'message'=>$validate->errors('news_error')));
            }
        }
    }

    /**
     * Статус категории
     */
    public function action_products_category_active()
    {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            // Меняем статус на противоположный
            $active = DB::query(Database::UPDATE, "UPDATE `products_category` SET active = NOT active WHERE id =". $this->request->post('stock_id'))->execute();
            echo json_encode(array('status'=>$active));
        }
    }

    public function action_products_category_delete()
    {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;
            $categoty_id = $this->request->post('categoty_id');
            echo json_encode(array('status'=>Model_ProductsCategory::delete_category($categoty_id)));
            return;
        }
    }
}