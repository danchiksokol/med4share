<ol class="breadcrumb">
  <? foreach ($breadcrumbs as $href => $val) : ?>
     <li><a href="/<?=$href?>"><?=$val?></a></li>
  <? endforeach; ?>
</ol>
