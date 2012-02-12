<div class="images">
<h2>List Images</h2>

<table cellpadding="0" cellspacing="0">
<tr>
	<th>Id</th>
	<th>Image String</th>
	<th>Image Display</th>
</tr>
<?php foreach ($images as $image): ?>
<tr>
	<td><?php echo $image['Image']['id']; ?></td>
	<td><?php echo $image['Image']['images']; ?></td>
	<td>
		<?php $string = $image['Image']['images']; ?>
		<img src="<?=$this->webroot?>img/uploads/<?=$string?>" alt="*" />
	</td>
</tr>
<?php endforeach; ?>
</table>
	<ul class="actions">
		<li><?php echo $html->link('Upload Images', '/images/upload'); ?></li>
	</ul>
</div>