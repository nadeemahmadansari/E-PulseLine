<?php
session_start();
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}
$speciality=$_POST['spcl'];
//echo $speciality;
include("connect.php");
$query="select * from tbl_doctor where speciality='$speciality'";
$res=mysql_query($query);
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
<i class="fa fa-ambulance fa-2x" style="margin-left:20px;margin-top:5px;">
24x7 Emergency Available</i>
&nbsp;&nbsp;&nbsp;
<span style="font-size:25px;color:#bdbdbd">|</span>
&nbsp;&nbsp;&nbsp;
<i class="fa fa-phone fa-2x" style="margin-top:5px;">
1800-1236-2234</i>
</div>
<div class="col-sm-4" style="min-height:50px;">
<form class="navbar-form navbar-right" role="search" style="margin-top:5px;margin-right:20px;">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default" style="width:50px;height:33px;"><i class="fa fa-search"></i></button>
	</form>
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
        <a href="login.php"><button type="button" class="btn btn-default" style="margin-right:10px;margin-top:25px;">Logout &nbsp;<i class="fa fa-sign-out"></i></button></a>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li class="active"><a href="pprofile.php" style="color:grey;margin-top:25px;"><i class="fa fa-home fa-2x"></i><span class="sr-only">(current)</span></a></li>
        <li><a href="pbook.php" style="color:grey;margin-top:25px;">BOOK APPOINTMENT</a></li>
        <li><a href="pmyappointment.php" style="color:grey;margin-top:25px;">MY APPOINTMENT</a></li>
        <li><a href="pupdate.php" style="color:grey;margin-top:25px;">UPDATE PROFILE</a></li>
        <li><a href="pchange.php" style="color:grey;margin-top:25px;">CHANGE PASSWORD</a></li>
        <li><a href="pfeedback.php" style="color:grey;margin-top:25px;">FEEDBACK</a></li>
        <li><a href="#" style="color:grey;margin-top:25px;">DISCUSSION BOARD</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>
<div class="row" style="min-height:700px;margin-top:150px;">
<div class="col-sm-2" style="min-height:700px;border:1px solid;">
</div>
<div class="col-sm-8" style="min-height:700px;border:1px solid;">
<div class="row" style="height:250px;margin-top:10px;">
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<div class="col-sm-8" style="height:250px;border:1px solid;margin-left:10px;">
<h2><?php echo "Name: ".$row['name'];?></h2>
<h3><?php echo "Fees: ".$row['fees'];?></h3>
<h3><?php echo "Timing: ".$row['timing'];?></h3>
<h3><?php echo "Mobile No: ".$row['mobile'];?></h3>
<h3><?php echo "Address: ".$row['address'];?></h3>

</div>
<div class="col-sm-2" style="min-height:250px;border:1px solid;margin-left:10px;">
<a href="pbooknow.php?id=<?php echo $row['docid'];?>"><input type="button" class="btn btn-default" value="Book Now" style="margin-top:100px;"/></a>
</div>
<?php
}
?>
</div>

</div>
<div class="col-sm-2" style="min-height:700px;border:1px solid;">
</div>
</div>
<div class="row" style="min-height:400px;background-color:#a7ffeb;">
<div class="col-sm-3" style="min-height:400px;border:1px solid;">
</div>
<div class="col-sm-3" style="min-height:400px;border:1px solid;">
<h2 style="margin-left:70px;">Our Services</h2>
<h4 style="margin-left:70px;">Doctor Consultations</h4>
<h4 style="margin-left:70px;">Nursing</h4>
<h4 style="margin-left:70px;">Medical Equipment</h4>
<h4 style="margin-left:70px;">Trained Attendants</h4>
<h4 style="margin-left:70px;">Counselling</h4>
<h4 style="margin-left:70px;">Lab Tests</h4>
</div>
<div class="col-sm-3" style="min-height:400px;border:1px solid;">
</div>
<div class="col-sm-3" style="min-height:400px;border:1px solid;">
<h2 style="margin-left:70px;">Contacts</h2>
<br/>
<br/>
<h4 style="margin-left:70px;">Address</h4>
<br/>
<br/>
<h4 style="margin-left:70px;">abc@gmail.com</h4>
<h4 style="margin-left:70px;">Mobile no</h4>
<br/>
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
<h4>Copyright 2019 &copy; E-PulseLine</h4>
</div>
<div class="col-sm-6">
<p class="h4">Design & Developed by: Nadeem Ansari</p>
</div>
</div>
</div>
</body>
</html>