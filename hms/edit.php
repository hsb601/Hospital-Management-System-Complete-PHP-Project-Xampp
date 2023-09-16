<?php
require("db.php");
$id =$_REQUEST['id'];

$result = mysqli_query($con,"SELECT * FROM user WHERE id  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$name=$test['fname'] ;
				$day= $test['day'] ;					
				$email=$test['email'] ;
				$password=$test['password'] ;
				$slot=$test['slots'] ;
				$fee=$test['fee'] ;
				$available=$test['available'] ;

if(isset($_POST['save']))
{	
	$name_save = $_POST['fname'];
	$day_save = $_POST['day'];
	$email_save = $_POST['email'];
	$password_save = $_POST['password'];
	$available_save=$_POST['available'] ;
	$slot_save=$_POST['slots'];
	$fee_save=$_POST['fee'] ;
	

	mysqli_query($con,"UPDATE user SET fname ='$name_save', day ='$day_save',email ='$email_save',password ='$password_save',slots ='$slot_save',fee ='$fee_save',available ='$available_save' WHERE id = '$id'")
				or die(mysqli_error()); 
	echo "Saved!";
	
	header("Location: admin.php");			
}
mysqli_close($con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/maincss.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EDIT</title>
</head>

<body>
<form method="post">
<div class="panel-group">	

				<div class="row" style="margin-top:10px;">
					<div class="col-md-12"> 
               <div class="panel panel-success">
					 <div class="panel-heading " >
<center>			
				<h1  style="color:cadetblue;">
				UPDATE
			</h1>
			 	</center> 
			 </div>		
					</div>
				</div>

<div class="panel-body">
<center>
<table style="font-size: 25px; color:cadetblue; padding: 100px 10px 10px 10px;">
	<tr>
		<td>Name</td>
		<td><input type="text" name="fname" value="<?php echo $name ?>" required /></td>
	</tr>
	<tr>
		<td>Days</td>
		<td><input type="text" name="day" value="<?php echo $day ?>" required /></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $email ?>" required /></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="password" value="<?php echo $password ?>" required /></td>
	</tr>
	<tr>
		<td>Time Slot</td>
		<td><input type="text" name="slots" value="<?php echo $slot ?>" required /></td>
	</tr>
	<tr>
		<td>Fees</td>
		<td><input type="text" name="fee" value="<?php echo $fee ?>" required /></td>
	</tr>
	<tr>
		<td>Availability</td>
		<td><input type="text" name="available" value="<?php echo $available ?>" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="SAVE" class="button" style="margin-top:10px;"  /></td>
	</tr>
</table>
</center>
<a href="admin.php" class="home-icon" ><< BACK <i class="fa-solid fa-house-chimney"></i></a><br><br>
</div>
</div>
</div>
</body>
</html>
