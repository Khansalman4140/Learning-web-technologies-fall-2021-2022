<?php

//print_r($_GET);

if (isset($_REQUEST['submit'])) {
	$DOB = $_REQUEST['DOB'];
	if ($DOB == "") {
		echo "null value...";
	} else {
		echo $DOB;
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Task DOB</title>
</head>

<body>
	<form method="get" action="#">
		<fieldset>
			<legend>DATE OF BIRTH</legend>
			<input type="date" name="DOB" value="">
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>

</html>