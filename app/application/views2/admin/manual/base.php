
<h3>Заголовки</h3>
<? for($i=1; $i<=6; $i++) : ?>
    <h<?=$i?>>H<?=$i?></h<?=$i?>>
    <pre><?=htmlentities("<h$i>H$i</h$i>", ENT_QUOTES);?></pre>
<? endfor;  ?>


<br />
<hr />
<h3>Параграф</h3>
<br />
<div class="row">
    <div class="col-md-6">
        <p>Параграф 1 Параграф 1 Параграф 1</p>
        <p class="small">Параграф 2 Параграф 2 Параграф 2</p>
        <p>Параграф 3 <small>Параграф 3</small> Параграф 3</p>
        <p style="font-size: 0.95em">Параграф 4 Параграф 4 Параграф 4</p>
        <p style="font-size: 0.9em">Параграф 5 Параграф 5 Параграф 5</p>
        <p style="font-size: 0.8em">Параграф 6 Параграф 6 Параграф 6</p>
    </div>
    <div class="col-md-6">
<pre><?=preHTML('<p>Параграф 1 Параграф 1 Параграф 1</p>
<p class="small">Параграф 2 Параграф 2 Параграф 2</p>
<p>Параграф 3 <small>Параграф 3</small> Параграф 3</p>
<p style="font-size: 0.95em">Параграф 4 Параграф 4 Параграф 4</p>
<p style="font-size: 0.9em">Параграф 5 Параграф 5 Параграф 5</p>
<p style="font-size: 0.8em">Параграф 6 Параграф 6 Параграф 6</p>');?></pre>
    </div>
</div>

<br />
<hr />
<h3>Цветной контент</h3>
<br />
<div class="row">
    <div class="col-md-6">
        <p>Текст 1</p>
        <p class="text-muted">Текст 2</p>
        <p class="text-primary">Текст 3</p>
        <p class="text-success">Текст 4</p>
        <p class="text-info">Текст 5</p>
        <p class="text-warning">Текст 6</p>
        <p class="text-danger">Текст 7</p>
    </div>
    <div class="col-md-6">
<pre><?=preHTML('<p>Текст 1</p>
<p class="text-muted">Текст 2</p>
<p class="text-primary">Текст 3</p>
<p class="text-success">Текст 4</p>
<p class="text-info">Текст 5</p>
<p class="text-warning">Текст 6</p>
<p class="text-danger">Текст 7</p>');?></pre>
    </div>
</div>





<br />
<hr />
<h3>Списки 1</h3>
<br />

<div class="row">
    <div class="col-md-6">
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3
                <ul>
                    <li>3.1</li>
                    <li>3.2</li>
                    <li>3.3
                        <ul>
                            <li>3.3.1</li>
                            <li>3.3.2</li>
                            <li>3.3.3</li>
                        </ul>
                    </li>
                    <li>3.4</li>
                </ul>
            </li>
            <li>4</li>
            <li>5</li>
        </ul>
    </div>
    <div class="col-md-6">
<pre><?=preHTML('<ul>
    <li>1</li>
    <li>2</li>
    <li>3
        <ul>
            <li>3.1</li>
            <li>3.2</li>
            <li>3.3
                <ul>
                    <li>3.3.1</li>
                    <li>3.3.2</li>
                    <li>3.3.3</li>
                </ul>
            </li>
            <li>3.4</li>
        </ul>
    </li>
    <li>4</li>
    <li>5</li>
</ul>');?></pre>
    </div>
</div>

<br />
<hr />
<h3>Списки 2</h3>
<br />

<div class="row">
    <div class="col-md-6">
        <ol>
            <li>Число автоматом</li>
            <li>Число автоматом</li>
            <li>Число автоматом</li>
            <li>Число автоматом</li>
        </ol>
    </div>
    <div class="col-md-6">
<pre><?=preHTML('<ol>
    <li>Число автоматом</li>
    <li>Число автоматом</li>
    <li>Число автоматом</li>
    <li>Число автоматом</li>
</ol>');?></pre>
    </div>
</div>


<br />
<hr />
<h3>Списки 3</h3>
<br />

<div class="row">
    <div class="col-md-6">
        <ul class="list-unstyled">
            <li>Список без точек</li>
            <li>Список без точек</li>
            <li>Список без точек</li>
            <li>Список без точек</li>
        </ul>
    </div>
    <div class="col-md-6">
<pre><?=preHTML('<ul class="list-unstyled">
    <li>Список без точек</li>
    <li>Список без точек</li>
    <li>Список без точек</li>
    <li>Список без точек</li>
</ul>');?></pre>
    </div>
</div>


<br />
<hr />
<h3>Списки 3</h3>
<br />

<div class="row">
    <div class="col-md-6">
        <ul class="list-icons">
            <li><i class="fa fa-check"></i> Check list</li>
            <li><i class="fa fa-phone"></i> +12 123 123 1234</li>
            <li><i class="fa fa-fax"></i> +12 123 123 1234</li>
            <li><i class="fa fa-envelope"></i> <a href="mailto:mail@idea.con">mail@idea.con</a></li>
            <li><i class="fa fa-home"></i> Address, City, Postal Code</li>
            <li><i class="fa fa-book"></i> Nulla volutpat aliquam velit</li>
            <li class="text-muted"><i class="fa fa-times"></i> Faucibus porta lacus fringilla vel</li>
            <li><i class="fa fa-map-marker"></i> Eget porttitor lorem</li>
        </ul>
    </div>
    <div class="col-md-6">
<pre><?=preHTML('<ul class="list-icons">
    <li><i class="fa fa-check"></i> Check list</li>
    <li><i class="fa fa-phone"></i> +12 123 123 1234</li>
    <li><i class="fa fa-fax"></i> +12 123 123 1234</li>
    <li><i class="fa fa-envelope"></i> <a href="mailto:mail@idea.con">mail@idea.con</a></li>
    <li><i class="fa fa-home"></i> Address, City, Postal Code</li>
    <li><i class="fa fa-book"></i> Nulla volutpat aliquam velit</li>
    <li class="text-muted"><i class="fa fa-times"></i> Faucibus porta lacus fringilla vel</li>
    <li><i class="fa fa-map-marker"></i> Eget porttitor lorem</li>
</ul>');?></pre>
    </div>
</div>

<br />
<hr />
<h3>Картинки (Без эффектов)</h3>
<br />



<img data-src="holder.js/200x200" class="img-responsive pull-left" alt="200x200" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22200%22%20height%3D%22200%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3C!--%0ASource%20URL%3A%20holder.js%2F200x200%0ACreated%20with%20Holder.js%202.8.2.%0ALearn%20more%20at%20http%3A%2F%2Fholderjs.com%0A(c)%202012-2015%20Ivan%20Malopinsky%20-%20http%3A%2F%2Fimsky.co%0A--%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B%23holder_152a3de1fed%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_152a3de1fed%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%2F%3E%3Cg%3E%3Ctext%20x%3D%2275.5%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 200px;">
<img data-src="holder.js/200x200" class="img-responsive pull-right" alt="200x200" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22200%22%20height%3D%22200%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3C!--%0ASource%20URL%3A%20holder.js%2F200x200%0ACreated%20with%20Holder.js%202.8.2.%0ALearn%20more%20at%20http%3A%2F%2Fholderjs.com%0A(c)%202012-2015%20Ivan%20Malopinsky%20-%20http%3A%2F%2Fimsky.co%0A--%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B%23holder_152a3de1fed%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_152a3de1fed%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%2F%3E%3Cg%3E%3Ctext%20x%3D%2275.5%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 200px;">
<img data-src="holder.js/200x200" class="img-responsive center-block" alt="200x200" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22200%22%20height%3D%22200%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3C!--%0ASource%20URL%3A%20holder.js%2F200x200%0ACreated%20with%20Holder.js%202.8.2.%0ALearn%20more%20at%20http%3A%2F%2Fholderjs.com%0A(c)%202012-2015%20Ivan%20Malopinsky%20-%20http%3A%2F%2Fimsky.co%0A--%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B%23holder_152a3de1fed%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_152a3de1fed%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%2F%3E%3Cg%3E%3Ctext%20x%3D%2275.5%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 200px;">
<div class="clearfix"><br /></div>
<pre><?=preHTML('
<img src="..." class="img-responsive pull-left" alt="...">
<img src="..." class="img-responsive pull-right" alt="...">
<img src="..." class="img-responsive center-block" alt="...">
');?></pre>

<br />
<hr />
<h3>Картинки (С ссылкой)</h3>
<br />


<div class="row">
    <div class="col-md-2 col-md-offset-5">
        <a href="#">
         <img data-src="holder.js/200x200" class="img-responsive center-block" alt="200x200" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22200%22%20height%3D%22200%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3C!--%0ASource%20URL%3A%20holder.js%2F200x200%0ACreated%20with%20Holder.js%202.8.2.%0ALearn%20more%20at%20http%3A%2F%2Fholderjs.com%0A(c)%202012-2015%20Ivan%20Malopinsky%20-%20http%3A%2F%2Fimsky.co%0A--%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B%23holder_152a3de1fed%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_152a3de1fed%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%2F%3E%3Cg%3E%3Ctext%20x%3D%2275.5%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 200px;">
        </a>
    </div>
</div>
<div class="clearfix"><br /></div>
<pre><?=preHTML('
<div class="row">
    <div class="col-md-2 col-md-offset-5">
        <a href="#">
            <img src="..." class="img-responsive center-block" alt="...">
        </a>
    </div>
</div>
');?></pre>