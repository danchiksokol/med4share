<div class="page-header">
	<h1>Роли <small>Редактироване роли пользователя</small></h1>
</div>

<div class="alert hide"></div>

<form class="form-horizontal" method="post" onsubmit="if(!role_edit()) return false;">
	<input type="hidden" name="id" value="<?=$role->id?>" />
  <div class="control-group">
    <label class="control-label" for="inputName">Название</label>
    <div class="controls">
      <input type="text" class="input-xxlarge mandatory" id="inputName" name="name" value="<?=$role->name;?>" placeholder="Название роли">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputDescription">Описание</label>
    <div class="controls">
      <input type="text" class="input-xxlarge mandatory" id="inputDescription" name="description" value="<?=$role->description?>" placeholder="Описание роли">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-info submit" data-loading-text="Loading...">Изменить</button>
    </div>
  </div>
</form>

<script>
	function role_edit()
	{
		var form = $("form");
		var submit = true;
		
		$('.form-horizontal').find('.mandatory', $(form)).each(function()
		{
			if($(this).val() == '')
			{
				$(this).parent().parent().addClass('error').click(function()
				{
						$(this).removeClass('error');
				});
				submit = false;
			}
		});
		$('.form-horizontal').find('.mandatory:first', $(this)).focus();

		if(submit == true) //Если нет ошибки
		{
			//return true;
			 
			$.ajax({
				url: '/admin/role_edit/',
				dataType: 'json',
				type: 'POST',
				data: {'data': $(".form-horizontal").serialize()},
				beforeSend: function ( xhr ) {
					$('.submit').button('loading');
				},
				success: function( data )
				{
					if(data.status == true)
					{
						$('.alert').addClass('alert-success');
						$('.alert').html(data.message);
						$('.alert').removeClass('hide');
						setTimeout(function(){ $('.alert').addClass('hide'); }, 3000);
					}
					else if(data.status == false)
					{
						$('.alert').addClass('alert-error');
						$('.alert').html(data.message.name);
						$('.alert').html(data.message.description);
						$('.alert').removeClass('hide');
					}
					$('.submit').button('reset'); // Возращяем нормальный вид кнопки
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