<p class="pull-right">
    <a href="#modal-add" role="button" class="btn btn-primary" data-toggle="modal">Добавить меню</a>
</p>


<ol class='serialization vertical example'>
   <!-- <pre>
    <?/*print_r($menu)*/?>
        </pre>-->
    <? foreach( $menu as $val) { ?>
        <? if (is_array($val['child'])) { ?>

            <li data-id='<?= $val['id'] ?>' data-name='<?= $val['name'] ?>' data-url='<?=$val['url']?>'>
                <span class="name"><?= $val['name'] ?></span>
                <span class="glyphicon glyphicon-eye-close" data-placement="bottom" data-original-title="Посмотреть раздел"></span>
                <span class="glyphicon glyphicon-remove pull-right" data-placement="bottom" data-original-title="Редактировать"></span>
                <span class="glyphicon glyphicon-pencil pull-right" style="padding-right: 6px;" data-placement="bottom" data-original-title="Удалить"></span>
                <ol>
                    <? foreach ($val['child'] as $vv) { ?>

                        <? if (is_array($vv['child'])) { ?>
                            <li data-id='<?= $vv['id'] ?>' data-name='<?= $vv['name'] ?>' data-url='<?=$vv['url']?>'>
                                <span class="name"><?= $vv['name'] ?></span>
                                <span class="glyphicon glyphicon-eye-close" data-placement="bottom" data-original-title="Посмотреть раздел"></span>
                                <span class="glyphicon glyphicon-remove pull-right" data-placement="bottom" data-original-title="Редактировать"></span>
                                <span class="glyphicon glyphicon-pencil pull-right" style="padding-right: 6px;" data-placement="bottom" data-original-title="Удалить"></span>
                                <ol>
                                    <? foreach ($vv['child'] as $v) { ?>
                                        <li data-id='<?= $v['id'] ?>' data-name='<?= $v['name'] ?>' data-url='<?=$v['url']?>'>
                                             <span class="name"><?= $v['name'] ?></span>
                                            <span class="glyphicon glyphicon-eye-close" data-placement="bottom" data-original-title="Посмотреть раздел"></span>
                                            <span class="glyphicon glyphicon-remove pull-right" data-placement="bottom" data-original-title="Редактировать"></span>
                                            <span class="glyphicon glyphicon-pencil pull-right" style="padding-right: 6px;" data-placement="bottom" data-original-title="Удалить"></span>
                                            <ol></ol>
                                        </li>
                                    <? } ?>
                                </ol>
                            </li>
                        <? } else { ?>
                            <li data-id='<?= $vv['id'] ?>' data-name='<?= $vv['name'] ?>' data-url='<?=$vv['url']?>'>
                                 <span class="name"><?= $vv['name'] ?></span>
                                <span class="glyphicon glyphicon-eye-close" data-placement="bottom" data-original-title="Посмотреть раздел"></span>
                                <span class="glyphicon glyphicon-remove pull-right" data-placement="bottom" data-original-title="Редактировать"></span>
                                <span class="glyphicon glyphicon-pencil pull-right" style="padding-right: 6px;" data-placement="bottom" data-original-title="Удалить"></span>
                                <ol></ol>
                            </li>
                        <? } ?>
                    <? } ?>
                </ol>
            </li>
        <? } else { ?>
            <li data-id='<?= $val['id'] ?>' data-name='<?= $val['name'] ?>' data-url='<?=$val['url']?>'>
                 <span class="name"><?= $val['name'] ?></span>
                <span class="glyphicon glyphicon-eye-close" data-placement="bottom" data-original-title="Посмотреть раздел"></span>
                <span class="glyphicon glyphicon-remove pull-right" data-placement="bottom" data-original-title="Редактировать"></span>
                <span class="glyphicon glyphicon-pencil pull-right" style="padding-right: 6px;" data-placement="bottom" data-original-title="Удалить"></span>
                <ol></ol>
            </li>
        <? }
    } ?>
</ol>

<div class="modal fade" id="modal-add" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Добавить меню</h3>
            </div>
            <div class="modal-body">
                <div class="alert alert-success hide" id="success-add-news">Новость добавлена!</div>
                <form class="form-horizontal">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Название</label>
                        <div class="col-sm-10">
                            <input type="input" class="form-control" id="modal-add-name" placeholder="Название раздела">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">URL</label>
                        <div class="col-sm-10">
                            <input type="input" class="form-control" id="modal-add-url" placeholder="/index">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" aria-hidden="true" data-dismiss="modal">Закрыть</a>
                <a href="#" class="btn btn-primary submit_send_add" data-loading-text="Ожидайте..." onclick="menu_add(); return false;">Добавить</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="modal-edit" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Редактирование меню</h4>
            </div>
            <div class="modal-body">

                <div id="news-title-error" class="alert alert-error hide"></div> <!--Отображение ошибки от ajax-->

                    <form class="form-horizontal">
                        <input type="hidden" value="" id="modal-id">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Название</label>
                            <div class="col-sm-10">
                                <input type="input" class="form-control" id="modal-name" placeholder="Название раздела">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">URL</label>
                            <div class="col-sm-10">
                                <input type="input" class="form-control" id="modal-url" placeholder="/index">
                            </div>
                        </div>
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary submit_send_edit" data-loading-text="Ожидайте..." onclick="menu_edit(); return false;">Сохранить</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
    $(function  () {

        var group = $("ol.serialization").sortable({
            group: 'serialization',
            //handle: 'i.icon-move',
            delay: 200,
            onDrop: function (item, container, _super) {
                var data = group.sortable("serialize").get();

                var jsonString = JSON.stringify(data, null, '');

                $.ajax({
                    url: '/admin/menu_rheumatology/sort',
                    dataType: 'json',
                    type: 'POST',
                    data: {'post_data': jsonString },
                    beforeSend: function ( xhr ) {},
                    success: function( data )
                    {
                       /* if(data.status == true)
                        {

                        }
                        else if(data.status == false)
                        {

                        }*/
                    },
                    error: function( error )
                    {
                        //Вывод ошибки
                    }
                });

                //$('#serialize_output2').text(jsonString);
                _super(item, container)
            }
        })




        $('span.event_edit').tooltip();
        $('span.event_view').tooltip();
        $('span.event_delete').tooltip();

        // --> Удаление Меню
        $('.glyphicon-remove').live('click',function() {


            if ( ! confirm('Точно удалить меню?')) {
                return false;
            }



            var id = $(this).parent('li').attr('data-id');
            var _this=this;//сохраняем в замыкании кликнутую ссылку


            $.ajax({
                url: '/admin/menu_rheumatology/delete',
                dataType: 'json',
                type: 'POST',
                data: {'id': id },
                beforeSend: function ( xhr ) {},
                success: function( data )
                {
                    if(data.status == true)
                    {
                        //Удаляем ячейку таблицы
                        $(_this).parent().hide();
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
        // <-- Удаление Меню




        $('.glyphicon-pencil').live("click", function(){
            var id = $(this).parent('li').attr('data-id');
            var name = $(this).parent('li').attr('data-name');
            var url = $(this).parent('li').attr('data-url');

            $('#modal-id').val(id);
            $('#modal-name').val(name);
            $('#modal-url').val(url);

            $('#modal-edit').modal('show');
            $('#modal-edit').on('shown', function() {
                $("#modal-name").focus();

            })
        });



        $('.glyphicon-eye-close').live("click", function(){
            var url = $(this).parent('li').attr('data-url');
            location.replace('/'+url); //calendar
            return false;

        });




    })


    function menu_edit() {
        var submit = true;

        var id = $('#modal-edit #modal-id').val();
        var name = $('#modal-edit #modal-name').val();
        var url = $('#modal-edit #modal-url').val();

        if(submit == true) //Если нет ошибки
        {
            $.ajax({
                url: '/admin/menu_rheumatology/edit',
                dataType: 'json',
                type: 'POST',
                data: {'id': id, 'name' : name, 'url' : url},
                beforeSend: function ( xhr ) {
                    $('.submit_send_edit').button('loading');
                },
                success: function( data )
                {
                    if(data.status == true)
                    {

                        $(".serialization").find("[data-id='" + id + "']")
                            .attr('data-name', name)
                            .attr('data-url', url);
                        $(".serialization").find("[data-id='" + id + "']").children("span.name").text(name);


                        $("#modal-edit").modal('hide'); //Прячем форму


                    }
                    else if(data.status == false)
                    {
                        alert(data.message);
                    }
                    $('.submit_send_edit').button('reset'); // Возращяем нормальный вид кнопки
                },
                error: function( error )
                {
                    //Вывод ошибки
                }
            });
        }


    }

    function menu_add()
    {
        var submit = true;
        var name = $('#modal-add #modal-add-name').val();
        var url = $('#modal-add #modal-add-url').val();

        if(submit == true) //Если нет ошибки
        {
            $.ajax({
                url: '/admin/menu_rheumatology/add',
                dataType: 'json',
                type: 'POST',
                data: {'name' : name, 'url' : url},
                beforeSend: function ( xhr ) {
                    $('.submit_send_add').button('loading');
                },
                success: function( data )
                {
                    if(data.status == true)
                    {




                        $("ol.serialization li:eq(0)").before("<li data-id='"+data.pk+"' data-name='"+name+"' data-url='"+url+"'>" +
                            "<span class='name'>" + name + "</span> " +
                            "<span class='glyphicon glyphicon-eye-close' data-placement='bottom' data-original-title='Посмотреть раздел'></span>" +
                            "<span class='glyphicon glyphicon-remove pull-right' data-placement='bottom' data-original-title='Редактировать'></span>" +
                            "<span class='glyphicon glyphicon-pencil pull-right' style='padding-right: 6px;' data-placement='bottom' data-original-title='Удалить'></span>" +
                            "<ol></ol></li>");




                        $("#modal-add").modal('hide'); //Прячем форму


                    }
                    else if(data.status == false)
                    {
                        alert(data.message);
                    }
                    $('#modal-add #modal-add-name').val('');
                    $('#modal-add #modal-add-url').val('');
                    $('.submit_send_add').button('reset'); // Возращяем нормальный вид кнопки
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
    /* line 1, /Users/jonasvonandrian/jquery-sortable/source/css/jquery-sortable.css.sass */
    body.dragging, body.dragging * {
        cursor: move !important; }

    /* line 4, /Users/jonasvonandrian/jquery-sortable/source/css/jquery-sortable.css.sass */
    .dragged {
        position: absolute;
        top: 0;
        opacity: 0.5;
        z-index: 2000; }

    /* line 10, /Users/jonasvonandrian/jquery-sortable/source/css/jquery-sortable.css.sass */
    ol.vertical {
        margin: 0 0 9px 0;
        min-height: 10px;
        width: 40%;
    }

    ol.vertical span {
        color: #000;
        z-index: 1000;
    }
    ol.vertical span:hover {
        color: #0088cc;
    }

    ol.vertical span.name {
        color: #337ab7;
    }

    /* line 13, /Users/jonasvonandrian/jquery-sortable/source/css/jquery-sortable.css.sass */
    ol.vertical li {
        display: block;
        margin: 5px;
        padding: 5px;
        border: 1px solid #cccccc;
        color: #0088cc;
        background: #eeeeee; }
    /* line 20, /Users/jonasvonandrian/jquery-sortable/source/css/jquery-sortable.css.sass */
    ol.vertical li.placeholder {
        position: relative;
        margin: 0;
        padding: 0;
        border: none; }
    /* line 25, /Users/jonasvonandrian/jquery-sortable/source/css/jquery-sortable.css.sass */
    ol.vertical li.placeholder:before {
        position: absolute;
        content: "";
        width: 0;
        height: 0;
        margin-top: -5px;
        left: -5px;
        top: -4px;
        border: 5px solid transparent;
        border-left-color: red;
        border-right: none; }

    /* line 32, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    ol {
        list-style-type: none; }
    /* line 34, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    ol i.icon-move {
        cursor: pointer; }
    /* line 36, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    ol li.highlight {
        background: #333333;
        color: #999999; }
    /* line 39, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    ol li.highlight i.icon-move {
        background-image: url("../img/glyphicons-halflings-white.png"); }

    /* line 42, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    ol.nested_with_switch, ol.nested_with_switch ol {
        border: 1px solid #eeeeee; }
    /* line 44, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    ol.nested_with_switch.active, ol.nested_with_switch ol.active {
        border: 1px solid #333333; }

    /* line 48, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    ol.nested_with_switch li, ol.simple_with_animation li, ol.serialization li, ol.default li {
        cursor: pointer; }

    /* line 51, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    ol.simple_with_animation {
        border: 1px solid #999999; }

    /* line 54, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    .switch-container {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 80px; }
</style>