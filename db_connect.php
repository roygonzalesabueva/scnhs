<?php
	$conn=mysqli_connect("localhost", "davsur_account", "@DavsurAdmin2023", "fms_db");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>



<?php 

$conn= new mysqli('localhost','davsur_account','@DavsurAdmin2023','fms_db')or die("Could not connect to mysql".mysqli_error($conn));


?>
