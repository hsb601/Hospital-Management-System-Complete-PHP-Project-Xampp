
<?php
session_start();
require("db.php");
$eml =$_SESSION['dremail'];
//$_REQUEST['email'];
$result = mysqli_query($con,"SELECT * FROM user where email = '$eml'");
$test = mysqli_fetch_array($result);
  
if (!$result) 
		{
		die("Error: Data not found..");
		}
      $fname=$test['fname'] ;   
$_SESSION['drname'] = $fname;
 if (isset($_POST['submit']))
	{	   
	
          
			$option=$_POST['option'] ;									
		 mysqli_query($con,"update `user` set available= '$option' where email = '$eml'"); 
				
				 
	        }
			
?>
		
<!DOCTYPE HTML>
<html>
	<head>
		<title>Hospital Management System</title>
		

		
				<link href="css/maincss.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="hms/css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  
		  	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="css/bootstrap-table.css" rel="stylesheet">
		<link type="text/css" href="css/font-awesome.css" rel="stylesheet">
		<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
		 
		  </head>
		  <body>
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="../Index.php" style="font-size: 30px; color:cadetblue;">Hospital Management system</a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li class="active"><a href="../Index.php">Home</a></li>

						<li class="active"><a href="../contact.php">contact</a></li>
						
						<li class="active"><a href="logout.php">logout</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		<div class="card " >
      <div class="card-body card-image4">
		<div class="container">
	<div class="col-md-12">
		
	
	<a><img src="../images/images.jpg"> </a>



						
								
				
		<div class="page-header">
			<input type="text" id="fname" value="<?php echo $fname ?>"  style="font-size: 25px; color:cadetblue; padding-right: 5px;" readonly ><br><br>
		</div>


		<div class="panel panel-success">
			<div class="panel-heading ">
<center>			
				<h1>
				 YOUR PATIENT APPOINTMENT
			</h1>
			 	</center> 
			 </div>
						 
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
					 <form  action="" method="post">
						<table 	id="table"
			                	data-show-columns="true"
 				                data-height="460">
								<label for="option" style="font-size: 25px; color:cadetblue; padding-right: 5px;">Choose your availability</label>

<select name="option" style="font-size: 15px; color:cadetblue; padding-right: 5px;" id="opt">
<option value="" disabled selected>Choose option</option>
  <option value="YES" name="yes">YES</option>
  <option value="NO" name="no">NO</option>

</select>
<input  type="submit" value="Save" name="submit" id="Button1" vlaue="Choose options" style="margin-left: 5px; margin-bottom: 0px;" class="button"/>

   </table>
		</form>				
					</div>
				</div>
			</div>				
		</div>

	</div>
</div>
  	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>


<script type="text/javascript">
	
	 var $table = $('#table');
		     $table.bootstrapTable({
				
			      url: 'list5.php',
			      search: true,
			      pagination: true,
			      buttonsClass: 'primary',
			      showFooter: true,
			      minimumCountColumns: 2,
			      columns: [{
			          field: 'num',
			          title: '#',
			          sortable: true,
			      },{
			          field: 'pid',
			          title: 'Appointment ID',
			          sortable: true,
			      },{
			          field: 'dy',
			          title: 'Day',
			          sortable: true,
			          
			      },
				  {
			          field: 'dt',
			          title: 'Date & Time',
			          sortable: true,
			          
			      },
				  {
			          field: 'pn',
			          title: 'Patient Name',
			          sortable: true,
			          
			      },
				  ],
 
  			 });

</script>
   </div>
   </div>	
   <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="../Index.php">Home</a></li>
						<li><a href="../contact.php">contact</a></li>
					</ul>
		   	</div>

		   	<div class="clear"> </div>
		   </div>
		   </div>
		</body>
		</html>