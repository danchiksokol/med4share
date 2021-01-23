<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <base href="<?=URL::base('http'); ?>" />
    <meta name="description" content="<?=$description?>" />
    <meta name="keywords" content="<?=$keywords?>" />

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="media/favicon.ico">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="/media/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="/media/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Fontello CSS -->
    <link href="/media/fonts/fontello/css/fontello.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="/media/plugins/rs-plugin/css/settings.css" media="screen" rel="stylesheet">
    <link href="/media/plugins/rs-plugin/css/extralayers.css" media="screen" rel="stylesheet">
    <link href="/media/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="/media/css/animations.css" rel="stylesheet">
    <link href="/media/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link type="text/css" href="/media/calendar_zabuto/zabuto_calendar.min.css" rel="stylesheet" media="screen" />
	<link href="/media/css/hexagon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/media/calendar/css/eventCalendar.css">
    <link rel="stylesheet" href="/media/calendar/css/eventCalendar_theme_responsive.css">

    <!-- iDea core CSS file -->
    <link href="/media/css/style.css" rel="stylesheet">

    <!-- Style Switcher Styles (Remove these two lines) -->
    <link href="index" data-style="styles" rel="stylesheet">
    <link href="/media/style-switcher/style-switcher.css" rel="stylesheet">
    <link href="/media/js/fancybox/jquery.fancybox.min.css" rel="stylesheet">

    <!-- Custom css -->
    <link href="/media/css/custom.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>



<body class="front no-trans">
<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">

    <!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
    <!-- ================ -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-2 col-sm-6">

                </div>
                <div class="col-xs-10 col-sm-6">

                    <!-- header-top-second start -->
                    <!-- ================ -->
                    <div id="header-top-second"  class="clearfix">

                        <!-- header top dropdowns start -->
                        <!-- ================ -->

                        <div class="header-top-dropdown">

                            <div class="btn-group dropdown">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i> Поиск</button>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                    <li>
                                        <form role="search" class="search-box" action="search" method="get">
                                            <div class="form-group has-feedback">
                                                <input type="text" class="form-control" name="text" placeholder="Поиск">
                                                <i class="fa fa-search form-control-feedback"></i>
                                            </div>
                                        </form>
                                    </li>
                                    <div class="pull-right"><a href="/search"> Расширенный поиск</a></div>
                                </ul>
                            </div>
                            <?=View::factory('account/header') ?>

                            <?=View::factory('menu/header_switch_razdel')
                                ->bind('site_razdel_id', $site_razdel_id)
                                ->bind('site_razdel', $site_razdel)
                                ->bind('subject_id', $subject_id)
                                ->bind('controller', $controller)
                            ?>


                        </div>
                    </div>
                    <!-- header-top-second end -->

                </div>
            </div>
        </div>
    </div>
    <!-- header-top end -->

    <!-- header start classes:
        fixed: fixed navigation mode (sticky menu) e.g. <header class="header fixed clearfix">
         dark: dark header version e.g. <header class="header dark clearfix">
    ================ -->
    <header class="header fixed clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                    <!-- header-left start -->
                    <!-- ================ -->
                    <div class="header-left clearfix">

                        <!-- logo -->
                        <div class="logo">
                            <!--img id="logo" src="/media/img/site/logo.png"><-->
                            <a href=""><img src="/media/img/site/logo.png" alt="med4share.ru"></a>
                        </div>

                    </div>
                    <!-- header-left end -->

                </div>
                <div class="col-md-9">
                    <?=View::factory('menu/menu_main')->bind('razdel_id', $site_razdel_id );?>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->




    <!-- page-intro start-->
    <!-- ================ -->
    <?=View::factory('module/breadcrumb')->bind('breadcrumb', $breadcrumb)?>

    <!-- page-intro end -->

    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container">

            <? if( strlen($menu_left) > 0 && strlen($menu_right) > 0 ) { ?>
                <div class="container">
                    <div class="row">
                        <?=$menu_left ?>
                        <div class="main col-md-6">
                            <?=$contentMenu ?>
                        </div>
                        <?=$menu_right?>
                    </div>
                </div>
            <? } elseif( strlen($menu_left) > 0 ) { ?>
                <div class="container">
                    <div class="row">
                        <?=$menu_left ?>
                        <div class="main col-md-9">
                            <?=$contentMenu ?>
                        </div>
                    </div>
                </div>
            <? } elseif( strlen($menu_right) > 0 ) { ?>
                <div class="container">
                    <div class="row">
                        <div class="main col-md-9">
                            <?=$contentMenu ?>
                        </div>
                        <?=$menu_right?>
                    </div>
                </div>
            <?} else { ?>
                <div class="container">
                    <div class="row">
                        <div class="main col-md-12">
                            <?=$contentMenu ?>
                        </div>
                    </div>
                </div>
            <? } ?>



        <div class="container">
            <div class="row">
                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">
                    <?=$content; // Контент?>
                    <?=View::factory('module/comments') // комментарии
                            ->bind('subject_id', $subject_id)
                            ->bind('controller', $controller)
                            ->bind('is_comments', $is_comments);
                    ?>

                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->



    <? if( $url == 'index' || $url == 'rheumatology' || $url == 'neurology' ) { // Показываем на главной?>

    <div class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Новости</h2>

                            <div id="indexNews" razdel="<?=$url?>"></div>
                            <? // echo View::factory('news/news_index')->set('news_data', Model::factory('News')->get_index_news());?>
                            <div class="space hidden-md hidden-lg"></div>
                        </div>
                        <div class="col-md-6">
                            <h2>Календарь событий</h2>
                            <div id="eventCalendar" style="width: 500px; margin: 50px auto;"></div>
                            <div id="calendar-event" razdel="<?=$url?>"></div>
                            <?//=View::factory('module/calendar_event');?>
                            <br />
                            <? if( $url == 'index' ) : ?>
<!--                                --><?//=View::factory('module/block/calendar_index')->set('blocks_name', 'calendar_index');?>
                            <? endif; ?>
                            <? if( $url == 'rheumatology' ) : ?>
                                <?=View::factory('module/block/calendar_index')->set('blocks_name', 'calendar_index_rheumatology');?>
                            <? endif; ?>
                            <? if( $url == 'neurology' ) : ?>
                                <?=View::factory('module/block/calendar_index')->set('blocks_name', 'calendar_index_neurology');?>
                            <? endif; ?>
                        </div>
                    </div>
                    <br>
                    <div class="separator-2"></div>
                </div>
            </div>
        </div>
    </div>
    <? } ?>

    <?=View::factory('module/block/sponsor')->set('blocks_name', 'sponsor');?>

    <!-- .footer start -->
    <!-- ================ -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="footer-content">
                        <!--<div class="logo-footer"><img id="logo-footer" src="/media/img/site/logo.png" alt=""></div>-->
                       <p style="font-size: 12px">Сайт <a href="http://www.med4share.ru">www.med4share.ru</a> является частным информационным ресурсом. Сведения, содержащиеся на страницах сайта, могут не совпадать с мнениями отдельных специалистов и рекомендациями учреждений государственной, муниципальной или частной систем здравоохранения. Информация, размещенная на сайте, носит рекомендательный характер, не является прямым руководством к обследованию и лечению конкретного больного и не определяет действия для решения определенной клинической ситуации. Ответственность за принятие клинических решений несет лечащий врач. Авторы сайта сохраняют за собой право публиковать информацию о лекарственных препаратах и методах лечения, которые еще не одобрены в РФ. Посещение больными, их родственниками и близкими страниц, предназначенных для профессионалов, расценивается как их прямое волеизъявление на получение информации, адресованной специалистам в области медицины.</p>
                    </div>
                </div>
				<!--
                <div class="col-sm-7 col-md-4 col-lg-3 col-lg-offset-1">
                    <div class="footer-content">
                        <h2>Links</h2>
                        <nav>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/">Главная</a></li>
                                <li><a href="#">Новости</a></li>
                                <li><a href="#">Календарь событий</a></li>
                                <li><a href="#">О портале</a></li>
                                <li><a href="#">Разделы</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-5 col-md-3 col-lg-3">
                    <div class="footer-content">
                        <h2>Поиск</h2>
                        <form class="margin-bottom-clear">
                            <div class="form-group has-feedback">
                                <label class="sr-only" for="subscribe">Поиск</label>
                                <input type="email" class="form-control" id="subscribe" placeholder="Поиск" name="subscribe" required>
                                <i class="fa fa-search form-control-feedback"></i>
                                <button type="submit" class="btn btn-white btn-sm">Найти</button>
                            </div>
                        </form>
                    </div>
                </div>
				-->
				<div class="col-sm-2 col-md-2 col-lg-2">
                    <div class="footer-content">

						<button type="submit" class="btn btn-white btn-sm" data-toggle="modal" data-target="#feedbackModal">Отзывы и пожелания</button>
                        <?= View::factory('module/feedback_modal'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer end -->

<?=View::factory('template/footer'); ?>


<?/* View::factory('module/site_razdel_panel')
    ->bind('site_razdel_id', $site_razdel_id )
    ->bind('subject_id', $subject_id)
    ->bind('controller', $controller)
;*/
?>
<?=View::factory('module/site_razdel_panel')
    ->bind('subject_id', $subject_id)
    ->bind('controller', $controller)
    ->bind('site_razdel_id', $site_razdel_id )
;
?>

<? if( Auth::instance()->logged_in('admin') ) {
    echo View::factory('module/admin_panel')
    ->bind('subject_id', $subject_id)
    ->bind('controller', $controller)
    ;
}
?>
