<?php
    session_start();
	require_once('../model/usersModel.php');

	$id = $_GET['id'];
	//echo "$id";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
</head>
<body>

	<center>	
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php"> logout</a>
	</center>

	<br>

	<?php  
		$result = getUserByID($id);
		while ($user = mysqli_fetch_assoc($result)) { 
	?>

	<form method="post" action="../controller/editCheck.php?id=<?= $user['id'] ?>">
		<fieldset>
			<legend>Signup</legend>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value="<?= $user['username'] ?>"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value="<?= $user['password'] ?>"></td>
				</tr>
				<tr>
					<td>email:</td>
					<td><input type="email" name="email" value="<?= $user['email'] ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
    <?php } ?>
	
</body>
</html>