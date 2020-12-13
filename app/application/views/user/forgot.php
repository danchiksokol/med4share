<div class="row">

    <h4>Забыли пароль?</h4>
    <p>Введите свой адрес электронной почты. Инструкция по сбросу пароля будет немедленно отправлена по введенному адресу.</p>


    <? if( isset($data['error']) && $data['error'] == 1 ) { ?>

        <div class="col-sm-12">
            <h4 class="text-danger"><strong>Ошибка:</strong> <?=$data['message']?></h4>
        </div>

    <? } elseif( isset($data['error']) && $data['error'] == 0 ) { ?>
        <div class="col-sm-12">
            <h4 class="text-success"><?=$data['message']?></h4>
        </div>
    <? } else { ?>

        <form class="form-horizontal" action="profile/forgot" method="post">

            <div class="form-group">
                <label class="col-sm-3 control-label">Адрес электронной почты:</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" placeholder="Адрес электронной почты" required="">
                </div>
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-default" style="margin:0;">Сбросить пароль</button>
                </div>
            </div>



        </form>
    <? } ?>
    <div class="col-sm-12">
        <p><a href="/login" rel="nofollow" class="link">Вернуться к форме входа в систему</a></p>
    </div>

</div>


