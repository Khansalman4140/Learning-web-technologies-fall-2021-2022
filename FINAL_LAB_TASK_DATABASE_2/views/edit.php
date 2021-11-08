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
	<title>Edit Product</title>
</head>
<body>

	<center>	
		<a href="../index.html">Back </a> |
	</center>

	<br>

	
	<form method="post" action="../controller/editCheck.php?id=<?= $user['id'] ?>">
		<fieldset>
			<legend>Edit Product</legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="username" value="<?= $user['name'] ?>"></td>
				</tr>
				<tr>
					<td>Buying Price:</td>
					<td><input type="text" name="bprice" value="<?= $user['bprice'] ?>"></td>
				</tr>
				<tr>
					<td>Selling Price:</td>
					<td><input type="text" name="sprice" value="<?= $user['sprice'] ?>"> <br><hr></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="type" value="display"> Display <br><hr></td>
				</tr>
				<tr align="left">
					<td><input type="submit" name="submit" value="SAVE"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	
</body>
</html>