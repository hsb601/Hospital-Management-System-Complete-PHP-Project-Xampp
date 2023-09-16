<?php
$con = mysqli_connect("localhost","root","","project");
 // Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 		
    $option = $_POST['opt'];
	$name   = $_POST['fname'];
	$sql="UPDATE user SET available = '".$option."' where fname = $name ";
	$result=mysqli_query($con, $sql);
if($result)
	{
		echo "Saved";
	}else{
		echo "Operation Failure please re-attempt";
	}
?>