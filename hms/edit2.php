<?php
require("db.php");
$id =$_REQUEST['patient_id'];

$result = mysqli_query($con,"SELECT * FROM patient WHERE patient_id  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['patient_id'] ;
				$pn= $test['patient_name'] ;					
				$dn=$test['doctor_name'] ;
				$phn=$test['ph_number'] ;
				$eml=$test['email'] ;
				$dt=$test['date'] ;
				$dy=$test['day'] ;

if(isset($_POST['save']))
{	
	$id_save = $_POST['patient_id'];
	$pn_save = $_POST['patient_name'];
	$dn_save = $_POST['doctor_name'];
	$phn_save = $_POST['ph_number'];
	$eml_save=$_POST['email'] ;
	$dt_save=$_POST['date'] ;
	$dy_save=$_POST['day'] ;

	mysqli_query($con,"insert into confirmedpatient (patient_id,patient_name,doctor_name,ph_number,email,date,day) 
		 VALUES ('$id_save','$pn_save','$dn_save','$phn_save','$eml_save','$dt_save','$dy_save')");
    mysqli_query($con,"delete from patient WHERE patient_id = '$id'")or die(mysqli_error()); 
	echo "Saved!";
	
	header("Location: patientedit.php");			
}
mysqli_close($con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/maincss.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Confirm Appointment</title>
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
		<td>Patient Id</td>
		<td><input type="text" name="patient_id" value="<?php echo $id ?>"/></td>
	</tr>
	<tr>
		<td>Patient Name</td>
		<td><input type="text" name="patient_name" value="<?php echo $pn ?>"/></td>
	</tr>
	<tr>
		<td>Doctor Name</td>
		<td><input type="text" name="doctor_name" value="<?php echo $dn ?>"/></td>
	</tr>
	<tr>
		<td>Phone Number</td>
		<td><input type="text" name="ph_number" value="<?php echo $phn ?>"/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $eml ?>"/></td>
	</tr>
	<tr>
		<td>Date & Time</td>
		 <td>
		<?php
require("db.php");
echo '<select type="text" style="width:347.48px; height:61.97px; "name="date" value="<?php echo $dt ?> " required><option>Select Slot</option>';

$sqli = "SELECT * FROM slot";
$result = mysqli_query($con, $sqli);
while ($row = mysqli_fetch_array($result)) {
echo '<option>'.$row['slots'].'</option>';
}

echo '</select>';

?>
  
  </td> 
	</tr>
	<tr>
		<td>Day</td>
		<td><input type="text" name="day" value="<?php echo $dy ?>"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="SAVE" class="button" style="margin-top:10px;"  /></td>
	</tr>
</table>
</center>
<a href="patientedit.php" class="home-icon" ><< BACK <i class="fa-solid fa-house-chimney"></i></a><br><br>
</div>
</div>
</div>
</form>
</body>
</html>
