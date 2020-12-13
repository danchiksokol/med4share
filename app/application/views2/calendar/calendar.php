<style>
    .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
        border-top: 0px solid #ddd; */
    }
</style>


<div class="tabs-style-2">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class=""><a href="#past" role="tab" data-toggle="tab" aria-expanded="true">Прошедшие</a></li>
        <li class="active"><a href="#latest" role="tab" data-toggle="tab" aria-expanded="false">Актуальные</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade " id="past">
            <div class="space-bottom"></div>
            <? $current_month = false; ?>
            <table class="table table-condensed" style="border: 0px;">
                <? foreach ($pastData as $k => $val) :

                    $date_end = false;

                    $begin['day'] = date('d', strtotime($val->date_begin));
                    $begin['month'] = date('n', strtotime($val->date_begin));
                    $begin['year']  = date('Y', strtotime($val->date_begin));

                    if( strtotime($val->date_end) > 0 && $val->date_end > $val->date_begin  ) {
                        $end['day'] = date('d', strtotime($val->date_end));
                        $end['month'] = date('n', strtotime($val->date_end));
                        $end['year']  = date('Y', strtotime($val->date_end));
                        $date_end = true;
                    }
                    ?>

                    <? if( $begin['month'] != $current_month ) { ?>
                    <tr>
                        <th colspan="2">
                            <h4><?=DATE::ru_month($begin['month'], true).' '.$begin['year']; ?></h4>
                        </th>
                    </tr>
                <? } ?>
                    <tr>
                        <td style="width: 250px;">
                            <p>
                                <?=$begin['day'].' '.DATE::ru_month($begin['month'], false); ?>
                                <? if($date_end) { echo ' - '.$end['day'].' '.DATE::ru_month($end['month'], false); } ?>
                            </p>
                        </td>
                        <td><p><a href="<?=$url_event_only?>/<?=$val->url?>"><?=$val->event_title;?></a></p></td>
                    </tr>

                    <? $current_month = $begin['month'] ?>

                <? endforeach; // Прошедшие?>
            </table>

        </div>
        <div class="tab-pane fade active in" id="latest">

            <div class="space-bottom"></div>
            <? $current_month = false; ?>
            <table class="table table-condensed" style="border: 0px;">
                <? foreach ($data as $k => $val) :

                    $date_end = false;

                    $begin['day'] = date('d', strtotime($val->date_begin));
                    $begin['month'] = date('n', strtotime($val->date_begin));
                    $begin['year']  = date('Y', strtotime($val->date_begin));

                    if( strtotime($val->date_end) > 0 && $val->date_end > $val->date_begin  ) {
                        $end['day'] = date('d', strtotime($val->date_end));
                        $end['month'] = date('n', strtotime($val->date_end));
                        $end['year']  = date('Y', strtotime($val->date_end));
                        $date_end = true;
                    }
                    ?>

                    <? if( $begin['month'] != $current_month ) { ?>
                    <tr>
                        <th colspan="2">
                            <h4><?=DATE::ru_month($begin['month'], true).' '.$begin['year']; ?></h4>
                        </th>
                    </tr>
                <? } ?>
                    <tr>
                        <td style="width: 250px;">
                            <p>
                                <?=$begin['day'].' '.DATE::ru_month($begin['month'], false); ?>
                                <? if($date_end) { echo ' - '.$end['day'].' '.DATE::ru_month($end['month'], false); } ?>
                            </p>
                        </td>
                        <td><p><a href="<?=$url_event_only?>/<?=$val->url?>"><?=$val->event_title;?></a></p></td>
                    </tr>

                    <? $current_month = $begin['month'] ?>

                <? endforeach; // Актуальные?>
            </table>
        </div>

    </div>
</div>

