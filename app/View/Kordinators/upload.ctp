<h2>Upload An Image</h2>
<form action="<?php echo $html->url('/images/upload'); ?>" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>
			Images
		</legend>
		<ul>
			<li>
				<?php echo $form->labelTag('Image/images', 'Image:' );?>
				<?php echo $html->file('Image/filedata');?>
			</li>
		</ul>
	</fieldset>
	<p><input type="submit" name="add" value="Add Image" /></p>
</form>

