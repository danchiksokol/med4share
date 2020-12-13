<? if(isset($news_data)) :
    $i = 1;




    foreach($news_data as $news) : ?>
    <?
    $publish_date['day'] = date('d', strtotime($news['publish_date']));
    $publish_date['month'] = date('n', strtotime($news['publish_date']));
    $publish_date['year']  = date('Y', strtotime($news['publish_date']));
    ?>

    <? if( $news['imagePreview'] != '' && $i % 2 == 1 ) : ?>
        <div class="row">
            <div class="col-md-12">
                <h5><?=$publish_date['day'].' '.DATE::ru_month($publish_date['month'], false).' '.$publish_date['year'] ?></h5>

                <p><a href="<?=$url_news_only?>/<?=$news['url']?>"><strong><?=$news['title']?></strong></a></p>
            </div>
            <div class="col-md-3">
                <img src="<?=$news['imagePreview']?>" class="img-rounded">
            </div>
            <div class="col-md-9">
                <div class="clearfix"></div>
                <?=Text::limit_chars($news['content'], 190, '...', true);?>
                <p class="pull-right"><a href="<?=$url_news_only?>/<?=$news['url']?>">Подробнее</a></p>
            </div>
        </div>
    <? elseif( $news['imagePreview'] != '' && $i % 2 == 0 ) : ?>
        <div class="row">
            <div class="col-md-12">
                <h5><?=$publish_date['day'].' '.DATE::ru_month($publish_date['month'], false).' '.$publish_date['year'] ?></h5>
                <p><a href="<?=$url_news_only?>/<?=$news->url?>"><strong><?=$news['title']?></strong></a></p>
            </div>
            <div class="col-md-9">
                <div class="clearfix"></div>
                <?=Text::limit_chars($news->content, 190, '...', true);?>
            </div>
            <div class="col-md-3">
                <img src="<?=$news->imagePreview?>" class="img-rounded">
            </div>
            <div class="col-md-12">
                <p class="pull-right"><a href="<?=$url_news_only?>/<?=$news['url']?>">Подробнее</a></p>
            </div>
        </div>
    <? else : ?>
        <div class="row">
            <div class="col-md-12">
                <h5><?=$publish_date['day'].' '.DATE::ru_month($publish_date['month'], false).' '.$publish_date['year'] ?></h5>

                <p><a href="<?=$url_news_only?>/<?=$news->url?>"><strong><?=$news->title?></strong></a></p>
                <div class="clearfix"></div>
                <?=Text::limit_chars($news['content'], 190, '...', true);?>
                <p class="pull-right"><a href="<?=$url_news_only?>/<?=$news['url']?>">Подробнее</a></p>
            </div>
        </div>
    <? endif; ?>

    <div class="clearfix"></div>

    <?
    if( $news->imagePreview != '' ) {
        $i++;
    }
    ?>

<? endforeach; ?>
<? endif; ?>

<div class="clearfix">&nbsp;</div>
<? if( $page_num > 1 ) : ?>
<div class="pull-left" style="font-size: 1.5em"><i class="glyphicon glyphicon-arrow-left" onclick="getIndexPageNews(<?=$page_num - 1?>); return false;" style="cursor: pointer"></i></div>
<? endif; ?>
<? if($page_num <= $count_page  ) : ?>
<div class="pull-right" style="font-size: 1.5em"><i class="glyphicon glyphicon-arrow-right" onclick="getIndexPageNews(<?=$page_num + 1?>); return false;" style="cursor: pointer"></i></div>
<? endif; ?>


