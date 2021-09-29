<?php 

	//print_r($_GET);
	
	if(isset($_GET['submit']))
	{
		$name = $_GET['myname'];
		if($name == ""){
			echo "null value...";
		}else{
			echo $name;
		}	
	}else{
		echo "invalid request...";
	}
	
?>