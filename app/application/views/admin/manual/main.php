<?
function preHTML( $html ) {
    return htmlentities($html, ENT_QUOTES, 'UTF-8');
}
?>
        <div class="tabs-style-2">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#h2tab1" role="tab" data-toggle="tab"><i class="fa fa-home pr-5"></i>База</a></li>
                <li><a href="#h2tab2" role="tab" data-toggle="tab"><i class="fa fa-table pr-5"></i> Таблицы</a></li>
                <li><a href="#h2tab3" role="tab" data-toggle="tab"><i class="fa fa-video-camera pr-5"></i>Видео</a></li>
                <li><a href="#h2tab4" role="tab" data-toggle="tab"><i class="fa fa-envelope pr-5"></i>Accordions</a></li>
                <li><a href="#h2tab5" role="tab" data-toggle="tab"><i class="fa fa-pie-chart pr-5"></i>Сетка</a></li>
                <li><a href="#h2tab6" role="tab" data-toggle="tab"><i class="fa fa-pie-chart pr-5"></i>Пример страницы</a></li>
                <li><a href="#h2tab7" role="tab" data-toggle="tab"><i class="fa fa-pie-chart pr-5"></i>Иконки</a></li>

            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="h2tab1">
                    <?=View::factory('admin/manual/base');?>
                </div>
                <div class="tab-pane fade" id="h2tab2">
                    <?=View::factory('admin/manual/table');?>
                </div>
                <div class="tab-pane fade" id="h2tab3">
                    <?=View::factory('admin/manual/video');?>
                </div>
                <div class="tab-pane fade" id="h2tab4">
                    <?=View::factory('admin/manual/accordions');?>
                </div>
                <div class="tab-pane fade" id="h2tab5">
                    <?=View::factory('admin/manual/grid');?>
                </div>
                <div class="tab-pane fade" id="h2tab6">
                    <?=View::factory('admin/manual/page');?>
                </div>
                <div class="tab-pane fade" id="h2tab7">
                    <?=View::factory('admin/manual/icon');?>
                </div>
            </div>
        </div>