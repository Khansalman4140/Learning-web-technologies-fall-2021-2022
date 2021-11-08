<?php
	session_start();
	require_once('../model/usersModel.php');
    $id = $_GET['id'];
    //echo "$id";

	if(isset($_POST['submit'])){
		

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){

					

					$user = [
						        'id' => $id,
								'username'=> $username, 
								'password'=>$password, 
								'email'=> $email, 
								'type'=>'user'
							];
							
					$status = editUser($user);

					if($status){
						header('location: ../views/userlist.php');
					}else{
						echo "try again...";
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