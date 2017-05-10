<h2><?= $title; ?></h2>

<?php 
echo form_open('posts/create');
echo validation_errors();
?>

	<div class="form-group">
		<?php
			$title = array(
			'name' 			=> 'title',
			'type' 			=> 'text',
			'placeholder' 	=> 'Insert Title',
			'class' 		=> 'form-control'
			);
			echo form_input($title);
		?>
	</div>

	<div class="form-group">
		<?php
			$body = array(
			'id'			=> 'editor1',
			'name' 			=> 'body',
			'placeholder' 	=> 'Body',
			'class' 		=> 'form-control'
			);
			echo form_textarea($body);
		?>
	</div>

	<div class="form-group">
		<?php
		$button = array(
			'type' 			=> 'submit',
			'class' 		=> 'btn btn-success'
			);
		echo form_submit($button,'Create Posts');
		?>	
	</div>
	
<?php echo form_close();?>