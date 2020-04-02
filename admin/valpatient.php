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
include("../connect.php");
$query="select * from tbl_patient";
$res=mysql_query($query);
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
<div class="conatiner-fluid" style="min-height:auto;">
<div class="col-sm-2" style="min-height:auto;">
<div class="row" style="min-height:400px;margin-top:82px;background-color:#1de9b6;">
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
</div>
</div>
<div class="col-sm-10" style="min-height:auto;">
<div class="row" style="min-height:auto;">
<a href="adminlogout.php"><input type="button" class="btn btn-default navbar-right" value="Logout" style="margin-top:30px;margin-right:50px;"/></a>
<p style="font-size:25px;margin-top:15px;">Welcome Admin</p>
</div>
<div class="row" style="min-height:400px;margin-top:20px;background-color:#a7ffeb;">
<table class="table table-hover">
<tr>
	<td>S.No</td>
	<td>Name</td>
	<td>Father Name</td>
	<td>Gender</td>
	<td>Mobile</td>
	<td>Age</td>
	<td>Address</td>
	<td>Date</td>
	<td>Status</td>
	<td>Cancel</td>
	<td>Delete</td>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['status'];?></td>
<td><a href="valpatcode.php?id=<?php echo $row['patid'];?>"><input type="button" class="btn btn-default" value="Cancel"/></a></td>
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