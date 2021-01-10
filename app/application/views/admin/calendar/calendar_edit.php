

    <div class="alert hide"></div>

    <form class="form-horizontal" method="post" onsubmit="if(!event_save()) return false;">
        <input type="hidden" id="id" name="id" value="<?=$data->id;?>" />


    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <div class="row form-group">

                        <div class="col-md-3">
                            <label>Активна</label>
                            <div class="header-images">
                                <input type="checkbox" <?if($data->active){?>checked="checked"<?}?> value="1" name="active">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label>Особо отметить</label>
                            <div class="header-images">
                                <input type="checkbox" <?if($data->badge){?>checked="checked"<?}?> value="1" name="badge">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Показывать без регистрации</label>
                            <div class="header-images">
                                <input type="checkbox" <?if($data->show_not_reg){?>checked="checked"<?}?> value="1" name="show_not_reg">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary submit" data-loading-text="Loading...">Сохранить</button>
                                <a href="/calendar/<?=$data->url?>" id="event_view" class="btn btn-primary ">Просмотр</a>
                            </div>
                        </div>
                    </div> <!-- row-fluid -->

                    <div class="row">
                        <div class="col-sm-6">
                            <label>URL События</label>
                            <input type="text" class="form-control mandatory" name="url" placeholder="Заголовок" value="<?=$data->url?>" >
                        </div><!--/span-->
                        <div class="col-sm-6">
                            <label>Имя события (Для админ. раздела)</label>
                            <input type="text" class="form-control mandatory" name="name" placeholder="Заголовок" value="<?=htmlspecialchars($data->name, ENT_QUOTES)?>">
                        </div><!--/span-->
                    </div>
                    <br />

                    <div class="row">
                        <div class="col-sm-12">
                            <label>Заголовок события (Для сайта)</label>
                            <input type="text" class="form-control mandatory" name="event_title" placeholder="Заголовок" value="<?=htmlspecialchars($data->event_title, ENT_QUOTES)?>">
                        </div><!--/span-->
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="input-append date" id="date-change" data-date="<?=date('d-m-Y');?>">
                                <label>Дата начала события</label>
                                <div class="input-group" data-datepicker="true">
                                    <input name="date_begin" type="text" class="form-control" value="<?=date('d-m-Y', strtotime($data->date_begin));?>" />
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="input-append date" id="date-change" data-date="<?=date('d-m-Y');?>">
                                <label>Дата окончания события</label>
                                <div class="input-group" data-datepicker="true">
                                    <input name="date_end" type="text" class="form-control" value="<?=strtotime($data->date_end) == '' ? '' : date('d-m-Y', strtotime($data->date_end));?>" />
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Время мероприятия</label>
                            <input type="time" class="form-control mandatory" name="event_time" value="<?=$data->event_time;?>">
                        </div>

                    </div>

                    <br />

                    <div class="row">
                        <div class="col-sm-12">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="<?=htmlspecialchars($data->title, ENT_QUOTES)?>" />
                        </div>
                    </div>


                    <br />
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Раздел события</label>
                            <select name="razdel_id" class="form-control">
                                <option value="0" <? if($data->razdel_id == 0){?> selected<?}?>>Онкология</option>
                                <option value="3" <? if($data->razdel_id == 3){?> selected<?}?>>Ревматология</option>
                                <option value="4" <? if($data->razdel_id == 4){?> selected<?}?>>Неврология</option>

                            </select>
                        </div>
                    </div>


                    <br />
                    <div class="row">

                        <div class="col-sm-6">
                            <label>Description</label>
                            <textarea class="col-sm-12" rows="3" name="description" placeholder="Description"><?=$data->description?></textarea>
                        </div><!--/span-->
                        <div class="col-sm-6">
                            <label>Keywords</label>
                            <textarea class="col-sm-12" rows="3" name="keywords" placeholder="Keywords"><?=$data->keywords?></textarea>
                        </div><!--/span-->
                    </div><!--/row-->
                </div><!-- well -->

                <div class="well">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4>Комментарии</h4>
                        </div>
                        <div class="row-fluid">
                            <div class="col-sm-12">
                                <div class="bs-example">
                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                        <label class="btn btn-success">
                                            <input type="radio" name="is_comments" value="0" <?if($data->is_comments == 0){?>checked="checked"<?}?>> Отключить комментарии
                                        </label>
                                        <label class="btn btn-success">
                                            <input type="radio" name="is_comments" value="1" <?if($data->is_comments == 1){?>checked="checked"<?}?>> Только просмотр комментариев
                                        </label>
                                        <label class="btn btn-success">
                                            <input type="radio" name="is_comments" value="2" <?if($data->is_comments == 2){?>checked="checked"<?}?>> Просмотр и добавление комментариев
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- well -->


                <div class="well">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Полное описание</label>
                            <textarea class="form-control" name="text" id="text" placeholder="Малое описание" rows="2"><?=$data->text?></textarea>
                        </div><!--/span-->
                    </div>
                </div>









            </div>
        </div>
    </div>
    </form>


    <script type="text/javascript">




$(function() {

    // radio
    $(':input[type=radio]:checked').parent('.btn').addClass('active');

    editAreaLoader.init({
        id: "text"	// id of the textarea to transform
        ,start_highlight: true
        ,allow_toggle: true
        ,language: "ru"
        ,syntax: "html"
        ,toolbar: "search, go_to_line, |, undo, redo, |, select_font, |, change_smooth_selection, highlight, reset_highlight, |, help, fullscreen, word_wrap"
        ,syntax_selection_allow: "css,html,js"
        ,is_multi_files: false
        //,EA_load_callback: "editAreaLoaded"
        ,show_line_colors: true
        ,min_height: 320
        //,display: "later"
        ,word_wrap: true
    });



    //calendar
    $('*[data-datepicker="true"] input[type="text"]').datepicker({
        todayBtn: true,
        format: "dd-mm-yyyy",
        autoclose: true,
        todayHighlight: true,
        language: "ru"
    });
    //timepicker
    $('#timepicker').datetimepicker({
        pickDate: false,
        language: 'ru'
    });



    //$("#javascript").autoGrow();
    $("#css").autoGrow();



});

    $('.header-images').toggleButtons();

    function event_save()
    {
        for (instance in CKEDITOR.instances) // чтоб отработало чудо
            CKEDITOR.instances[instance].updateElement();

        var form = $("form");
        var submit = true;

        $('.form-horizontal').find('.mandatory', $(form)).each(function()
        {
            if($(this).val() == '')
            {
                $(this).parent().addClass('error').click(function()
                {
                    $(this).removeClass('error');
                });
                submit = false;
            }
        });
        $('.form-horizontal').find('.mandatory:first', $(this)).focus();

        if(submit == true) //Если нет ошибки
        {
            var post_data = $("form").serialize();
            $.ajax({
                url: '/admin/calendar/save/',
                dataType: 'json',
                type: 'POST',
                data: {'post_data': post_data },
                beforeSend: function ( xhr ) {},
                success: function( data )
                {
                    if(data.status == true)
                    {
                        //Изменяем ссылку на кнопке просмотр
                        $('#event_view').attr('href', '/calendar/'+$('[name=url]').val());



                        $('.alert').addClass('alert-success');
                        $('.alert').html(data.message);
                        $('.alert').removeClass('hide');
                        setTimeout(function(){ $('.alert').addClass('hide'); }, 3000);


                    }
                    else if(data.status == false)
                    {
                        $('.alert').text('');
                        $('.alert').addClass('alert-error');
                        for (var mes in data.message) {
                            $('.alert').append(data.message[mes]+'<br>');
                        }
                        $('.alert').removeClass('hide');
                    }
                },
                error: function( error )
                {
                    //Вывод ошибки
                }
            });
        }
        return false;
    }

</script>
