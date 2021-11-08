<?php
	session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$bprice 	= $_POST['bprice'];
		$sprice 	= $_POST['sprice'];
		$type       = $_POST['type'];



		if($_POST['username'] != ""){
			if($_POST['bprice'] != ""){
				if($_POST['sprice'] != ""){
					if ($type == "display"){
						$user = [
								'username'=> $username, 
								'bprice'=>$bprice, 
								'sprice'=> $sprice, 
								'type'=>'Yes'
							];
							
					$status = addProduct($user);
					}else
					{ 
					$user = [
								'username'=> $username, 
								'bprice'=>$bprice, 
								'sprice'=> $sprice, 
								'type'=>'No'
							];
							
					$status = addProduct($user);
				}

					if($status){
						header('location: add.php');
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