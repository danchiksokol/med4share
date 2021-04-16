<div class="col-md-12 text-center">
	<ul class="pagination" style="margin: 10px">
	<?foreach ($alfabet as $val ) :?>
		 <li <?if($letter == $val) { ?> class="active" <?}?> ><a href="<?=$url_expert_only?>/<?=$val?>"><?=$val?></a></li>
	<? endforeach; ?>
		<li <?if($letter == '') { ?> class="active" <?}?>><a href="<?=$url_expert_only?>/">Все</a></li>
	</ul>
	<form class="form-inline" style="margin: 0 0 10px">
	  <div class="form-group">
	    <input type="text" class="form-control" id="search" name="search" placeholder="Введите запрос" value="<?=$search?>">
	  </div>   
	  <button type="submit" class="btn btn-default">Найти</button>
	</form>
</div> 

<? if( $search !== false ) : ?>


	<? if( count($data['expertsf']) > 0) : ?>

        <h5>По вашему запросу найдено <?=count($data['expertsf']).' '.TEXT::pluralForm(count($data['expertsf']), 'эксперт', 'эксперта', 'экспертов')?> </h5>
        <div class="separator-2"></div>
        <ul class="list-icons">
        <? foreach ($data['expertsf'] as $val) : ?>

            <li>
                <i class="fa fa-share"></i>
                <a href="/expertsf/<?=$val['url']?>"><strong><?=trim($val['familia'].' '.$val['name'].' '.$val['otchestvo'] )?></strong></a>
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


	<? if(count($data['calendar']) > 0) : ?>

        <h5>По вашему запросу найдено <?=count($data['calendar']).' '.TEXT::pluralForm(count($data['calendar']), 'событие', 'события', 'событий')?> </h5>
        <div class="separator-2"></div>
        <ul class="list-icons">
            <? foreach ($data['calendar'] as $val) : ?>

                <li>
                    <i class="fa fa-share"></i>
                    <a href="/calendar/<?=$val['url']?>"><strong><?=trim($val['title'])?></strong></a>
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

                <li>
                    <i class="fa fa-share"></i>
                    <a href="/news/<?=$val['url']?>"><strong><?=trim($val['title'])?></strong></a>
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
              
                $strSearch = strip_tags($strSearch);
                $strSearch = Kohana_Text::limit_words($strSearch, 24);

                ?>
                <p><?=$strSearch ?></p>
            </li>

        <? endforeach; ?>
        </ul>
    <? endif; ?>
    
    
    


    


    <? if( count($data['article']) == 0 && count($data['news']) == 0 && count($data['calendar']) == 0 && count($data['expertsf']) == 0 ) : ?>
        <h3>По вашему запросу ничего не найдено</h3>
    <? endif; ?>

<? else : // Обычный показ ?>
	
	<? foreach ($data as $key => $val ) : ?>
	
	<? if( $key%2 == 0 ) { ?> <div class="row"> <? } ?>
	
	
		<div class="col-md-6">
		
			<div class="row">
			    <div class="col-md-12">
			    	<a name="<?=mb_substr($val->familia, 0, 1, 'utf-8');?>"></a>
			        <div><a href="<?=$url_expert_only?>/<?=$val->url?>"><strong><?=$val->familia.' '.$val->name.' '.$val->otchestvo?></strong></a></div>
					<br />
			    </div>
			    <div class="col-md-3">
			        <img src="<?=$val->imagePreview?>" class="img-rounded">
			    </div>
			    <div class="col-md-9">
			        <div class="clearfix"></div>
			        <div><?=$val->content?></div>
			        <!--<p class="pull-right"><a href="<?=$val->url?>">Подробнее</a></p>-->
			    </div>
			</div>
		
		</div> 
		
		
	<? if( $key%2 == 1 ) { ?> 
		</div> 
		<br />	
	<? } ?>
	<? endforeach; ?>

<? endif; ?>