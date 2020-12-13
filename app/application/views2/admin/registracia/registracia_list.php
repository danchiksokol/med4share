<table class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>Дата</th>
        <th>Ф.И.О</th>
        <th>Место работы</th>
        <th>Должность</th>
        <th>Мобильный телефон</th>
        <th>Ваш адрес электронной почты</th>
        <th>Укажите Ваш город</th>
    </tr>

    <? foreach($data as $val) : ?>
        <tr>
            <td><?=$val['id']?></td>
            <td><?=$val['date']?></td>
            <td><?=$val['name']?></td>
            <td><?=$val['work']?></td>
            <td><?=$val['position']?></td>
            <td><?=$val['telefon']?></td>
            <td><?=$val['email']?></td>
            <td><?=$val['city']?></td>

        </tr>
    <? endforeach; ?>

</table>
