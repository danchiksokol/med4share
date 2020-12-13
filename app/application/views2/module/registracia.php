<div class="row">
    <div class="col-md-12">
        <h3>Регистрация на конференцию "Злокачественные лимфомы"</h3>
        <div class="alert alert-success hidden" id="registerSuccess">
            <h3>Регистрация на конференцию успешно завершена</h3>
            <p>Благодарим за регистрацию!</p>
        </div>

        <div class="alert alert-success hidden" id="addUserSuccess">
            <h3>Регистрация пользователя успешно завершена</h3>
        </div>

        <div class="alert alert-error hidden" id="registerError"></div>
        <div class="alert alert-error hidden" id="userError"></div>
    </div>
</div>

<div class="tabs-style-2">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#h2tab1" role="tab" data-toggle="tab"><i class="fa fa-home pr-5"></i> Зарегистрироваться</a></li>
        <? if(Auth::instance()->logged_in('login') ) { ?>
            <li><a href="#h2tab2" role="tab" data-toggle="tab"><i class="fa fa-table pr-5"></i> Зарегистрировать другого человека</a></li>
        <? } ?>
        <li><a href="#h2tab3" role="tab" data-toggle="tab"><i class="fa fa-video-camera pr-5"></i> Зарегистрировать группу участников конференции</a></li>
		<li><a href="#h2tab4" role="tab" data-toggle="tab"><i class="fa fa-video-camera pr-5"></i> Отправить постер</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="h2tab1">
            <?=View::factory('module/registracia/tab1')?>
        </div>
        <div class="tab-pane fade" id="h2tab2">
            <?=View::factory('module/registracia/tab2')?>
        </div>
        <div class="tab-pane fade" id="h2tab3">
            <p><a href="/media/files/public/registracia.xls">Скачать шаблон</a></p>
            <p>Заполненную таблицу присылайте по адресу lymphoma@tsoncology.com</p>
        </div>
        <div class="tab-pane fade" id="h2tab4">
			<p>XII Российская конференция с международным участием «Злокачественные лимфомы» состоится 22-23 октября 2015 г. в Москве.</p>
			<p>По установившейся традиции, конференция будет проводиться совместно с Европейской гематологической ассоциацией (EHA), с Организационным комитетом Международной конференции по злокачественным лимфомам (ICML), а также с международным обществом гериатрической онкологии (SIOG).</p>
			<p><strong>Тезисы для постеров вы можете присылать до 11 сентября 2015 г. на адрес <?=HTML::mailto('lymphoma@tsoncology.com');?> в любом удобном для вас формате. Постеры будут оцениваться экспертной комиссией, авторам лучших постеров будет предоставлена возможность выступить с сообщением в рамках соответствующей сессии конференции.</strong></p>
		</div>
        
    </div>
</div>

