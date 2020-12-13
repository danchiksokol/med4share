<div class="row">
<? if(! Auth::instance()->logged_in('login') ) { ?>
    <div class="col-md-12">
        <p><strong>Если Вы уже зарегистрированы на нашем сайте, пожалуйста, сначала войдите на сайт под своим именем, а затем заполняйте форму регистрации на конференцию!</strong></p>
    </div>
<? } ?>
    <div class="col-md-10 col-md-offset-1">
        <div class="register-form">
            <form id="register-conference-form" role="form">
                <div class="register-conference-form has-feedback">
                    <label for="fio">Ф.И.О*</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?=Auth::instance()->get_user()->fio?>" placeholder="">
                </div>
                <div class="form-group has-feedback">
                    <label for="fio">Место работы*</label>
                    <input type="text" class="form-control" id="work" name="work" placeholder="">
                </div>
                <div class="form-group has-feedback">
                    <label for="position">Должность*</label>
                    <input type="text" class="form-control" id="position" name="position" value="<?=Auth::instance()->get_user()->position?>"  placeholder="">
                </div>

                <div class="form-group has-feedback">
                    <label for="phone">Мобильный телефон*</label>
                    <input type="text" class="form-control" id="telefon" name="telefon" value="<?=Auth::instance()->get_user()->phone?>" placeholder="">
                </div>
                <div class="form-group has-feedback">
                    <label for="email">Ваш адрес электронной почты*</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?=Auth::instance()->get_user()->email?>" placeholder="">
                </div>
                <div class="form-group has-feedback">
                    <label for="city">Укажите Ваш город*</label>
                    <input type="text" class="form-control" id="city" name="city" value="<?=Auth::instance()->get_user()->city?>" placeholder="">
                </div>
                <? if( ! Auth::instance()->logged_in('login') ) { ?>
                <div class="form-group">
                    <label>
                        <input type="checkbox" id="reg_site" name="reg_site" onchange="registraciaConference(); return false;" value="1"> Зарегистрироваться на сайте med4share.ru
                    </label>
                </div>
                <? } ?>

                <div id="register" class="hidden">
                    <div class="form-group has-feedback">
                        <label for="password">Пароль*</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="">
                        <i class="fa fa-lock form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="specialty">Специализация*</label>
                        <select id="specialty" name="specialty" class="form-control">
                            <option value="онколог">онколог</option>
                            <option value="гематолог">гематолог</option>
                            <option value="эндокринолог">эндокринолог</option>
                            <option value="кардиолог">кардиолог</option>
                            <option value="гинеколог">гинеколог</option>
                            <option value="нефролог">нефролог</option>
                            <option value="дерматолог">дерматолог</option>
                            <option value="уролог">уролог</option>
                            <option value="офтальмолог">офтальмолог</option>
                            <option value="иммунолог">иммунолог</option>
                            <option value="другая">другая</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-3 control-label" style="padding-left:0;">Получать рассылки*:</label>
                        <div class="col-sm-2">
                            <label class="radio-inline">
                                <input type="radio" name="spam" value="1" checked> Да
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="spam" value="0"> Нет
                            </label>
                        </div>
                        <div class="col-sm-7">
                            <p style="text-indent:0;">Для отказа от получения информационной рассылки от портала med4share.ru выберите соответствующее поле</p>
                        </div>
                    </div>
                </div>


                <input type="submit" value="Зарегистрироваться на конференцию" class="btn btn-default pull-right">
            </form>
        </div>
    </div>

</div>