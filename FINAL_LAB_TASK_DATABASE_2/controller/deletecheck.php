<?php
    session_start();
	require_once('../model/usersModel.php');

	$id = $_GET['id'];
	//echo "$id";

	$status = deleteProduct($id);

	if($status){
		header('location: ../views/productlist.php');
	}else{
		echo "invalid ";
	}

?>