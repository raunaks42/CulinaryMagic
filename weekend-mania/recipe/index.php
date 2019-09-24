<?php $page_id = 4; ?>
<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db_name = "webtech";
	$tbl_name = "forum_users";
	$conn = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
	mysqli_select_db($conn, "$db_name") or die("cannot select DB");
	$s = "SELECT * from recipes where rnum = ".$_GET['id'];
	if ($row = mysqli_fetch_assoc(mysqli_query($conn, $s))) {

?>
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
		<?php include '../../site-nav.php' ?>
		<div class="recipe">
			<div class="recipe-hero">
				<img src="/images/<?php echo $row['image'] ?>.jpg" alt="Sambhar" class="recipe-image">
				<div class="recipe-hero-text">
					<div class="recipe-name">
						<h2><?php echo $row['rname'] ?></h2>
					</div>
					<div class="recipe-servings">Serves 4</div>
					<div class="recipe-time"><i class="fa fa-clock-o"></i> 15 mins</div>
					<div class="recipe-tags">
						<div class="recipe-tag">Weekend Mania</div>
						<div class="recipe-tag">Main Course</div>
					</div>
				</div>
			</div>
			<div class="recipe-text">
				<div class="what-you-need">
					<h2 class="what-you-need-h">What?</h2>
					<div class="appliances">
						<h4>Appliances</h4>
						<?php echo $row['appliances']; ?>						
					</div>
					<div class="ingredients">
						<h4>Ingredients</h4>
						<?php echo $row['ingredients']; ?>
					</div>
				</div>
				<div class="procedures">
					<?php
						echo $row['recipe'];
					} else {
						header("location:/");
					}
					?>
				</div>
			</div>
		</div>
		<?php include '../../footer.php' ?>
	</div>
	<script src="/js/script.js"></script>
</body>

</html>
<?php
mysqli_close($conn);