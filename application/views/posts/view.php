<h2><?php echo $post['title'];?></h2>
<small class="post-data">Posted on: <?php echo $post['created_at']?></small>
<div class="post-body">
	<?php echo $post['body'];?>
</div>
<hr>


<?php echo form_open('/posts/delete/'.$post['id']);?>
	<?php 
		$delete_btn = array(
			'type' => 'submit',
			'class' => 'btn btn-danger pull-left',
			'name' => 'delete',
			'value' => 'Delete Post'
			);
		echo form_submit($delete_btn);
	?>
<?php echo form_close();?>
&nbsp;
<a href="<?php echo base_url('');?>posts/edit/<?php echo $post['id'];?>" class="btn btn-default">Edit Post</a>

<?php echo validation_errors();?>
<hr>
	
	<h3>Comments</h3>
	<?php if($comments):?>
		<?php foreach($comments as $key):?>
			<div class="well">
			
			<h5>
			<small>Date Posted: <?php echo $key['created_at'];?></small><br>
			<b><i>From: </i></b><?php echo $key['email'];?>
			<br>
			<i>"<?php echo $key['body'];?>"</i>
			</h5>
			</div>
		<?php endforeach;?>
	<?php else:?>
		<p>There are no comments yet.</p>
	<?php endif;?>
<h3>
<h3>Add Comment</h3>
<?php echo form_open('comments/create/'.$post['id']);?>
	<div class="form-group">
		<label>Name</label>
		<input type="input" class="form-control" name="name">
	</div>

	<div class="form-group">
		<label>Email Address</label>
		<input type="email" class="form-control" name="email">
	</div>

	<div class="form-group">
		<label>Comment</label>
		<textarea name="body" class="form-control"></textarea>
	</div>

	<input type="hidden" name="slug" value="<?php echo $post['slug']?>">

	<div class="form-group">
		<button class="btn btn-info" type="submit">Submit Comment</button>
	</div>

<?php echo form_close();?>
