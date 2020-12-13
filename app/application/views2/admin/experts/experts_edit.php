   <div id="results" class="alert hide"></div>
 
<form class="form-horizontal" method="post" onsubmit="if(!experts_save()) return false;">

<input type="hidden" name="id" id="id" value="<?=$data->id?>" />
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="well">
            
	        	<table width="100%" border="0">
	        	
	        		<tr valign="top">
	        			 <td> 
	        				<div class="row" style="padding-left:20px">
	                			<div class="col-md-12">
			                            <label>Фото Эксперта</label>
			                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Обзор</button>
			
			
			                            <? if(strlen($data->imagePreview)) { ?>
			                                <div id="iconPreview"><img src="<?=$data->imagePreview?>" class="img-rounded" style="max-width: 80%"/></div>
			                                <div class="clear"><br /></div>
			                                <button type="button" class="btn btn-danger" id="deleteIcon">Удалить</button>
			                            <? } else { ?>
			                                <div id="iconPreview"></div>
			                                <div class="clear"><br /></div>
			                                <button type="button" class="btn btn-danger hidden" id="deleteIcon">Удалить</button>
			                            <? } ?>
			                            <input type="hidden" name="imagePreview" id="imagePreview" value="<?=$data->imagePreview?>" />
			
			                	</div>
	        				</div>
	        			</td>
	        		
	        			<td width="80%">
	        			 <div class="row">
	        			 	<div class="col-md-12">
		                        <label>URL</label>
		                        <input type="text" class="form-control mandatory" name="url" placeholder="url" value="<?=$data->url?>"/>
		                    </div><!--/span-->
			                    
	        			 </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label>Раздел</label>
                                <select name="razdel_id" class="form-control">
                                    <option value="0" selected="">Все разделы</option>
                                    <option value="1" <? if($data->razdel_id == 1){?> selected<?}?>>Онкология</option>
                                    <option value="2" <? if($data->razdel_id == 2){?> selected<?}?>>Гематология</option>
                                    <option value="3" <? if($data->razdel_id == 3){?> selected<?}?>>Ревматология</option>
                                    <option value="4" <? if($data->razdel_id == 4){?> selected<?}?>>Неврология</option>
                                </select>
                            </div><!--/span-->

                        </div>

	        			  <div class="row">
	            			  	<div class="col-md-4">
			                        <label>Фамилия</label>
			                        <input type="text" class="form-control mandatory" name="familia" placeholder="Фамилия" value="<?=$data->familia?>"/>
			                    </div><!--/span-->
			                    
			                   	<div class="col-md-4">
			                        <label>Имя</label>
			                        <input type="text" class="form-control mandatory" name="name" placeholder="Имя" value="<?=$data->name?>"/>
			                    </div><!--/span-->
			                    
			                 	<div class="col-md-4">
			                        <label>Отчество</label>
			                        <input type="text" class="form-control mandatory" name="otchestvo" placeholder="Отчество" value="<?=$data->otchestvo?>"/>
			                    </div><!--/span-->
			              </div>
			              <? /* 
			              <br />
		                      <div class="row">
	                			 <div class="col-md-4">
			                        <label>Должность</label>
			                        <input type="text" class="form-control mandatory" name="familia" placeholder="Должность" />
			                    </div><!--/span-->
			                    
			                   	<div class="col-md-4">
			                        <label>Звание </label>
			                        <input type="text" class="form-control mandatory" name="familia" placeholder="Звание" />
			                    </div><!--/span-->
			                    
			                 	<div class="col-md-4">
			                        <label>Место работы</label>
			                        <input type="text" class="form-control mandatory" name="familia" placeholder="Место работы" />
			                    </div><!--/span-->
			                    
			                     </div>
			               */ ?> 
			                   	<br />
				               	 <div class="row">
									<div class="col-sm-12">
										<label>Краткая информация</label>
										<textarea class="col-sm-12" rows="3" name="content" id="content" placeholder="Краткая информация"><?=$data->content?></textarea>
									</div>
				                </div>
				                
				                 <br />
				               	 <div class="row">
									<div class="col-sm-12">
										<label>Полная информация по эксперту</label>
										<textarea class="col-sm-12" rows="5" name="contentFull" id="contentFull" placeholder="Полная информация по эксперту"><?=$data->contentFull?></textarea>
									</div>
				                </div>
				                
	        			</td>
	        		</tr>                 	
	        	</table>
	        	<br />
               
                <div class="row">
                    <div class="col-md-12"> 
                        <button type="submit" class="btn btn-primary submit" data-loading-text="Loading...">Сохранить</button>
                        <a href="/experts/<?=$data->url?>" id="expert_view" class="btn btn-primary ">Просмотр</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
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


         

        $('#title').focus();
        
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
            ,min_height: 150
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
            ,min_height: 220
            //,display: "later"
            ,word_wrap: true
        });
        
    });

    $('.header-images').toggleButtons();
	function experts_save()
	{ 
        var form = $("form");
        var submit = true;

        /*$('.form-horizontal').find('.mandatory', $(form)).each(function()
        {
            if($(this).val() == '')
            {
                $(this).parent().parent().addClass('has-error');

                submit = false;
            } else {
                $(this).parent().parent().removeClass('has-error');
            }
        });*/
        //$('.form-horizontal').find('.mandatory:first', $(this)).focus();

        if(submit == true) //Если нет ошибки
        {
            var post_data = $("form").serialize();
            $.ajax({
                    url: '/admin/experts/save',
                    dataType: 'json',
                    type: 'POST',
                    data: {'post_data': post_data },
                    beforeSend: function ( xhr ) {},
                    success: function( data )
                    {
                        if(data.status == true)
                        {
							//Изменяем ссылку на кнопке просмотр
        					$('#expert_view').attr('href', '/experts/'+$('[name=url]').val());


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