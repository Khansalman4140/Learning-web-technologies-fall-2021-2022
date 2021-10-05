<html>
<head>
	<title>TASK BLOODGROUP</title>
</head>
<body>
	<form>
		<fieldset>
			
		
		Blood Group: 
			<select name="bloodGroup">
				<option value="A+" selected=" ">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-" >B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="0+">0+</option>
				<option value="0-" >0-</option>
			</select>
			<hr>
		
			<input type="submit" name="submit" value="Submit"/>
			<br>
			<?php
            if (isset($_REQUEST['submit'])) {
            $bloodGroup = $_REQUEST['bloodGroup'];
              if($bloodGroup!=""){
            echo $bloodGroup." is selected";
            }
            else{
                echo "Select Atleast One";
                }
            }
            ?>
		</fieldset>
	</form>
</body>
</html>