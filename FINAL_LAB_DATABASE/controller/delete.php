<?php
    session_start();
	require_once('../model/usersModel.php');

	$id = $_GET['id'];
	//echo "$id";

	$status = deleteUser($id);

	if($status){
		header('location: ../views/userlist.php');
	}else{
		echo "invalid ";
	}

?>