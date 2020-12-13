<p class="pull-right">
	<a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Добавить тег</a>
</p>

<table class="table table-hover table-bordered table-striped sorted_table" id="newstags_list">
<thead>
	<tr data-id="0">
		<th style="width: 40px;">#</th>
		<th style="width: 40px;">Раздел</th>
		<th>Название</th>
		<th>Дата добавления</th>
		<th>Дата изменения</th>

		<th style="width: 100px">Активна</th>
		<th style="width: 70px"></th>
	</tr>
</thead>
<tbody>
	<? foreach ($data as $tag) : ?>
 
	<tr data-id="<?=$tag->tag_id;?>">
		<td><?=$tag->tag_id;?></td>
		<td><?=$tag->razdel_id ;?></td>
		<td><?=$tag->tag_name;?></td>
		<td><?=date('d.m.Y H:i:s', strtotime($tag->create_date));?></td>
		<td><?=date('d.m.Y H:i:s', strtotime($tag->modified_date));?></td>

        <td><? if($tag->active) { ?> <button class="btn btn-xs btn-success tag_active" type="button">Активна</button>
			<? } else { ?>
				<button class="btn btn-xs btn-danger tag_active" type="button">Не активна</button>
			<?}?>
		</td>
		<td>
			<span class="glyphicon glyphicon-pencil tag_edit" tag_id="<?=$tag->tag_id;?>" razdel_id="<?=$tag->razdel_id;?>" tag_name ="<?=$tag->tag_name;?>" data-placement="bottom"  data-original-title="Редактировать"></span>
			<span class="glyphicon glyphicon-remove tag_delete" tag_id="<?=$tag->tag_id;?>" data-placement="bottom"  data-original-title="Удалить"></span>
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
                <h3>Добавление тега</h3>
            </div>
            <div class="modal-body">
                <div class="alert alert-success hide" id="success-add-news">Тег добавлена!</div>
                <form class="form-horizontal">
                    <div id="news-title-error" class="alert alert-error hide"></div> <!--Отображение ошибки от ajax-->

					<div class="form-group">
			 			<label for="inputPassword3" class="col-sm-4 control-label">Раздел</label>
					 	<div class="col-sm-8">
							<select id="razdel_id" class="form-control">
								<option value="0">Онкология / Гематология</option>
								<option value="3">Ревматология</option>
								<option value="4">Неврология</option>
							</select>
						</div>
					</div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">Название тега</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="tag_name" placeholder="Название тега">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" aria-hidden="true" data-dismiss="modal">Закрыть</a>
                <a href="#" class="btn btn-primary submit_send" data-loading-text="Loading..." onclick="tag_add(); return false;">Добавить</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="ModalEditNewsTag" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Редактирование тега</h3>
			</div>
			<div class="modal-body">
				<form class="form-horizontal">
					<input type="hidden" id="tag_id" />
					<div id="news-title-error" class="alert alert-error hide"></div> <!--Отображение ошибки от ajax-->

					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">Раздел</label>
						<div class="col-sm-8">
							<select id="razdel_id" class="form-control">
								<option value="0">Онкология / Гематология</option> 
								<option value="3">Ревматология</option>
								<option value="4">Неврология</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">Название тега</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="tag_name" placeholder="Название тега">
						</div>
					</div>

				</form>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" aria-hidden="true" data-dismiss="modal">Закрыть</a>
				<a href="#" class="btn btn-primary submit_send" data-loading-text="Loading..." onclick="tag_edit(); return false;">Изменить</a>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>


	$(function () {


		$('.sorted_table').sortable({
			containerSelector: 'table',
			itemPath: '> tbody',
			itemSelector: 'tr',
			placeholder: '<tr class="placeholder"/>',





			onDrop: function (item, container, _super) {
				var ids = jQuery('.sorted_table tr').map(function(){
					return jQuery (this).attr("data-id");
				}).get();

				$.ajax({
					url: '/admin/newstags/sort/',
					dataType: 'json',
					type: 'POST',
					data: {'data': ids },
					beforeSend: function ( xhr ) {
						//$(_this).button('loading');
					},
					success: function( data )
					{

						if(data.status == true)
						{

						}
						else if(data.status == false)
						{
							alert('Ошибка');
						}

					},
					error: function( error )
					{
						//Вывод ошибки
					}
				});



				//do the ajax call
			}


		})


        //Изменение статуса новости (Активна - Не активна)
        $('.tag_active').live('click', function() {
            var id = $(this).parent().parent().find('td').first().html();
            var _this=this;//сохраняем в замыкании кликнутую ссылку
            $.ajax({
                url: '/admin/newstags/active/',
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
                        $(_this).parent().parent().find('td').eq(3).text(data.modified_date);


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




		// --> Удаление
		$('.tag_delete').live('click',function() {
			
			if ( ! confirm('Вы уверены что хотите удалить тег')) {
            	return false;
        	}
			var id = $(this).attr('tag_id');
			var _this=this;//сохраняем в замыкании кликнутую ссылку

			$.ajax({
				url: '/admin/newstags/delete',
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
		// <-- Удаление


		$('.tag_edit').live('click',function() {

			var id = $(this).attr('tag_id');
			var name = $(this).attr('tag_name');
			var razdel_id = $(this).attr('razdel_id');


			$('#ModalEditNewsTag').find('#tag_name').val(name);
			$('#ModalEditNewsTag').find('#tag_id').val(id);

			$("#ModalEditNewsTag #razdel_id [value='"+razdel_id+"']").attr("selected", "selected");




			$("#ModalEditNewsTag").modal('show'); //Показываем форму
		});

	})
	
	
	function tag_add()
	{
		var submit = true;
		var tag_name = $('#tag_name').val();
		var razdel_id = $('#razdel_id').val();
		
		if(tag_name == '') {
			$('#tag_name').parent().parent().addClass('error');
			$('#tag_name').focus();
			submit = false;
		} 
		
		
		// --> Чистим вывод ошибок
		$('#tag_name').keypress(function() {
			$('#inputTitle').parent().parent().removeClass('error');
			$('#news-title-error').addClass('hide');
		});
		
		// <-- Чистим вывод ошибок
		
		if(submit == true) //Если нет ошибки
		{
			$.ajax({
				url: '/admin/newstags/add',
				dataType: 'json',
				type: 'POST',
				data: {
					'razdel_id' : razdel_id,
					'tag_name': tag_name
				},
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
						window.location = '/admin/newstags/';
					}
					else if(data.status == false)
					{

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

	function tag_edit()
	{
		var submit = true;
		var tag_id = $('#ModalEditNewsTag').find('#tag_id').val();
		var tag_name = $('#ModalEditNewsTag').find('#tag_name').val();
		var razdel_id = $('#ModalEditNewsTag').find('#razdel_id').val();


		if(tag_name == '') {
			$('#tag_name').parent().parent().addClass('error');
			$('#tag_name').focus();
			submit = false;
		}


		// --> Чистим вывод ошибок
		$('#tag_name').keypress(function() {
			$('#inputTitle').parent().parent().removeClass('error');
			$('#news-title-error').addClass('hide');
		});

		// <-- Чистим вывод ошибок

		if(submit == true) //Если нет ошибки
		{
			$.ajax({
				url: '/admin/newstags/edit',
				dataType: 'json',
				type: 'POST',
				data: {
					'tag_id' : tag_id,
					'razdel_id' : razdel_id,
					'tag_name': tag_name
				},
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
							$("#ModalEditNewsTag").modal('hide'); //Прячем форму
							$('#success-add-role').addClass('hide');
							$('#inputName').val(null);
							$('#inputDesc').val(null);

						}, 800);
						//Редирект на редактированние новости
						window.location = '/admin/newstags/';
					}
					else if(data.status == false)
					{

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



