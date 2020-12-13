

<div class="row" id="menu-list">
    <div class="col-sm-12">
        <p class="pull-right">
            <a href="#modal-add-menu" role="button" class="btn btn-success" data-toggle="modal">Добавить меню</a>
        </p>
    </div>


    <? $i = 1;
    foreach($data as $val) { ?>

        <?
            $dopData = ORM::factory('DopMenuItems')->getDopMenu( $val->id );

            if( $i++ % 3 == 1) {
                echo '<div class="clearfix"></div>';
            }
        ?>


        <div class="col-sm-4 menuss"  id="menu-id-<?=$val->id?>">
            <h4>
                <span class="name-menu"><?=$val->name?></span>
                <span class="glyphicon glyphicon-pencil" onclick="edit_menu('<?=$val->id?>', '<?=$val->name?>'); return false;" data-placement="bottom" data-original-title="Редактировать"></span>
                <span class="glyphicon glyphicon-remove" onclick="delete_menu(<?=$val->id?>); return false;" data-placement="bottom" data-original-title="Удалить"></span>
        <span class="pull-right">
            <a href="#modal-add-item" role="button" class="btn btn-primary"  data-menu-id="<?=$val->id?>"  data-toggle="modal">Добавить пункт</a>
        </span>
            </h4>
            <div class="clearfix"></div>
            <? // if( count($dopData) > 0 ) { ?>
            <ol class="serialization vertical">
                <li data-menuId="<?=$val->id?>" class="liMenu"></li>
                <? foreach($dopData as $v) { ?>
                    <li id="item-id-<?= $v->id_items ?>" data-item-id='<?= $v->id_items ?>' data-name='<?= $v->name ?>' data-url='<?=$v->url?>'>
                        <span class="name"><?= $v->name ?></span>
                        <span class="glyphicon glyphicon-eye-close" data-placement="bottom" data-original-title="Посмотреть раздел"></span>
                        <span class="glyphicon glyphicon-remove pull-right" onclick="delete_item(<?=$v->id_items?>); return false;" data-placement="bottom" data-original-title="Удалить"></span>
                        <span class="glyphicon glyphicon-pencil pull-right" onclick="edit_item(<?=$v->id_items?>); return false;" style="padding-right: 6px;" data-placement="bottom" data-original-title="Редактировать"></span>
                    </li>
                <? } ?>

            </ol>
        </div>


    <? } ?>

</div>


<div class="modal fade" id="modal-add-menu" >
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
                            <input type="input" class="form-control" id="modal-add-name" placeholder="Название меню">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" aria-hidden="true" data-dismiss="modal">Закрыть</a>
                <a href="#" class="btn btn-primary submit_send_add" data-loading-text="Ожидайте..." onclick="add_menu(); return false;">Добавить</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modal-menu-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Редактирование меню</h4>
            </div>
            <div class="modal-body">

                <div id="news-title-error" class="alert alert-error hide"></div> <!--Отображение ошибки от ajax-->
                <input type="hidden" class="form-control" id="modal-edit-id">

                <form class="form-horizontal">
                    <input type="hidden" value="" id="modal-id">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Название</label>
                        <div class="col-sm-10">
                            <input type="input" class="form-control" id="modal-edit-name" placeholder="Название меню">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary submit_send_edit" data-loading-text="Ожидайте..." onclick="save_menu(); return false;">Сохранить</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modal-add-item" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Добавить пункт</h3>
            </div>
            <div class="modal-body">

                <form class="form-horizontal">
                    <input type="hidden" name="menu-id" id="modal-add-item-menu-id">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Название пункта</label>
                        <div class="col-sm-9">
                            <input type="input" class="form-control" id="modal-add-item-name" placeholder="Название пункта">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">URL страницы</label>
                        <div class="col-sm-9">
                            <input type="input" class="form-control" id="modal-add-item-url" placeholder="URL страницы">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" aria-hidden="true" data-dismiss="modal">Закрыть</a>
                <a href="#" class="btn btn-primary submit_send_add" data-loading-text="Ожидайте..." onclick="add_item(); return false;">Добавить</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modal-item-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Редактирование пункт</h4>
            </div>
            <div class="modal-body">

                <div id="news-title-error" class="alert alert-error hide"></div> <!--Отображение ошибки от ajax-->
                <input type="hidden" class="form-control" id="modal-edit-item-id">

                <form class="form-horizontal">
                    <input type="hidden" value="" id="modal-item-id">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Название пункта</label>
                        <div class="col-sm-9">
                            <input type="input" class="form-control" id="modal-edit-item-name" placeholder="Название пункта">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">URL страницы</label>
                        <div class="col-sm-9">
                            <input type="input" class="form-control" id="modal-edit-item-url" placeholder="URL страницы">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary submit_send_edit_item" data-loading-text="Ожидайте..." onclick="save_item(); return false;">Сохранить</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    $(function  () {


        $('#modal-add-item').on('show.bs.modal', function(e) {

            setTimeout(function() {
                $('#modal-add-item-name').focus();
            }, 300);

            //get data-id attribute of the clicked element
            var menuId = $(e.relatedTarget).data('menu-id');

            //populate the textbox
            $(e.currentTarget).find('input[name="menu-id"]').val(menuId);
        });

        $('#modal-add-menu').on('show.bs.modal', function(e) {

            setTimeout(function() {
                $('#modal-add-name').focus();
            }, 300);
        });

        sort();

        // Просмотр страницы
        $('.glyphicon-eye-close').live("click", function(){
            var url = $(this).parent('li').attr('data-url');
            location.replace('/'+url); //calendar
            return false;
        });

        // Редактирвоние
        $('.glyphicon-pencil').live("click", function(){
            var id = $(this).parent('li').attr('data-item-id');
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

    });


    function sort() {
        var group = $("ol.serialization").sortable({
            group: 'serialization',
            pullPlaceholder: false,
            //handle: 'i.icon-move',
            delay: 200,
            onDrop: function (item, container, _super) {


                var data = group.sortable("serialize").get();

                var jsonString = JSON.stringify(data, null, '');

                $.ajax({
                    url: '/admin/dopmenu/sort',
                    dataType: 'json',
                    type: 'POST',
                    data: {'post_data': jsonString },
                    beforeSend: function ( xhr ) {},
                    success: function( data )
                    {
                        if(data.status == true)
                        {

                        }
                        else if(data.status == false)
                        {

                        }
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
    }

    function add_item() {

        var submit = true;

        var item_name = $('#modal-add-item-name').val();
        var item_url = $('#modal-add-item-url').val();
        var menu_id  = $('#modal-add-item-menu-id').val();

        if(submit == true) //Если нет ошибки
        {
            $.ajax({
                url: '/admin/dopmenu/addItem',
                dataType: 'json',
                type: 'POST',
                data: {
                    'menu_id' : menu_id,
                    'item_name' : item_name,
                    'item_url' : item_url
                },
                beforeSend: function ( xhr ) {
                    $('.submit_send_add').button('loading');
                },
                success: function( data )
                {
                    if(data.status == true)
                    {
                        $('#menu-id-' + menu_id + ' ol').append(
                            '<li id="item-id-'+ data.pk +'"  data-item-id="'+ data.pk +'" data-name="'+ item_name +'" data-url="'+ item_url +'">' +
                                '<span class="name">'+ item_name +'</span> ' +
                                '<span class="glyphicon glyphicon-eye-close" data-placement="bottom" data-original-title="Посмотреть пункт"></span>' +
                                '<span class="glyphicon glyphicon-remove pull-right" data-placement="bottom" onclick="delete_item('+ data.pk +'); return false;" data-original-title="Удалить"></span>' +
                                '<span class="glyphicon glyphicon-pencil pull-right" style="padding-right: 6px;" onclick="edit_item('+ data.pk +'); return false;" data-placement="bottom" data-original-title="Редактировать"></span>' +
                                '</li>'
                        );

                        sort();

                        $("#modal-add").modal('hide'); //Прячем форму

                    }
                    else if(data.status == false)
                    {
                        $("#modal-add-menu").modal('hide');
                        alert(data.message);

                    }
                    $("#modal-add-item").modal('hide');

                    $('#modal-add-item-name').val('');
                    $('#modal-add-item-url').val('');
                    $('#modal-add-item-menu-id').val('');
                    $('.submit_send_add').button('reset'); // Возращяем нормальный вид кнопки

                },
                error: function( error )
                {
                    //Вывод ошибки
                }
            });
        }
    } // add_item

    function delete_item( id ) {


        if ( ! confirm('Точно удалить пункт?')) {
            return false;
        }

        $.ajax({
            url: '/admin/dopmenu/deleteItem',
            dataType: 'json',
            type: 'POST',
            data: {'id': id },
            beforeSend: function ( xhr ) {},
            success: function( data )
            {
                if(data.status == true)
                {
                    $('li[data-id='+ id +']').hide(300);
                    //$('#menu-id-'+id).hide();
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
        return false;
    }

    function edit_item( id, name, url) {

        $('#modal-item-edit #modal-edit-item-id').val(id);
        $('#modal-item-edit #modal-edit-item-name').val(  $('#item-id-'+id).attr('data-name') );
        $('#modal-item-edit #modal-edit-item-url').val( $('#item-id-'+id).attr('data-url') );

        $('#modal-item-edit').modal('show');
    }

    function save_item() {

        var submit = true;

        var id = $('#modal-item-edit #modal-edit-item-id').val();
        var name = $('#modal-item-edit #modal-edit-item-name').val();
        var url = $('#modal-item-edit #modal-edit-item-url').val();

        if(submit == true) //Если нет ошибки
        {
            $.ajax({
                url: '/admin/dopmenu/saveItem',
                dataType: 'json',
                type: 'POST',
                data: {'id': id, 'name' : name, 'url' : url},
                beforeSend: function ( xhr ) {
                    $('.submit_send_edit_item').button('loading');
                },
                success: function( data )
                {
                    if(data.status == true)
                    {
                        $('#item-id-'+id +' .name').text(name);
                        $('#item-id-'+id).attr('data-name', name);


                        $('#item-id-'+id).attr('data-url', url);

                        $("#modal-item-edit").modal('hide'); //Прячем форму

                    }
                    else if(data.status == false)
                    {
                        $("#modal-edit-name").modal('hide');
                        alert(data.message);

                    }

                    $('#modal-item-edit #modal-edit-item-id').val('');
                    $('#modal-item-edit #modal-edit-item-name').val('');
                    $('#modal-item-edit #modal-edit-item-url').val('');
                    $('.submit_send_edit_item').button('reset'); // Возращяем нормальный вид кнопки
                },
                error: function( error )
                {
                    //Вывод ошибки
                }
            });
        }

    }



    function add_menu()
    {

        var submit = true;
        var name = $('#modal-add-menu #modal-add-name').val();

        if(submit == true) //Если нет ошибки
        {
            $.ajax({
                url: '/admin/dopmenu/add',
                dataType: 'json',
                type: 'POST',
                data: {'name' : name},
                beforeSend: function ( xhr ) {
                    $('.submit_send_add').button('loading');
                },
                success: function( data )
                {
                    if(data.status == true)
                    {
                        location.reload();
                        $('#menu-list').append(' <div class="col-sm-4 menuss" id="menu-id-'+data.pk+'">' +
                            '<h4><span class="name">'+name+'</span>' +
                            ' <span class="glyphicon glyphicon-pencil" onclick="edit_menu('+ data.pk +', \''+ name +'\'); return false;" data-placement="bottom" data-original-title="Редактировать"></span>' +
                            ' <span class="glyphicon glyphicon-remove" onclick="delete_menu('+ data.pk +'); return false;" data-placement="bottom" data-original-title="Удалить"></span>' +
                            '<span class="pull-right">' +
                            '<a href="#modal-add" role="button" class="btn btn-primary" data-toggle="modal">Добавить пункт</a>' +
                            '</span>' +
                            '</h4>'+
                            '<div class="clearfix"></div>' +
                            '<ol class="serialization vertical">' +
                            '<li data-menuId="'+ data.pk +'" class="liMenu"></li>' +
                            '</ol>'
                        );

                        sort();

                        $("#modal-add").modal('hide'); //Прячем форму

                    }
                    else if(data.status == false)
                    {
                        $("#modal-add-menu").modal('hide');
                        alert(data.message);

                    }
                    $("#modal-add-menu").modal('hide');
                    $('#modal-add-menu #modal-add-name').val('')
                    $('.submit_send_add').button('reset'); // Возращяем нормальный вид кнопки

                },
                error: function( error )
                {
                    //Вывод ошибки
                }
            });
        }
    }

    function edit_menu( id, name ) {

        $('#modal-menu-edit #modal-edit-id').val(id);
        $('#modal-menu-edit #modal-edit-name').val(name);

        $('#modal-menu-edit').modal('show');
    }

    function save_menu() {

        var submit = true;

        var id = $('#modal-menu-edit #modal-edit-id').val();
        var name = $('#modal-menu-edit #modal-edit-name').val();

        if(submit == true) //Если нет ошибки
        {
            $.ajax({
                url: '/admin/dopmenu/save',
                dataType: 'json',
                type: 'POST',
                data: {'id': id, 'name' : name},
                beforeSend: function ( xhr ) {
                    $('.submit_send_add').button('loading');
                },
                success: function( data )
                {
                    if(data.status == true)
                    {

                        $('#menu-id-'+id+' .name-menu').text(name);


                        $("#modal-edit-name").modal('hide'); //Прячем форму

                    }
                    else if(data.status == false)
                    {
                        $("#modal-edit-name").modal('hide');
                        alert(data.message);

                    }
                    $("#modal-menu-edit").modal('hide');
                    $('#modal-menu-edit #modal-add-name').val('')
                    $('.submit_send_add').button('reset'); // Возращяем нормальный вид кнопки
                },
                error: function( error )
                {
                    //Вывод ошибки
                }
            });
        }
    }


    function delete_menu( id ) {


        if ( ! confirm('Точно удалить меню?')) {
            return false;
        }

        $.ajax({
            url: '/admin/dopmenu/delete',
            dataType: 'json',
            type: 'POST',
            data: {'id': id },
            beforeSend: function ( xhr ) {},
            success: function( data )
            {
                if(data.status == true)
                {
                    $('#menu-id-'+id).hide();
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
        return false;
    }



</script>

<style>


    /* line 4, /Users/jonasvonandrian/jquery-sortable/source/css/jquery-sortable.css.sass */
    .dragged {
        position: absolute;
        top: 0;
        opacity: 0.5;
        z-index: 2000; }

    /* line 10, /Users/jonasvonandrian/jquery-sortable/source/css/jquery-sortable.css.sass */
    ol.vertical {
        margin: 0 0 9px 0;
        padding-left: 0;
        min-height: 10px; }
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
        background-image: url("/media/img/admin/glyphicons-halflings.png"); }

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

    /* line 60, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    .navbar-sort-container {
        height: 200px; }

    /* line 64, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    ol.nav li, ol.nav li a {
        cursor: pointer; }
    /* line 66, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    ol.nav .divider-vertical {
        cursor: default; }
    /* line 69, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    ol.nav li.dragged {
        background-color: #2c2c2c; }
    /* line 71, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    ol.nav li.placeholder {
        position: relative; }
    /* line 73, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    ol.nav li.placeholder:before {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        border: 5px solid transparent;
        border-top-color: red;
        top: -6px;
        margin-left: -5px;
        border-bottom: none; }
    /* line 84, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
    ol.nav ol.dropdown-menu li.placeholder:before {
        border: 5px solid transparent;
        border-left-color: red;
        margin-top: -5px;
        margin-left: none;
        top: 0;
        left: 10px;
        border-right: none; }

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



    .menuss {
        width: 30%; background-color: #eee; margin: 10px; border-radius: 6px;
    }

    ol.vertical li.liMenu {
        padding: 0;
        margin: 0;
    }

    .liMenu {
        visibility:hidden; padding: 0; margin: 0; height: 0; width: 0;
        overflow: hidden;
        font-size: 0;
        clear: both;
        height: 0;
        content: " ";
        padding: 0;
        margin: 0;
    }

</style>