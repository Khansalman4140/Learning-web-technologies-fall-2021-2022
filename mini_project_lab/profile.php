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
	<title>Profile</title>
</head>

<body>


	<table border="1" align="center">
		<tr>
			<td colspan="3" align="center">Profile</td>
		</tr>
		<tr>
		<td><?=  $_COOKIE['userId'] ?></td>
		<td><?=  $_COOKIE['userName'] ?></td>
		<td><?=  $_COOKIE['userType'] ?></td>
	    </tr>
	    <tr>
	    	<td colspan="3" align="right">

	    		<a href="userIndex.php">Go home </a>


	    	</td>
	    </tr>
		

		
	</table>
</body>

</html>