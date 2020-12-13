<div class="page-header">
	<h1>Пользователь <small>Редактироване пользователя</small></h1>
</div>

<div class="alert hide"></div>

<form class="form-horizontal" method="post" onsubmit="if(!user_edit()) return false;">
	<input type="hidden" name="id" value="<?=$user[0]->id?>" />
  
  <div class="control-group">
    <label class="control-label" for="inputName">Активен?</label>
    <div class="controls">
          <div class='toggle beautiful-checkbox' data-enabled="Активен" data-disabled="Не активен" data-toggle="toggle">
		    <input type="checkbox" value="1" name="active" class="checkbox" <?if($user[0]->active){?>checked="checked"<?}?> />
		    <label class="check" for="myCheckbox"></label>
		  </div>
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="inputName">Имя пользователя</label>
    <div class="controls">
      <input type="text" class="input-xxlarge mandatory" id="inputName" name="username" value="<?=$user[0]->username;?>" placeholder="Имя пользователя">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputDescription">Email</label>
    <div class="controls">
      <input type="text" class="input-xxlarge mandatory" id="inputDescription" name="email" value="<?=$user[0]->email?>" placeholder="Email">
    </div>
  </div>
    <div class="control-group">
        <label class="control-label" for="inputDescription">Список ролей</label>
        <div class="controls">
            <select name="roles[]" multiple="multiple">
                <? foreach ($roles as $role) : ?>
                    <? in_array($role->name, $user_roles) ? $selected='selected="selected"' : $selected = '';?>
                    <option <?=$selected?> value="<?=$role->name?>"><?=$role->name;?></option>
                <? endforeach; ?>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputName">Сменить пароль</label>
        <div class="controls">
            <input type="text" class="input-xxlarge" id="inputName" name="password" value="" placeholder="Новый пароль или пусто">
        </div>
    </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-info submit" data-loading-text="Loading...">Изменить</button>
    </div>
  </div>
</form>

<script>
	function user_edit()
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
				url: '/admin/user_edit/',
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
                        $('.alert').text('');
                        $('.alert').addClass('alert-error');
                        for (var mes in data.message) {
                            $('.alert').append(data.message[mes]+'<br>');
                        }


						$('.alert').removeClass('hide');
					}
					$('.submit').button('reset'); // Возращяем нормальный вид кнопки
				},
				error: function( error )
				{
					alert(xhr);
				}
			});
		}
		return false;
	}

    $('.beautiful-checkbox').toggle({
        style: {
            enabled: 'success',
            disabled: 'danger'
        }
    });
	
</script>