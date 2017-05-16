<h2><?= $title; ?></h2>

<?php 
echo form_open_multipart('posts/create');
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
		<label>Category</label>
		<select name="category_id" class="form-control">
			<?php foreach($categories as $key):?>
				<option value="<?php echo $key['id'];?>"><?php echo $key['name']?></span>
				</option>
			<?php endforeach;?>	
		</select>
	</div>

	<div class="form-group">
		<label>Upload Image</label>
		<?php
		$image = array(
			'type' => 'file',
			'name' => 'userfile',
			'size' => '20',
			
			);
		echo form_input($image);
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


