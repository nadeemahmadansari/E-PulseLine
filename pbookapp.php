<?php
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php?msg=2");
}
$spcl=$_POST['spcl'];
//echo $spcl;
include("connect.php");
$query="select * from tbl_doctor where speciality='$spcl'";
$res=mysql_query($query);
?>
<html>
<head>
</head>
<body>
<table class="table table-hover" align="center";>
<tr>
	<td>NAME</td>
	<td>FEES</td>
	<td>TIMING</td>
	<td>MOBILE</td>
	<td>ADDRESS</td>
	<td></td>
</tr>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['fees']; ?></td>
<td><?php echo $row['timing']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><a href="pbooknow.php?id=<?php echo $row['docid'];?>"><input type="button" class="btn btn-default" value="Book Now"/></a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>