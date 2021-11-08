<?php 

	require_once('../model/usersModel.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product List</title>
</head>
<body>

	<center>	
		<a href="../index.html">Back </a> |
	</center>

	<br>

	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>Profit</th>
			<th>ACTION</th>
		</tr>

	<?php  
		$result = getAllproducts();
		while ($user = mysqli_fetch_assoc($result)) { 
			$profit = $user['sprice'] - $user['bprice'];
	?>
		<tr>
			<td><?= $user['id'] ?></td>
			<td><?= $user['name'] ?></td>
			<td><?= $profit ?></td>
			<td>
				<a href="edit.php?id=<?= $user['id'] ?>"> EDIT</a> | 
				<a href="delete.php?id=<?= $user['id'] ?>"> DELETE</a> 
			</td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>