<h2>Фотогалереи</h2>


<table class="table table-hover table-bordered table-striped sorted_table" id="news_list">
    <thead>
    <tr data-id="0">
        <th>Папка</th>
        <td>Для вставки на сайт</td>
        <th style="width: 100px">Обработка</th>
        <th style="width: 70px">Удалить</th>
    </tr>
    </thead>
    <tbody>
<? foreach ($dirs as $key => $dir) : ?>
    <tr>
        <td><?=$dir?></td>
        <td><pre>&lt;!--module gallery/<?=$dir?>--&gt;</pre></td>
        <td>
            <button class="btn btn-xs btn-success photo_processing" type="button" data-loading-text="Ожидайте!">Обработка</button>
        </td>
        <td>
            <button class="btn btn-xs btn-danger photo_delete" type="button">Удалить</button>
        </td>
    </tr>
<? endforeach; ?>



<script type="text/javascript">
    $().ready(function() {

        $('.photo_processing').live('click', function () {
            var folderName = $(this).parent().parent().find('td').first().html();
            var _this = this;//сохраняем в замыкании кликнутую ссылку
            $.ajax({
                url: '/admin/photo/processing/',
                dataType: 'json',
                type: 'POST',
                data: {'folderName': folderName},
                beforeSend: function (xhr) {
                    $(_this).button('loading');
                },
                success: function (data) {

                    if (data.status == true) {
                        $(_this).button('reset'); // Возращяем нормальный вид кнопки
                        $(_this).removeClass('btn-danger').addClass('btn-success').text('Успешно!');
                        /*if ($(_this).hasClass('btn-success')) {
                            $(_this).removeClass('btn-success').addClass('btn-danger').text('Не активен');
                        } else {
                            $(_this).removeClass('btn-danger').addClass('btn-success').text('Активен');
                        }*/
                        //Дата изменения на интерфейсе
                        //$(_this).parent().parent().find('td').eq(2).text(data.modified_date);


                    }
                    else if (data.status == false) {
                        $(_this).removeClass('btn-success').addClass('btn-danger').text('Ошибка!');
                        alert('При изменении статуса произошла ошибка');
                    }

                },
                error: function (error) {
                    //Вывод ошибки
                }
            });
        });

        // Удалить
        $('.photo_delete').live('click', function () {
            var folderName = $(this).parent().parent().find('td').first().html();
            var _this = this;//сохраняем в замыкании кликнутую ссылку
            $.ajax({
                url: '/admin/photo/delete/',
                dataType: 'json',
                type: 'POST',
                data: {'folderName': folderName},
                beforeSend: function (xhr) {
                    $(_this).button('loading');
                },
                success: function (data) {

                    if (data.status == true) {
                        $(_this).button('reset'); // Возращяем нормальный вид кнопки

                        /*if ($(_this).hasClass('btn-success')) {
                         $(_this).removeClass('btn-success').addClass('btn-danger').text('Не активен');
                         } else {
                         $(_this).removeClass('btn-danger').addClass('btn-success').text('Активен');
                         }*/
                        //Дата изменения на интерфейсе
                        //$(_this).parent().parent().find('td').eq(2).text(data.modified_date);


                    }
                    else if (data.status == false) {
                        alert('При изменении статуса произошла ошибка');
                    }

                },
                error: function (error) {
                    //Вывод ошибки
                }
            });
        });


    });

</script>