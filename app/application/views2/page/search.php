<!-- page-title start -->
    <!-- ================ -->
    <h1 class="page-title">Поиск</h1> 
    <!-- page-title end -->

    <div class="sorting-filters">
    
    
        <form class="form-inline" action="<?=$url_search_only?>" method="get">
            <div class="form-group">
                <label>Ищу</label>
               
                <input type="text" class="form-control" name="search[text]" value="<?=$search['text']?>">
                 
                <input type="submit" class="btn btn-default" value="Искать" style="margin:0"/>
             
            </div>
            <div class="form-group">
                <label>Календарь событий</label>
                <div class="checkbox">
                    <input type="checkbox" name="search[calendar]" value="1" <?if($search['calendar'] == 1) {?>checked="checked" <?}?> />
                </div>
            </div>
             <div class="form-group">
                <label>Новости</label>
                <div class="checkbox">
                    <input type="checkbox" name="search[news]" value="1" <?if($search['news'] == 1) {?>checked="checked" <?}?> />
                </div>
            </div>
            <div class="form-group">
                <label>Статьи</label>
                <div class="checkbox">
                    <input type="checkbox" name="search[article]" value="1" <?if($search['article'] == 1) {?>checked="checked" <?}?> />
                </div>
            </div>
           <div class="form-group">
                <label>Наши эксперты</label>
                <div class="checkbox">
                    <input type="checkbox" name="search[experts]" value="1" <?if($search['experts'] == 1) {?>checked="checked" <?}?> />
                </div>
            </div>
          

           
        </form>
    </div>


<? if( $data === false ) : ?>
    <h3>Вы не указали строку поиска, повторите поиск</h3>
<? else : ?>

	<? if(count($data['calendar']) > 0) : ?>

        <h5>По вашему запросу найдено <?=count($data['calendar']).' '.TEXT::pluralForm(count($data['calendar']), 'событие', 'события', 'событий')?> </h5>
        <div class="separator-2"></div>
        <ul class="list-icons">
            <? foreach ($data['calendar'] as $val) : ?>
                <?
                    $url_calendar = strlen($site_razdel) ? '/'.$site_razdel.'/calendar/' : '/calendar/';
                ?>
                <li>
                    <i class="fa fa-share"></i>
                    <a href="<?=$url_calendar?><?=$val['url']?>"><strong><?=trim($val['title'])?></strong></a>
                    <?
                    $strSearch = $val['text'];

                    $strSearch = strip_tags($strSearch);
                    $strSearch = Kohana_Text::limit_words($strSearch, 24);
                    ?>
                    <p><?=$strSearch ?></p>
                </li>

            <? endforeach; ?>
        </ul>
    <? endif; ?>


    <? if(count($data['news']) > 0) : ?>

        <h5>По вашему запросу найдено <?=count($data['news']).' '.TEXT::pluralForm(count($data['news']), 'новостей', 'новости', 'новостей')?> </h5>
        <div class="separator-2"></div>
        <ul class="list-icons">
            <? foreach ($data['news'] as $val) : ?>

                <?
                    $url_news = strlen($site_razdel) ? '/'.$site_razdel.'/news/' : '/news/';
                ?>

                <li>
                    <i class="fa fa-share"></i>
                    <a href="<?=$url_news?><?=$val['url']?>"><strong><?=trim($val['title'])?></strong></a>
                    <?
                        $strSearch = $val['contentFull'];

                        $strSearch = strip_tags($strSearch);
                        $strSearch = Kohana_Text::limit_words($strSearch, 24);
                    ?>
                    <p><?=$strSearch ?></p>
                </li>

            <? endforeach; ?>
        </ul>
    <? endif; ?>
    
     <? if( count($data['article']) > 0) : ?>

        <h5>По вашему запросу найдено <?=count($data['article']).' '.TEXT::pluralForm(count($data['article']), 'статей', 'статьи', 'статей')?> </h5>
        <div class="separator-2"></div>
        <ul class="list-icons">
        <? foreach ($data['article'] as $val) : ?>

            <li>
                <i class="fa fa-share"></i>
                <a href="/<?=$val['url']?>"><strong><?=trim($val['title'])?></strong></a>
                <?

                $strSearch = $val['contentCenter'];
                // '#([^\s]*Низ[^\s]*)#si'
                //$pattern = '/('.$search['text'].')/si'; // "/(".$search['text'].")/si"; //регулярное выражение
                //preg_match($pattern, $val['contentCenter'],$match_arr, PREG_OFFSET_CAPTURE);


                /*$pos1 = mb_stripos($strSearch, $search['text']);
                if( $pos < 40 ) {
                    $strSearch = substr($strSearch, 40);
                    $pos2 = mb_stripos($strSearch, $search['text']);
                }
                echo $pos;*/

                $strSearch = strip_tags($strSearch);
                $strSearch = Kohana_Text::limit_words($strSearch, 24);


                //if( isset($match_arr[1][0]) ) {
                   // print_r($match_arr);
                //}

                //$replace = '$1<b style="color:#FF0000; background:#FFFF00;">$2</b>'; // шаблон замены строки
                //$html =  preg_replace($pattern, $replace, $val['contentCenter']); // замена

                // echo $html;

                ?>
                <p><?=$strSearch ?></p>
            </li>

        <? endforeach; ?>
        </ul>
    <? endif; ?>
    
    
    <? if( count($data['experts']) > 0) : ?>

        <h5>По вашему запросу найдено <?=count($data['experts']).' '.TEXT::pluralForm(count($data['experts']), 'эксперт', 'эксперта', 'экспертов')?> </h5>
        <div class="separator-2"></div>
        <ul class="list-icons">
        <? foreach ($data['experts'] as $val) : ?>
            <?
                $url_experts = strlen($site_razdel) ? '/'.$site_razdel.'/experts/' : '/experts/';
            ?>

            <li>
                <i class="fa fa-share"></i>
                <a href="<?=$url_experts?><?=$val['url']?>"><strong><?=trim($val['familia'].' '.$val['name'].' '.$val['otchestvo'] )?></strong></a>
                <?

                $strSearch = $val['content'];
              

                $strSearch = strip_tags($strSearch);
                $strSearch = Kohana_Text::limit_words($strSearch, 24);
            

                ?>
                <p><?=$strSearch ?></p>
            </li>

        <? endforeach; ?>
        </ul>
    <? endif; ?>


    


    <? if( count($data['article']) == 0 && count($data['news']) == 0 && count($data['calendar']) == 0  && count($data['experts']) == 0 ) : ?>
        <h3>По вашему запросу ничего не найдено</h3>
    <? endif; ?>

<? endif; ?>