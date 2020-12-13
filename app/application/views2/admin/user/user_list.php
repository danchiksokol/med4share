<div class="page-header">
	<h1>Пользователи</h1>
</div>

<p class="pull-right">
	<a href="/admin/users/add" role="button" class="btn btn-primary" data-toggle="modal">Добавить пользователей</a>
    <a href="/admin/users/excel" role="button" class="btn btn-success" data-toggle="modal"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Скачать Excel</a>
</p>

<table class="table table-hover table-bordered" id="user_list">
<thead>
	<tr>
		<th>#</th>
		<th>Email</th>
        <th>Пароль</th>
        <th>Дата регистрации</th>
		<th>Последний вход</th>
		<th>Кол-во входов</th>
		<th>Город</th>
		<th>Телефон</th>
		<th></th>
	</tr>
</thead>
<tbody>
	<? foreach ($users as $user) : ?>
	<tr id="user-<?=$user->id;?>">
		<td><?=$user->id;?></td>
		<td><?=$user->email;?></td>
        <td style="text-align: center" class="changePassword-<?=$user->id;?>"><span class="glyphicon glyphicon-retweet" style="cursor: pointer;" onclick="changePassword(<?=$user->id;?>); return false;"></span></td>
        <td><?=date('d-m-Y H:i:s', $user->create);?></td>
		<td><?=$user->last_login != null ? date('d-m-Y H:i:s', $user->last_login) : '-';?></td>
		<td><?=$user->logins;?></td>
        <td><?=$user->city;?></td>
        <td><?=$user->phone;?></td>
		<td><span class="glyphicon glyphicon-trash" style="cursor: pointer;" onclick="deleteUser(<?=$user->id;?>); return false;"></span></td>
	</tr>
	<? endforeach; ?>
</tbody>
</table>

<div class="modal hide fade" id="myModal" tabindex="-1">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Добавление нового пользователя</h3>
  </div>
 
  <div class="modal-body" id="form_add_user">
  	<div class="alert alert-success hide" id="success-add-user">Пользователь добавлен!</div>
	<form class="form-horizontal">
	  <div id="username-error" class="alert alert-error hide"></div> <!--Отображение ошибки от ajax-->
	  <div class="control-group">
	    <label class="control-label" for="inputUsername">Логин</label>
	    <div class="controls">
	      <input type="text" id="inputUsername" name="username" placeholder="Логин пользователя" value="lamo8">
	    </div>
	  </div>
	  <div id="email-error" class="alert alert-error hide"></div> <!--Отображение ошибки от ajax-->
	  <div class="control-group">
	    <label class="control-label" for="inputEmail">Email</label>
	    <div class="controls">
	      <input type="text" id="inputEmail" name="email" placeholder="Email пользователя" value="mail@lamo8.ru">
	    </div>
	  </div>
	  <div id="password-error" class="alert alert-error hide"></div> <!--Отображение ошибки от ajax-->
	  <div class="control-group">
	    <label class="control-label" for="inputPassword">Пароль</label>
	    <div class="controls">
	      <input type="text" id="inputPassword" name="password" placeholder="Пароль пользователя" value="111222">
	    </div>
	  </div>
	  <div class="control-group"> <!-- Роли пользователя -->
	    <label class="control-label" for="inputDesc">Роли пользователя</label>
	    <div class="controls">
	      <select name="roles[]" multiple="multiple">
	      	<? foreach ($roles as $role) : ?>
	      		<option value="<?=$role->name?>"><?=$role->name;?></option>
	      	<? endforeach; ?>
		  </select>
	    </div>
	  </div>	  
  </div>
  </form>
  <div class="modal-footer">
    <a href="#" class="btn" aria-hidden="true" data-dismiss="modal">Закрыть</a>
    <a href="#" class="btn btn-primary submit_send" data-loading-text="Loading..." onclick="user_add(); return false;">Добавить</a>
  </div>
</div>


<script type="text/javascript">
    $(function() {

    });


	function deleteUser( user_id ) {
		var isDelete = confirm("Точно, удалить пользователя?");

		if( isDelete ) {

			$.ajax({
				url: '/admin/users/deleteUser',
				dataType: 'json',
				type: 'POST',
				data: {'user_id' : user_id },
				beforeSend: function ( xhr ) {},
				success: function( data )
				{
					if(data.status == true)
					{
						$('tr#user-' + user_id ).hide(500);
					}
					else if(data.status == false)
					{
						alert('Ошибка при удалении пользователя.')
					}
				},
				error: function( error )
				{
					//Вывод ошибки
				}
			});




		}

	}

    function changePassword(user_id) {
        $('.changePassword-'+user_id).html('<input type="text" name="change_password" size="14">'
            + ' <span class="glyphicon glyphicon-floppy-disk" style="cursor: pointer;" onclick="changePasswordSave('+user_id+'); return false;"></span>'
        );
    }

    function changePasswordSave(user_id) {

        var password = $('.changePassword-'+user_id +' input:text[name=change_password]').val();




        $.ajax({
            url: '/admin/users/changePassword',
            dataType: 'json',
            type: 'POST',
            data: {'password': password, 'user_id' : user_id },
            beforeSend: function ( xhr ) {},
            success: function( data )
            {
                if(data.status == true)
                {
                    $('.changePassword-'+user_id).html('<span class="glyphicon glyphicon-retweet" style="cursor: pointer;" onclick="changePassword('+user_id+'); return false"></span>');
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

</script>

