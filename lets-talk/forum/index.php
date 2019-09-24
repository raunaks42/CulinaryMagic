<?php
	session_start();
	$page_id = 7;
	if (isset($_SESSION["myemail"])) {
		header("location:forum-home");
	}
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
	<div class="background-image"></div>
	<div class="content">
		<nav class="home-nav home-nav-h">
			<h1><a href="/">All About Cooking</a></h1>
		</nav>
		<?php include '../../site-nav.php' ?>
		<section class="container">
			<div class="login-wrapper">
				<h2>Login</h2>
				<form action="" class="form" method="POST">
					<input type="text" name="email" placeholder="Email">
					<input type="password" name="password" placeholder="Password">
					<input type="submit" value="Dive In">
				</form>
				<?php
					$host = "localhost";
					$username = "root";
					$password = "";
					$db_name = "webtech";
					$tbl_name = "forum_users";
					$conn = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
					mysqli_select_db($conn, "$db_name") or die("cannot select DB");
					if (isset($_POST['email'])) {
						$myemail = $_POST['email'];
						$mypassword = $_POST['password'];
						$myemail = stripslashes($myemail);
						$mypassword = stripslashes($mypassword);
						$myemail = mysqli_real_escape_string($conn, $myemail);
						$mypassword = mysqli_real_escape_string($conn, $mypassword);
						$sql = "SELECT * FROM $tbl_name WHERE uemail = '$myemail' and upw = '$mypassword'";
						$q = mysqli_query($conn, $sql);
						if ($row = mysqli_fetch_assoc($q)) {
							$_SESSION["myemail"] = $myemail;
							$_SESSION["id"] = $row['id'];
							header("location:forum-home/");
						}
						else {
							echo "<div class='wrong-pw'>Wrong Username or Password</div>";
						}
					}
					mysqli_close($conn);
					?>
				<h4>Not a member? <a href="signup">Register</a></h4>
				<h6>*By logging in, you accept that you have read and agree to our Terms &amp; Conditions and Privacy Policy</h6>
			</div>
		</section>
		<?php include '../../footer.php' ?>
	</div>
	<script src="/js/script.js"></script>
</body>

</html>