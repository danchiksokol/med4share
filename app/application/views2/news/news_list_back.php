<?
$i = 1;
foreach ($news_data as $v) :

    $publish_date['day'] = date('d', strtotime($v['publish_date']));
    $publish_date['month'] = date('n', strtotime($v['publish_date']));
    $publish_date['year']  = date('Y', strtotime($v['publish_date']));
?>

    <div style="clear:both;">


        <div class="row">
            <div class="col-md-12">
                <p class="podgrup"><a href="/news/<?=$v['url']?>"><strong><?=$v['title']?></strong></a></p>
            </div>
        </div>

        <? if( $v['imagePreview'] != '' && $i % 2 == 1 ) : ?>
            <div class="row">
                <div class="col-md-2">
                    <img src="<?=$v['imagePreview']?>" class="img-rounded">
                </div>
                <div class="col-md-10">
                    <p><small>Добавлено: <?=$publish_date['day'].' '.DATE::ru_month($publish_date['month'], false).' '.$publish_date['year'] ?></small></p>
                    <?=$v['content']?>
                </div>
            </div>
            <p class="pull-right"><a href="/news/<?=$v['url']?>">Читать подробнее</a></p>
        <? elseif( $v['imagePreview'] != '' && $i % 2 == 0 ) : ?>
            <div class="row">
                <div class="col-md-10">
                    <p><small>Добавлено: <?=$publish_date['day'].' '.DATE::ru_month($publish_date['month'], false).' '.$publish_date['year'] ?></small></p>
                    <?=$v['content']?>
                </div>
                <div class="col-md-2">
                    <img src="<?=$v['imagePreview']?>" class="img-rounded">
                </div>
            </div>
            <p class="pull-right"><a href="/news/<?=$v['url']?>">Читать подробнее</a></p>
        <? else : ?>
            <div class="row">
                <div class="col-md-12">
                    <p><small>Добавлено: <?=$publish_date['day'].' '.DATE::ru_month($publish_date['month'], false).' '.$publish_date['year'] ?></small></p>
                    <?=$v['content']?>
                    <p class="pull-right"><a href="/news/<?=$v['url']?>">Читать подробнее</a></p>
                </div>
            </div>
        <? endif; ?>






	</div>
    <div class="clearfix" style="padding-bottom: 14px"></div>

<?
    if( $v['imagePreview'] != '' ) {
        $i++;
    }
?>
<?endforeach;?>

<? // Пагинатор
$pagination_data = array
(
  'total_items'     => $count_news, //Общее кол-во новостей
  'items_per_page'  => Kohana::$config->load('website.news.count_news_page'), //По сколько новостей выводить
);
echo Pagination::factory($pagination_data);
?>
