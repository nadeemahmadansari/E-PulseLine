<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
switch($msg)
{
	case 1:
		echo "<script>alert('Invalid Email and Password');</script>";
		break;
	case 2:
		echo "<script>alert('Please Login your Account');</script>";
		break;
	case 3:
		echo "<script>alert('Logout Successfully');</script>";
		break;
	case 4:
		echo "<script>alert('Password change Successfully');</script>";
		break;
	default;
}
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
        <img src="images/logo1.png" height="100px" width="160px;" style="margin-left:5px;"/>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="navbar-right" style="margin-right:5px;margin-top:5px;">
        <a href="login.php"><button type="button" class="btn btn-default" style="margin-right:10px;margin-top:25px;">Login &nbsp;<i class="fa fa-sign-in"></i></button></a>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php" style="color:grey;margin-top:20px;"><i class="fa fa-home fa-2x"></i><span class="sr-only">(current)</span></a></li>
        <li><a href="about.php" style="color:grey;margin-top:25px;">ABOUT</a></li>
        <li><a href="doctor.php" style="color:grey;margin-top:25px;">DOCTOR</a></li>
        <li><a href="patient.php" style="color:grey;margin-top:25px;">PATIENT</a></li>
        <li><a href="contact.php" style="color:grey;margin-top:25px;">CONTACT US</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>
<div class="row" style="min-height:700px;margin-top:150px;background-image:url('images/bgimage4.jpg');background-attachment:fixed;background-size:100% 100%;">
<div class="col-sm-2" style="min-height:700px;">
</div>
<div class="col-sm-8" style="min-height:700px;">
<center>
<div class="row" style="min-height:520px;width:500px;margin-top:50px;background-color:#a7ffeb;opacity:1;box-shadow:2px 2px 5px black;">
<form action="logcode.php" method="post">
<h1>Login</h1>
<br/>
<h4>Who You Are</h4>
<select name="who" class="form-control" style="width:270px;">
<option value="">--Select Option--</option>
<option>Doctor</option>
<option>Patient</option>
</select>
<h4>Email</h4>
<input type="email" name="email" class="form-control" placeholder="Email" style="width:270px;"/>
<h4>Password</h4>
<input type="password" name="password" class="form-control" placeholder="Password" style="width:270px;"/>
<br/>
<input type="checkbox"/>&nbsp;<span style="font-size:15px;margin-right:0px;">Remember Me</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#"><span style="font-size:15px;margin-left:00px;">Forgot Password?<span></a>
<br/>
<br/>
<input type="submit" class="btn btn-default" value="Login"/>
</form>
Not yet Register Doctor
<a href="doctor.php"><input type="button" value="Click Here" class="btn btn-default" style="margin-left:15px;"/></a>
<br/>
<br/>
Not yet Register Patinet
<a href="patient.php"><input type="button" value="Click Here" class="btn btn-default" style="margin-left:12px;"/></a>
</div>
</center>
</div>
<div class="col-sm-2" style="min-height:700px;">
</div>
</div>
<div class="row" style="min-height:400px;background-color:#a7ffeb;">
<div class="col-sm-3" style="min-height:400px;">
<h2 style="margin-left:40px;">About E-PulseLine</h2>
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
<h4 style="margin-left:70px;">ALiganj, Lucknow</h4>
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