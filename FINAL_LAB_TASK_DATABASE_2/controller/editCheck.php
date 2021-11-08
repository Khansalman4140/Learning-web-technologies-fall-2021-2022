<?php
	session_start();
	require_once('../model/usersModel.php');
    $id = $_GET['id'];
    //echo "$id";

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
							    'id' => $id,
								'username'=> $username, 
								'bprice'=>$bprice, 
								'sprice'=> $sprice, 
								'type'=>'Yes'
							];
							
					$status = editProduct($user);
					}else
					{ 
					$user = [   
						        'id' => $id,
								'username'=> $username, 
								'bprice'=>$bprice, 
								'sprice'=> $sprice, 
								'type'=>'No'
							];
							
					$status = editProduct($user);
				}

					if($status){
						header('location: ../views/productlist.php');
					}else{
						echo "try again...";
					}
					

				}else{
					echo "Invalid Selling Price...";
				}	
			}else{
				echo "Invalid Buying Price...";
			}
		}else{
			echo "Invalid name...";
		}
	}
?>