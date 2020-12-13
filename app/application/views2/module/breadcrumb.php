<div class="page-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <? foreach($breadcrumb as $key => $val) : ?>
                        <? if( ! is_int($key) && $key == 'index' ) { ?>
                            <li><i class="fa fa-home pr-10"></i><a href="/<?=$key?>"><?=$val?></a></li>
                        <? } elseif( ! is_int($key) ) { ?>
                            <li><i class="fa  pr-10"></i><a href="/<?=$key?>"><?=$val?></a></li>
                        <? } else { ?>
                            <li class="active"><?=$val?></li>
                        <? } ?>
                    <? endforeach; ?>
                </ol>
            </div>
        </div>
    </div>
</div>