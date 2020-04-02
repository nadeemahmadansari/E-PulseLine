<?php
session_start();
error_reporting(0);
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php?msg=2");
}
$email=$_SESSION['patient'];
//echo $email;
$msg=$_REQUEST['msg'];
switch($msg)
{
	case 1:
		echo "<script>alert('Appointment Booked');</script>";
}
include("connect.php");
$query="select patid,name from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$patid=$row['patid'];
	$name=$row['name'];
}
$query1="select * from tbl_appointment where patid='$patid'";
$res1=mysql_query($query1);
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-2.1.0.min.js" rel="javascript" type="text/javascript"></script>
<script src="js/bootstrap.min.js" rel="javascript" type="text/javascript"></script>
</head>
<body>
<div class="container-fluid" style="min-height:1000px;">
<div class="row navbar-fixed-top" style="min-height:150px;margin-right:0px;background-color:white;">
<div class="row" style="min-height:50px;background-color:#1de9b6">
<div class="col-sm-8" style="min-height:50px;">
<i class="fa fa-ambulance fa-2x" style="margin-left:20px;margin-top:12px;font-size:21px;">
24x7 Emergency Available</i>
&nbsp;&nbsp;&nbsp;
<span style="font-size:25px;color:#bdbdbd">|</span>
&nbsp;&nbsp;&nbsp;
<i class="fa fa-phone fa-2x" style="margin-top:5px;font-size:21px;">
+91-8115718157</i>
</div>
<div class="col-sm-4" style="min-height:50px;">
<p style="font-size:20px;margin-top:10px;margin-left:300px;"><?php echo "Welcome ".$name;?></p>
</div>
</div>
<div class="row" style="min-height:100px;">
<nav style="margin-bottom:0px;">

  <div class="container-fluid">
  
    <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <img src="images/logo1.png" height="100px" width="160px;"/>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="navbar-right" style="margin-right:5px;margin-top:5px;">
        <a href="logout.php"><button type="button" class="btn btn-default" style="margin-right:10px;margin-top:25px;">Logout &nbsp;<i class="fa fa-sign-out"></i></button></a>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li class="active"><a href="pprofile.php" style="color:grey;margin-top:20px;"><i class="fa fa-home fa-2x"></i><span class="sr-only">(current)</span></a></li>
        <li><a href="pbook.php" style="color:grey;margin-top:25px;">BOOK APPOINTMENT</a></li>
        <li><a href="pmyappointment.php" style="color:grey;margin-top:25px;">MY APPOINTMENT</a></li>
        <li><a href="pupdate.php" style="color:grey;margin-top:25px;">UPDATE PROFILE</a></li>
        <li><a href="pchange.php" style="color:grey;margin-top:25px;">CHANGE PASSWORD</a></li>
        <li><a href="pfeedback.php" style="color:grey;margin-top:25px;">FEEDBACK</a></li>
        <li><a href="pdiscuss.php" style="color:grey;margin-top:25px;">DISCUSSION BOARD</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>
<div class="row" style="min-height:500px;margin-top:150px;">
<div class="col-sm-3" style="min-height:100px;margin-top:10px;">
</div>
<div class="col-sm-6" style="min-height:100px;margin-top:10px;background-color:#a7ffeb;">
<h1 align="center" style="margin-top:25px;">Your Appointments</h1>
</div>
<div class="col-sm-3" style="min-height:100px;margin-top:10px;">
</div>
<div class="col-sm-12" style="min-height:auto;margin-top:20px;background-color:#a7ffeb;">
<table class="table table-hover" align="center" style="margin-top:30px;">
<tr>
<td>Name</td>
<td>Fees</td>
<td>Mobile</td>
<td>Address</td>
<td>Timing</td>
<td>Date</td>
<td>Status</td>
<td>Upload Report</td>
</tr>
<?php
while($row1=mysql_fetch_array($res1,MYSQL_BOTH))
{
	$docid=$row1['docid'];
	$query2="select * from tbl_doctor where docid='$docid'";
	
	$res2=mysql_query($query2); 

if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $row2['name'];?></td>
<td><?php echo $row2['fees'];?></td>
<td><?php echo $row2['mobile'];?></td>
<td><?php echo $row2['address'];?></td>
<td><?php echo $row2['timing'];?></td>
<?php
}
?>
<td><?php echo $row1['date'];?></td>
<td><?php echo $row1['status'];?></td>
<td><a href="uploadreport.php?did=<?php echo $row2['docid'];?>"><input type="button" class="btn btn-default" value="Upload"/></a></td>
</tr>
<?php
}
?>
</table>
</div>
</div>
<div class="row" style="min-height:400px;background-color:#a7ffeb;margin-top:20px;">
<div class="col-sm-3" style="min-height:400px;">
<h2 style="margin-left:40px;">About E-PulseLine</h2>
<br/>
</div>
<div class="col-sm-3" style="min-height:400px;">
<h2 style="margin-left:70px;">Our Services</h2>
<br/>
<h4 style="margin-left:70px;">Doctor Consultations</h4>
<h4 style="margin-left:70px;">Nursing</h4>
<h4 style="margin-left:70px;">Medical Equipment</h4>
<h4 style="margin-left:70px;">Trained Attendants</h4>
<h4 style="margin-left:70px;">Counselling</h4>
<h4 style="margin-left:70px;">Lab Tests</h4>
</div>

<div class="col-sm-3" style="min-height:400px;">
<h2 style="margin-left:100px;">Menu</h2>
<br/>
<ul style="list-style-type:none;">
<li><a href="about.php"><h4 style="margin-left:60px;color:black;">About</h4></a></li>
<li><a href="contact.php"><h4 style="margin-left:60px;color:black;">Contact</h4></a></li>
<li><a href="doctor.php"><h4 style="margin-left:60px;color:black;">Doctor</h4></a></li>
<li><a href="patient.php"><h4 style="margin-left:60px;color:black;">Patient</h4></a></li>
</ul>
</div>
<div class="col-sm-3" style="min-height:400px;">
<h2 style="margin-left:70px;">Contacts</h2>
<br/>
<h4 style="margin-left:70px;">3/24 Sector J, Kursi Road</h4>
<h4 style="margin-left:70px;">Aliganj, Lucknow</h4>
<br/>
<br/>
<h4 style="margin-left:70px;">nadeem2136@gmail.com</h4>
<h4 style="margin-left:70px;">+91-8115718157</h4>
<br/>
<br/>
<br/>
<p class="fa fa-facebook fa-2x" style="margin-top:5px;margin-left:70px;margin-right:10px;"></p>
<p class="fa fa-instagram fa-2x" style="margin-top:5px;margin-right:10px;"></p>
<p class="fa fa-youtube fa-2x" style="margin-top:5px;margin-right:10px;"></p>
<p class="fa fa-twitter fa-2x" style="margin-top:5px;margin-right:10px;"></p>
<p class="fa fa-whatsapp fa-2x" style="margin-top:5px;margin-right:10px;"></p>
<p class="fa fa-linkedin fa-2x" style="margin-top:5px;"></p>
</div>
</div>
<div class="row" style="min-height:40px;background-color:#1de9b6">
<div class="col-sm-6">
<h4>Copyright 2019 &copy; E-PulseLine. All Rights Reserved</h4>
</div>
<div class="col-sm-6">
<p class="h4 navbar-right" style="margin-right:0px;"><a href="team.php">Design & Developed by: Nadeem Ansari</a></p>
</div>
</div>
</div>
</body>
</html>