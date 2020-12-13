<?
$block = ORM::factory('Blocks')
    ->where('blocks_name', '=', $blocks_name)
    ->find();
if( isset($block->active) && $block->active == 1 ) :
?>
    <!-- section start -->
    <!-- ================ -->
    <div class="section gray-bg text-muted footer-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="/media/img/site/Logo-TS.png" alt="">
                </div>
                <div class="col-md-2">
                    <h3 style="text-align: right">Наши партнеры</h3>
                </div>
                <div class="col-md-7">
                    <div class="owl-carousel clients vertical-align">
                        <?=$block->content?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- section end -->
<? endif; ?>