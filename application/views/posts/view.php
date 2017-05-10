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



