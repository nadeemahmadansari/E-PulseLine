<?php
session_start();
$email=$_SESSION['doctor'];
if($_SESSION['doctor']=="")
{
	session_destroy();
	header("Location:login.php?msg=1");
}
$msg=$_REQUEST['msg'];
switch($msg)
{
	case 1:
		echo "<script>alert('Update Succesfully');</script>";
		break;
}
include("connect.php");
$query1="select name from tbl_doctor where email='$email'";
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
<div class="container-fluid" style="min-height:1000px">
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
<?php
if($row1=mysql_fetch_array($res1,MYSQL_BOTH))
{
?>
<p style="font-size:20px;margin-top:10px;margin-left:205px;"><?php echo "Welcome ".$row1['name'];?></p>
<?php	
}
?>
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
       <li class="active"><a href="dprofile.php" style="color:grey;margin-top:20px;"><i class="fa fa-home fa-2x"></i><span class="sr-only">(current)</span></a></li>
        <li><a href="dviewappoint.php" style="color:grey;margin-top:25px;">VIEW APPOINTMENT</a></li>
        <li><a href="dcancel.php" style="color:grey;margin-top:25px;">CANCEL APPOINTMENT</a></li>
		<li><a href="dreport.php" style="color:grey;margin-top:25px;">VIEW REPORT</a></li>
        <li><a href="dupdate.php" style="color:grey;margin-top:25px;">UPDATE PROFILE</a></li>
        <li><a href="dchange.php" style="color:grey;margin-top:25px;">CHANGE PASSWORD</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>
<div class="row" style="min-height:500px;margin-top:170px;">
<div class="col-sm-3" style="min-height:500px;">
</div>
<div class="col-sm-6" style="min-height:500px;background-color:#a7ffeb;box-shadow:2px 2px 5px black;">
<center>
<?php
$query="select * from tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<form action="dupdatecode.php" method="post">
<h1>Update Doctor Profile</h1>
<table>
<tr>
<td>Name</td>
<td><input type="text"  class="form-control" name="name" value="<?php echo $row['name'];?>" style="margin-top:10px;margin-left:10px;"></td>
</tr>
<tr>
<td>Gender</td>
<td>
<input type="radio" name="a" value="Male" <?php if($row['gender']=='Male'){?> checked <?php }?> style="margin-top:10px;margin-left:10px;"/>Male
<input type="radio" name="a" value="Female" <?php if($row['gender']=='Female'){?> checked <?php }?>/>Female
</td>
<tr>
<td>Address</td>
<td><textarea name="address" class="form-control" style="margin-top:10px;margin-left:10px;">
<?php
echo $row['address'];
?>
</textarea></td>
</tr>
<tr>
<td>Mobile</td>
<td><input type="number" class="form-control" name="mobile" value="<?php echo $row['mobile'];?>" style="margin-top:10px;margin-left:10px;"/></td>
</tr>
<tr>
<td>Fees</td>
<td><input type="number" name="fees" class="form-control" value="<?php echo $row['fees'];?>" style="margin-top:10px;margin-left:10px;"></td>
</tr>
<tr>
<td>Timing</td>
<td><input type="text" class="form-control" name="timing" value="<?php echo $row['timing'];?>" style="margin-top:10px;margin-left:10px;"/></td>
</tr>
</table>
<br/>
<input type="submit" class="btn btn-default" value="Update"/>
</form>
<?php
}
?>
</center>
</div>
<div class="col-sm-3" style="min-height:500px;"></div>
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