<?php
session_start();
$docid=$_POST['docid'];
//echo $docid;
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php?msg=2");
}
$email=$_SESSION['patient'];
//echo $email;
$filename=$_FILES['file']['name'];
//echo $filename;
$size=$_FILES['file']['size'];
//echo $size;
$type=$_FILES['file']['type'];
//echo $type;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$location="report/";
include("connect.php");
$query="select patid from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$patid=$row['patid'];
}
$query2="insert into tbl_report(patid,docid,report,date) values ('$patid','$docid','$filename',curdate())";
mysql_query($query2);
move_uploaded_file($tmp_name,$location.$filename);
?>
