<h2><?= $title; ?></h2>

<?php 
echo form_open('posts/update');
echo validation_errors();
?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
	<div class="form-group">
		<?php
			$title_val =  $post['title'];
			$title = array(
			'name' 			=> 'title',
			'type' 			=> 'text',
			'class' 		=> 'form-control',
			'value'			=> $title_val
			);
			echo form_input($title);
		?>
	</div>



	<div class="form-group">
		<?php
			$body_val =  $post['body'];
			$body = array(
			'name' 			=> 'body',
			'class' 		=> 'form-control',
			'id'			=> 'editor1',	
			'value'			=> $body_val
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
		echo form_submit($button,'Edit Posts');
		?>	
	</div>
	
<?php echo form_close();?>