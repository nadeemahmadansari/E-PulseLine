<?php
session_start();
include("connect.php");
$ans=$_POST['ans'];
//echo $ans;
$qid=$_POST['qid'];
//echo $qid;
$email=$_SESSION['patient'];
//echo $email;
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$patid=$row['patid'];
}
$query2="insert into tbl_answer(quesid,patid,answer,date) values ('$qid','$patid','$ans',curdate())";
mysql_query($query2);
header("Location:pdiscuss.php");
?>