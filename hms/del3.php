<?php
session_start();

  include("db.php");  

	$id =$_SESSION['uid'];
	
	// sending query
	mysqli_query($con,"DELETE FROM contact WHERE user_id = '$id'")
	or die(mysqli_error());  	
	
	header("Location: admin.php");
?>