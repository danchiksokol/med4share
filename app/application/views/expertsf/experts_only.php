<div class="main col-md-12">
<h2><?=$db_data['name'].' '.$db_data['familia'].' '.$db_data['otchestvo']?></h2>

<div class="row">


	<? /* <div class="col-md-4"><img src="<?=$db_data['imagePreview']?>" class="img-rounded"></div> */ ?>
	<div class="col-md-12">
		<img src="<?=$db_data['imagePreview']?>" style="float:left" hspace="10" class="img-rounded">
	
		<?=$db_data['contentFull']?>
	</div>
</div>