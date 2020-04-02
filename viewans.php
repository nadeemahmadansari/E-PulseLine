<?php
session_start();
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php?msg=2");
}
$email=$_SESSION['patient'];
$qid=$_REQUEST['qid'];
//echo $qid;
include("connect.php");
$query="select * from tbl_answer where quesid='$qid'";
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
<link href="css/style.css" rel="stylesheet" type="text/css"/>
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
<div class="row" style="min-height:350px;margin-top:170px;">

<div class="col-sm-12"style="min-height:350px;background-color:#a7ffeb;box-shadow:2px 2px 5px black;">
<table class="table table-hover">
<tr>
	<td>S.No</td>
	<td>Patient Name</td>
	<td>Answer</td>
	<td>Date</td>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
	<td><?php echo $a;?></td>
<?php
	
	$patid=$row['patid'];
	
	$query1="select name from tbl_patient where patid='$patid'";
	$res1=mysql_query($query1);
	if($row1=mysql_fetch_array($res1,MYSQL_BOTH))
	{
?>
	<td><?php echo $row1['name']; ?></td>
<?php	
	}
?>
	<td><?php echo $row['answer'];?></td>
	<td><?php echo $row['date'];?></td>
</tr>
<?php
$a++;
}
?>
</table>
</div>

</div>
</div>
</body>
</html>