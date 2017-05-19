<h3><?= $title; ?></h3>

<?php 
echo form_open('users/register');
echo validation_errors();
?>

	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" />
	</div>

	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" />
	</div>

	<div class="form-group">
		<label>Email Address</label>
		<input type="email" name="email" class="form-control" />
	</div>

	<div class="form-group">
		<label>Zipcode</label>
		<input type="text" name="zipcode" class="form-control" />
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" />
	</div>

	<div class="form-group">
		<label>Confirm Password</label>
		<input type="password" name="cpassword" class="form-control" />
	</div>

	<div class="form-group">
		<input type="submit" name="register" value="register" class="btn btn-default" />
		<input type="#" value="Cancel" class="btn btn-warning" />
	</div>
<?php echo form_close();?>