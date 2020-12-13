<h2><?=$news_data['title']?></h2>
<?=$news_data['contentFull']?>
<?
$publish_date['day'] = date('d', strtotime($news_data['publish_date']));
$publish_date['month'] = date('n', strtotime($news_data['publish_date']));
$publish_date['year']  = date('Y', strtotime($news_data['publish_date']));
?>

<div style="float: right;"><small>Добавлено: <?=$publish_date['day'].' '.DATE::ru_month($publish_date['month'], false).' '.$publish_date['year'] ?></small></div>
