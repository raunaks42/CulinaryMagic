<?php
    session_start();
    if (!isset($_SESSION["myemail"])) {
        header("location:../");
    }
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "webtech";
    $tbl_name = "forum_users";
    $conn = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
    mysqli_select_db($conn, "$db_name") or die("cannot select DB");
    if (isset($_POST['submit'])) {
        $unum = $_SESSION["id"];
        $dsub = mysqli_real_escape_string($conn,$_POST['dsub']);
        $ddesc = mysqli_real_escape_string($conn,$_POST['ddesc']);
        $sql = "INSERT INTO forum_discussion_topics(unum, dsub, ddate, popularity, ddesc) VALUES('$unum', '$dsub', NOW(), 0, '$ddesc')";
        if (mysqli_query($conn, $sql)) echo '<script>window.alert("Posted")</script>';
        else echo '<script>window.alert("Error Posting")</script>';
    }
    $page_id = 7;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Forum - All About Cooking</title>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!-- <div class="background-image"></div> -->
	<div class="content">
		<nav class="home-nav home-nav-h">
			<h1><a href="/">All About Cooking</a></h1>
		</nav>
		<?php include '../../../site-nav.php' ?>
		<div class="logout">
			<a href="../logout.php">LOGOUT</a>
		</div>
		<section class="container">
			<h1>Available Discussions:</h1>
			<h3>Sort By:</h3>
			<div class="sorts">
				<a href="?sortby=popularity">Popularity</a>
				<a href="?sortby=date">Date Posted</a>
			</div>
			<div class="threads">
<?php
	$sort = 'ddate';
	if (isset($_GET['sortby'])) $sort = $_GET['sortby'];
	if ($sort == 'date') $sort = 'ddate';
	$sql = "SELECT * FROM forum_discussion_topics ORDER BY $sort DESC";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$s = "SELECT * from forum_users where id like ".$row['unum'];
			$r = mysqli_fetch_assoc(mysqli_query($conn, $s));
			echo "<a href='thread.php?id=".$row['dnum']."' class='thread-link'>"."<div class='thread'>";
			echo "<span class='thread-name'>".$row['dsub']."</span><div><div class='thread-date'>Started on- <span>". date('g:i A - d M Y (l)', strtotime($row['ddate']))."</span></div><div class='author'>By- <span>".$r['uemail']."</span></div></div></div>";
			echo "</a></div>";
		}
		echo "</div>";
	}
	else echo "No threads yet...";
?>
			</div>
			<h2>Start a new discussion...</h2>
			<form action="" method="POST" id="fform">
				<input type="text" name="dsub" placeholder="Subject" required="required">
				<textarea rows="4" cols="50" name="ddesc" placeholder="Enter description..."></textarea>
				<input type="submit" value="Submit" name="submit">
			</form>
		</section>
		<?php include '../../../footer.php' ?>
	</div>
	<script src="/js/script.js"></script>
</body>

</html>
<?php
	mysqli_close($conn);