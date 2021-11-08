<?php 

	session_start();
	require_once('header.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Profile</title>
</head>

<body>

	<center>
		
	<table width="100%" >
		<tr align="right">
			<td align="left"><a href="dashboard.php">Back</a> </td>
			<td width="90px"><a href="../index.html">Home</a> </td>
			<td width="90px"> <a href="../controller/logout.php">Logout</a></td>

		</tr>
	</table> <br><br><br><br><br><br>
	

	<h1>Welcome <?= $_COOKIE['loggedInName'] ?></h1><br>
	<img src="../assets/upload/<?= $_SESSION['profile'] ?>" width="100px" height="100px"><br>

	<table border="1" align="center" width="1200px">
		<tr height="120px" >
			<th>SL</th>
			<th>NAME</th>
			<th>USER NAME</th>
			<th>EMAIL</th>
			<th>PHONE NUMBER</th>
			<th>PASSWORD</th>
			<th>ACTION</th>
		</tr>
		<?php

		$myfile = fopen('../model/user.txt', 'r');
		$counter = 0;

		while (!feof($myfile)) {
			$data = fgets($myfile);
			if($data!=""){
				$user = explode('|', $data);
				if($_COOKIE['loggedInName'] == trim($user[1])){

	
				echo '<tr height="90px" align="center">
					<td>' . ++$counter . '</td>
					<td>' . $user[0] . '</td>
					<td>' . $user[1] . '</td>
					<td>' . $user[2] . '</td>
					<td>' . $user[3] . '</td>
					<td>' . $user[4] . '</td>
					<td>
						<a href="editProfile.php?id='.$counter.'"> <button>EDIT</button></a> <br>
						
					</td>
				</tr>';
			}
			}
		}
		fclose($myfile);
		?>
	</table>

</center>

</body>

</html>


