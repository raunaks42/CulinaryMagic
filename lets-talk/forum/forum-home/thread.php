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
    $page_id = 7;
    if (isset($_POST['submit'])) {
        $unum = $_SESSION["id"];
        $dnum = $_GET['id'];
        $reply = $_POST['reply'];
        $sql = "INSERT INTO forum_discussion_replies(dnum, unum, rdate, reply) VALUES($dnum, $unum, 'NOW()', '$reply')";
        if (mysqli_query($conn, $sql)) echo '<script>window.alert("Posted")</script>';
        else echo '<script>window.alert("Error Posting")</script>';
    }
    $sql = "UPDATE forum_discussion_topics SET popularity=popularity+1 WHERE dnum=".$_GET['id'];
    mysqli_query($conn, $sql)
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
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<!-- <div class="background-image"></div> -->
	<div class="content">
		<nav class="home-nav home-nav-h">
			<h1><a href="/">All About Cooking</a></h1>
		</nav>
		<?php include '../../../site-nav.php' ?>
		<div class="logout">
            <a href="..">Back</a>
			<a href="../logout.php">LOGOUT</a>
		</div>
		<section class="container">
			<h1>Available Discussions:</h1>
			<div class="threads">
<?php
	$sql = "SELECT * FROM forum_discussion_topics where dnum = ".$_GET['id'];
	$result = mysqli_query($conn, $sql);
	if ($row = mysqli_fetch_assoc($result)) {
        $s = "SELECT * from forum_users where id like ".$row['unum'];
        $r = mysqli_fetch_assoc(mysqli_query($conn, $s));
        echo "<div class='thread'>";
        echo "<span class='thread-name'>".$row['dsub']."</span><div><div class='thread-date'>Started on- <span>". date('g:i A - d M Y (l)', strtotime($row['ddate']))."</span></div><div class='author'>By- <span>".$r['uemail']."</span></div>Views- ".$row['popularity']."</div>";
        echo "</div>";
        echo "<div class='thread-body'>".$row['ddesc']."</div>";
        $s1 = "SELECT * from forum_discussion_replies where dnum like ".$_GET['id'];
        $q1 = mysqli_query($conn, $s1);
        ?>
        <hr>
        <?php
        echo "<h2>Replies</h2>";
        echo "<div class='replies'>";
        if (mysqli_num_rows($q1)) {
            while ($r1 = mysqli_fetch_assoc($q1)) {
                $s2 = "SELECT * from forum_users where id like ".$r1['unum'];
                $q2 = mysqli_fetch_assoc(mysqli_query($conn, $s2));
                echo "<div class='reply'>".$r1['reply']."<span class='reply-author'>Posted by- ".$q2['uemail']."</span></div>";
                // print_r($r1)
            }
        } else {
            echo "Be the first one to reply!";
        }
        echo "</div>";
	}
	else header("location:/");
?>
			</div>
            <h2>Reply to thread...</h2>
            <form action="" method="POST" class="rform">
				<textarea rows="4" cols="50" name="reply" placeholder="Enter reply..."></textarea>
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