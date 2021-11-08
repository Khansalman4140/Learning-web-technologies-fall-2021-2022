
<html>
<head>
	<title>ADD Product</title>
</head>
<body>
	<center>	
		<a href="../index.html">Back </a> |
		
	</center>

	<form method="post" action="addcheck.php">
		<fieldset>
			<legend>ADD PRODUCT</legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Buying Price:</td>
					<td><input type="text" name="bprice" value=""></td>
				</tr>
				<tr>
					<td>Selling Price:</td>
					<td><input type="text" name="sprice" value=""> <br><hr></td>
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