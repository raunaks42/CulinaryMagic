<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "webtech";
    $tbl_name = "forum_users";
    $conn = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
    mysqli_select_db($conn, "$db_name") or die("cannot select DB");
    $page_id = 7;
    $sql = "UPDATE blog_articles SET popularity=popularity+1 WHERE artnum=".$_GET['id'];
	mysqli_query($conn, $sql);
	$sql1 = "SELECT * FROM blog_articles where artnum = ".$_GET['id'];
	$result = mysqli_query($conn, $sql1);
	if ($row = mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $row['artname']; ?> - Blog Post - All About Cooking</title>
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
			<a href="../blog">BACK</a>
		</div>
		<section class="container">
<?php
        echo "<div class='post'>";
        echo "<h2 class='post-name'>";
        echo $row['artname'];
        echo "</h2><div class='post-date'><span>". date('g:i A - d M Y (l)', strtotime($row['artdate']))."</span></div>Views- ".$row['popularity']."";
        echo "</div>";
        echo "<div class='post-body'>";
        echo $row['content'];
        echo "</div>";
	}
	// else header("location:/");
?>
		</section>
		<?php include '../../footer.php' ?>
	</div>
	<script src="/js/script.js"></script>
</body>

</html>
<?php
	mysqli_close($conn);