<?php 

	session_start();
	require_once('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User List</title>
</head>

<body>

	<center>
		
	<table width="100%">
		<tr align="right">
			<td align="left"><a href="dashboard.php">Back</a> </td>
			<td><a href="../index.html">Home</a> &nbsp;&nbsp;&nbsp; <a href="../controller/logout.php">Logout</a></td>

		</tr>
	</table> <br><br><br><br><br><br>
	

	

	<table border="1" align="center" width="1200px">
		<tr height="120px" >
			<th>ID</th>
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
	
				echo '<tr height="90px">
					<td>' . ++$counter . '</td>
					<td>' . $user[0] . '</td>
					<td>' . $user[1] . '</td>
					<td>' . $user[2] . '</td>
					<td>' . $user[3] . '</td>
					<td>' . $user[4] . '</td>
					<td>
						<a href="editUser.php?id='.$counter.'"> <button>EDIT</button></a> <br>
						<a href="../controller/dltUser.php?id='.$counter.'"> <button>DELETE</button></a>
					</td>
				</tr>';
			}
		}
		fclose($myfile);
		?>
	</table>
</center>


</body>

</html>