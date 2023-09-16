<?php
	        session_start();		
     		include("db.php");
			$result=mysqli_query($con,"SELECT * FROM contact");
			
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['user_id'];	
				$_SESSION['uid'] = $id;
				
			}
			mysqli_close($con);
			?>
 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


		<title>Admin</title>

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
				
					<a href="../Index.php" style="font-size: 40px; color:cadetblue;">Hospital Management system</a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li class="active"><a href="../Index.php">Home</a></li>
						<li class="active"><a href="../contact.php">contact</a></li>
						<li class="active"><a href="logout.php">logout</a></li>
						<li class="active "><a>ADMIN<img style= "height:36px; width:40px; padding-left: 10px;"  src="../images/images.jpg"> </a></li>
					</ul>
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		   
		   <div class="container"style="width: 100%;">
	<div class="col-md-12">
		<div class="page-header">
			<center>
<form method="post">

<table  style="font-size: 25px; color:cadetblue; padding: 100px 10px 10px 10px;">

	<tr>
		<td>Doctor Name</td>
		<td><input class="text-box" type="text" name="fname" placeholder="ex: full name + (speciality)" required /></td>
	</tr>
	<tr>
		<td>Days</td>
		<td><input class="text-box" type="text" name="day" placeholder="ex: Mon to fri" required /></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input class="text-box" type="text" name="email" placeholder="ex: abc@gmail.com" required /></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input class="text-box" type="text" name="password" placeholder="Password" required /></td>
	</tr>
	<tr>
		<td>Time Slot</td>
		<td><input class="text-box" type="text" name="slots" placeholder="ex: 10pm to 12am" required /></td>
	</tr>
	<tr>
		<td>Fees</td>
		<td><input class="text-box" type="text" name="fee" placeholder="000 pkr" required /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
<center>
		<td><input type="submit" name="submit" class="button" value="ADD" style="margin-top:10px;" /></td>
</center>
	</tr>
</table>
<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$name=$_POST['fname'] ;
					$day= $_POST['day'] ;					
					$email=$_POST['email'] ;
					$password=$_POST['password'] ;
					$slot=$_POST['slots'] ;
					$fee=$_POST['fee'] ;
												
		 mysqli_query($con,"INSERT INTO `user`(fname,day,email,password,slots,fee) 
		 VALUES ('$name','$day','$email','$password','$slot','$fee')"); 
				
				
	        }
?>
</form>

<table border="5"  style="font-size: 30px; color:cadetblue; padding: 10px 10px 10px 10px; Border: Solid; width: 1980px;">

  <div class="panel-group">	

				<div class="row" style="margin-top:10px;">
					<div class="col-md-12"> 
               <div class="panel panel-success">
					 <div class="panel-heading ">
<center>			
				<h1  style="color:cadetblue;">
				EDIT/DELETE
			</h1>
			 	</center> 
			 </div>		
					</div>
				</div>

<div class="panel-body">

<tr align='center' style="font-size:35px;">

<td>Doctor Id</td>
<td>Doctor Name</td>
<td>Days</td>
<td>Email</td>
<td>Password</td>
<td>Time Slot</td>
<td>Fees</td>
<td>Availability</td>
<td>Edit</td>
<td>Delete</td>

</tr>				
		
	
			<?php
			include("db.php");
			
				
			$result=mysqli_query($con,"SELECT * FROM user");
			
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
	           
				echo"<td><font color='cadetblue'>".$test['id']."</font></td>";
                echo"<td><font color='cadetblue'>".$test['fname']."</font></td>";	
				echo"<td><font color='cadetblue'>".$test['day']."</font></td>";
				echo"<td><font color='cadetblue'>".$test['email']."</font></td>";
				echo"<td><font color='cadetblue'>".$test['password']."</font></td>";
			    echo"<td><font color='cadetblue'>".$test['slots']."</font></td>";
				echo"<td><font color='cadetblue'>".$test['fee']."</font></td>";
				echo"<td><font color='cadetblue'>".$test['available']."</font></td>";
				echo"<td> <font color='cadetblue'><a href ='edit.php?id=$id'> Edit</a>";
				echo"<td><font color='cadetblue'> <a href ='del.php?id=$id'><center>  Delete</center></a>";							
				echo "</tr>";
			}
			mysqli_close($con);
			?>
</table>


		</div>
</div>
</div>	
		<div class="panel panel-danger" style= "margin-top:20px; ">
			<div class="panel-heading ">
<center>			
				<h1>
				CONFIRM APPOINTMENT
			</h1>
			 	</center> 
			 </div>
						 
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
					 
						<table 	id="table"
			                	data-show-columns="true"
 				                data-height="460"
                                style="font-size:25px;">
						</table>
						<form  action="patientedit.php" method="post">
						<input id="Button1" type="submit" value="Confirm" style="margin-left: 5px; margin-bottom: 0px;" class="button"/>
						<label style="font: 30px times new roman;">Note: confirm appointment by alloting time slot for specific patient</label>
						</form>
					</div>
				</div>
			</div>				
		</div>

	</div>
</div>
 </div> 		
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>


<script type="text/javascript" style="font-size: 25px;">
 var $table = $('#table');
		     $table.bootstrapTable({
			      url: 'list3.php',
			      search: true,
			      pagination: true,
			      buttonsClass: 'primary',
                  
			      showFooter: true,
			      minimumCountColumns: 2,
			      columns: [{
			          field: 'pid',
			          title: 'Patient ID',
			          sortable: true,
					
			      },{
			          field: 'pn',
			          title: 'Patient Name',
			          sortable: true,
			      },{
			          field: 'dn',
			          title: 'Doctor Name',
			          sortable: true,
			          
			      },
				  {
			          field: 'phn',
			          title: 'Phone Number',
			          sortable: true,
			          
			      },
				  {
					  
			          field: 'dt',
			          title: 'Time',
			          sortable: true,
			          
			      },
{
					  
			          field: 'dy',
			          title: 'Day',
			          sortable: true,
			          
			      },

				  ],
 
  			 });
	

</script>


<div class="panel panel-primary" style= "margin-top:20px; ">
			<div class="panel-heading ">
<center>			
				<h1>
				VIEW FEEDBACK OR QUERIES
			</h1>
			 	</center> 
			 </div>
						 
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
					 
						<table 	id="table1"
			                	data-show-columns="true"
 				                data-height="460"
                                style="font-size:25px;">
						</table>
						
					</div>
				</div>
			</div>				
		</div>

	</div>
</div>
 </div> 

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>


<script type="text/javascript" style="font-size: 25px;">
 var $table = $('#table1');
		     $table.bootstrapTable({
			      url: 'list4.php',
			      search: true,
			      pagination: true,
			      buttonsClass: 'primary',
                  
			      showFooter: true,
			      minimumCountColumns: 2,
			      columns: [{
			          field: 'uid',
			          title: 'User ID',
			          sortable: true,
					
			      },{
			          field: 'name',
			          title: 'User Name',
			          sortable: true,
			      },{
			          field: 'eml',
			          title: 'Email',
			          sortable: true,
			          
			      },
				  {
			          field: 'mob',
			          title: 'Mobile No',
			          sortable: true,
			          
			      },
				  {
					  
			          field: 'sub',
			          title: 'Description',
			          sortable: true,
			          
			      },

				  {
                  field: 'operate',
                  title: 'DELETE',
                  align: 'center',
                  valign: 'middle',
                  clickToSelect: false,
                  formatter : function(value,row,index) { 
                   return '<a href="del3.php"  button class=\'edit btn-primary \'>Click here</button></a>';
                  }
                },

				  ],
 
  			 });
			 
			 
	

</script>




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