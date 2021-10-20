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

					if(trim($user[3]) == "User" && trim($user[0]) == $userid && trim($user[1]) == $password){
						setcookie('user', 'true', time()+3600, '/');
						setcookie('userId',$userid,time()+3600,'/');
                        setcookie('userName',$user[2],time()+3600,'/');
                        setcookie('userType',$user[3],time()+3600,'/');

						header('location: userIndex.php');
					}
				elseif (trim($user[3]) == "Admin" && trim($user[0]) == $userid && trim($user[1]) == $password) {
					setcookie('user', 'true', time()+3600, '/');
					    setcookie('userId',$userid,time()+3600,'/');
                        setcookie('userName',$user[2],time()+3600,'/');
                        setcookie('userType',$user[3],time()+3600,'/');


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