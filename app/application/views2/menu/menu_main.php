<?
    $menu = Model::factory('MainMenu')->getMenu( $razdel_id );
    //echo '<pre>'; print_r($menu);
?>
<!-- header-right start -->
<!-- ================ -->
<div class="header-right clearfix">

    <!-- main-navigation start -->
    <!-- ================ -->
    <div class="main-navigation animated">

        <!-- navbar start -->
        <!-- ================ -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">

                <!-- Toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
 
                    <? foreach( $menu as $val) { ?>
                        <? if (count($val['child'])) { ?>
                            <li class="dropdown">
                                <a href="/<?=$val['url']?>" class="dropdown-toggle" data-toggle="dropdown"><?=$val['name']?></a>
                                <ul class="dropdown-menu">
                                    <? foreach ($val['child'] as $vv) { ?>
                                        <? if (count($vv['child'])) { ?>
                                            <li class="dropdown">
                                                <a href="/<?=$vv['url']?>" class="dropdown-toggle" data-toggle="dropdown"><?=$vv['name']?></a>
                                                <ul class="dropdown-menu">
                                                    <? foreach ($vv['child'] as $v) { ?>
                                                        <li><a href="<?=$v['url']?>"><?=$v['name']?></a></li>
                                                    <? } ?>
                                                </ul>
                                            </li>
                                        <? } else { ?>
                                            <li><a href="/<?=$vv['url']?>"><?=$vv['name']?></a></li>
                                        <? } ?>
                                    <? } ?>
                                </ul>
                            </li>
                        <? } else { ?>
                            <li>
                                <a href="<?=$val['url']?>" class="active"><?=$val['name']?></a>
                            </li>
                        <? } ?>
                    <? } ?>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- navbar end -->
    </div>
    <!-- main-navigation end -->
</div>
<!-- header-right end -->