<!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                <h4 class="modal-title" id="myModalLabel">Отправить отзыв или предложение</h4>
            </div>

            <form role="form" id="feedback-form">
                <div class="modal-body">
						<p>Нам очень важно Ваше мнение! Напишите, пожалуйста, какую информацию Вы хотели бы видеть на нашем сайте или что Вам не понравилось на сайте</p>
                        <div class="form-group has-feedback">
                            <label for="name">Ваше имя</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Укажите ваше имя">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="email">Ваш email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Укажите ваш email">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="message">Ваше сообщение</label>
                            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-sm btn-default" value="Отправить" />
                </div>
            </form>
                <div id="message-send" class="hidden">
                    <div class="modal-body">
                        <h3>Ваше сообщение отправлено</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
        </div>
    </div>
</div>