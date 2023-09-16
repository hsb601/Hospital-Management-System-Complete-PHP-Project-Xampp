<?php
  include("db.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	mysqli_query($con,"DELETE FROM user WHERE id = '$id'")
	or die(mysqli_error());  	
	
	header("Location: admin.php");
?>