<h2><?= $title; ?></h2>
<?php foreach ($posts as $key) : ?>
	<h3><?php echo $key['title']; ?></h3>
	<small class="post_date"><?php echo $key['created_at'];?></small><br>
	<?php echo word_limiter($key['body'], 60) ; ?>
	<br>
	<a class="btn btn-warning" href="<?php echo site_url('/posts/'.$key['slug']); ?>">Read More</a>
<?php endforeach; ?>