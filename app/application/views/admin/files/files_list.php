		<div id="wrap">
			<h2>Files</h2>
            <table class="table table-hover table-bordered table-striped" id="files_list">
                <thead>
                <tr>
					<th>Type</th>
					<th>Имя</th>
					<th>Size</th>
					<th>Description</th>
				</tr>
				<?php if ($files->count() === 0) : ?>
				<tr>
					<td colspan="4">Uploaded files not found</td>
				</tr>
				<?php else : ?>
					<?php foreach ($files as $file) : /** @var Model_File $file **/ ?>
						<tr>
							<td class="type"><img src="<?php echo URL::base('http') ?>public/icons/16px/<?php echo $file->type ?>.png"></td>
							<td class="name"><a href="<?php echo URL::base('http') ?>uploads/<?php echo $file->file ?>"><?php echo $file->file ?></a></td>
							<td class="size"><?php echo Text::bytes($file->size) ?></td>
							<td class="desc"><?php echo HTML::chars($file->description) ?></td>
						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
			</table>



			<h2>Upload</h2>
			<?php if ($message) : ?>
				<div class="message"><?php echo HTML::chars($message) ?></div>
			<?php endif; ?>
			<?php foreach ($errors as $error) : ?>
				<div class="error"><?php echo HTML::chars($error) ?></div>
			<?php endforeach; ?>
			<form action="/admin/files_upload" method="post" enctype="multipart/form-data">
				<label for="file_control">File</label>
				<div class="row"><input type="file" name="Filedata" id="file_control"></div>
				<label for="description_control">Description</label>
				<div class="row"><textarea rows="10" cols="10" name="description" id="description_control"></textarea></div>
				<div class="controls"><input type="submit" value="Upload"></div>
			</form>
		</div>
