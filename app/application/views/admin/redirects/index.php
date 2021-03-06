
<p class="pull-right">
    <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Добавить</a>
</p>

<table class="table table-hover table-bordered table-striped sorted_table" id="news_list">
    <thead>
    <tr data-id="0">
        <th>#</th>
        <th>Откуда</th>
        <th>Куда</th>
        <th>Дата изменения</th>
        <th style="width: 100px">Активна</th>
        <th style="width: 70px">Удалить</th>
    </tr>
    </thead>
    <tbody>
    <? foreach ($data as $val) : ?>

        <tr data-id="<?=$val->id;?>">
            <td><?=$val->id;?></td>
            <td><?=$val->from;?></td>
            <td><?=$val->to;?></td>
            <td><?=strtotime($val->modified_date) == '' ? '-' : $val->modified_date;?></td>
            <td><? if($val->active) { ?>
                    <button class="btn btn-xs btn-success redirects_active" type="button">Активна</button>
                <? } else { ?>
                    <button class="btn btn-xs btn-danger redirects_active" type="button">Не активна</button>
                <?}?>
            </td>
            <td>
                <span class="glyphicon glyphicon-remove redirects_delete" id="<?=$val->id;?>" data-placement="bottom"  data-original-title="Удалить"></span>
            </td>

            <!--<td class="span1">
			<div class="btn-group">
				<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Действия <span class="caret"></span></a>
				<ul class="dropdown-menu pull-right">
					<li><a href="/admin/news_edit/<?/*=$new->news_id*/?>"><i class="icon-pencil"></i> Править</a></li>
					<li><a href="#" class="delete" id="<?/*=$new->news_id;*/?>"><i class="icon-trash"></i> Удалить</a></li>
				</ul>
			</div>	
		</td>-->
        </tr>

    <? endforeach; ?>
    </tbody>
</table>




<div class="modal fade" id="myModal" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Добавление редиректа</h3>
            </div>
            <div class="modal-body">
                <div class="alert alert-success hide" id="success-add-news">Редирект добавлен!</div>
                <form class="form-horizontal">
                    <div id="news-title-error" class="alert alert-error hide"></div> <!--Отображение ошибки от ajax-->

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">Откуда</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="redirect_from" placeholder="С какой страницы">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">Куда</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="redirect_to" placeholder="На какую страницу">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" aria-hidden="true" data-dismiss="modal">Закрыть</a>
                <a href="#" class="btn btn-primary submit_send" data-loading-text="Loading..." onclick="redirects_add(); return false;">Добавить</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script>


    $(function () {

        //Изменение статуса новости (Активна - Не активна)
        $('.redirects_active').live('click', function() {
            var id = $(this).parent().parent().find('td').first().html();
            var _this=this;//сохраняем в замыкании кликнутую ссылку
            $.ajax({
                url: '/admin/redirects/active',
                dataType: 'json',
                type: 'POST',
                data: {'id': id },
                beforeSend: function ( xhr ) {
                    $(_this).button('loading');
                },
                success: function( data )
                {

                    if(data.status == true)
                    {
                        $(_this).button('reset'); // Возращяем нормальный вид кнопки
                        if( $(_this).hasClass('btn-success') ) {
                            $(_this).removeClass('btn-success').addClass('btn-danger').text('Не активен');
                        } else {
                            $(_this).removeClass('btn-danger').addClass('btn-success').text('Активен');
                        }
                        //Дата изменения на интерфейсе
                        $(_this).parent().parent().find('td').eq(2).text(data.modified_date);


                    }
                    else if(data.status == false)
                    {
                        alert('При изменении статуса произошла ошибка');
                    }

                },
                error: function( error )
                {
                    //Вывод ошибки
                }
            });
        });




        // --> Удаление новости
        $('.redirects_delete').live('click',function() {

            if ( ! confirm('Вы уверены что хотите удалить редирект')) {
                return false;
            }

            var id = $(this).attr('id');
            var _this=this;//сохраняем в замыкании кликнутую ссылку



            $.ajax({
                url: '/admin/redirects/delete',
                dataType: 'json',
                type: 'POST',
                data: {'id': id },
                beforeSend: function ( xhr ) {},
                success: function( data )
                {
                    if(data.status == true)
                    {
                        //Удаляем ячейку таблицы
                        $(_this).parent().parent().hide(500);
                    }
                    else if(data.status == false)
                    {
                        alert('При удалении произошла ошибка');
                    }
                },
                error: function( error )
                {
                    //Вывод ошибки
                }
            });
            return false;
        });
        // <-- Удаление роли
    })


    function redirects_add()
    {
        var submit = true;
        var redirect_from = $('#redirect_from').val();
        var redirect_to = $('#redirect_to').val();

        if(redirect_from == '') {
            $('#redirect_from').parent().parent().addClass('error');
            $('#redirect_from').focus();
            submit = false;
        }

        if(redirect_to == '') {
            $('#redirect_to').parent().parent().addClass('error');
            $('#redirect_to').focus();
            submit = false;
        }


        // --> Чистим вывод ошибок
        $('#redirect_to').keypress(function() {
            $('#inputTitle').parent().parent().removeClass('error');
            $('#news-title-error').addClass('hide');
        });

        // <-- Чистим вывод ошибок

        if(submit == true) //Если нет ошибки
        {
            $.ajax({
                url: '/admin/redirects/add',
                dataType: 'json',
                type: 'POST',
                data: {'from': redirect_from, 'to': redirect_to},
                beforeSend: function ( xhr ) {
                    $('.submit_send').button('loading');
                },
                success: function( data )
                {
                    if(data.status == true)
                    {
                        //Добавляем в список ролей добавленую роль
                        //insert_id


                        $('#success-add-news').html(data.message).removeClass('hide'); //Показываем сообщение что всё ок
                        setTimeout(function(){
                            $("#myModal").modal('hide'); //Прячем форму
                            $('#success-add-role').addClass('hide');
                            $('#inputName').val(null);
                            $('#inputDesc').val(null);

                        }, 800);
                        //Редирект на редактированние новости
                        window.location = '/admin/redirects/';
                    }
                    else if(data.status == false)
                    {
                        //Предварительная чистка
                        $('#role-name-error').html('');
                        $('#role-desc-error').html('');

                        if(data.message.name !== undefined){ //Если в ответе есть ошибка по имени
                            $('#role-name-error').removeClass('hide').html(data.message.name);
                        }
                        if(data.message.description !== undefined){ //Если в ответе есть ошибка по имени
                            $('#role-desc-error').removeClass('hide').html(data.message.description);
                        }
                    }
                    $('.submit_send').button('reset'); // Возращяем нормальный вид кнопки
                },
                error: function( error )
                {
                    //Вывод ошибки
                }
            });
        }
    }
</script>







<style>

    /* line 94, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    .sorted_table tr {
        cursor: pointer; }
    /* line 96, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    .sorted_table tr.placeholder {
        display: block;
        background: red;
        position: relative;
        margin: 0;
        padding: 0;
        border: none; }
    /* line 103, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    .sorted_table tr.placeholder:before {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        border: 5px solid transparent;
        border-left-color: red;
        margin-top: -5px;
        left: -5px;
        border-right: none; }

    /* line 114, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    .sorted_head th {
        cursor: pointer; }
    /* line 116, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    .sorted_head th.placeholder {
        display: block;
        background: red;
        position: relative;
        width: 0;
        height: 0;
        margin: 0;
        padding: 0; }
    /* line 124, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    .sorted_head th.placeholder:before {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        border: 5px solid transparent;
        border-top-color: red;
        top: -6px;
        margin-left: -5px;
        border-bottom: none; }
</style>



