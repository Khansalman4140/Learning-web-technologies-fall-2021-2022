<?php 

	session_start();
	require_once('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Package Review List</title>
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
			<th>SL</th>
			<th>Full Name</th>
			<th>Review</th>

		</tr>
		<?php
		$myfile = fopen('../model/preview.txt', 'r');
		$counter = 0;

		while (!feof($myfile)) {
			$data = fgets($myfile);
			if($data!=""){
				$user = explode('|', $data);
	
				echo '<tr height="90px" align="center">
					<td>' . ++$counter . '</td>
					<td>' . $user[0] . '</td>
					<td>' . $user[1] . '</td>';
			}
		}
		fclose($myfile);
		?>
	</table>
</center>


</body>

</html>