<? if(isset($errors)){?>
<?foreach($errors as $item){?>
<p style="color:red"><?=$item?></p>
<?}?>
<?}?>

<form method="post" action="" class="form-horizontal">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="well">

                <div class="row">
                    <div class="col-md-3">
                        <label>Заголовок события</label>
                        <input type="text" class="form-control mandatory" name="event_title" placeholder="Заголовок" />
                    </div><!--/span-->

                    <div class="col-md-3">
                        <div class="input-append date" id="date-change" data-date="<?=date('d-m-Y');?>">
                            <label>Дата начала события</label>
                            <div class="input-group" data-datepicker="true">
                                <input name="date_begin" type="text" class="form-control" value="<?=date('d-m-Y');?>" />
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="input-append date" id="date-change" data-date="<?=date('d-m-Y');?>">
                            <label>Дата окончания события</label>
                            <div class="input-group" data-datepicker="true">
                                <input name="date_end" type="text" class="form-control" value="<?=date('d-m-Y');?>" />
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>Время мероприятия</label>
                        <input type="time" class="form-control mandatory" name="event_time" value="">
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="Добавить событие" name="page_add" class="btn btn-primary pull-right">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</form>






<script type="text/javascript">
    $(function() {

        //calendar
        $('*[data-datepicker="true"] input[type="text"]').datepicker({
            todayBtn: true,
            format: "dd-mm-yyyy",
            autoclose: true,
            todayHighlight: true,
            language: "ru"
        });
        //timepicker
        $('#timepicker').datetimepicker({
            pickDate: false,
            language: 'ru'
        });
    });
</script>