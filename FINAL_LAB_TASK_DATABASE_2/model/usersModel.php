<?php 
	require_once('db.php');


	/*function validate($username, $password){
		$con = getConnection();
		$sql= "select * from products where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user){
			return true;
		}else{
			return false;
		}
	}*/

	function addProduct($user){
		$con = getConnection();
		$sql= "insert into products values('','{$user['username']}', '{$user['sprice']}', '{$user['bprice']}', '{$user['type']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllproducts(){
		$con = getConnection();
		$sql= "select * from products where displayable='Yes'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getProductByID($id){
		$con = getConnection();
		$sql= "select * from products where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editProduct($user){
		$con = getConnection();
		$sql= "update products set name='{$user['username']}', bprice='{$user['bprice']}', sprice='{$user['sprice']}', displayable='{$user['type']}' where id={$user['id']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteProduct($id){
		$con = getConnection();
		$sql= "delete from products where id={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getProductByName($name){
		$con = getConnection();
		$sql= "select * from products where name like '%$name%' and displayable='Yes'";
		$result = mysqli_query($con, $sql);
		//$user = mysqli_fetch_assoc($result);
		return $result;
	}

	/*function deleteUser($id){
		$con = getConnection();
		$sql= "delete from products where id={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}*/

?>