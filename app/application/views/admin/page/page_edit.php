<div class="page-header">
	<h1>Статический контент <small>Редактированние страницы</small></h1>
</div>

    <div class="alert hide"></div>

    <form class="form-horizontal" method="post" onsubmit="if(!page_save()) return false;">
        <input type="hidden" id="page_id" name="page_id" value="<?=$data->id;?>" />


    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
         <div class="well">
   			<div class="row form-group">

                <div class="col-lg-4">
                    <div class="input-group">
                        <input type="text" class="form-control" name="url" value="<?=$data->url?>">
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="button" onclick="generateUrl(); return false;">Сгенерировать</button>
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
                <div class="col-md-2">
                    <label>Активная страница</label>
                    <div class="header-images">
                         <input type="checkbox" <?if($data->pagestatic->active){?>checked="checked"<?}?> value="1" name="active">
                     </div>
   				</div>
                <div class="col-md-2">
                    <label>Показывать без регистрации</label>
                    <div class="header-images">
                        <input type="checkbox" <?if($data->pagestatic->show_not_reg){?>checked="checked"<?}?> value="1" name="show_not_reg">
                    </div>
                </div>
   				<div class="col-md-3">
					<div class="pull-right">
						<button type="submit" class="btn btn-primary submit" data-loading-text="Loading...">Сохранить</button>
						<a href="/<?=$data->url?>" id="page_view" class="btn btn-primary ">Просмотр</a>
					</div>
   				</div>		
   			</div> <!-- row-fluid -->

             <div class="row">
	            <div class="col-md-6">
	              <label>Название страницы</label>
                    <div class="input-group">
                        <div class="input-group-addon"><?=$data->id?></div>
                        <input type="text" class="form-control mandatory" name="name" placeholder="Название страницы" value="<?=$data->name?>">
                    </div>

                    <label>Название для навигации</label>
                    <input type="text" class="form-control mandatory" name="breadcrumb" placeholder="Название для навигации" value="<?=$data->pagestatic->breadcrumb?>">

                </div><!--/span-->
	            <div class="col-md-6">
	              <label>Заголовок (Title)</label>
	              <textarea class="form-control" name="title" placeholder="Заголовок страницы" rows="3"><?=$data->pagestatic->title?></textarea>
	            </div><!--/span-->
	          </div><!--/row-->

	          <div class="row">
	            <div class="col-md-6 bgcolor">
	              <label>Родитель</label>
	              <select name="parent_id" class="form-control">
	            	<? foreach($tree as $item) : ?>
	            		<option value="<?=$item->id?>" <?=$item->id == $data->parent_id ? 'selected' : ''?> ><?=str_repeat('&nbsp;', 2*$item->level).htmlspecialchars($item->name)?></option>
	            	<? endforeach; ?>
	              </select>  
	            </div><!--/span-->
	            
	            <div class="col-md-3">
				  <div class="input-append date" id="date-change" data-date="<?=date('d-m-Y');?>">
				  	<label>Дата изменения</label>
                      <div class="input-group" data-datepicker="true">
                          <input name="date-change" type="text" class="form-control" value="<?=date('d-m-Y');?>" />
                          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      </div>
				  </div>
	          	</div>
	          
		         <div class="col-md-3">
				  <div class="input-append date bootstrap-timepicker-component">
				  	<label>Время изменения</label>
                      <div class='input-group date' id='timepicker'>
                          <input type='text' class="form-control" />
                           <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                      </div>
				  </div>
	          	</div>
	          </div><!--/row-->

             <? /*
             <div class="row">
                 <div class="col-md-12">
                     <label>Хлебные крошки <a href="#" onclick="generateBreadcrumb(); return false;" title="Сгенерировать"><span class="glyphicon glyphicon-refresh"></span></a></label>
                     <div class="hide" id="breadcrumb_temp">
                         <span class="glyphicon glyphicon-remove" onclick="breadcrumb_exit(); return false;"></span>
                         <span class="glyphicon glyphicon-arrow-down" onclick="breadcrumb_move(); return false;"></span>
                         <textarea rows="2" class="form-control" id="breadcrumb_temp_text"></textarea>
                         <div class="clearfix">&nbsp;</div>
                     </div>
                     <textarea class="form-control" rows="2" id="breadcrumb" name="breadcrumb" placeholder="breadcrumb"><?=$data->pagestatic->breadcrumb?></textarea>
                 </div><!--/span-->
             </div>
             */ ?>
	          
	          <div class="row">
	            <div class="col-md-6">
	              <label>Description</label>
	              <textarea class="form-control" rows="3" name="description" placeholder="Description"><?=$data->pagestatic->description?></textarea>
	            </div><!--/span-->
	            <div class="col-md-6">
	              <label>Keywords</label>
	              <textarea class="form-control" rows="3" name="keywords" placeholder="Keywords"><?=$data->pagestatic->keywords?></textarea>
	            </div><!--/span-->
	          </div><!--/row-->
          </div><!-- well -->


            <div class="well">
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Раздел</h4>
                    </div>
                    <div class="row-fluid">
                        <div class="col-sm-12">
                            <select name="razdel_id" class="form-control">
                                <option value="0" <? if($data->pagestatic->razdel_id == 0){?> selected<?}?>>Онкология</option>
                                <!--<option value="1" <?/* if($data->pagestatic->razdel_id == 1){*/?> selected<?/*}*/?>>Онкология</option>
                                <option value="2" <?/* if($data->pagestatic->razdel_id == 2){*/?> selected<?/*}*/?>>Гематология</option>-->
                                <option value="3" <? if($data->pagestatic->razdel_id == 3){?> selected<?}?>>Ревматология</option>
                                <option value="4" <? if($data->pagestatic->razdel_id == 4){?> selected<?}?>>Неврология</option>
                            </select>
                        </div>
                    </div>
                </div>
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
                                        <input type="radio" name="is_comments" value="0" <?if($data->pagestatic->is_comments == 0){?>checked="checked"<?}?>> Отключить комментарии
                                    </label>
                                    <label class="btn btn-success">
                                        <input type="radio" name="is_comments" value="1" <?if($data->pagestatic->is_comments == 1){?>checked="checked"<?}?>> Только просмотр комментариев
                                    </label>
                                    <label class="btn btn-success">
                                        <input type="radio" name="is_comments" value="2" <?if($data->pagestatic->is_comments == 2){?>checked="checked"<?}?>> Просмотр и добавление комментариев
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- well -->


            <div class="well">
                
                <div class="row">
                    <div class="col-md-6">
                        <label>Меню слева</label>
                        <select name="menu_left" class="form-control">
                            <option value="0">-</option>
                            <? foreach($menu as $item) : ?>
                                <option value="<?=$item->id?>" <?=$item->id == $data->pagestatic->menu_left ? 'selected' : ''?>> <?=htmlspecialchars($item->name)?></option>
                            <? endforeach; ?>
                        </select>
                    </div><!--/span-->
                    <div class="col-md-6">
                        <label>Меню справа</label>
                        <select name="menu_right" class="form-control">
                            <option value="0">-</option>
                            <? foreach($menu as $item) : ?>
                                <option value="<?=$item->id?>" <?=$item->id == $data->pagestatic->menu_right ? 'selected' : ''?>> <?=htmlspecialchars($item->name)?></option>
                            <? endforeach; ?>
                        </select>
                    </div><!--/span-->
                </div><!--/row-->

                <div class="row">
                    <div class="col-md-12">
                        <label>Контент около меню</label>
                        <textarea class="col-md-12" id="contentMenu" name="contentMenu" class="form-control" rows="6"><?=$data->pagestatic->contentMenu?></textarea>
                    </div>

                </div>
            </div>


          <div class="well">

          	<div class="row">
                    <div class="col-md-12">
                        <label>Основной контент</label>
                        <textarea class="col-md-12" id="contentCenter" name="contentCenter" class="form-control" rows="18"><?=$data->pagestatic->contentCenter?></textarea>
                    </div>

	        </div>
          </div>


	     <div class="well">
             <div class="pull-right">
				<button type="submit" class="btn btn-primary submit" data-loading-text="Loading...">Сохранить</button>
             </div>
             <div class="clearfix"></div>
        </div><!--/well-->
        

             
      </div><!--/row-->
      </form>
      
<div id="results"></div>


<!-- Load jQuery build -->
     <!--<script type="text/javascript" src="/media/tiny_mce/jquery.tinymce.js"></script> -->
<script type="text/javascript">




$(function() {

    // radio
    $(':input[type=radio]:checked').parent('.btn').addClass('active');


    editAreaLoader.init({
        id: "contentMenu"	// id of the textarea to transform
        ,start_highlight: true
        ,allow_toggle: true
        ,language: "ru"
        ,syntax: "html"
        ,toolbar: "search, go_to_line, |, undo, redo, |, select_font, |, change_smooth_selection, highlight, reset_highlight, |, help, fullscreen, word_wrap"
        ,syntax_selection_allow: "css,html,js"
        ,is_multi_files: false
        //,EA_load_callback: "editAreaLoaded"
        ,show_line_colors: true
        ,min_height: 220
        //,display: "later"
        ,word_wrap: true
    });

    editAreaLoader.init({
        id: "contentCenter"	// id of the textarea to transform
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
    //$("#css").autoGrow();

    setTimeout(function() {
        $("input[name='name']").focus();
    }, 1000);



});

    $('.header-images').toggleButtons();

	function page_save()
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
                    url: '/admin/page_save/',
                    dataType: 'json',
                    type: 'POST',
                    data: {'post_data': post_data },
                    beforeSend: function ( xhr ) {},
                    success: function( data )
                    {
                        if(data.status == true)
                        {
							//Изменяем ссылку на кнопке просмотр
        					$('#page_view').attr('href', '/'+$('[name=url]').val());

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


		function generateBreadcrumb()
		{
			$.ajax({
				url: '/admin/page_create_breadcrumb/',
				dataType: 'json',
				type: 'POST',
				data: {'page_id': $('#page_id').val() },
				beforeSend: function ( xhr ) {},
				success: function( data )
				{
					if(data.status == true)
					{
						$('#breadcrumb_temp_text').text(data.breadcrumb).parent().removeClass('hide').show(200);
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
		}
		
		function breadcrumb_move()
		{
			$('#breadcrumb').val($('#breadcrumb_temp_text').val());
			$('#breadcrumb_temp').hide(500);
			return false;
		}
		//Закрыть окно формированния хлебных крошек
		function breadcrumb_exit()
		{
			$('#breadcrumb_temp').hide(200);
			return false;
		}

        function generateUrl()
        {
            var name = $("form input[name=name]").val();
            url = transliteration(name);
            url = url.toLowerCase();
            $("form input[name=url]").val(url);
        }






        
		$('.beautiful-checkbox').toggle({
        style: {
          enabled: 'success',
          disabled: 'danger'
        }
      });
</script>

