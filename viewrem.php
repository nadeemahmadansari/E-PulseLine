<?php
session_start();
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}
$repid=$_REQUEST['rid'];
//echo $repid;
include("connect.php");
$query="select * from tbl_remark where repid='$repid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	echo $row['remark'];
	echo "<br/>";
	echo $row['date'];
}	
?>