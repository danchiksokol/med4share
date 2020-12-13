<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: lamo8
 * Date: 26.09.2017
 * Time: 19:13
 */

class Controller_Module extends Controller_Template_Null {

    public function before()
    {
        parent::before();
    }

    public function action_index()
    {

    }

    public function action_gallery() {
 

        $galleryName = $this->request->param('value', false);

        if( $galleryName !== false ) {
            $dirSep = DIRECTORY_SEPARATOR;

            $pathGalleryPreview = DOCROOT.'media'.$dirSep.'files'.$dirSep.'gallery'.$dirSep.$galleryName.$dirSep.'preview'.$dirSep;
            $pathGalleryReview = DOCROOT.'media'.$dirSep.'files'.$dirSep.'gallery'.$dirSep.$galleryName.$dirSep.'review'.$dirSep;

            $photos_preview = glob($pathGalleryPreview. '*.{jpg,JPG,jpeg,png,gif}', GLOB_BRACE);

            foreach ($photos_preview as $k => $v) {
                $photos_preview[$k] = str_replace(DOCROOT, '/', $v);
            }
            
            $photos = glob($pathGalleryReview. '*.{jpg,JPG,jpeg,png,gif}', GLOB_BRACE);
 			
            
            
            foreach ($photos as $k => $v) {
            	
            	$image = Image::factory($v);
            	$type[$k] = 'h';
            	if( $image->width > $image->height ) {
            		$type[$k] = 'w';
            	}
            	
                $photos[$k] = str_replace(DOCROOT, '/', $v);
            }
            
           

            $this->template->content = View::factory('module/photoGallery')
                ->bind('photos_preview', $photos_preview)
                ->bind('photos', $photos)
                ->bind('type', $type)
                 ;

        }

    }

}
