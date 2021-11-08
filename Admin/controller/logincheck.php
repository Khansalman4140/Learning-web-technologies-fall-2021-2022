<?php
	session_start();

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != ""){
			if($password != ""){
				$myfile = fopen('../model/user.txt', 'r');

				while (!feof($myfile)) {
					$data = fgets($myfile);
					$user = explode('|', $data);
					
					
				if ( trim($user[1]) == $username && trim($user[4]) == $password) {
			
					    setcookie('isLoggedIn', 'true', time()+3600, '/');
						setcookie('loggedInName',$username,time()+3600,'/');
                        setcookie('loggedInPw',$user[4],time()+3600,'/');

                        


						header('location: ../views/dashboard.php');
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