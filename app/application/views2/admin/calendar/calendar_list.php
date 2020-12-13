<p class="pull-right">
    <!--<a href="#" role="button" id="button_html_index_rheumatology" class="btn btn-primary" data-toggle="modal">Блок на главной странице Ревматологии</a>-->
    <a href="#" role="button" id="button_html_oncology" class="btn btn-primary" data-toggle="modal">Блок на главной странице Онкология</a>
    <a href="#" role="button" id="button_html_rheumatology" class="btn btn-primary" data-toggle="modal">Блок на главной странице Ревматология</a>
    <a href="#" role="button" id="button_html_neurology" class="btn btn-primary" data-toggle="modal">Блок на главной странице Неврология</a>
    <a href="/admin/calendar/add" role="button" class="btn btn-primary">Добавить событие</a>
</p>



<div class="clearfix"></div>

<table class="table table-hover table-bordered" id="user_list">
    <thead>
    <tr>
        <th style="width: 40px;">#</th>
        <th>Раздел</th>
        <th>Название события</th>
        <th>Дата начала события</th>
        <th>Дата окончания события</th>
        <th>Имя события</th>
        <th style="width: 100px">Отметка</th>
        <th style="width: 100px">Активна</th>
        <th style="width: 70px"></th>
    </tr>
    </thead>
    <tbody>
    <? foreach( $calendar as $val ) : ?>
    <tr id="tr-<?=$val->id?>">
        <td class="event_id"><?=$val->id;?></td>
        <td class="event_razdel"><?=$val->razdel_id;?></td>
        <td class="event_name"><?=$val->name;?></td>
        <td class="event_date_begin"><?=date('d.m.Y', strtotime($val->date_begin));?></td>
        <td class="event_date_end"><?=date('d.m.Y', strtotime($val->date_end));?></td>
        <td class="event_title"><?=$val->event_title;?></td>
        <td><?=$val->badge == 1 ? 'Да' : 'Нет';?></td>
        <td><? if($val->active) { ?> <button class="btn btn-xs btn-success event_active" type="button">Активна</button>
            <? } else { ?>
                <button class="btn btn-xs btn-danger event_active" type="button">Не активна</button>
            <?}?>
        </td>
        <td>
            <span class="glyphicon glyphicon-pencil event_edit" data-placement="bottom"  data-original-title="Редактировать"></span>
            <span class="glyphicon glyphicon-eye-close" onclick="event_view('<?=$val->url?>'); return false;" data-placement="bottom" data-original-title="Посмотреть страницу"></span>
            <span class="glyphicon glyphicon-remove event_delete" data-placement="bottom"  data-original-title="Удалить"></span>
        </td>
    </tr>
    <? endforeach; ?>
    </tbody>
</table>
<style>
    span {cursor: pointer;}
</style>



<div class="modal fade bs-example-modal-lg" id="modal_html_index" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Редактирование блока на главной странице</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <input type="hidden" name="block_id" id="block_id" value="<?=$blocks->id?>" />
                    <div class="row">
                        <div class="col-md-12">
                            <textarea style="width: 100%" class="col-md-12" id="block_content" name="block_content" class="form-control" rows="6"><?=$blocks->content?></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" aria-hidden="true" data-dismiss="modal">Закрыть</a>
                <a href="#" class="btn btn-primary submit_block_save" data-loading-text="Loading..." onclick="save_html_index(); return false;">Сохранить</a>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>



<script type="text/javascript">
    $().ready(function(){


        $('#button_html_oncology').live("click", function(){
            $('#modal_html_index').modal('show');
            get_block_data(1);
        });

        $('#button_html_rheumatology').live("click", function(){
            $('#modal_html_index').modal('show');
            get_block_data(3);
        });

        $('#button_html_neurology').live("click", function(){
            $('#modal_html_index').modal('show');
            get_block_data(4);
        });
       /* */


        //Изменение статуса новости (Активна - Не активна)
        $('.event_active').live('click', function() {
            var event_id = $(this).parent().parent().find('td').first().html();
            var _this=this;//сохраняем в замыкании кликнутую ссылку
            $.ajax({
                url: '/admin/calendar/active/',
                dataType: 'json',
                type: 'POST',
                data: {'event_id': event_id },
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
                        //$(_this).parent().parent().find('td').eq(2).text(data.modified_date);


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


        $('span.event_edit').tooltip();
        $('span.event_view').tooltip();
        $('span.event_delete').tooltip();

        //Редактирование страницы
        $('.event_edit').on("click", function(){
            var event_id = $(this).parent().parent().find('.event_id').html();
            document.location.href = '/admin/calendar/edit/'+event_id;
            return false;
        })

        //Удаление события
        $('.event_delete').on("click", function(){
            var event_id = $(this).parent().parent().find('.event_id').html();

            if ( ! confirm('Вы уверены что хотите удалить событие "'+$(this).parent().parent().find('.event_title').html()+'"') ) {
                return false;
            }

            $.ajax({
                url: '/admin/calendar/delete/',
                dataType: 'json',
                type: 'POST',
                data: {'event_id': event_id },
                beforeSend: function ( xhr ) {},
                success: function( data )
                {
                    if(data.status == true)
                    {

                        //Удаляем ячейку таблицы
                        $('#tr-'+event_id).hide(500);
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
        })
    })

    function get_block_data(id) {

        $.ajax({
            url: '/admin/blocks/getdata',
            dataType: 'json',
            type: 'POST',
            data: {'id': id },
            beforeSend: function ( xhr ) {
                $('.submit_block_save').button('loading');
            },
            success: function( data )
            {
                if(data.status == true)
                {
                    $("#modal_html_index #block_id").val(id);
                    $("#modal_html_index #block_content").val(data.content);
                    $('.submit_block_save').button('reset'); // Возращяем нормальный вид кнопки
                }
                else if(data.status == false)
                {
                    alert(data.message);
                }
            },
            error: function( error )
            {
                //Вывод ошибки
            }
        });

    }

    function save_html_index() {

        var id = $('#modal_html_index #block_id').val();
        var content = $('#modal_html_index #block_content').val();

        var submit = true;

        if(submit == true) //Если нет ошибки
        {
            $.ajax({
                url: '/admin/blocks/save',
                dataType: 'json',
                type: 'POST',
                data: {'id': id, 'content' : content},
                beforeSend: function ( xhr ) {
                    $('.submit_block_save').button('loading');
                },
                success: function( data )
                {
                    if(data.status == true)
                    {
                        $("#modal_html_index").modal('hide'); //Прячем форму
                    }
                    else if(data.status == false)
                    {
                        alert(data.message);
                    }
                    $('.submit_block_save').button('reset'); // Возращяем нормальный вид кнопки
                },
                error: function( error )
                {
                    //Вывод ошибки
                }
            });
        }
    }

    //Просмотр страницы
    function event_view( url ) {
        location.replace('<?=URL::base()?>calendar/'+url); //calendar
        return false;
    }
</script>