<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['userid'] != ""){
			if($_POST['password'] != ""){
				if($_POST['username'] != ""){
					if($_POST['userType'] != ""){

					$myfile = fopen('user.txt', 'a');
					$user = $_POST['userid']."|".$_POST['password']."|".$_POST['username']."|".$_POST['userType']."\r\n";

					fwrite($myfile, $user);
					fclose($myfile);

					header('location: login.html');
				}else{
					echo "Invalid User Type...";
				}
				}else{
					echo "Invalid email...";
				}	
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>