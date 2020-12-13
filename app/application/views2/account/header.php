<? if( Auth::instance()->logged_in('login') ) : ?>
    <div class="btn-group dropdown">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-info"></i> Вы вошли как <?=Auth::instance()->get_user()->fio;?></a> </button>
        <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
            <? if( Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('comment') ) { ?>
                <li><a href="/admin"><i class="fa fa-gear"></i> Администрирование</a></li>
            <? } ?>
            <li><a href="/profile"><i class="fa fa-user"></i> Ваш профиль</a></li>
            <li><a href="/profile/logout"><i class="fa fa-times"></i> Выйти</a></li>
        </ul>
    </div>
<? else : ?>
    <div class="btn-group dropdown">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Личный кабинет</button>
        <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
            <li>
                <form class="login-form" method="post" action="/login">
                    <div class="form-group has-feedback">
                        <label class="control-label">Электронная почта:</label>
                        <input type="text" class="form-control" placeholder="" name="login">
                        <i class="fa fa-mail-reply-all form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <label class="control-label">Пароль:</label>
                        <input type="password" class="form-control" placeholder="" name="password">
                        <i class="fa fa-lock form-control-feedback"></i>
                    </div>

                    <button type="submit" class="btn btn-group btn-default btn-sm pull-right">Войти</button>
                    <div class="clearfix"></div>
                    <ul>
                        <li><a href="/profile/forgot">Забыли пароль?</a></li>
                        <li><a href="/profile/register/">Зарегистрироваться</a></li>
                    </ul>

                </form>
            </li>
        </ul>
    </div>
<? endif; ?>