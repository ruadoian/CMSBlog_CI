<h2><?= $title; ?></h2>


<?php echo validation_errors(); ?>
<?php echo form_open_multipart('categories/create');?>
<div class="form-group">
	<label>Category Name</label>
	<?php 
		$category = array(
			'name' => 'category_name',
			'type' => 'input',
			'class' => 'form-control'
			);
		echo form_input($category);
	
?><hr><?php
		$submit = array(
			'name' => 'save',
			'value' => 'Save Category',
			'class' => 'btn btn-info'
			);

		echo form_submit($submit)
	?>
</div>
<?php echo form_close();?>