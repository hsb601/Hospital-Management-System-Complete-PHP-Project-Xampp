<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="css/bootstrap-table.css" rel="stylesheet">
		<link type="text/css" href="css/font-awesome.css" rel="stylesheet">
		<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<?php
session_start();
$eml      = $_POST['email'];
$pwd        = $_POST['password'];
$_SESSION['usern'] = $eml;

$db_user    = 'root';
$db_pass    = "";
$db         = 'project';
$con = new mysqli('localhost',$db_user,$db_pass, $db);

if($con->connect_error){
die("Failed to connect : ".$con->connect_error);}
else {
$stmt = $con->prepare("SELECT * from user where email = ?");
$stmt->bind_param("s", $eml);
$stmt->execute();
$stmt_result = $stmt->get_result();
echo $stmt_result->num_rows;
if($stmt_result->num_rows > 0) {
$data = $stmt_result->fetch_assoc();
if($data['password'] === $pwd)
echo"<h2>Login successfull</h2>";
//echo"<font color='cadetblue'><a href ='doctor.php?email=$eml'>x</a>";

$_SESSION['dremail'] = $eml;

header ('location: doctor.php');
}


else {
$stmt = $con->prepare("SELECT * from admin where email = ?");
$stmt->bind_param("s", $eml);
$stmt->execute();
$stmt_result = $stmt->get_result();
echo $stmt_result->num_rows;
if($stmt_result->num_rows > 0) {
$data = $stmt_result->fetch_assoc();
if($data['password'] === $pwd)
echo"<h2>Login successfull</h2>";
header ('location: admin.php');
}
else{
 echo  '<div class="alert alert-danger">
                <a href="login form.php" class="close" data-dismiss="alert" aria-label="close">back to login</a>
                <p><strong>Alert!</strong></p>
                Email or password wrong! Please try again!.
            </div>';

  }
}
}



?>