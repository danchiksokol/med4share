<?
    $data = ORM::factory('DopMenuItems')->getDopMenu($menuId);
?>
<aside class="col-md-3">
    <div class="sidebar">
        <div class="block clearfix">
            <h3 class="title"></h3>
            <nav>
                <ul class="nav nav-pills nav-stacked">
                    <? foreach($data as $item) : ?>
                    <li><a href="/<?=$item->url?>"><?=$item->name?></a></li>
                    <? endforeach; ?>
                </ul>
            </nav>
        </div>
    </div>
</aside>


