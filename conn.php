<?php
	$conn=mysqli_connect("localhost", "davsur_account", "@DavsurAdmin2023", "fms_db");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>

<?php
$uname = "davsur_account";
$dbpass = "@DavsurAdmin2023";
$host = "localhost";
$db = "fms_db";


$conn = mysqli_connect("$host", "$uname","$dbpass","$db") or die ("DB Connection Error");


?>