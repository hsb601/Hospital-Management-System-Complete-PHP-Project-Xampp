<?php  
	$db_user    = 'root';
$db_pass    = "";
$db         = 'project';
$con = new mysqli('localhost',$db_user,$db_pass, $db);

if($con->connect_error){
die("Failed to connect : ".$con->connect_error);}
?>


