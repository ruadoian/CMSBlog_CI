<h2><?= $title; ?></h2>
<?php foreach ($posts as $key) : ?>
	<div class="row">
		<div class="col-md-3">
			<img class="post-thumb" src="<?php echo site_url()?>assets/images/posts/<?php echo $key['post_image'];?>">
		</div>
		
		<div class="col-md-9">
			<h3><?php echo $key['title']; ?></h3>
				<small class="post_date"><?php echo $key['created_at'];?>
					in <strong><?php echo $key['name'];?> Category</strong>
				</small><br>
				<?php echo word_limiter($key['body'], 60) ; ?>
				<br>
				<a class="btn btn-warning" href="<?php echo site_url('/posts/'.$key['slug']); ?>">Read More</a>	
		</div>
	</div>
<?php endforeach; ?>