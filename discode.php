<?php
session_start();
include("connect.php");
$ques=$_POST['ques'];
//echo $ques;
$email=$_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$patid=$row['patid'];
}
$query2="insert into tbl_question(patid,question,date) values ('$patid','$ques',curdate())";
mysql_query($query2);
header("Location:pdiscuss.php");
?>