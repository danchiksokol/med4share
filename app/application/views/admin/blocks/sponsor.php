<form class="form-horizontal" method="post" id="formEditBlock" onsubmit="if(!saveBlock()) return false;">
    <input type="hidden" id="id" name="id" value="<?=$data->id;?>" />

    <div class="well">
        <div class="row">

            <div class="col-md-3">
                <div class="header-images">
                    <input type="checkbox" <?if($data->active){?>checked="checked"<?}?> value="1" name="active" id="active">
                </div>
            </div>

            <div class="col-md-9">
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary submit submit_block_save" data-loading-text="Ожидайте...">Сохранить</button>
                </div>
            </div>


            <div class="col-md-12">
                <label>HTML спонсоров</label>
                <textarea class="col-md-12" id="content" name="content" class="form-control" rows="18"><?=$data->content?></textarea>
            </div>

        </div>
    </div>
</form>


<script type="text/javascript">




    $(function() {

        // radio
        $(':input[type=radio]:checked').parent('.btn').addClass('active');


        editAreaLoader.init({
            id: "content"	// id of the textarea to transform
            ,
            start_highlight: true
            ,
            allow_toggle: true
            ,
            language: "ru"
            ,
            syntax: "html"
            ,
            toolbar: "search, go_to_line, |, undo, redo, |, select_font, |, change_smooth_selection, highlight, reset_highlight, |, help, fullscreen, word_wrap"
            ,
            syntax_selection_allow: "css,html,js"
            ,
            is_multi_files: false
            //,EA_load_callback: "editAreaLoaded"
            ,
            show_line_colors: true
            ,
            min_height: 220
            //,display: "later"
            ,
            word_wrap: true
        });

        $('.header-images').toggleButtons();
    });


    function saveBlock() {

        var id = $('#formEditBlock #id').val();
        var content = $('#formEditBlock #content').val();
        var active = $('#formEditBlock #active').is(':checked') ? 1 : 0;



        var submit = true;

        if(submit == true) //Если нет ошибки
        {
            $.ajax({
                url: '/admin/blocks/save',
                dataType: 'json',
                type: 'POST',
                data: {'id': id, 'content' : content, 'active' : active},
                beforeSend: function ( xhr ) {
                    $('.submit_block_save').button('loading');
                },
                success: function( data )
                {
                    if(data.status == true)
                    {
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
    }



</script>