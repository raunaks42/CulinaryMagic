<?php $page_id = 4 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Weekend Mania - All About Cooking</title>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="background-image"></div>
	<div class="content">
		<nav class="home-nav home-nav-h">
			<h1><a href="/">All About Cooking</a></h1>
		</nav>
		<?php include '../site-nav.php' ?>
		<div class="filters">
			<div class="meal-filter">
				<h3 class="meals-h">Select Your Meal of the Day</h3>
				<div class="meals">
					<div class="meal filter"><a href="?meal=breakfastallday">Breakfast &amp; All-Day</a></div>
					<div class="meal filter"><a href="?meal=lunchdinner">Lunch &amp; Dinner</a></div>
					<div class="meal filter"><a href="?meal=dessert">Dessert</a></div>
				</div>
			</div>
			<div class="sort-filter">
				<h3 class="sorts-h">Sort By</h3>
				<div class="sorts">
					<div class="sort filter"><a href="?sort=popularity">Popularity</a></div>
					<div class="sort filter"><a href="?sort=date">Date</a></div>
				</div>
			</div>
		</div>
		<div class="recipes">
			<a href="recipe?id=8">
				<div class="recipe">
					<img src="/images/saagwaalachicken.jpg" alt="Saag waala Chicken" class="recipe-image">
					<div class="recipe-text">
						<div class="recipe-name">Saag Waala Chicken</div>
						<div class="recipe-time"><i class="fa fa-clock-o"></i> 12 mins</div>
					</div>
				</div>
			</a>
			<a href="recipe?id=9">
				<div class="recipe">
					<img src="/images/butterchicken.jpg" alt="Butter Chicken" class="recipe-image">
					<div class="recipe-text">
						<div class="recipe-name">Butter Chicken</div>
						<div class="recipe-time"><i class="fa fa-clock-o"></i> 25 mins</div>
					</div>
				</div>
			</a>
		</div>
		<?php include '../footer.php' ?>
	</div>
	<script src="/js/script.js"></script>
</body>

</html>
