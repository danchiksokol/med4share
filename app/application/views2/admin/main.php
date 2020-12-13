<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo substr(I18n::$lang, 0, 2); ?>" lang="<?php echo substr(I18n::$lang, 0, 2); ?>"> 
<head> 
<meta http-equiv="Content-Type" content="text/html;" charset=utf-8" /> 
<meta name="language" content="<?php echo I18n::$lang ?>" /> 
<title><?php echo $title ?></title>
<?php foreach ($styles as $file) echo HTML::style($file[0], $file[1]), PHP_EOL ?>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php foreach ($scripts as $file) echo HTML::script($file[0], $file[1]), PHP_EOL ?>
</head>
<body>
<body>
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">На сайт</a>
        </div>
        <div class="collapse navbar-collapse pull-right">
            <ul class="nav navbar-nav">
                <li><a href="#" class="active">Добрый день <? if(Auth::instance()->logged_in()) echo Auth::instance()->get_user()->username; ?></a></li>
                <li><a href="/login/logout">Выйти</a></li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</div><!-- /.navbar -->



<div class="container-full">

    <div class="row row-offcanvas row-offcanvas-right">

        <?=$left_menu;?>


        <div class="col-sm-10">
            <?=$breadcrumbs?>
            <?=$content?>


        </div><!--/span-->


    </div><!--/row-->







<? /*
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/">На сайт</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Добрый день <a href="#" class="navbar-link"><? if(Auth::instance()->logged_in()) echo Auth::instance()->get_user()->username; ?></a>
              <a href="/login/logout">Выйти</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="/admin">Главная админки</a></li>
              <li><a href="/admin/">Меню 1</a></li>
              <li><a href="/admin/">Меню 2</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    <div class="container-fluid">
      <div class="row-fluid">
		<?=$main_menu;?>
        <div class="span10">
        	<?=$breadcrumbs?>
        	<?=$content?>
        </div><!--/span-->
      </div><!--/row-->
	</div>
      <hr>

      <footer>
        <p>&copy; Company <?=date('Y')?></p>
      </footer>

    </div><!--/.fluid-container-->
<?//php ProfilerToolbar::render(Kohana::$environment === Kohana::DEVELOPMENT); ?>
 */ ?>
</body>
</html>
