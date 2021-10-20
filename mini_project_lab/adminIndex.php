<?php
	session_start();

	if(!isset($_COOKIE['user'])){  
		header("location: Login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Home Page</title>
</head>
<body>
	<center>
	<h1>Welcome <?=  $_COOKIE['userName'] ?></h1>
	<a href="profile.php"> Profile </a> <br>
	<a href="changepw.php"> Change Password</a> <br>
	<a href="userlist.php"> View Users </a> <br>
	<a href="logout.php"> logout </a>
	</center>
</body>
</html>

