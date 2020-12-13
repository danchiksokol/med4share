
<div class="clearfix"></div>

<table class="table table-hover table-bordered" id="user_list">
    <thead>
    <tr>
        <th style="width: 40px;">#</th>
        <th>Дата добавления</th>
        <th>IP</th>
        <th>Имя</th>
        <th>Email</th>
        <th>Сообщение</th>
    </tr>
    </thead>
    <tbody>
    <? foreach( $data as $val ) : ?>
        <tr>
            <td class=""><?=$val->id;?></td>
            <td class=""><?=$val->date_add;?></td>
            <td class=""><?=$val->ip;?></td>
            <td class=""><?=$val->name;?></td>
            <td class=""><?=$val->email;?></td>
            <td class=""><?=$val->message;?></td>
        </tr>
    <? endforeach; ?>
    </tbody>
</table>
