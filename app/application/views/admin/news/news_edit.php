   <div id="results" class="alert hide"></div>

 	<div class="container-fluid">
     <form class="form-horizontal" method="post" onsubmit="if(!news_save()) return false;">


      <input type="hidden" id="page_id" name="id" value="<?=$news->news_id;?>" />
      <div class="row">
        <div class="col-sm-12">
         <div class="well">
   			<div class="row-fluid control-group">
   				<!--<div class="col-sm-2">
   					<label>Тип новости</label>
   					<select name="type">
   						<option value="site"<?/*if($news->type == 'site'){*/?> selected<?/*}*/?>>Только на сайте</option>
   						<option value="rss"<?/*if($news->type == 'rss'){*/?> selected<?/*}*/?>>RSS</option>
   						<option value="all"<?/*if($news->type == 'all'){*/?> selected<?/*}*/?>>Показывать везде</option>
   					</select>
                 </div>-->

                <div class="col-sm-2">
                   <!-- <label>На главной</label>
                    <div class="header-images">
                        <input type="checkbox" <?if($news->view_main){?>checked="checked"<?}?> value="1" name="view_main">
                    </div>-->
                </div>
                 <div class="col-sm-2">
                     <label>Активна</label>
                     <div class="header-images">
                         <input type="checkbox" <?if($news->active){?>checked="checked"<?}?> value="1" name="active">
                     </div>
   				</div>
                <div class="col-sm-3">
                    <label>Показывать без регистрации</label>
                    <div class="header-images">
                        <input type="checkbox" <?if($news->show_not_reg){?>checked="checked"<?}?> value="1" name="show_not_reg">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="input-append date" id="date-change" data-date="<?=date('d-m-Y');?>">
                        <label class="col-sm-6 control-label">Дата публикации</label>
                        <div class="input-group" data-datepicker="true">
                            <input name="publish_date" type="text" class="form-control" value="<?=$news->publish_date?>" />
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                    </div>
                </div>
   				<div class="col-sm-2">
					<div class="pull-right">
						<button type="submit" class="btn btn-primary submit" data-loading-text="Loading...">Сохранить</button>
                        <a href="/news/<?=$news->url?>" id="news_view" class="btn btn-primary ">Просмотр</a>

					</div>
   				</div>		
   			</div> <!-- row-fluid -->


	          <div class="row">
              <div class="clearfix"><br /><br /><br /></div>

              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">URL новости</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control mandatory" name="url" placeholder="URL новости" value="<?=$news->url?>">
                  </div>
              </div>

              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Название новости</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control mandatory" name="title" id="title" placeholder="Название новости" value="<?=htmlspecialchars($news->title, ENT_QUOTES) ?>">
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Раздел новости</label>
                  <div class="col-sm-10">
                      <select name="razdel_id" class="form-control">
                          <option value="0" <? if($news->razdel_id == 0){?> selected<?}?>>Онкология</option>
                          <!--<option value="1" <?/* if($news->razdel_id == 1){*/?> selected<?/*}*/?>>Онкология</option>
                          <option value="2" <?/* if($news->razdel_id == 2){*/?> selected<?/*}*/?>>Гематология</option>-->
                          <option value="3" <? if($news->razdel_id == 3){?> selected<?}?>>Ревматология</option>
                          <option value="4" <? if($news->razdel_id == 4){?> selected<?}?>>Неврология</option>
                      </select>
                  </div>
              </div>

              <!-- Теги -->
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Теги</label>
                  <div class="col-sm-10">
                      <select class="form-control select2-list chosen-select" name="newstags[]" multiple tabindex="4" data-placeholder=" ">
                          <? foreach ($newstags as $val) : ?>
                              <? $selected = '';
                                 if( in_array($val->tag_id, $select_tags_ids) ){
                                     $selected = 'selected';
                                 }
                              ?>
                              <option <?=$selected?> value="<?=$val->tag_id;?>"><?=$val->tag_name?></option>
                          <? endforeach; ?>
                      </select>
                  </div>
              </div>


	          </div><!--/row-->

	          
	          <div class="row">
	            <div class="col-sm-6">
	              <label>Description</label>
	              <textarea class="col-sm-12" rows="3" name="description" placeholder="Description"><?=$news->description?></textarea>
	            </div><!--/span-->
	            <div class="col-sm-6">
	              <label>Keywords</label>
	              <textarea class="col-sm-12" rows="3" name="keywords" placeholder="Keywords"><?=$news->keywords?></textarea>
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
                                    <input type="radio" name="is_comments" value="0" <?if($news->is_comments == 0){?>checked="checked"<?}?>> Отключить комментарии
                                </label>
                                <label class="btn btn-success">
                                    <input type="radio" name="is_comments" value="1" <?if($news->is_comments == 1){?>checked="checked"<?}?>> Только просмотр комментариев
                                </label>
                                <label class="btn btn-success">
                                    <input type="radio" name="is_comments" value="2" <?if($news->is_comments == 2){?>checked="checked"<?}?>> Просмотр и добавление комментариев
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


           <!-- <div class="col-sm-2">
                <label>Комметарии</label>
                <div class="header-images">
                    <input type="checkbox" <?/*if($news->is_comments){*/?>checked="checked"<?/*}*/?> value="1" name="is_comments">
                </div>
            </div>-->

                   
          <div class="well">
              <div class="row">
                <div class="col-sm-12">
                <h4>Анонс Новости</h4>
                </div>
                <div class="row-fluid">
                    <div class="col-sm-8">
                      <textarea id="content" name="content" class="content col-sm-12" style="height:100px;"><?=$news->content?></textarea>
                    </div>
                    <div class="col-sm-4">


                                <label>Картинка</label>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Обзор</button>

                                <div class="clear"><br /></div>

                                <? if(strlen($news->imagePreview)) { ?>
                                    <div id="iconPreview"><img src="<?=$news->imagePreview?>" class="img-rounded" style="max-width: 80%"/></div>
                                    <div class="clear"><br /></div>
                                    <button type="button" class="btn btn-danger" id="deleteIcon">Удалить</button>
                                <? } else { ?>
                                    <div id="iconPreview"></div>
                                    <div class="clear"><br /></div>
                                    <button type="button" class="btn btn-danger hidden" id="deleteIcon">Удалить</button>
                                <? } ?>
                                <input type="hidden" name="imagePreview" id="imagePreview" value="<?=$news->imagePreview?>" />
                            </div><!--/span-->


                         





                    </div>
                </div>
          	</div>
          </div>


          <div class="well">
              <div class="row">
                  <div class="col-sm-12">
                      <h4>Новость полностью</h4>
                  </div>
                  <div class="row-fluid">
                      <div class="col-sm-12">
                          <textarea id="contentFull" name="contentFull" class="content col-sm-12" style="height:200px;"><?=$news->contentFull?></textarea>
                      </div>
                  </div>
              </div>


	     
	     

        

             
      </div><!--/row-->
      </form>



        <!-- Modal -->
        <div class="modal fade bs-example-modal-lg" id="picModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Картинка новости</h4>
                    </div>
                    <div class="modal-body">
                        <div id="elfinder"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>




<!-- Load jQuery build -->
<script type="text/javascript">

    $(function() {
        $('.chosen-select').chosen();
        $('.chosen-select-deselect').chosen({ allow_single_deselect: true });

       /* $('#imagePreview').focusout(function(){
            var pathImg = $('#imagePreview').val();
            if(pathImg != '') {
                $('#imagePreviewIMG').html('<img src="'+ pathImg +'" class="img-rounded" style="max-width: 80%"/>');
            } else {
                $('#imagePreviewIMG').html('');
            }
        });*/

        $('#deleteIcon').on( "click", function() {

            $('#iconPreview').html('');
            $('#imagePreview').val('');
            $('#deleteIcon').addClass('hidden');

        });

        $('#picModal').on('show.bs.modal', function (e) {
            var f = $('#elfinder').elfinder({
                url: '/elfinder',
                lang : 'ru',
                height: 490,
                docked: false,
                dialog: {width: 400, modal: true},
                closeOnEditorCallback: true,
                getFileCallback: function (url) {
                    //console.log(url.name);
                    if(url.path != '') {
                        $('#iconPreview').html('<img src="/media/'+ url.path +'" class="img-rounded" style="max-width: 80%"/>');
                        $('#deleteIcon').removeClass('hidden');
                        $('#imagePreview').val('/media/'+url.path);
                    }
                    // CLOSE ELFINDER HERE
                    $('#picModal').modal('hide');
                    //$('#elfinder').remove();  //remove Elfinder
                    //location.reload();   //reload Page for second selection
                }
            }).elfinder('instance');
        })

        // radio
        $(':input[type=radio]:checked').parent('.btn').addClass('active');

        //calendar
        $('*[data-datepicker="true"] input[type="text"]').datepicker({
            todayBtn: true,
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true,
            language: "ru"
        });

       $('input[type="text"]').click(function()
       {
           $(this).parent().parent().removeClass('has-error').focus();
       });


        editAreaLoader.init({
            id: "content"	// id of the textarea to transform
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
            id: "contentFull"	// id of the textarea to transform
            ,start_highlight: true
            ,allow_toggle: true
            ,language: "ru"
            ,syntax: "html"
            ,toolbar: "search, go_to_line, |, undo, redo, |, select_font, |, change_smooth_selection, highlight, reset_highlight, |, help, fullscreen, word_wrap"
            ,syntax_selection_allow: "css,html,js"
            ,is_multi_files: false
            //,EA_load_callback: "editAreaLoaded"
            ,show_line_colors: true
            ,min_height: 120
            //,display: "later"
            ,word_wrap: true
        });


        $('#title').focus();
    });

    $('.header-images').toggleButtons();
	function news_save()
	{
        var form = $("form");
        var submit = true;

        $('.form-horizontal').find('.mandatory', $(form)).each(function()
        {
            if($(this).val() == '')
            {
                $(this).parent().parent().addClass('has-error');

                submit = false;
            } else {
                $(this).parent().parent().removeClass('has-error');
            }
        });
        //$('.form-horizontal').find('.mandatory:first', $(this)).focus();

        if(submit == true) //Если нет ошибки
        {
            var post_data = $("form").serialize();
            $.ajax({
                    url: '/admin/news_save/',
                    dataType: 'json',
                    type: 'POST',
                    data: {'post_data': post_data },
                    beforeSend: function ( xhr ) {},
                    success: function( data )
                    {
                        if(data.status == true)
                        {
							//Изменяем ссылку на кнопке просмотр
        					$('#news_view').attr('href', '/news/'+$('[name=url]').val());


        		            $('#results').addClass('alert-success');
							$('#results').html(data.message);
                            $('#results').removeClass('hide');
                            setTimeout(function(){ $('#results').addClass('hide'); }, 3000);
							
							
							
                        }
                        else if(data.status == false)
                        {
                            $('#results').addClass('alert-error');
                            $('#results').html(data.message.description);
                            $('#results').removeClass('hide');
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

        function generateUrl()
        {
            var name = $("form input[name=title]").val();
            url = transliteration(name);
            $("form input[name=url]").val(url);
        }
		
		



        $(function() {



        	/*
        	$('#javascript').typeahead({
        		minLength: 1,
        		source: function (query, process) {
        			return $.post('/admin/get_js', { query: query }, function (data) {
        				return process(data);
        			});
        		}
        		
        	});
        	*/
			        	



        	
        	//$("#javascript").autoGrow();
        	$("#css").autoGrow();

      });
</script>
