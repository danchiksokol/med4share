<? if(isset($errors)){?>
<?foreach($errors as $item){?>
<p style="color:red"><?=$item?></p>
<?}?>
<?}?>

    <form method="post" action="" class="form-inline">
        <div class="form-group">
             <select class="form-control" name="parent_id">
                <? foreach($pages as $item) : ?>
                <option value="<?=$item->id?>" <?if($get_parent_id == $item->id ) { ?>selected="selected"<? } ?>><?=str_repeat('&nbsp;', 2*$item->level).htmlspecialchars($item->name)?></option>
                <? endforeach ?>
             </select>
        </div>
        <div class="form-group">
            <input type="text" name="name" class="form-control">
        </div>
            <input type="submit" value="Создать" name="page_add" class="btn btn-default">
    </form>

