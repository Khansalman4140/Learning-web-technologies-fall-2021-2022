<?php
$id = $_GET['id'];
if (copy('user.txt', 'PrevUser.txt') != 1) {
	echo 'Error !!!';
	return;
}
$myPrevfile = fopen('PrevUser.txt', 'r');
$myfile = fopen('user.txt', 'w');
$counter = 0;

while (!feof($myPrevfile)) {
	$data = fgets($myPrevfile);
	if ($data != "") {
		if (++$counter != $id) {
			fwrite($myfile, $data);
		}
	}
}

header('location: userlist.php');

fclose($myfile);
fclose($myBacfile);
$myBacfile = fopen('PrevUser.txt', 'w');
fwrite($myBacfile, "");
fclose($myBacfile);
?>