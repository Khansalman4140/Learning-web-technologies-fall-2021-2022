<?php 

	//print_r($_GET);
	
	if(isset($_REQUEST['submit']))
	{
		$DOB = $_REQUEST['DOB'];
		if($DOB == ""){
			echo "null value...";
		}else{
			echo $DOB;
		}	
	}
	
?>