<?php
session_start();
$feed=$_POST['feed'];
//echo $feed;
$email=$_SESSION['patient'];
//echo $email;
include("connect.php");
$query="select patid from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$id=$row['patid'];
}
$insert="insert into tbl_feedback(patid,feedback,date) values ('$id','$feed',curdate())";
mysql_query($insert);
header("Location:pfeedback.php?msg=1");
?>