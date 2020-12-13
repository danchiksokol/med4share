<?php defined('SYSPATH') or die('No direct script access.');

ini_set('max_execution_time', 900);
set_time_limit(0);

/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 26.09.2017
 * Time: 17:45
 */


class Controller_Admin_Photo extends Controller_Admin_Admin {

    private $pathGallery; // = DOCROOT.'media'.DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR.'gallery';
    private $dirSep;

    public function before()
    {
        $this->pathGallery = DOCROOT.'media'.DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR.'gallery';
        $this->dirSep = DIRECTORY_SEPARATOR;
        parent::before();
    }

    public function after()
    {
        $this->template->breadcrumb = array_merge( array('admin/photo' => 'Фотогалереи'), $this->template->breadcrumb);
        parent::after();
    }

    public function action_photo() {

        foreach(glob($this->pathGallery.'/*', GLOB_ONLYDIR) as $dir) {
            $dirs[] = basename($dir);
        }
        
        $content = View::factory('admin/photo/gallery_list')->bind('dirs', $dirs);
        $this->template->content = $content;
    }

    public function action_processing()
    {
        if($this->request->is_ajax() && $this->request->post()){
            $this->auto_render = false;

            $folderName = $this->request->post('folderName');


            $mainDir = $this->pathGallery . $this->dirSep . $folderName . $this->dirSep;

            if( ! is_dir( $mainDir. 'preview' ) ){ // Для предпросмотра
                mkdir( $mainDir. 'preview', 0755 );
            }

            if( ! is_dir( $mainDir. 'review' ) ){ // обработаные для сайта
                mkdir( $mainDir. 'review', 0755 );
            }


            $photos = glob($mainDir. '*.{jpg,JPG,jpeg,png,gif}', GLOB_BRACE);

            foreach( $photos as $k => $v ) {
                $nameImg = ($k + 1).'m';

                // Проверяем наличие файла
                if( ! file_exists( $mainDir.'preview/'.$nameImg.'.jpg' ) ) {
                    $image = Image::factory($v);
                    
                    if( $image->width > $image->height ) {
                    	$image->resize(270, 171, Image::INVERSE);
                    	//$image->crop(171, 171, 0, 0); //кадрируем квадрат 200*200 из центра
                    	$image->crop(270, 171, null, null); //кадрируем квадрат 100*100 от координат x=50, y=50
                    }
                    else {
                    	$image->resize(108, 171, Image::INVERSE);
                    	//$image->crop(171, 171, 0, 0); //кадрируем квадрат 200*200 из центра
                    	$image->crop(108, 171, null, null); //кадрируем квадрат 100*100 от координат x=50, y=50
                    }
                    $image->save($mainDir.'preview/'.$nameImg.'.jpg', 90);
                    
                   
                }
            }

            foreach( $photos as $k => $v ) {

                $nameImg = ($k + 1).'b';

                // Проверяем наличие файла
                if( ! file_exists( $mainDir.'review/'.$nameImg.'.jpg' ) ) {
                    $image = Image::factory($v);
                    $image->resize(1000, 1000, Image::INVERSE);
					//$image->crop(1000, 1000, 0, 0); //кадрируем квадрат 200*200 из центра 
                    $image->save($mainDir.'review/'.$nameImg.'.jpg', 90);
                }
            }

            echo json_encode(array('status'=> true ));
        }
    }

    public function action_delete()
    {
        if($this->request->is_ajax() && $this->request->post()) {
            $this->auto_render = false;

            $folderName = $this->request->post('folderName');

            $mainDir = $this->pathGallery . $this->dirSep . $folderName . $this->dirSep;

            if(  is_dir( $mainDir. 'preview' ) ){ // Удаляем
                $this->deleteDir ( $mainDir. 'preview' );
            }

            if( is_dir( $mainDir. 'review' ) ){ // Удаляем
                $this->deleteDir ( $mainDir. 'review' );
            }


            echo json_encode(array('status'=> true ));
        }
    }



    private function deleteDir($dirPath) {

        if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
            $dirPath .= '/';
        }
        $files = glob($dirPath . '*', GLOB_MARK);
        foreach ($files as $file) {
            if (is_dir($file)) {
                self::deleteDir($file);
            } else {
                unlink($file);
            }
        }
        rmdir($dirPath);
    }

}