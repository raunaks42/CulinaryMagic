<?php
	$page_id = 7;
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Let's Talk - All About Cooking</title>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="background-image"></div>
	<div class="content">
		<nav class="home-nav home-nav-h">
			<h1><a href="/">All About Cooking</a></h1>
		</nav>
		<?php include '../site-nav.php' ?>
		<section class="ayn-tiles">
			<div class="nav-tile">
				<a href="blog">
					<img src="/images/blog.jpg" class="nav-tile-image">
					<div class="nav-tile-text">Blog</div>
				</a>
			</div>
			<div class="nav-tile">
				<a href="forum">
					<img src="/images/forum.jpg" class="nav-tile-image">
					<div class="nav-tile-text">Forum</div>
				</a>
			</div>
		</section>
		<?php include '../footer.php' ?>
	</div>
	<script src="/js/script.js"></script>
</body>

</html>