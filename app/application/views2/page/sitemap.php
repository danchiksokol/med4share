<h1>Карта сайта</h1>
    <?php
$level = isset($pages[0]->level) ? $pages[0]->level : false;
$first = TRUE;
$first_level = $level;
?>
<ul id="sitemap">
    <? if(count($pages)) { ?>
    <?php foreach ($pages as $page) { ?>
    <?php   if ($page->level > $level):?>
        <ul>
    <?php  	elseif ($page->level < $level):?>
        <?php       while ($level-- > $page->level):?>
            </li></ul>
        <?php       endwhile;?>
        </li>
    <?php   elseif (!$first):?>
        </li>
    <?php   endif;?>
    <li>
        <a href="<?=$page->url?>"><?=$page->name;?></a>
        <?php
        $level = $page->level;
        $first = FALSE;
        ?>
        <?php }; // foreach ($pages as $page) ?>
        <?php while ($level-- >= $first_level):?>
    </li></ul>
<?php endwhile;?>
<? } else { echo '<h3>Нет страницы в БД</h3>'; }//if(count($pages)) ?>

<script type="text/javascript">
$().ready(function(){

    $('#sitemap').showTree(); //{closeFolders: true});
})
</script>