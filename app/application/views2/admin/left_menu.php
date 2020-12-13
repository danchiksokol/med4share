<?$data = array(
    array('name' => 'Начало',               'link' => 'index',          'icon' => 'asterisk',   'roles' => array('admin') ),
    //array('name' => 'Регистрация',          'link' => 'registracia',    'icon' => 'user',       'roles' => array('admin') ),
    array('name' => 'Пользователи',         'link' => 'users',          'icon' => 'user',       'roles' => array('admin')),
    array('name' => 'Статические страницы', 'link' => 'page_list',      'icon' => 'file',       'roles' => array('admin')),

    array('name' => 'Календарь событий',    'link' => 'calendar',       'icon' => 'calendar',   'roles' => array('admin')),
    array('name' => 'Новости',              'link' => 'news_list',      'icon' => 'globe',      'roles' => array('admin')),
    array('name' => 'Теги новостей',        'link' => 'newstags',      'icon' => 'tags',      'roles' => array('admin')),
    
    array('name' => 'Наши Эксперты',        'link' => 'experts',      'icon' => 'paperclip',      'roles' => array('admin')),
    
    

    array('name' => 'Комментарии',           'link' => 'comments',       'icon' => 'comment',    'roles' => array('admin', 'comment') ),

    array('name' => 'Отзывы и пожелания',   'link' => 'feedback',       'icon' => 'info-sign',    'roles' => array('admin') ),



    array('name' => 'Главное меню Онкология',         'link' => 'menu',           'icon' => 'align-left',   'roles' => array('admin')),
    array('name' => 'Главное меню Ревматология',       'link' => 'menu_rheumatology',           'icon' => 'align-left',   'roles' => array('admin')),
    array('name' => 'Главное меню Неврология',       'link' => 'menu_neurology',           'icon' => 'align-left',   'roles' => array('admin')),


    array('name' => 'Доп. меню',            'link' => 'dopmenu',        'icon' => 'align-justify',   'roles' => array('admin')),
    array('name' => 'Спонсоры',             'link' => 'blocks/sponsor',        'icon' => 'thumbs-up',   'roles' => array('admin')),
    array('name' => 'Редиректы',             'link' => 'redirects',        'icon' => 'transfer',   'roles' => array('admin')),
    array('name' => 'Файловый менеджер',    'link' => 'files',          'icon' => 'file',   'roles' => array('admin')),

    array('name' => 'Помощник',             'link' => 'manual',         'icon' => 'heart-empty',   'roles' => array('admin')),
);
?>

<div class="col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
    <div class="list-group">
        <? foreach($data as $val) : ?>
            <? // Проверка роли
                $flagRole = false;
                foreach($val['roles'] as $role) {
                    if( Auth::instance()->logged_in($role) ) {
                        $flagRole = true;
                        break;
                    }
                }

                if($flagRole === false) { // Не показываем пункт меню
                    continue;
                }
            ?>

            <? if( $val['link'] == 'comments') : ?>
                <? // Запрашиваем кол-во новых комментариев
                    $countNewComments =  ORM::factory('Comment')->get_count_new_comments();
                ?>
                <a href="/admin/<?=$val['link']?>" class="list-group-item <?= $action == $val['link'] ?  'active' : '' ?>"><span class="glyphicon glyphicon-<?=$val['icon']?>"></span><span class="badge"><?=$countNewComments?></span> <?=$val['name']?></a>
            <? else : ?>
                <a href="/admin/<?=$val['link']?>" class="list-group-item <?= $action == $val['link'] ?  'active' : '' ?>"><span class="glyphicon glyphicon-<?=$val['icon']?>"></span> <?=$val['name']?></a>
            <? endif; ?>
        <? endforeach; ?>

    </div>
</div><!--/span-->