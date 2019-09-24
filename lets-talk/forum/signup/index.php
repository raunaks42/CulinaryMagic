<?php $page_id = 7 ?>



<?php
    if (isset($_POST['submit'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
		$dbname = "webtech";
		$conn = mysqli_connect($servername, $username, $password, $dbname) or die("can't connect");
		$sql = "SELECT * FROM forum_users WHERE uemail = '".$_POST['email']."'";
		$q = mysqli_query($conn,$sql);
		$result = mysqli_fetch_assoc($q);
		if ($result) {
            echo "<script>window.alert('Email already registered')</script></p>";
        }
        else {
			$sql = "INSERT INTO forum_users(uemail,upw) VALUES('".($_POST['email'])."', '".($_POST['pass'])."')";
			if (mysqli_query($conn,$sql)) {
				header("location:../");
			}
			else {
				echo "failed: ".mysqli_error($conn);
			}
		}
    }

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Forum - All About Cooking</title>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="main.js"></script>
</head>

<body>
	<div class="background-image"></div>
	<div class="content">
		<nav class="home-nav home-nav-h">
			<h1><a href="/">All About Cooking</a></h1>
		</nav>
		<?php include '../../../site-nav.php' ?>
		<section class="container">
			<div class="login-wrapper">
				<h2>Register</h2>
				<form action="" class="form" method="POST">
					<input type="text" id="email" name="email" placeholder="Email" required>
					<input type="password" id="pass" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
					 placeholder="Password" required>
					<input type="password" name="cpass" id="cpass" onkeyup='check();' placeholder="Confirm Password">
					<input type="submit" value="Join Us" name="submit">
				</form>
				<div class="showpass"><span id='message_confirm'></span></div>
				<div class="showpass"><input type="checkbox" onclick="myFunction()"> Show Password </div>
				<div id="message">
					<h3>Password must contain the following:</h3>
					<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
					<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
					<p id="number" class="invalid">A <b>number</b></p>
					<p id="length" class="invalid">Minimum <b>8 characters</b></p>
				</div>
				<h4>Already a member? <a href="../">Log In</a></h4>
				<h6>*By registering, you accept that you have read and agree to our Terms &amp; Conditions and Privacy Policy</h6>
			</div>
		</section>
		<?php include '../../../footer.php' ?>
	</div>
	<script src="/js/script.js"></script>
	<script>
		var myInput = document.getElementById("pass");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");
		function myFunction() {
			if (myInput.type === "password") {
				myInput.type = "text";
			} else {
				myInput.type = "password";
			}
		}
		var check = function () {
			if (document.getElementById('pass').value == document.getElementById('cpass').value) {
				document.getElementById('message_confirm').style.color = 'green';
				document.getElementById('message_confirm').innerHTML = 'matching';
			} else {
				document.getElementById('message_confirm').style.color = 'red';
				document.getElementById('message_confirm').innerHTML = 'not matching';
			}
		}
		myInput.onfocus = function () {
			document.getElementById("message").style.display = "block";
		}
		myInput.onblur = function () {
			document.getElementById("message").style.display = "none";
		}
		myInput.onkeyup = function () {
			var lowerCaseLetters = /[a-z]/g;
			if (myInput.value.match(lowerCaseLetters)) {
				letter.classList.remove("invalid");
				letter.classList.add("valid");
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
			}
			var upperCaseLetters = /[A-Z]/g;
			if (myInput.value.match(upperCaseLetters)) {
				capital.classList.remove("invalid");
				capital.classList.add("valid");
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
			}
			var numbers = /[0-9]/g;
			if (myInput.value.match(numbers)) {
				number.classList.remove("invalid");
				number.classList.add("valid");
			} else {
				number.classList.remove("valid");
				number.classList.add("invalid");
			}
			if (myInput.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
			}
		}
	</script>
</body>

</html>