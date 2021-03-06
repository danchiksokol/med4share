<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_elFinder {
    const VENDOR_VERSION        = '2.1';
    const VENDOR_DIR            = 'elfinder-2.1/';
    
    public $config              = NULL;
    public $configJS            = NULL;
    
    private static $_instance   = NULL;
   
    private $_elFinder          = NULL;
    
    public function __construct() {
        if (($path = Kohana::find_file('vendor', self::VENDOR_DIR.'elFinder.init'))) {
            ini_set('include_path', ini_get('include_path').PATH_SEPARATOR.dirname(dirname($path)));
            require_once self::VENDOR_DIR . 'elFinder.init.php';
            //require_once self::VENDOR_DIR . 'connector.php';


            $opts = array(
                // 'debug' => true,
                'roots' => array(
                    array(
                        'driver'        => 'LocalFileSystem',   // driver for accessing file system (REQUIRED)
                        'root'            => DOCROOT.'media/files',                       // path to root directory
                        'URL'             => URL::site('/media/files', TRUE) . '/', // root directory URL
                        'path'            => DOCROOT.'media/files',
                        'rootAlias'       => 'Home',       // display this instead of root directory name
                    )
                )
            );

            $this->config       = Kohana::$config->load('elfinder');


            $this->configJS     = Kohana::$config->load('elfinder-js');


            $this->_elFinder = new elFinderConnector(new elFinder($opts));
        }
    }
    
    public static function instance() {
        if (!isset(self::$_instance))
            self::$_instance = new Kohana_elFinder();

        return self::$_instance;
    }
    
    public function start($elementID = 'finder') {
        return View::factory('elfinderJS')
                ->bind('elementID', $elementID)
                ->bind('finderLang', $this->configJS->lang);
    }
    
    public function run() {
        return $this->_elFinder->run();
    }
}
