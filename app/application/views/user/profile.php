<h3>Ваш профиль:</h3>

<p><strong>Ф.И.О:</strong> <?=Auth::instance()->get_user()->fio?></p>
<p><strong>Должность:</strong> <?=Auth::instance()->get_user()->position?></p>
<p><strong>Специализация:</strong> <?=Auth::instance()->get_user()->specialty?></p>

<p><strong>Мобильный телефон:</strong> <?=Auth::instance()->get_user()->phone?></p>

<p><strong>Электронная почта:</strong> <?=Auth::instance()->get_user()->email?></p>
<p><strong>Ваш город:</strong> <?=Auth::instance()->get_user()->city?></p>
<p><strong>Получать E-mail рассылки по Онкологии/Гематологии:</strong> <? if( Auth::instance()->get_user()->spam == 1) {?>Да<?} else {?>Нет<?}?></p>
<p><strong>Получать E-mail рассылки по Ревматологии:</strong> <? if( Auth::instance()->get_user()->spam_rheumatology == 1) {?>Да<?} else {?>Нет<?}?></p>
<!--p><strong>Получать E-mail рассылки по Неврологии:</strong> <? if( Auth::instance()->get_user()->spam_neurology == 1) {?>Да<?} else {?>Нет<?}?></p><-->

<!-- <p><strong>Получать SMS уведомления:</strong> <? if( Auth::instance()->get_user()->spam_sms == 1) {?>Да<?} else {?>Нет<?}?></p> -->

<!--<p><strong>Лечение солидных опухолей:</strong> <?/* if( Auth::instance()->get_user()->lso == 1) {*/?>Да<?/*} else {*/?>Нет<?/*}*/?></p>
<p><strong>Лечение онкогематологических заболеваний:</strong> <?/* if( Auth::instance()->get_user()->loz == 1) {*/?>Да<?/*} else {*/?>Нет<?/*}*/?></p>
<p><strong>Диагностика злокачественных новообразований:</strong> <?/* if( Auth::instance()->get_user()->dzn == 1) {*/?>Да<?/*} else {*/?>Нет<?/*}*/?></p>-->


<br />
<br />

<div><a href="/profile/edit"><i class="fa fa-user"></i> Изменить профиль</a></div>
<div><a href="/profile/logout"><i class="fa fa-times"></i> Выйти</a><div>




