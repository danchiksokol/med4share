<?php
/**
 * Переключатель между разделов
 * Created by PhpStorm.
 * User: lamo8
 * Date: 23.03.2017
 * Time: 0:51
 */
?>


<?
$razdels = array(
    0 => array( 'url' => '', 'name' => 'Онкология'),
    3 => array( 'url' => 'rheumatology', 'name' => 'Ревматология'),
    /* 4 => array( 'url' => 'neurology', 'name' => 'Неврология') */
);
$html = '';

foreach ( $razdels as $key => $val ) {

    $switchUrl = '';
    if( in_array( $controller, array('News', 'Experts', 'Calendar', 'Search') ) ){
        $switchUrl .= $val['url'].'/'.strtolower($controller);
    }
    else {
        $switchUrl .= $val['url'];
    }

    if( $site_razdel_id == $key ) {
        $currentRazdel = $val['name'];
    }
    else {
        $html .= '<li><a href="'.$switchUrl.'" style="font-size: 16px; font-weight: bold;">'.$val['name'].' <i class="glyphicon glyphicon-chevron-up"></i></a></li>'."\n";
    }
}



    // формируем ссылку
/*
    if( $site_razdel == 'rheumatology' ) {
        $switchUrl =  '/';
        $switchText = 'Онкология';
        $currentRazdel = 'Ревматология';
    }
    else {
        $switchUrl =  '/rheumatology/';
        $switchText = 'Ревматология';
        $currentRazdel = 'Онкология';
    }
*/

    if( in_array( $controller, array('News', 'Experts', 'Calendar', 'Search') ) ){
        $switchUrl .= strtolower($controller).'/';
    }
?>

<!--div class="btn-group dropdown main-navigation ">
    <nav class="navbar navbar-default"> 
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="font-size: 16px; font-weight: bold; color:#E96722"><?=$currentRazdel?><i class="glyphicon glyphicon-chevron-down"></i></button>
                <ul class="dropdown-menu">
                    <?=$html?>
                </ul>
            </li>
    </ul>
    </nav>
</div><-->



