<?php $page_id = 2 ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>All You Need - All About Cooking</title>
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
				<a href="/all-you-need/cookware">
					<img src="/images/cookware.jpg" class="nav-tile-image">
					<div class="nav-tile-text">Cookware</div>
				</a>
			</div>
			<div class="nav-tile">
				<a href="/all-you-need/groceries">
					<img src="/images/veggies.jpg" class="nav-tile-image">
					<div class="nav-tile-text">Groceries</div>
				</a>
			</div>
			<div class="nav-tile">
				<a href="/all-you-need/appliances">
					<img src="/images/appliances.jpg" class="nav-tile-image">
					<div class="nav-tile-text">Appliances</div>
				</a>
			</div>
			<div class="nav-tile">
				<a href="/all-you-need/spices">
					<img src="/images/spices.jpg" class="nav-tile-image">
					<div class="nav-tile-text">Spices</div>
				</a>
			</div>
		</section>
		<?php include '../footer.php' ?>
	</div>
	<script src="/js/script.js"></script>
</body>

</html>