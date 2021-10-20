<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>User List</title>
</head>

<body>
	<table border="1" align="center">
		<tr>
			<td colspan="3" align="center">Users</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>USER TYPE</th>
		</tr>
		<?php
		$myfile = fopen('user.txt', 'r');
		$counter = 0;

		while (!feof($myfile)) {
			$data = fgets($myfile);
			if($data!=""){
				$user = explode('|', $data);
	
				echo '<tr>
					<td>' . $user[0] . '</td>
					<td>' . $user[2] . '</td>
					<td>' . $user[3] . '</td>
				    </tr>';			
			}
		}
		fclose($myfile);
		?>
		<td colspan="3" align="right">
						<a href="adminIndex.php"> Go Home </a> 
					</td>
				</tr>
	</table>
</body>

</html>