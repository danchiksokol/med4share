


<!--
      <form class="form-signin" method="post" action="/login">
        <h4>Вход</h4>
        <?/* if( isset($data['error_message']) ) :*/?>
          <p class="text-danger"><?/*=$data['error_message']*/?></p>
        <?/* endif; */?>

        <input type="text" class="form-control" name="login" placeholder="Логин" required autofocus>
        <input type="password" class="form-control" name="password" placeholder="Пароль" required>
        <label class="checkbox">
          <input type="checkbox" name="remember-me" value="1"> Запомнить меня
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
      </form>-->


<div>
    <? if( $url != '' ) : ?>
    <div class="col-sm-offset-1">
        <h4 class="text-warning">Для просмотра содержимого сайта Вы должны авторизоваться</h4>
    </div>
    <? endif; ?>

    <? if( isset( $data['error_message']) ) : ?>
        <div class="col-sm-offset-3">
            <p class="text-danger"><?=$data['error_message']?></p>
        </div>
    <? endif;?>


    <form class="form-horizontal" method="post" action="/login" ">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Электронная почта:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="login" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label">Пароль:</label>
            <div class="col-sm-3">
                <input type="password" class="form-control" name="password"  placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Запомнить меня
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-default">Войти</button>
            </div>
        </div>
    </form>
    <br />
    <div class="col-md-offset-1 col-md-6">
        <ul>
            <li><a href="/profile/forgot" class="link">Забыли пароль?</a></li>
            <li><a href="/profile/register/" class="link">Зарегистрироваться</a></li>
        </ul>
    </div>


   <!-- <div id="register">
        <form class="form-signin" method="post" action="/login" onsubmit="; return true;">
            <input type="hidden" name="url" value="<?/*=$url*/?>">
            <ul style="list-style-type: none; padding: 20px;">
                <li>Электронная почта: <br><input type="text" id="user" name="login" value=""></li>
                <li>Пароль: <br><input type="password" id="pass" name="password" value=""></li>
                <li><input type="checkbox" name="remember-me" value="1"> Запомнить меня</li>
                <li class="paddingTop_medium"><input name="submit" type="submit" value="Войти" class="input_submit clickable"></li>
                <br />
                <li><a href="/profile/forgot" class="link">Забыли пароль?</a></li>
                <li><a href="/profile/register/" class="link">Зарегистрироваться</a></li>
            </ul>
        </form>
    </div>-->
</div>