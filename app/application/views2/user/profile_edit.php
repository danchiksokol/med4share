<div class="row">
    <div class="col-md-12">
        <h3>Настройки вашего профиля:</h3>

        <? if( count( $data['errors']) ) : ?>
            <div id="warning">
                <? foreach($data['errors'] as $val) : ?>
                    <div><span>Ошибка:</span> <?=$val?></div>
                <? endforeach; ?>
            </div>
        <? endif;?>

        <div class="alert alert-success hidden" id="registerSuccess">
            <h3>Регистрация успешно завершена</h3>
            <p>Благодарим за регистрацию!</p>
        </div>
        <div class="alert alert-error hidden" id="registerError"></div>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="profile-edit-form">
            <form id="profile-edit-form" role="form" method="post">
                <div class="form-group has-feedback">
                    <label for="fio">Ф.И.О*</label>
                    <input type="text" class="form-control" id="fio" name="fio" value="<?=Auth::instance()->get_user()->fio?>">
                    <i class="fa fa-user form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="">
                    <i class="fa fa-lock form-control-feedback"></i>
                </div>

                <div class="form-group has-feedback">
                    <label for="password">Подтверждение пароля</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="">
                    <i class="fa fa-lock form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">Если Вы хотите изменить пароль, укажите его</div>
                <div class="form-group has-feedback">
                    <label for="razdel">Приоритетный раздел сайта*</label>
                    <select id="razdel_id" name="razdel_id" class="form-control">
                        <option value="0" <? if( Auth::instance()->get_user()->razdel_id == 0) { ?>selected="selected"<? } ?>>Онкология</option>
                        <option value="3" <? if( Auth::instance()->get_user()->razdel_id == 3) { ?>selected="selected"<? } ?>>Ревматология</option>
                        <option value="4" <? if( Auth::instance()->get_user()->razdel_id == 4) { ?>selected="selected"<? } ?>>Неврология</option>
                    </select>
                    <i class="fa fa-bookmark form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                    <label for="position">Должность*</label>
                    <input type="text" class="form-control" id="position" name="position" value="<?=Auth::instance()->get_user()->position?>">
                    <i class="fa fa-navicon form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                    <label for="specialty">Специализация*</label>
                    <select id="specialty" name="specialty" class="form-control" <?/*=Auth::instance()->get_user()->specialty*/?>>
                        <option value="онколог">онколог</option>
                        <option value="гематолог">гематолог</option>
                        <option value="эндокринолог">эндокринолог</option>
                        <option value="кардиолог">кардиолог</option>
                        <option value="гинеколог">гинеколог</option>
                        <option value="нефролог">нефролог</option>
                        <option value="нефролог">нефролог</option>
                        <option value="дерматолог">дерматолог</option>
                        <option value="уролог">уролог</option>
                        <option value="офтальмолог">офтальмолог</option>
                        <option value="иммунолог">иммунолог</option>
                        <option value="ревматолог">ревматолог</option>
                        <option value="другая">другая</option>
                    </select>
                </div>
                <div class="form-group has-feedback">
                    <label for="phone">Мобильный телефон*</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?=Auth::instance()->get_user()->phone?>">
                    <i class="fa  fa-phone form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                    <label for="email">Электронная почта*</label>
                    <input type="email" class="form-control" id="email" name="email" disabled value="<?=Auth::instance()->get_user()->email?>">
                    <i class="fa fa-envelope form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                    <label for="city">Ваш город*</label>
                    <input type="text" class="form-control" id="city" name="city" value="<?=Auth::instance()->get_user()->city?>">
                    <i class="fa fa-university form-control-feedback"></i>
                </div>


                <div class="clearfix">&nbsp;</div>

                <div class="form-group">
                    <label for="inputPassword" class="col-sm-8 control-label" style="padding-left:0;">Получать E-mail рассылки по Онкологии/Гематологии*:</label>
                    <div class="col-sm-2">
                        <label class="radio-inline">
                            <input type="radio" name="spam" value="1" <? if( Auth::instance()->get_user()->spam == 1) {?>checked<?}?>> Да
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="spam" value="0" <? if( Auth::instance()->get_user()->spam == 0) {?>checked<?}?>> Нет
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword" class="col-sm-8 control-label" style="padding-left:0;">Получать E-mail рассылки по Ревматологии*:</label>
                    <div class="col-sm-2">
                        <label class="radio-inline">
                            <input type="radio" name="spam_rheumatology" value="1" <? if( Auth::instance()->get_user()->spam_rheumatology == 1) {?>checked<?}?>> Да
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="spam_rheumatology" value="0" <? if( Auth::instance()->get_user()->spam_rheumatology == 0) {?>checked<?}?>> Нет
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword" class="col-sm-8 control-label" style="padding-left:0;">Получать E-mail рассылки по Неврологии*:</label>
                    <div class="col-sm-2">
                        <label class="radio-inline">
                            <input type="radio" name="spam_neurology" value="1" <? if( Auth::instance()->get_user()->spam_neurology == 1) {?>checked<?}?>> Да
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="spam_neurology" value="0" <? if( Auth::instance()->get_user()->spam_neurology == 0) {?>checked<?}?>> Нет
                        </label>
                    </div>
                </div>

                <div class="clearfix">&nbsp;</div>
                <div class="col-sm-12">
                    <p style="text-indent:0; margin-top: 20px">Для отказа от получения информационной рассылки от портала med4share.ru выберите соответствующее поле</p>
                </div>
                <div class="clearfix"></div>

                     
                    
                    <? /*
                    <label for="inputPassword" class="col-sm-4 control-label" style="padding-left:0; margin-top: -20px">Получать SMS уведомления*:</label>
                    <div class="col-sm-2" style="margin-top: -20px">
                        <label class="radio-inline">
                            <input type="radio" name="spam_sms" value="1" <? if( Auth::instance()->get_user()->spam_sms == 1) {?>checked<?}?>> Да
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="spam_sms" value="0" <? if( Auth::instance()->get_user()->spam_sms == 0) {?>checked<?}?>> Нет
                        </label>
                    </div>
                    <div class="col-sm-6"></div>
					*/ ?>
                </div>
                <input type="submit" value="Сохранить изменения" class="btn btn-default pull-right">
            </form>
        </div>
    </div>
</div>



