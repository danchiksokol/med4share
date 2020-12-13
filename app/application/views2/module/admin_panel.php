<div id="pane-admin">
    <? if( $controller == 'PageStatic' ) { ?>
        <div id="pageId"><?=$subject_id?></div>
        <? if($subject_id) { ?>
            <a href="/admin/page_edit/<?=$subject_id?>"><img src="/media/img/admin/pencil.png" title="Править" class="img"></a>
        <? } else { ?>
            <a href="/admin/page_add/<?=$subject_id?>"><img src="/media/img/admin/pencil_plus.png" title="Добавить" class="img"></a>
        <? } ?>
    <? } elseif( $controller == 'News' ) { ?>
        <div id="pageId"><?=$subject_id?></div>
        <? if( $subject_id ) { ?>
            <a href="/admin/news_edit/<?=$subject_id?>"><img src="/media/img/admin/pencil.png" title="Править" class="img"></a>
        <? } else { ?>
            <a href="/admin/news_list"><img src="/media/img/admin/pencil_plus.png" title="Список новостией" class="img"></a>
        <? } ?>
    <? } elseif( $controller == 'Calendar' ) { ?>
        <div id="pageId"><?=$subject_id?></div>
        <? if( $subject_id ) { ?>
            <a href="/admin/calendar/edit/<?=$subject_id?>"><img src="/media/img/admin/pencil.png" title="Править" class="img"></a>
        <? } else { ?>
            <a href="/admin/calendar"><img src="/media/img/admin/pencil_plus.png" title="Список новостией" class="img"></a>
        <? } ?>
    <? } elseif( $controller == 'Experts' ) { ?>
        <div id="pageId"><?=$subject_id?></div>
        <? if( $subject_id ) { ?>
            <a href="/admin/experts/edit/<?=$subject_id?>"><img src="/media/img/admin/pencil.png" title="Править" class="img"></a>
        <? } else { ?>
            <a href="/admin/experts"><img src="/media/img/admin/pencil_plus.png" title="Список экспертов" class="img"></a>
        <? } ?>
        
        

    <? } ?>
    

    <a href="/admin/"><img src="/media/img/admin/wrench.png" title="Администрированние" class="img"></a>
    <a href="/login/logout"><img src="/media/img/admin/door.png" title="Выйти" class="img"></a>
</div>