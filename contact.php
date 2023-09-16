
<!DOCTYPE HTML>
<?php
require("hms/db.php");
if(isset($_POST['submit']))
{	
	
	$name = $_POST['name'];
	$email = $_POST['eml'];
	$mobileno = $_POST['mobno'];
	$subject=$_POST['sub'] ;
	

	mysqli_query($con,"insert into contact (name,eml,mobno,sub) 
		 VALUES ('$name','$email','$mobileno','$subject')")
  or die(mysqli_error()); 
	echo "Submitted";
	
	header("Location: contact.php");			
}
mysqli_close($con);
?>
<html>
	<head>
		<title>HMS | Contact us</title>
		<link href="hms/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
        <link href="hms/css/maincss.css" rel="stylesheet" />
	</head>
	<body style="heigh:100%;">
				<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="Index.php" style="font-size: 40px; color:cadetblue;">Hospital Management system</a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li class="active"><a href="Index.php">Home</a></li>
						<li class="active"><a href="contact.php">contact</a></li>
						<li class="active"><a href="about.php">About</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		<div class="card " >
      <div class="card-body card-image3">
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">
				<div class="col span_1_of_3">

      			<div class="company_address">
				     	<h2>Hospital Address  :</h2>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>PAKISTAN</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span><a href="mailto:haseebkhanhk601@gmail.com">haseebkhanhk601@gmail.com</a></span></p>

				   </div>
				</div>
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form method="post">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="name" value=""></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="text" name="eml" value=""></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" name="mobno" value=""></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="sub"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Submit" class="button" ></span>
						  </div>
					    </form>
				    </div>
  				</div>
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
			</div>
			</div>
	      <div class="clear"> </div>
		   <div class="footer" style="margin-top: 0px;">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="Index.php">Home</a></li>

						<li><a href="contact.php">contact</a></li>
					</ul>
		   	</div>

		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>
