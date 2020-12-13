<div class="page-header">
	<h1>Роли <small>Управление ролями пользователей</small></h1>
</div>

<p class="pull-right">
	<a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Добавить роль</a>
</p>

<table class="table table-hover table-bordered table-striped" id="role_list">
<thead>
	<tr>
		<th>#</th>
		<th>Имя</th>
		<th>Описание</th>
		<th>Действия</th>
	</tr>
</thead>
<tbody>
	<? foreach ($roles as $role) : ?>
	<tr>
		<td><?=$role->id;?></td>
		<td><?=$role->name;?></td>
		<td><?=$role->description;?></td>
		<td class="span1">
			<div class="btn-group">
				<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Действия <span class="caret"></span></a>
				<ul class="dropdown-menu pull-right">
					<li><a href="/admin/role_edit/<?=$role->id?>"><i class="icon-pencil"></i> Править</a></li>
					<li><a href="#" class="delete" id="<?=$role->id;?>"><i class="icon-trash"></i> Удалить</a></li>
				</ul>
			</div>	
		</td>
	</tr>
	<? endforeach; ?>
</tbody>
</table>



<div class="modal hide fade" id="myModal" tabindex="-1">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Добавление новой роли</h3>
  </div>
  <div class="modal-body">
  	<div class="alert alert-success hide" id="success-add-role">Роль добавлена!</div>
	<form class="form-horizontal">
	  <div id="role-name-error" class="alert alert-error hide"></div> <!--Отображение ошибки от ajax-->
	  <div class="control-group">
	    <label class="control-label" for="inputName">Имя</label>
	    <div class="controls">
	      <input type="text" id="inputName" placeholder="Имя роли">
	    </div>
	  </div>
	  <div id="role-desc-error" class="alert alert-error hide"></div> <!--Отображение ошибки от ajax-->
	  <div class="control-group">
	    <label class="control-label" for="inputDesc">Описание</label>
	    <div class="controls">
	      <textarea id="inputDesc" placeholder="Описание роли"></textarea>
	    </div>
	  </div>
	</form>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" aria-hidden="true" data-dismiss="modal">Закрыть</a>
    <a href="#" class="btn btn-primary submit_send" data-loading-text="Loading..." onclick="role_add(); return false;">Добавить</a>
  </div>
</div>



<script>
	
	$(function () {	
		// --> Удаление роли
		$('.delete').live('click',function() {
			
			if ( ! confirm('Вы уверены что хотите удалить роль')) {
            	return false;
        	}	
			
			var role_id = $(this).attr('id');
			var _this=this;//сохраняем в замыкании кликнутую ссылку			
			
			$.ajax({
				url: '/admin/role_delete/',
				dataType: 'json',
				type: 'POST',
				data: {'role_id': role_id },
				beforeSend: function ( xhr ) {},
				success: function( data )
				{
					if(data.status == true)
					{
						//Удаляем ячейку таблицы
						$(_this).parent().parent().parent().parent().parent().hide(500);
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
		// <-- Удаление роли
	})
	
	
	function role_add()
	{
		var submit = true;
		var role_name = $('#inputName').val();
		var role_desc = $('#inputDesc').val();
		
		if(role_name == '') {
			$('#inputName').parent().parent().addClass('error');
			$('#inputName').focus();
			submit = false;
		} 
		if(role_desc == '') {
			$('#inputDesc').parent().parent().addClass('error');
			$('#inputDesc').focus();
			submit = false;
		} 
		
		// --> Чистим вывод ошибок
		$('#inputName').keypress(function() {
			$('#inputName').parent().parent().removeClass('error');
			$('#role-name-error').addClass('hide');
		});
		$('#inputDesc').keypress(function() {
			$('#inputDesc').parent().parent().removeClass('error');
			$('#role-desc-error').addClass('hide');
		});
		// <-- Чистим вывод ошибок
		
		if(submit == true) //Если нет ошибки
		{
			$.ajax({
				url: '/admin/role_add/',
				dataType: 'json',
				type: 'POST',
				data: {'role_name': role_name, 'role_desc': role_desc },
				beforeSend: function ( xhr ) {
					$('.submit_send').button('loading');
				},
				success: function( data )
				{
					if(data.status == true)
					{
						//Добавляем в список ролей добавленую роль
						//insert_id
						$('#role_list tbody').append('<tr>' +
														'<td>'+data.insert_id+'</td>' +
														'<td>'+role_name+'</td>' +
														'<td>'+role_desc+'</td>' +
														'<td class="span1">' +
															'<div class="btn-group">' +
																'<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Действия <span class="caret"></span></a>' +
																'<ul class="dropdown-menu pull-right">' +
																	'<li><a href="/admin/role_edit/'+data.insert_id+'"><i class="icon-pencil"></i> Править</a></li>' +
																	'<li><a href="#" class="delete" id="'+data.insert_id+'"><i class="icon-trash"></i> Удалить</a></li>' +
																'</ul>' +
															'</div>' +
														'</td>' +
													'</tr>');
						
						$('#success-add-role').html(data.message).removeClass('hide'); //Показываем сообщение что всё ок
						setTimeout(function(){ 
							$("#myModal").modal('hide'); //Прячем форму
							$('#success-add-role').addClass('hide');
							$('#inputName').val(null);
							$('#inputDesc').val(null);
						
						}, 1000);
					
					}
					else if(data.status == false)
					{
						//Предварительная чистка
						$('#role-name-error').html('');
						$('#role-desc-error').html('');
						
						if(data.message.name !== undefined){ //Если в ответе есть ошибка по имени
							$('#role-name-error').removeClass('hide').html(data.message.name);
						}
						if(data.message.description !== undefined){ //Если в ответе есть ошибка по имени
							$('#role-desc-error').removeClass('hide').html(data.message.description);
						}
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
