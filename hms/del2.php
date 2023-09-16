<?php
  include("db.php");  

	$patient_id =$_REQUEST['patient_id'];
	
	
	// sending query
	mysqli_query($con,"DELETE FROM patient WHERE patient_id = '$patient_id'");
	mysqli_query($con,"DELETE FROM confirmedpatient WHERE patient_id = '$patient_id'")
	or die(mysqli_error());  	
	
	header("Location: patientedit.php");
?>