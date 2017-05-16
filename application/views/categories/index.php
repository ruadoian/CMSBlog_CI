<h2><?= $title;?></h2>

<?php foreach($categories as $key):?>
	<li class="list-group-item">
	<a href="<?php echo site_url('categories/posts/'.$key['id']);?>">
	<?php echo $key['name'];?></a></li>
<?php endforeach;?>