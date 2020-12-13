<div class="page-header">
    <h1>Добавить пользователей</h1>
</div>


<p class="pull-left">Доступные для добавления пользователи</p>
<p class="pull-right">
    <a href="/media/template/users_add_template.xlsx" role="button" class="btn btn-success" data-toggle="modal"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Скачать шаблон</a>
    <a href="/admin/users/addAll" role="button" class="btn btn-primary" data-toggle="modal">Добавить всех пользователей</a>
</p>

<table class="table table-hover table-bordered" id="user_list">
    <thead>
    <tr>
        <th>#</th>
        <th>Фамилия Имя Отчество</th>
        <th>Должность</th>
        <th>Специализация</th>
        <th>Мобильный телефон</th>
        <th>E-mail</th>
        <th>Город</th>
        <th></th>
    </tr>
    </thead>

<? foreach( $users as $val ) : ?>

        <tbody>
        <tr <? if($val['double'] == true) {?>style="background: gainsboro;" <?}?> >
            <td>-</td>
            <td><?=$val[0]?></td>
            <td><?=$val[1]?></td>
            <td><?=$val[2]?></td>
            <td><?=$val[3]?></td>
            <td><?=$val[4]?></td>
            <td><?=$val[5]?></td>
            <td>
                <? if($val['double'] != true) {?>
                    <a href="#" title="Добавить"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                <?}?>
            </td>

        </tr>
        </tbody>


<? endforeach; ?>
</table>