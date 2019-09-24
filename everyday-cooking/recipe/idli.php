<?php $page_id = 3 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Everyday Cooking - All About Cooking</title>
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
		<?php include '../../site-nav.php' ?>
		<div class="recipe">
			<div class="recipe-hero">
				<img src="/images/idli.jpeg" alt="Idli" class="recipe-image">
				<div class="recipe-hero-text">
					<div class="recipe-name">
						<h2>Idli</h2>
					</div>
					<div class="recipe-servings">Serves 4</div>
					<div class="recipe-time"><i class="fa fa-clock-o"></i> 15 mins</div>
					<div class="recipe-tags">
						<div class="recipe-tag">Breakfast &amp; All Day</div>
						<div class="recipe-tag">Main Course</div>
					</div>
				</div>
			</div>
			<div class="recipe-text">
				<div class="what-you-need">
					<h2 class="what-you-need-h">What?</h2>
					<div class="appliances">
						<h4>Appliances</h4>
						<div class="appliance">• Idli Steamer/ Idli stands to be used inside a pressure cooker</div>
					</div>
				</div>
				<div class="in-a-jiffy">
					<div class="in-a-jiffy-h">In a jiffy!</div>
					<hr class="white">
					<div class="in-a-jiffy-text">Use the readymade over the counter idli/dosa batter available in the market.</div>
				</div>
				<div class="procedures">
					<h2 class="procedures-h">How?</h2>
					<h3 class="procedure procedure-h">Pre-Cook</h3>
					<div class="procedure">When you have 24 hrs pre-cook time: </div>
					<div class="procedure"><span class="list-number">•</span> Soak and grind – 3 parts of rice and 1 part of urad dal with some methi seeds. Methi seeds add that unique aroma to the batter.</div>
					<div class="procedure"><span class="list-number">•</span> Adjust the water and salt in the batter.</div>
					<div class="procedure"><span class="list-number">•</span> Allow it to ferment. The batter should become double of its volume.</div>
					<hr>
					<div class="procedure"><span class="list-number">1.</span> Grease the idli moulds and heat enough water in the steamer or the cooker in which the idli stands will be placed.</div>
					<div class="procedure"><span class="list-number">2.</span> Take ladle full of batter and pour into the moulds</div>
					<div class="procedure"><span class="list-number">3.</span> Steam it for 10 to 15 mins. </div>
				</div>
			</div>
		</div>
		<?php include '../../footer.php' ?>
	</div>
	<script src="/js/script.js"></script>
</body>

</html>