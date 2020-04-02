<?php
session_start();
//echo "Hello Admin";
$email=$_SESSION['admin'];
//echo $email;
if($_SESSION['admin']=="")
{
	session_destroy();
	header("Location:index.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../css/style.css" rel="stylesheet" type="text/css"/>
<script src="../js/jquery-2.1.0.min.js" rel="javascript" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" rel="javascript" type="text/javascript"></script>
</head>
<body>
<div class="conatiner-fluid" style="min-height:auto;">
<div class="col-sm-12" style="min-height:700px;margin-right:0px;">
<div class="row" style="min-height:100px;">
<a href="adminlogout.php"><input type="button" class="btn btn-default navbar-right" value="Logout" style="margin-top:30px;margin-right:50px;"/></a>
<p style="font-size:25px;margin-top:15px;margin-left:15px;">Welcome Admin</p>
</div>
<div class="row" style="min-height:800px;">
<div class="col-sm-3" style="min-height:350px;">
<div class="hovereffect">
        <img class="img-responsive" src="../images/viewdoc.jpg" alt="" height="300px;" style="margin-top:35px;margin-left:40px;"/>
        <div class="overlay">
        <a class="info" href="viewdoctor.php">View Doctor</a>
    </div>
</div>
</div>
<div class="col-sm-3" style="min-height:350px;">
<div class="hovereffect">
        <img class="img-responsive" src="../images/viewpat.png" alt="" height="300px;" style="margin-top:27px;margin-left:30px;"/>
        <div class="overlay">
        <a class="info" href="viewpatient.php">View Patient</a>
    </div>
</div>
</div>
<div class="col-sm-3" style="min-height:350px;">
<div class="hovereffect">
        <img class="img-responsive" src="../images/cancel1.jpg" alt="" height="300px;" style="margin-top:27px;margin-left:35px;"/>
        <div class="overlay">
        <a class="info" href="cancel.php">Cancel Appointment</a>
    </div>
</div>
</div>
<div class="col-sm-3" style="min-height:350px;">
<div class="hovereffect">
        <img class="img-responsive" src="../images/validatedoc.jpg" alt="" height="300px;" style="margin-top:20px;margin-left:35px;"/>
        <div class="overlay">
        <a class="info" href="valdoctor.php">Validate Doctor</a>
    </div>
</div>
</div>
<div class="col-sm-3" style="min-height:350px;">
<div class="hovereffect">
        <img class="img-responsive" src="../images/valpat.png" alt="" height="300px;" style="margin-top:10px;margin-left:25px;"/>
        <div class="overlay">
        <a class="info" href="valpatient.php">Validate Patient</a>
    </div>
</div>
</div>
<div class="col-sm-3" style="min-height:350px;">
<div class="hovereffect">
        <img class="img-responsive" src="../images/viewfeed.png" alt="" height="300px;" style="margin-top:25px;margin-left:45px;"/>
        <div class="overlay">
        <a class="info" href="viewfeedback.php">View Feedback</a>
    </div>
</div>
</div>
<div class="col-sm-3" style="min-height:350px;">
<div class="hovereffect">
        <img class="img-responsive" src="../images/viewcontact.png" alt="" height="300px;" style="margin-top:25px;margin-left:45px;"/>
        <div class="overlay">
        <a class="info" href="viewcontact.php">View Contact</a>
    </div>
</div>
</div>
<div class="col-sm-3" style="min-height:350px;">
<div class="hovereffect">
        <img class="img-responsive" src="../images/change1.jpg" alt="" height="300px;" style="margin-top:25px;margin-left:10px;"/>
        <div class="overlay">
        <a class="info" href="change.php">Change Password</a>
    </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>