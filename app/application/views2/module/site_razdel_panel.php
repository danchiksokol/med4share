<?

$razdels = array(
    0 => array( 'url' => '', 'name' => 'Онкология'),
    3 => array( 'url' => 'rheumatology', 'name' => 'Ревматология'),
    4 => array( 'url' => 'neurology', 'name' => 'Неврология')
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
        $html .= '<li class="active">'.$val['name'].'</li>'."\n";
    }
    else {
        $html .= '<li><a href="'.$switchUrl.'">'.$val['name'].'</a></li>'."\n";
    }
}



?>

    <style>
        #site_razdel_panel {
            background-attachment:scroll;
            background-color: #f1f1f1;
            border-bottom: 1px solid #dadada;
            background-position:right top;
            background-repeat:no-repeat;
            height:120px;
            position:fixed;

            top:230px;

            right: 0px;
        }

        #site_razdel_panel ul{
            list-style: none; padding: 0 15px;
        }
        #site_razdel_panel ul li{
            list-style: none;
            color: #E96722;
            font-size:  20px;
            padding: 4px 0;
            font-weight: bold;
        }
        #site_razdel_panel ul li.active{
            list-style: none;
            color: #000;
            font-size:  20px;
            padding: 4px 0;
            font-weight: bold;
        }
    </style>

    <div id="site_razdel_panel">
        <ul>
            <?=$html?>
        </ul>
    </div>



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
// формируем ссылку
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

if( in_array( $controller, array('News', 'Experts', 'Calendar', 'Search') ) ){
    $switchUrl .= strtolower($controller).'/';
}
?>

<? /*
<div class="btn-group dropdown">
    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="font-size: 16px; font-weight: bold; color:#E96722"><?=$currentRazdel?><i class="glyphicon glyphicon-chevron-down"></i></button>
    <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
        <li><a href="<?=$switchUrl?>" style="font-size: 16px; font-weight: bold;">Перейти в раздел <?=$switchText?> <i class="glyphicon glyphicon-chevron-up"></i></a></li>
        <li><a href="<?=$switchUrl?>" style="font-size: 16px; font-weight: bold;">Перейти в раздел <?=$switchText?> <i class="glyphicon glyphicon-chevron-up"></i></a></li>
        <li><a href="<?=$switchUrl?>" style="font-size: 16px; font-weight: bold;">Перейти в раздел <?=$switchText?> <i class="glyphicon glyphicon-chevron-up"></i></a></li>
    </ul>
</div>


*/ ?>