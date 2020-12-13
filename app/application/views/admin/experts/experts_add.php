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
                    <div class="col-md-4">
                        <label>Фамилия</label>
                        <input type="text" class="form-control mandatory" name="familia" placeholder="Фамилия" />
                    </div><!--/span-->
                    
                   	<div class="col-md-4">
                        <label>Имя</label>
                        <input type="text" class="form-control mandatory" name="name" placeholder="Имя" />
                    </div><!--/span-->
                    
                 	<div class="col-md-4">
                        <label>Отчество</label>
                        <input type="text" class="form-control mandatory" name="otchestvo" placeholder="Отчество" />
                    </div><!--/span-->
                    
                </div>
                
                
                
                <br />
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="Добавить Эксперта" name="experts_add" class="btn btn-primary pull-right">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</form>

 