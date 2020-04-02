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
error_reporting(0);
$msg=$_REQUEST['msg'];
switch($msg)
{
	case 1:
		echo "<script>alert('Incorrect Password');</script>";
		break;
	case 2:
		echo "<script>alert('Enter new Password');</script>";
		break;
	case 3:
		echo "<script>alert('Password change succesfully');</script>";
		break;
	default;
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
<script src="../js/jquery-2.1.0.min.js" rel="javascript" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" rel="javascript" type="text/javascript"></script>
</head>
<body>
<div class="container-fluid" style="min-height:auto;">
<div class="row" style="min-height:auto;">
<a href="adminlogout.php"><input type="button" class="btn btn-default navbar-right" value="Logout" style="margin-top:30px;margin-right:50px;"/></a>
<p style="font-size:25px;margin-top:15px;margin-left:15px;">Welcome Admin</p>
</div>
<div class="row" style="min-height:400px;margin-top:150px;">
<div class="col-sm-2" style="min-height:400px;background-color:#1de9b6;">
<br/>
<a href="dashboard.php" style="margin-left:80px;margin-top:20px;">Home</a>
<br/>
<br/>
<a href="viewdoctor.php" style="margin-left:80px;margin-top:20px;">View Doctor</a>
<br/>
<br/>
<a href="viewpatient.php" style="margin-left:80px;margin-top:20px;">View Patient</a>
<br/>
<br/>
<a href="cancel.php" style="margin-left:80px;margin-top:20px;">Cancel Appointment</a>
<br/>
<br/>
<a href="valdoctor.php" style="margin-left:80px;margin-top:20px;">Validate Doctor</a>
<br/>
<br/>
<a href="valpatient.php" style="margin-left:80px;margin-top:20px;">Validate Patient</a>
<br/>
<br/>
<a href="viewfeedback.php" style="margin-left:80px;margin-top:20px;">View Feedback</a>
<br/>
<br/>
<a href="viewcontact.php" style="margin-left:80px;margin-top:20px;">View Contact</a>
<br/>
<br/>
<a href="change.php" style="margin-left:80px;margin-top:20px;">Change Password</a>
</div>
<div class="col-sm-8" style="min-height:400px;width:500px;margin-left:250px;background-color:#a7ffeb;box-shadow:2px 2px 5px black;">
<center>
<form action="changecode.php" method="post">
<h1>Change Password<h1>
<br/>
<table>
<tr>
<td>Old Password</td>
<td><input type="text" class="form-control" name="op" style="margin-left:10px;s"/></td>
</tr>
<tr>
<td>New Password</td>
<td><input type="text" class="form-control" name="np" style="margin-top:10px;margin-left:10px;"/></td>
</tr>
<tr>
<td>Confirm New Password &nbsp;</td>
<td><input type="text" class="form-control" name="cnp" style="margin-top:10px;margin-left:10px;"/></td>
</tr>
</table>
<br/>
<input type="submit" class="btn btn-default" value="Login"/>
</form>
</center>
</div>
<div class="col-sm-2" style="min-height:400px;">
</div>
</div>
</div>
</body>
</html>