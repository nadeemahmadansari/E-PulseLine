<?php
session_start();
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php?msg=2");
}
$msg=$_REQUEST['msg'];
switch($msg)
{
	case 1:
		echo "<script>alert('Report Uploaded');</script>";
}
$docid=$_REQUEST['did'];
//echo $docid;
$email=$_SESSION['patient'];
//echo $email;
include("connect.php");
$query1="select patid from tbl_patient where email='$email'";
$res1=mysql_query($query1);
if($row1=mysql_fetch_array($res1,MYSQL_BOTH))
{
	$patid=$row1['patid'];
}
$query2="select * from tbl_report where patid='$patid'";
$res2=mysql_query($query2);
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
<div class="container-fluid" style="min-height:auto;">
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
<p style="font-size:20px;margin-top:10px;margin-left:300px;">
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
<div class="row" style="min-height:auto;margin-top:150px;">
<div class="col-sm-4" style="min-height:200px;">
</div>
<div class="col-sm-4" style="min-height:200px;background-color:#a7ffeb;">
<center>
<form action="reportcode.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="docid" value="<?php echo $docid;?>"/>
<br/>
Upload Report
<input type="file" name="file"/>
<br/>
<input type="submit" class="btn btn-default" value="Send"/>
</form>
</center>
</div>
<div class="col-sm-4" style="min-height:200px;">	
</div>
<div class="col-sm-2" style="min-height:auto;margin-top:10px;">
</div>
<div class="col-sm-8" style="min-height:auto;background-color:#a7ffeb;margin-top:10px;">
<table class="table table-hover">
<tr>
	<td>S.No</td>
	<td>Doctor Name</td>
	<td>Report</td>
	<td>Date</td>
	<td>View</td>
</tr>
<?php
$a=1;
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
?>
<tr>
	<td><?php echo $a; ?></td>
<?php
$query="select name from tbl_doctor where docid='$docid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
	<td><?php echo $row['name']; ?></td>
<?php
}
?>
<td><?php echo $row2['report'];?></td>
<td><?php echo $row2['date'];?></td>
<td><a href="viewrem.php?rid=<?php echo $row2['repid'];?>"><input type="button" class="btn btn-default" value="View Remark"/></a></td>
<?php
$a++;
?>
</tr>
<?php
}
?>
</table>
</div>
<div class="col-sm-2" style="min-height:auto;margin-top:10px;">
</div>
</div>
</div>
</body>
</html>