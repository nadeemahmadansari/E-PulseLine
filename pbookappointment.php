<?php
session_start();
$docid=$_REQUEST['id'];
//echo $docid;
$date=$_POST['date'];
//echo $date;
$email=$_SESSION['patient'];
//echo $email;
include("connect.php");
$query="select patid from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$patid=$row['patid'];
}
$insert="insert into tbl_appointment(patid,docid,date,status) values ('$patid','$docid','$date','y')";
mysql_query($insert);
header("Location:pmyappointment.php?msg=1");
?>