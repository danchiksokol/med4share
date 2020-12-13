
<h2>Пример Фотогалереи</h2>
<div class="space-bottom"></div>
<div class="row grid-space-20">



                    <? foreach($photos_preview as $k => $preview) : ?>


                        <div class="col-xs-3">
                            <div class="overlay-container">
                                <img src="<?=str_replace('/home/lamo8/www/subdomain/med4share2.lamo8.ru/', '', $preview);?>" alt="">
                                <a href="<?=str_replace('/home/lamo8/www/subdomain/med4share2.lamo8.ru/', '', $photos[$k]);?>" class="overlay small popup-img" title="Second image title">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                        </div>



                    <? endforeach; ?>


</div>



