<p class="pull-right">

	<a href="/admin/page_add" role="button" class="btn btn-primary">Добавить страницу</a>
</p>
<div class="clearfix"></div>

<?php
$level = isset($pages[0]->level) ? $pages[0]->level : false;
$first = TRUE;
$first_level = $level;
?>
<ul id="tree_one">
<? if(count($pages)) { ?>
	<?php foreach ($pages as $page) { ?>
	<?php   if ($page->level > $level) : ?>
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
	    	<a href="#" attr-id="<?=$page->id?>" attr-url="<?=$page->url?>" style="color: #000; font-size: 14px;">
                 <?=$page->id?> <?=$page->name;?>
                <span class="glyphicon glyphicon-plus page_add" data-placement="right"  data-original-title="Добавить страницу"></span>
                <span class="glyphicon glyphicon-pencil page_edit" data-placement="right"  data-original-title="Редактировать страницу"></span>
                <span class="glyphicon glyphicon-eye-close page_view" title="/<?=$page->url?>" data-placement="right"  data-original-title="Посмотреть страницу"></span>
                <span class="glyphicon glyphicon-remove page_delete" data-placement="right"  data-original-title="Удалить страницу"></span>
	    	</a>
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
				$('span.page_edit').tooltip();
                $('span.page_add').tooltip();
				$('span.page_delete').tooltip();

                //Добавление страницы
                $('.page_add').on("click", function(){
                    var page_id = $(this).parent().attr('attr-id');
                    document.location.href = '/admin/page_add/'+page_id;
                    return false;
                })

				//Редактирование страницы
				$('.page_edit').on("click", function(){
				  	var page_id = $(this).parent().attr('attr-id');
				  	document.location.href = '/admin/page_edit/'+page_id;
				  	return false;
				})
                //Просмотр страницы
                $('.page_view').on("click", function(){
                    var page_url = $(this).parent().attr('attr-url');
                    location.replace('<?=URL::base()?>'+page_url);
                    return false;
                });
				//Удаление страницы
				$('.page_delete').on("click", function(){
				  	var page_id = $(this).parent().attr('attr-id');
				  	if ( confirm('Вы уверены что хотите удалить страницу "'+$.trim( $(this).parent().text() ) +'"') ) {
				  		document.location.href = '/admin/page_delete/'+page_id;
				  	}
				  	return false;
				})

                $('#tree_one').showTree(); //{closeFolders: true});
			})
		</script>


<? /*
<table class="table table-hover table-bordered" id="page_list">
<thead>
	<tr>
		<th>#</th>
		<th>Уровень</th>
		<th>Название</th>
		<th>Email</th>
	</tr>
</thead>
<tbody>
	<? foreach ($pages as $page) : ?>
	<tr>
		<td><?=$page->id;?></td>
		<td><?=$page->level?></td>
		<td><?=str_repeat('-', 2*$page->level).htmlspecialchars($page->name)?></td>
		<td class="span2" style="text-align:center">
				<a href="/admin/user_edit"><img class="img-polaroid" src="/media/img/icons/edit.png" /></a>
				<a href="#" class="refresh" id="<?=$page->id;?>"><img class="img-polaroid" src="/media/img/icons/refresh.png" /></a>
				<a href="/admin/page_delete/<?=$page->id?>" class="" id="<?=$page->id?>"><img class="img-polaroid" src="/media/img/icons/delete.png" /></a>
		</td>
	</tr>
	<? endforeach; ?>
</tbody>
</table>

*/ ?>
