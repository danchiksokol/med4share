<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/Kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/Kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('Europe/Moscow');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'ru_RU.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Optionally, you can enable a compatibility auto-loader for use with
 * older modules that have not been updated for PSR-0.
 *
 * It is recommended to not enable this unless absolutely necessary.
 */
//spl_autoload_register(array('Kohana', 'auto_load_lowercase'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

/**
 * Set the mb_substitute_character to "none"
 *
 * @link http://www.php.net/manual/function.mb-substitute-character.php
 */
mb_substitute_character('none');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('ru-RU');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV'])) {
    Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
} else {
    Kohana::$environment = ($_SERVER['REMOTE_ADDR'] == '127.0.0.1' ? Kohana::DEVELOPMENT : Kohana::PRODUCTION);
}

if (isset($_SERVER['SERVER_PROTOCOL']))
{
	// Replace the default protocol.
	HTTP::$protocol = $_SERVER['SERVER_PROTOCOL'];
}

/**
 * Cookie
 */
// Set the magic salt to add to a cookie
Cookie::$salt = 'fjsdijeihrewhb6sugfuyegwufewgwb';
// Set the number of seconds before a cookie expires
Cookie::$expiration = Kohana_Date::WEEK; // by default until the browser close
// Restrict the path that the cookie is available to
//Cookie::$path = '/';
// Restrict the domain that the cookie is available to
//Cookie::$domain = 'www.mydomain.com';
// Only transmit cookies over secure connections
//Cookie::$secure = TRUE;
// Only transmit cookies over HTTP, disabling Javascript access
//Cookie::$httponly = TRUE;
Session::$default = 'database';

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::init(array(
    'base_url'   => '/',
    'index_file' => FALSE, // SEO (avoid index.php/mycontroller/action)
    // 'profile' => (Kohana::$environment !== Kohana::PRODUCTION), //see how good you are
    // 'caching' => (Kohana::$environment === Kohana::PRODUCTION),
        'errors' => true, //for custom 404, 500 FALSE for internal error handling
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
    'auth'       => MODPATH.'auth',       // Basic authentication
    'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
    'database'   => MODPATH.'database',   // Database access
    'image'      => MODPATH.'image',      // Image manipulation
    'orm'        => MODPATH.'orm',        // Object Relationship Mapping
    'orm-mptt' 	 => MODPATH.'orm-mptt',
	// 'minion'     => MODPATH.'minion',     // CLI Tasks
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
    // 'profilertoolbar' => MODPATH.'profilertoolbar',
    'elfinder'  => MODPATH.'elfinder',
    'phpexcel'   => MODPATH.'phpexcel',
    'pagination' => MODPATH.'pagination',
    'mailer' => MODPATH.'mailer',
    //'simplestats' => MODPATH.'simplestats'
	));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('AdminPageStatic', 'admin/<action>(/<id>)',
    array('action'=> 'page.[a-zA-Z0-9_]+', 'id' => '[0-9]+')
)
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'Page',
        'action'     => 'index', /// тут както не работает
));

Route::set('AdminNewsTags', 'admin/newstags(/<action>(/<id>))')
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'NewsTags',
        'action'     => 'newstags',
    ));

//Администрирование новостей
Route::set('AdminNews', 'admin/<action>(/<id>)',
    array('action'=> 'news.[a-zA-Z0-9_]+', 'id' => '[0-9]+')
)
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'News',
        'action'     => 'index', /// тут както не работает
    ));




Route::set('AdminRegistracia', 'admin/registracia')
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'Registracia',
        'action'     => 'registracia', /// тут както не работает
    ));

//Администрирование новостей
Route::set('AdminCalendarEvent', 'admin/calendar(/<action>(/<id>))')
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'Calendar',
        'action'     => 'calendar',
    ));

Route::set('AdminBlocks', 'admin/blocks(/<action>(/<id>))')
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'Blocks',
        'action'     => 'index',
    ));


//Администрирование новостей
Route::set('AdminUsers', 'admin/users(/<action>(/<id>))')
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'Users',
        'action'     => 'users', /// тут както не работает
    ));

Route::set('AdminMenuRheumatology', 'admin/menu_rheumatology(/<action>)')
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'MenuRheumatology',
        'action'     => 'menu_rheumatology',
    ));

Route::set('AdminMenuNeurology', 'admin/menu_neurology(/<action>)')
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'MenuNeurology',
        'action'     => 'menu_neurology',
    ));


Route::set('AdminMenu', 'admin/menu(/<action>)')
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'Menu',
        'action'     => 'menu',
    ));

Route::set('AdminDopMenu', 'admin/dopmenu(/<action>)')
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'DopMenu',
        'action'     => 'dopmenu',
    ));

Route::set('AdminComments', 'admin/comments(/<action>)')
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'Comments',
        'action'     => 'comments',
    ));

Route::set('AdminFeedback', 'admin/feedback(/<action>)')
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'Feedback',
        'action'     => 'feedback',
    ));

Route::set('AdminManual', 'admin/manual(/<action>)')
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'Manual',
        'action'     => 'manual',
    ));

Route::set('AdminRedirects', 'admin/redirects(/<action>)')
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'Redirects',
        'action'     => 'redirects',
    ));

//Работа с файлами
Route::set('WorkFiles', 'admin/files(/<id>)',
    array('action'=> 'files', 'id' => '[0-9]+')
)
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'Files',
        'action'     => 'files',
    ));
   
Route::set('AdminExperts', 'admin/experts(/<action>(/<id>))')
    ->defaults(array( 
    	'directory'  => 'Admin',
        'controller' => 'Experts',
        'action'     => 'experts'
    ));

Route::set('AdminExpertsf', 'admin/expertsf(/<action>(/<id>))')
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'Expertsf',
        'action'     => 'expertsf'
    ));

Route::set('AdminPhoto', 'admin/photo(/<action>(/<id>))')
    ->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'Photo',
        'action'     => 'photo'
    ));

Route::set('admin', 'admin(/<action>)')
    ->defaults( array(
        'directory'  => 'Admin',
        'controller' => 'Admin',
        'action'     => 'index',
    ));


// --------------------------------
Route::set('login', 'login(/<action>)')
    ->defaults(array( // application/classes/controller/login.php
        'directory'  => 'User',
        'controller' => 'User',
        'action'     => 'login',
    ));
    
/*Route::set('registracia', 'registracia(/<action>)')
	->defaults(array( // application/classes/controller/login.php
	    'controller' => 'Registracia',
	    'action'     => 'index',
	));*/

// -> Ревматология
Route::set('rheumatologyExperts', 'rheumatology/experts(/<letter>)',
    array('letter'=> '[а-яА-Я]')
)
    ->defaults(array(
        'directory' => 'Rheumatology',
        'controller' => 'Experts',
        'action'     => 'index'
    ));

Route::set('rheumatologyExpertsOnly', 'rheumatology/experts(/<expert_url>)',
    array('expert_url'=> '[a-zA-Z0-9_-]+')
)
    ->defaults(array(
        'directory' => 'Rheumatology',
        'controller' => 'Experts',
        'action'	 => 'experts_only'
    ));

Route::set('rheumatologyNewsTag', 'rheumatology/news/tag(/<tagname>(/page<page>))', array(
    'tag' => '(tag)',
    'tagname' => '[a-zA-Z0-9А-Яа-яЁё_-]+',
    'page' => '[0-9]+',
))
    ->defaults(array(
        'directory' => 'Rheumatology',
        'controller' => 'News',
        'action'     => 'news_list',
    ));

Route::set('rheumatologyNewsList', 'rheumatology/news(/page<page>)', array(
    'page' => '[0-9]+',
))
    ->defaults(array(
        'directory' => 'Rheumatology',
        'controller' => 'News',
        'action'     => 'news_list',
    ));


Route::set('rheumatologyNewsOnly', 'rheumatology/news(/<news_url>)',
    array('news_url'=> '[a-zA-Z0-9_-]+')
)
    ->defaults(array(
        'directory' => 'Rheumatology',
        'controller' => 'News',
        'action'	 => 'news_only'
    ));

Route::set('rheumatologyCalendar', 'rheumatology/calendar')
    ->defaults(array(
        'directory' => 'Rheumatology',
        'controller' => 'Calendar',
        'action'     => 'index'
    ));

Route::set('rheumatologyCalendarOnly', 'rheumatology/calendar/<event_url>',
    array('event_url'=> '[a-zA-Z0-9_-]+')
)
    ->defaults(array(
        'directory' => 'Rheumatology',
        'controller' => 'Calendar',
        'action'	 => 'only'
    ));

Route::set('rheumatologySearch', 'rheumatology/search(/<action>(/<value>))')
    ->defaults(array( // application/classes/controller/login.php
        'directory' => 'Rheumatology',
        'controller' => 'Search',
        'action'     => 'index'
    ));

/*Route::set('rheumatologyPageStatic', 'rheumatology(/<url>)', //Статические страницы из БД
    array(
        'url' => '[a-zA-Z0-9_/_-]+',
    ))
    ->defaults(array( 
        'controller' => 'PageStatic',
        'action'     => 'index',
    ));*/

// <- Ревматология

// -> Неврология
Route::set('neurologyExperts', 'neurology/experts(/<letter>)',
    array('letter'=> '[а-яА-Я]')
)
    ->defaults(array(
        'directory' => 'Neurology',
        'controller' => 'Experts',
        'action'     => 'index'
    ));

Route::set('neurologyExpertsOnly', 'neurology/experts(/<expert_url>)',
    array('expert_url'=> '[a-zA-Z0-9_-]+')
)
    ->defaults(array(
        'directory' => 'Neurology',
        'controller' => 'Experts',
        'action'	 => 'experts_only'
    ));

Route::set('neurologyNewsTag', 'neurology/news/tag(/<tagname>(/page<page>))', array(
    'tag' => '(tag)',
    'tagname' => '[a-zA-Z0-9А-Яа-яЁё_-]+',
    'page' => '[0-9]+',
))
    ->defaults(array(
        'directory' => 'Neurology',
        'controller' => 'News',
        'action'     => 'news_list',
    ));

Route::set('neurologyNewsList', 'neurology/news(/page<page>)', array(
    'page' => '[0-9]+',
))
    ->defaults(array(
        'directory' => 'Neurology',
        'controller' => 'News',
        'action'     => 'news_list',
    ));


Route::set('neurologyNewsOnly', 'neurology/news(/<news_url>)',
    array('news_url'=> '[a-zA-Z0-9_-]+')
)
    ->defaults(array(
        'directory' => 'Neurology',
        'controller' => 'News',
        'action'	 => 'news_only'
    ));

Route::set('neurologyCalendar', 'neurology/calendar')
    ->defaults(array(
        'directory' => 'Neurology',
        'controller' => 'Calendar',
        'action'     => 'index'
    ));

Route::set('neurologyCalendarOnly', 'neurology/calendar/<event_url>',
    array('event_url'=> '[a-zA-Z0-9_-]+')
)
    ->defaults(array(
        'directory' => 'Neurology',
        'controller' => 'Calendar',
        'action'	 => 'only'
    ));

Route::set('neurologySearch', 'neurology/search(/<action>(/<value>))')
    ->defaults(array( // application/classes/controller/login.php
        'directory' => 'Neurology',
        'controller' => 'Search',
        'action'     => 'index'
    ));
// <- Неврология

Route::set('calendar', 'calendar')
    ->defaults(array( // application/classes/controller/login.php
        'controller' => 'Calendar',
        'action'     => 'index'
    ));



Route::set('CalendarOnly', 'calendar/<event_url>',
    array('event_url'=> '[a-zA-Z0-9_-]+')
)
    ->defaults(array(
        'controller' => 'Calendar',
        'action'	 => 'only'
    ));


Route::set('Comments', 'comment(/<action>(/<type>)(/<object_id>(/<place>)(/<visibility>)))', array(
    'type'       => '\w+',
    'object_id'  => '[-_\w]+',
    'place'      => '(inside|next)',
    'visibility' => '(show|hide)'
))
    ->defaults(array(
        'controller' => 'Comment',
        'action'     => 'tree',
        'visibility' => 'show',
        'lang'       => 'ru',
    ));


Route::set('search', 'search(/<action>(/<value>))')
    ->defaults(array( // application/classes/controller/login.php
        'controller' => 'Search',
        'action'     => 'index'
));

Route::set('photo', 'photo(/<action>)')
    ->defaults(array( // application/classes/controller/login.php
        'controller' => 'Photo',
        'action'     => 'index',
    ));

Route::set('user', 'profile(/<action>)')
    ->defaults(array( // application/classes/controller/login.php
        'directory'  => 'User',
        'controller' => 'User'
    ));

// ajax запросы
Route::set('ajax', 'ajax/(<controller>(/<action>(/<id>)))')
    ->defaults(array(
        'directory' => 'Ajax'
    ));

Route::set('NewsTag', 'news/tag(/<tagname>(/page<page>))', array(
    'tag' => '(tag)',
    'tagname' => '[a-zA-Z0-9А-Яа-яЁё_-]+',
    'page' => '[0-9]+',
))
    ->defaults(array(
        'controller' => 'News',
        'action'     => 'news_list',
    ));

Route::set('NewsRazdelTag', 'news/tag(/<tagname>(/page<page>))', array(
    'tag' => '(tag)',
    'tagname' => '[a-zA-Z0-9А-Яа-яЁё_-]+',
    'page' => '[0-9]+',
))
    ->defaults(array(
        'controller' => 'News',
        'action'     => 'news_list',
    ));

Route::set('NewsList', 'news(/page<page>)', array(
    'page' => '[0-9]+',
))
    ->defaults(array(
        'controller' => 'News',
        'action'     => 'news_list',
    ));


Route::set('NewsOnly', 'news(/<news_url>)',
    array('news_url'=> '[a-zA-Z0-9_-]+')
)
    ->defaults(array(
        'controller' => 'News',
        'action'	 => 'news_only'
    ));

    

Route::set('Experts', 'experts(/<letter>)',
	 array('letter'=> '[а-яА-Я]')
)
    ->defaults(array( // application/classes/controller/login.php
        'controller' => 'Experts',
        'action'     => 'index'
    ));
      
    
    
Route::set('ExpertsOnly', 'experts/<expert_url>',
    array('expert_url'=> '[a-zA-Z0-9_-]+')
)
    ->defaults(array(
        'controller' => 'Experts',
        'action'	 => 'experts_only'
    ));


Route::set('Expertsf', 'expertsf(/<letter>)',
    array('letter'=> '[a-zA-Z]')
)
    ->defaults(array( // application/classes/controller/login.php
        'controller' => 'Expertsf',
        'action'     => 'index'
    ));



Route::set('ExpertsfOnly', 'expertsf/<expert_url>',
    array('expert_url'=> '[a-zA-Z0-9_-]+')
)
    ->defaults(array(
        'controller' => 'Expertsf',
        'action'	 => 'expertsf_only'
    ));


Route::set('sponsory', 'sponsory(/<action>(/<value>))')
    ->defaults(array( // application/classes/controller/login.php
        'controller' => 'Sponsory',
        'action'     => 'index'
    ));


Route::set('module', 'module(/<action>(/<value>))')
    ->defaults(array(
        'controller' => 'Module',
        'action'     => 'index'
    ));

/*
Route::set('Registracia', 'registracia/send',
    array('page'=>'[0-9]+')
)
    ->defaults(array(
        'controller' => 'Registracia',
        'action'	 => 'send'
    ));*/



Route::set('PageStatic', '(<url>)', //Статические страницы из БД
    array(
        'url' => '[a-zA-Z0-9_/_-]+',
    ))
    ->defaults(array(
        'controller' => 'PageStatic',
        'action'     => 'other',
    ));
/*Route::set('default', '(<controller>(/<action>(/<id>)))',
    array('action'=> '[a-zA-Z0-9_]+', 'id' => '[a-zA-Z0-9_]+')
)
	->defaults(array(
		'controller' => 'index',
		'action'     => 'Index',
	));*/
