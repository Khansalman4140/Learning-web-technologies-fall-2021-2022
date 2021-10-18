<?php
	session_start();

	if(isset($_POST['submit'])){
		$userid = $_POST['userid'];
		$password = $_POST['password'];

		if($userid != ""){
			if($password != ""){
				$myfile = fopen('user.txt', 'r');

				while (!feof($myfile)) {
					$data = fgets($myfile);
					$user = explode('|', $data);
					if (trim($user[3]) == "User") {
					if(trim($user[0]) == $userid && trim($user[1]) == $password){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: userIndex.php');
					}
				}elseif (trim($user[0]) == $userid && trim($user[1]) == $password) {
					setcookie('flag', 'true', time()+3600, '/');
						header('location: adminIndex.php');
				}
			}

				echo "invalid username/password";

			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>