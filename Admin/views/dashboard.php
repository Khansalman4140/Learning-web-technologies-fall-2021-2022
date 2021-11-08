<?php 

	session_start();
	require_once('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
</head>
<body>
	<center>
	<table width="100%">
		<tr>
			<td width="90px"><img src="../assets/l.jpg" alt="logo" width="100px" height="100px"></td>
			<td align="center" width="1500px"><h1>Admin</h1><h2>DashBoard</h2></td>
			<td width="150px"><a href="../index.html">Home</a></td>
			<td width="150px"><a href="profile.php">Profile</a></td>
			<td width="150px"><a href="../controller/logout.php">Logout </a></td>
		</tr>
	</table>

	<br> <br> <br> <br> <br>
		<?php
		$myfile = fopen('../model/pbooking.txt', 'r');
		$counter = 0;
		$amount = 0;

		while (!feof($myfile)) {
			$data = fgets($myfile);
			if($data!=""){
				$user = explode('|', $data);
				++$counter;
				$amount += $user[6];
			}
		}
		echo '<table border= "1" align="left">
				<tr height="60px" align="center">
				<td> Total Package Bookings</td>
				<td>' . $counter . '</td>
			    </tr>
			    <tr height="60px" align="center">
				<td> Total Package Amount</td>
				<td>' . $amount . ' BDT</td>
			    </tr>
			
		</table>';
		fclose($myfile);
		?>

		<?php
		$myfile = fopen('../model/tbooking.txt', 'r');
		$counter = 0;
		$amount = 0;

		while (!feof($myfile)) {
			$data = fgets($myfile);
			if($data!=""){
				$user = explode('|', $data);
				++$counter;
				$amount += $user[6];
			}
		}
		echo '<table border= "1" align="left">
				<tr height="60px" align="center">
				<td> Total Transport Bookings</td>
				<td>' . $counter . '</td>
			    </tr>
			    <tr height="60px" align="center">
				<td> Total Transport Amount</td>
				<td>' . $amount . ' BDT</td>
			    </tr>
			
		</table>';
		fclose($myfile);
		?>

		<?php
		$myfile = fopen('../model/sbuy.txt', 'r');
		$counter = 0;
		$amount = 0;

		while (!feof($myfile)) {
			$data = fgets($myfile);
			if($data!=""){
				$user = explode('|', $data);
				++$counter;
				$amount += $user[4];
			}
		}
		echo '<table border= "1" align="left">
				<tr height="60px" align="center">
				<td> Total Shop Orders</td>
				<td>' . $counter . '</td>
			    </tr>
			    <tr height="60px" align="center">
				<td> Total Shop Amount</td>
				<td>' . $amount . ' BDT</td>
			    </tr>
			
		</table>';
		fclose($myfile);
		?>
		
	
	<table align="right">
		<tr height="60px" align="center">
			<td> <a href="userlist.php"> View UserList </a></td>
		</tr>
		<tr height="60px" align="center">
			<td > <a href="pBookinglist.php"> View Package Bookings </a></td>
		</tr>
		<tr height="60px" align="center">
			<td > <a href="pReviewlist.php"> View Package Reviews </a></td>
		</tr>
		<tr height="60px" align="center">
			<td > <a href="tBookinglist.php"> View Transport Bookings </a></td>
		</tr>
		<tr height="60px" align="center">
			<td > <a href="tReviewlist.php"> View Transport Reviews </a></td>
		</tr>
		<tr height="60px" align="center">
			<td > <a href="sBuylist.php"> View Shop Orders </a></td>
		</tr>
		<tr height="60px" align="center">
			<td > <a href="sReviewlist.php"> View Shop Reviews </a></td>
		</tr>

		
	</table>
	
	</center>


</body>
</html>