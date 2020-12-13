<p class="pull-right">
    <a href="/admin/experts/add" role="button" class="btn btn-primary">Добавить Эксперта</a>
</p>



<div class="clearfix"></div>

<table class="table table-hover table-bordered" id="user_list">
    <thead>
    <tr>
        <th style="width: 40px;">#</th>
        <th style="width: 40px;">Раздел</th>
        <th>Фото</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th style="width: 100px">Активна</th>
        <th style="width: 70px"></th>
    </tr>
    </thead>
    <tbody>
    <? foreach( $experts as $val ) : ?>
    <tr id="tr-<?=$val->id?>">
        <td class="experts_id"><?=$val->id;?></td>
        <td class="razdel_id"><?=$val->razdel_id;?></td>
        <td class="experts_image">
        <? if(strlen($val->imagePreview)) { ?>
       		<div id="iconPreview"><img src="<?=$val->imagePreview?>" class="img-rounded" style="max-height: 100px"/></div>
        <? } ?>
        </td>
        <td class="experts_familia"><?=$val->familia;?></td> 
		<td class="experts_name"><?=$val->name;?></td> 
		<td class="experts_otchestvo"><?=$val->otchestvo;?></td> 
        <td><? if($val->active) { ?> <button class="btn btn-xs btn-success experts_active" type="button">Активен</button>
            <? } else { ?>
                <button class="btn btn-xs btn-danger experts_active" type="button">Не активен</button>
            <?}?>
        </td>
        <td>
            <span class="glyphicon glyphicon-pencil experts_edit" data-placement="bottom"  data-original-title="Редактировать"></span>
            <span class="glyphicon glyphicon-eye-close" onclick="experts_view('<?=$val->url?>'); return false;" data-placement="bottom" data-original-title="Посмотреть эксперта"></span>
            <span class="glyphicon glyphicon-remove experts_delete" data-placement="bottom"  data-original-title="Удалить"></span>
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


        $('#button_html_index').live("click", function(){

            /*editAreaLoader.init({
                id: "block_content"	// id of the textarea to transform
                ,start_highlight: true
                ,allow_toggle: true
                ,language: "ru"
                ,syntax: "html"
                ,toolbar: "search, go_to_line, |, undo, redo, |, select_font, |, change_smooth_selection, highlight, reset_highlight, |, help, fullscreen, word_wrap"
                ,syntax_selection_allow: "css,html,js"
                ,is_multi_files: false
                //,EA_load_callback: "editAreaLoaded"
                ,show_line_colors: true
                ,min_height: 180
                ,min_width:  800
                //,display: "later"
                ,word_wrap: true
            });*/

            $('#modal_html_index').modal('show');
        });

       /* */


        //Изменение статуса новости (Активна - Не активна)
        $('.experts_active').live('click', function() {
            var experts_id = $(this).parent().parent().find('td').first().html();
            var _this=this;//сохраняем в замыкании кликнутую ссылку
            $.ajax({
                url: '/admin/experts/active/',
                dataType: 'json',
                type: 'POST',
                data: {'experts_id': experts_id },
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


        $('span.experts_edit').tooltip();
        $('span.experts_view').tooltip();
        $('span.experts_delete').tooltip();

        //Редактирование страницы
        $('.experts_edit').on("click", function(){
            var event_id = $(this).parent().parent().find('.experts_id').html();
            document.location.href = '/admin/experts/edit/'+event_id;
            return false;
        })

        //Удаление страницы
        $('.experts_delete').on("click", function(){
            var experts_id = $(this).parent().parent().find('.experts_id').html();

            if ( ! confirm('Вы уверены что хотите удалить эксперта "'+$(this).parent().parent().find('.experts_familia').html()+'"') ) {
                return false;
            }

            $.ajax({
                url: '/admin/experts/delete/',
                dataType: 'json',
                type: 'POST',
                data: {'experts_id': experts_id },
                beforeSend: function ( xhr ) {},
                success: function( data )
                {
                    if(data.status == true)
                    {

                        //Удаляем ячейку таблицы
                        $('#tr-'+experts_id).hide(500);
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
    function experts_view( url ) { 
        location.replace('<?=URL::base()?>experts/'+url); //calendar
        return false;
    }
</script>