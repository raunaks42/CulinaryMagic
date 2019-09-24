<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "webtech";
    $tbl_name = "forum_users";
    $conn = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
    mysqli_select_db($conn, "$db_name") or die("cannot select DB");
    $page_id = 7;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Blog - All About Cooking</title>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="background-image"></div>
	<div class="content">
		<nav class="home-nav home-nav-h">
			<h1><a href="/">All About Cooking</a></h1>
		</nav>
		<?php include '../../site-nav.php' ?>
		<div class="logout">
			<a href="../">BACK</a>
		</div>
		<section class="container">
			<h1 class="bbg">Blogpost:</h1>
			<h3 class="bbg">Sort By:</h3>
			<div class="sorts">
				<a href="?sortby=popularity">Popularity</a>
				<a href="?sortby=date">Date Posted</a>
			</div>
			<div class="posts">
<?php
	$sort = 'artdate';
	if (isset($_GET['sortby'])) $sort = $_GET['sortby'];
	if ($sort == 'date') $sort = 'artdate';
	$sql = "SELECT * FROM blog_articles ORDER BY $sort DESC";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<a href='post.php?id=".$row['artnum']."' class='post-link'>"."<div class='post'>";
			echo "<span class='post-name'>".$row['artname']."</span><div><div class='post-date'>Posted on- <span>". date('g:i A - d M Y (l)', strtotime($row['artdate']))."</span></div>Views- ".$row['popularity']."</div>";
			echo "</a></div>";
		}
		echo "</div>";
	}
	else echo "No posts yet...";
?>
			</div>
		</section>
		<?php include '../../footer.php' ?>
	</div>
	<script src="/js/script.js"></script>
</body>

</html>
<?php
	mysqli_close($conn);