<ul class="gallery">
    <? foreach($photos_preview as $k => $preview) : ?>
    
    	<? if( $type[$k] == 'w' ) : // Вертикальное фото ?> 
        <li class="col-sm-3 col-xs-6">
            <a href="<?=$photos[$k];?>" class="fancybox" data-fancybox="images">
                <img src="<?=$preview;?>" alt="" class="img-responsive">
            </a>
        </li>
        <? else : ?>
          <li class="col-sm-2 col-xs-3">
            <a href="<?=$photos[$k];?>" class="fancybox" data-fancybox="images">
                <img src="<?=$preview;?>" alt="" class="img-responsive">
            </a>
          </li>
        <? endif; ?>
    <? endforeach; ?>
</ul>