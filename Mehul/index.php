<?php $page_id = 0 ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>All About Cooking</title>
	<!-- <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet"> -->
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	<div class="background-image"></div>
	<div class="content">
		<nav class="home-nav">
			<h3><a href="/about-us">By Amrita Sengupta</a></h3>
			<h1><a href="/">All About Cooking</a></h1>
		</nav>
		<?php include 'site-nav.php' ?>
		<section class="home-nav-tiles">
			<div class="nav-tile">
				<a href="/all-you-need">
					<img src="/images/allyouneed.jpg" class="nav-tile-image">
					<div class="nav-tile-text">All You Need</div>
				</a>
			</div>
			<div class="nav-tile">
				<a href="/everyday-cooking">
					<img src="/images/everydaycooking.jpg" class="nav-tile-image">
					<div class="nav-tile-text">Everyday Cooking</div>
				</a>
			</div>
			<div class="nav-tile">
				<a href="/weekend-mania">
					<img src="/images/weekendmania.jpg" class="nav-tile-image">
					<div class="nav-tile-text">Weekend Mania</div>
				</a>
			</div>
			<div class="nav-tile">
				<a href="/step-by-step">
					<img src="/images/stepbystep.jpg" class="nav-tile-image">
					<div class="nav-tile-text">Step by Step</div>
				</a>
			</div>
			<div class="nav-tile">
				<a href="/what-comes-handy">
					<img src="/images/whatcomeshandy.jpg" class="nav-tile-image">
					<div class="nav-tile-text">What comes handy</div>
				</a>
			</div>
			<div class="nav-tile">
				<a href="/lets-Talk">
					<img src="/images/letstalk.jpg" class="nav-tile-image">
					<div class="nav-tile-text">Let's talk</div>
				</a>
			</div>
		</section>
		<?php include 'footer.php' ?>
	</div>
	<script src="/js/script.js"></script>
</body>

</html>
