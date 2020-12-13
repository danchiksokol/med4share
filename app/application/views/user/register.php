<div class="row">
    <div class="col-md-12">
        <h3>РЕГИСТРАЦИЯ</h3>
        <p>Добро пожаловать!</p>
        <br />
        <p>Регистрация обеспечивает доступ в специальные разделы сайта, а также подписку на рассылку материалов и новостей портала.</p>
        <p>Уважаемые коллеги, не передавайте регистрационные данные, логин и пароль другим лицам, т.к. это может нарушить персональное взаимодействие с вами!</p>

        <div class="alert alert-success hidden" id="registerSuccess">
            <h3>Регистрация успешно завершена</h3>
            <p>Благодарим за регистрацию!</p>
        </div>
        <div class="alert alert-error hidden" id="registerError"></div>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="register-form">
            <form id="register-form" role="form">
                <div class="form-group has-feedback">
                    <label for="fio">Ф.И.О*</label>
                    <input type="text" class="form-control" id="fio" name="fio" placeholder="">
                    <i class="fa fa-user form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                    <label for="razdel">Приоритетный раздел сайта*</label>
                    <select id="razdel_id" name="razdel_id" class="form-control">
                        <option value="0">Онкология</option>
                        <option value="3">Ревматология</option>
                        <!--option value="4" selected="selected">Неврология </option><-->
                    </select>
                    <i class="fa fa-bookmark form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                    <label for="password">Пароль*</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="">
                    <i class="fa fa-lock form-control-feedback"></i>
                </div>

                <div class="form-group has-feedback">
                    <label for="position">Должность*</label>
                    <input type="text" class="form-control" id="position" name="position" placeholder="">
                    <i class="fa fa-navicon form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                    <label for="specialty">Специализация*</label>
                    <select id="specialty" name="specialty" class="form-control">
                        <option value="онколог">онколог</option>
                        <option value="гематолог">гематолог</option>
                        <option value="эндокринолог">эндокринолог</option>
                        <option value="кардиолог">кардиолог</option>
                        <option value="гинеколог">гинеколог</option>
                        <option value="невролог">невролог</option>
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
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="">
                    <i class="fa  fa-phone form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                    <label for="email">Электронная почта*</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                    <i class="fa fa-envelope form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                    <label for="city">Ваш город*</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="">
                    <i class="fa fa-university form-control-feedback"></i>
                </div>


                <div class="clearfix">&nbsp;</div>

                <div class="form-group">
                    <label for="inputPassword" class="col-sm-8 control-label" style="padding-left:0;">Получать E-mail рассылки по Онкологии/Гематологии*:</label>
                    <div class="col-sm-2">
                        <label class="radio-inline">
                            <input type="radio" name="spam_email" value="1" checked> Да
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="spam_email" value="0"> Нет
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword" class="col-sm-8 control-label" style="padding-left:0;">Получать E-mail рассылки по Ревматологии*:</label>
                    <div class="col-sm-2">
                        <label class="radio-inline">
                            <input type="radio" name="spam_rheumatology" value="1" checked> Да
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="spam_rheumatology" value="0"> Нет
                        </label>
                    </div>
                </div>

                <!--div class="form-group">
                    <label for="inputPassword" class="col-sm-8 control-label" style="padding-left:0;">Получать E-mail рассылки по Неврологии*:</label>
                    <div class="col-sm-2">
                        <label class="radio-inline">
                            <input type="radio" name="spam_neurology" value="1" checked> Да
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="spam_neurology" value="0"> Нет
                        </label>
                    </div>
                </div><-->
                <div class="clearfix">&nbsp;</div>
                <div class="col-sm-12">
                    <p style="text-indent:0; margin-top: 20px">Для отказа от получения информационной рассылки от портала med4share.ru выберите соответствующее поле</p>
                </div>
                <div class="clearfix"></div>


                <br />
                <? /*
               	 <div class="form-group">
                    <label for="inputPassword" class="col-sm-6 control-label" style="padding-left:0; margin-top: 0px">Лечение солидных опухолей*:</label>
                    <div class="col-sm-2" style="margin-top: 0px">
                        <label class="radio-inline">
                            <input type="radio" name="lso" value="1" checked> Да
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="lso" value="0"> Нет
                        </label>
                    </div>
                    <div class="col-sm-4"></div>
                     <div class="clearfix"></div>
                    
                    <label for="inputPassword" class="col-sm-6 control-label" style="padding-left:0; margin-top: 0px">Лечение онкогематологических заболеваний*:</label>
                    <div class="col-sm-2" style="margin-top: 0px">
                        <label class="radio-inline">
                            <input type="radio" name="loz" value="1" checked> Да
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="loz" value="0"> Нет
                        </label>
                    </div>
                    <div class="col-sm-4"></div>
                     <div class="clearfix"></div>
                    <label for="inputPassword" class="col-sm-6 control-label" style="padding-left:0; margin-top: 0px">Диагностика злокачественных новообразований *:</label>
                    <div class="col-sm-2" style="margin-top: 0px">
                        <label class="radio-inline">
                            <input type="radio" name="dzn" value="1" checked> Да
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="dzn" value="0"> Нет
                        </label>
                    </div>
                    <div class="col-sm-4"></div>
						
						
						
                    
                    
					<!-- 
                    <label for="inputPassword" class="col-sm-4 control-label" style="padding-left:0; margin-top: -20px">Получать SMS уведомления*:</label>
                    <div class="col-sm-2" style="margin-top: -20px">
                        <label class="radio-inline">
                            <input type="radio" name="spam_sms" value="1" checked> Да
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="spam_sms" value="0"> Нет
                        </label>
                    </div>
                    <div class="col-sm-6"></div>
                    -->
                </div>

                 <br /> <br /> <br />
  */ ?>
               	 <div class="form-group">
               	   <label for="inputPassword" class="col-sm-6 control-label" style="padding-left:0; margin-top: 0px">Согласие на обработку персональных данных*:</label>
                    <div class="col-sm-2" style="margin-top: 0px">
                        <label class="radio-inline">
                            <input type="radio" name="processing" value="1" checked> Да
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="processing" value="0"> Нет
                        </label>
                    </div>
                    <div class="col-sm-4"></div>
                    
                    <div class="col-sm-12"><small>*В соответствии со ст.9 Федерального закона от 27 июля 2006 года № 152-ФЗ «О персональных данных» даю свое согласие Обществу с ограниченной ответственностью «ТС Онколоджи» (ИНН 7704302970, КПП 771001001, юр адрес 125047, г. Москва, ул. 2-я Брестская, дом 46, стр.1, пом. 2Б) на обработку своих персональных данных с использованием средств автоматизации или без использования таковых средств, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление), изменение, извлечение, использование, обезличивание, блокирование, удаление, уничтожение персональных данных в течение 10 лет. Отзыв согласия может быть произведен в письменной форме по электронному адресу info@tsoncology.com</small></div>
                
               
                
                
                
                <input type="submit" value="Зарегистрироваться" class="btn btn-default pull-right">
            </form>
        </div>
    </div>
</div>