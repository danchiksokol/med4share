<?php defined('SYSPATH') or die('No direct script access.');//защита от прямого вызова

class Controller_Photo extends Controller_Template_Main {

    public function before()
    {
        parent::before();
    }

    public function after()
    {
        $this->template->breadcrumb = array_merge(array('index' =>'Главная'), $this->template->breadcrumb);
        parent::after();
    }

    /**
     * Все новости /news/page1
     */
    public function action_index()
    {
        $this->template->title = '';
        //Передаем всё в шаблон
        $this->template->content .= View::factory('photo/index');
        $this->template->url = 'photo';
    }

    public function action_create() {

        $path_d = DOCROOT.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'1'.DIRECTORY_SEPARATOR.'d'.DIRECTORY_SEPARATOR;
        $path = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'1'.DIRECTORY_SEPARATOR;
        $path_preview = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'1'.DIRECTORY_SEPARATOR.'preview'.DIRECTORY_SEPARATOR;
        

        

        $photos_d = glob( $path_d.'*.jpg' );
        $photos = glob( $path.'*.jpg' );
        $photos_preview = glob( $path_preview.'*.jpg' );
        
        

        // Считываем файл водяного знака.
        $watermark = Image::factory(DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'site'.DIRECTORY_SEPARATOR.'logo.png');




          /*foreach( $photos_d as $k => $v ) {
              $image = Image::factory($v);
              $image->resize(270, 171, Image::INVERSE);
              $image->crop(270, 171, 0, 0); //кадрируем квадрат 200*200 из центра
              //$image->crop(100, 100, 50, 50); //кадрируем квадрат 100*100 от координат x=50, y=50
              $kk = $k + 1;
              $image->save($path.'preview/'.$kk.'.jpg', 90);
             // break;
          }*/

         foreach( $photos_d as $k => $v ) {
              if( $k < 150 ) {continue;}
            $kk = $k + 1;
            $image = Image::factory($v);
            $image->resize(960, 960);
            // Используем метод watermark
            $result = $image->watermark(
            // Задаём изображение для водяного знака
             $watermark,
            // Координата X для знака
            $image->width - $watermark->width-2,
            // Координата Y для знака
            $image->height-$watermark->height-2,
           // Коэффициент прозрачности
           100)
           // Метод render - строит изображение
           ->save($path.$kk.'.jpg', 90);
        } 


    }

    public function action_test2() {

        Request::factory(Route::get('comment/tree'));

        //Request::factory(Route::get('opt/checksearch')


    }
    
    public function action_test() {
        $this->template->url = 'photo';
        $this->template->title = '';

        $path = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'1'.DIRECTORY_SEPARATOR;
        $path_preview = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'1'.DIRECTORY_SEPARATOR.'preview'.DIRECTORY_SEPARATOR;

        $photos = glob( $path.'*.jpg' );
        $photos_preview = glob( $path_preview.'*.jpg' );

        $this->template->content .= View::factory('photo/test')
            ->bind('photos_preview', $photos_preview)
            ->bind('photos', $photos);
    }

    public function action_club_opening() {
        $this->template->url = 'photo';
        $this->template->title = 'Фотографии с открытия семейного клуба Step to Step в Подольске (Кузнечики)';

        $path = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'club-opening'.DIRECTORY_SEPARATOR;
        $path_preview = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'club-opening'.DIRECTORY_SEPARATOR.'preview'.DIRECTORY_SEPARATOR;

        $photos = glob( $path.'*.jpg' );
        $photos_preview = glob( $path_preview.'*.jpg' );

        $this->template->content .= View::factory('photo/club_opening')
            ->bind('photos_preview', $photos_preview)
            ->bind('photos', $photos);




    }

    public function action_studio_art_work() {
        $this->template->url = 'photo';
        $this->template->title = 'Фотографии из студии творчества семейного клуба Step to Step в Подольске (Кузнечики)';

        $path = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'studio_art_work'.DIRECTORY_SEPARATOR;
        $path_preview = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'studio_art_work'.DIRECTORY_SEPARATOR.'preview'.DIRECTORY_SEPARATOR;

        $photos = glob( $path.'*.jpg' );
        $photos_preview = glob( $path_preview.'*.jpg' );

        $this->template->content .= View::factory('photo/studio_art_work')
            ->bind('photos_preview', $photos_preview)
            ->bind('photos', $photos);
    }

    public function action_studio_art() {
        $this->template->url = 'photo';
        $this->template->title = 'Фотографии студии творчества семейного клуба Step to Step в Подольске (Кузнечики)';

        $path = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'studio_art'.DIRECTORY_SEPARATOR;
        $path_preview = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'studio_art'.DIRECTORY_SEPARATOR.'preview'.DIRECTORY_SEPARATOR;

        $photos = glob( $path.'*.jpg' );
        $photos_preview = glob( $path_preview.'*.jpg' );

        $this->template->content .= View::factory('photo/studio_art')
            ->bind('photos_preview', $photos_preview)
            ->bind('photos', $photos);
    }


    public function action_detskij_sad() {
        $this->template->url = 'photo';
        $this->template->title = 'Фотографии мини-детского сада семейного клуба Step to Step в Подольске (Кузнечики)';

        $path = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'detskij_sad'.DIRECTORY_SEPARATOR;
        $path_preview = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'detskij_sad'.DIRECTORY_SEPARATOR.'preview'.DIRECTORY_SEPARATOR;

        $photos = glob( $path.'*.jpg' );
        $photos_preview = glob( $path_preview.'*.jpg' );

        $this->template->content .= View::factory('photo/detskij_sad')
            ->bind('photos_preview', $photos_preview)
            ->bind('photos', $photos);
    }

      public function action_birthday_29_11_2014() {
        $this->template->url = 'photo';
        $this->template->title = 'Празднование дня рождения в семейном клубе Step to Step в Подольске (Кузнечики)';

        $path = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'birthday_29_11_2014'.DIRECTORY_SEPARATOR;
        $path_preview = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'birthday_29_11_2014'.DIRECTORY_SEPARATOR.'preview'.DIRECTORY_SEPARATOR;

        $photos = glob( $path.'*.jpg' );
        $photos_preview = glob( $path_preview.'*.jpg' );

        $this->template->content .= View::factory('photo/birthday_29_11_2014')
            ->bind('photos_preview', $photos_preview)
            ->bind('photos', $photos);
    }

    public function action_new_year_2015() {
        $this->template->url = 'photo';
        $this->template->title = 'Новогодняя Елка 2015 в клубе Step to step';

        $path = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'new_year_2015'.DIRECTORY_SEPARATOR;
        $path_preview = DOCROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR.'new_year_2015'.DIRECTORY_SEPARATOR.'preview'.DIRECTORY_SEPARATOR;

        $photos = glob( $path.'*.jpg' );
        $photos_preview = glob( $path_preview.'*.jpg' );

        $this->template->content .= View::factory('photo/new_year_2015')
            ->bind('photos_preview', $photos_preview)
            ->bind('photos', $photos);
    }
}