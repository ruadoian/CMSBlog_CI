<html>
<head>
	<title>Blog Paradox CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootswatch_sandstone.css");?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/stiles.css")?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/ckeditor-full.js")?>">

	<script src="http://cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url();?>">Website Name</a>
		</div>
		<div id="navbar">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url();?>home">Home</a></li>
				<li><a href="<?php echo base_url();?>about">About</a></li>
				<li><a href="<?php echo base_url();?>posts">Blogs</a></li>
				<li><a href="<?php echo base_url();?>categories">Categories</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<li><a href="<?php echo base_url();?>posts/create">Create Posts</a></li>
			<li><a href="<?php echo base_url();?>categories/create">Add Category</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">

