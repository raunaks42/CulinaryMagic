<?php
	$host="localhost";
	$username="root";
	$password="";
	$db_name="webtech";
	$tbl_name="forum_users";
	mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);

	$sql="SELECT * FROM $tbl_name WHERE uemail='$myusername' and upw='$mypassword'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){
	session_register("myusername");
	session_register("mypassword");
	header("location:login_success.php");
	}
	else {
	echo "Wrong Username or Password";
	}
	?>