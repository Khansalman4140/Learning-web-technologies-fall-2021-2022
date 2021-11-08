<html>
<head>
	<title>Search</title>
</head>
<body>
	<center>	
		<a href="../index.html">Back </a> |
		
	</center>

	<form method="post">
		<fieldset>
			<legend>SEARCH</legend>
			<table align="center">
				<tr>
					<td><input type="text" name="search" value=""></td>
					<td><input type="submit" name="submit" value="SEARCH">
				</tr>
			</table>
			<hr>

			<?php
			   require_once('../model/usersModel.php');
			   if(isset($_POST['submit'])){
			   	$name = $_POST['search'];

			   	$result = getProductByName($name);
	
			   while ($user = mysqli_fetch_assoc($result)) { 
						$profit = $user['sprice'] - $user['bprice'];
				?>

			   	<table border="1" align="center">
					<tr>
						<th>NAME</th>
						<th>Profit</th>
						<th>ACTION</th>
					</tr>
					<tr>
						<td><?= $user['name'] ?></td>
						<td><?= $profit ?></td>
						<td><a href="edit.php?id=<?= $user['id'] ?>"> EDIT</a> | 
							<a href="delete.php?id=<?= $user['id'] ?>"> DELETE</a> </td>
					</tr>
				</table>

			<?php }
			}
			else{ ?>
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

			<?php 
			}
			?>

			



		</fieldset>
	</form>
</body>
</html>






