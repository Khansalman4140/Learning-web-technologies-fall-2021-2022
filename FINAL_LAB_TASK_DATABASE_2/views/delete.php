<?php
    session_start();
	require_once('../model/usersModel.php');

	//$id = $_GET['id'];
	$id = $_REQUEST['id'];
	$user = getProductById($id);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delete Product</title>
</head>
<body>

	<center>	
		<a href="productlist.php">Back </a> |
	</center>

	<br>

	
	<form method="post" action="../controller/deleteCheck.php?id=<?= $user['id'] ?>">
		<fieldset>
			<legend>DELETE Product</legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><?= $user['name'] ?></td>
				</tr>
				<tr>
					<td>Buying Price:</td>
					<td><?= $user['bprice'] ?></td>
				</tr>
				<tr>
					<td>Selling Price:</td>
					<td><?= $user['sprice'] ?></td>
				</tr>
				<tr>
					<td>Displayable:</td>
					<td><?= $user['displayable'] ?> <br></td>
				</tr>
				<tr align="left">
					<td><hr><input type="submit" name="submit" value="DELETE"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	
</body>
</html>