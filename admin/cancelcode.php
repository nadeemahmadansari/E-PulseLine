<?php
$appid=$_REQUEST['id'];
//echo $appid;
include("../connect.php");
$query="select status from tbl_appointment where appid='$appid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	if($row['status']=='y')
	{
		$update="update tbl_appointment set status='n' where appid='$appid'";
		mysql_query($update);
		header("Location:cancel.php");
	}
	if($row['status']=='n')
	{
		$update="update tbl_appointment set status='y' where appid='$appid'";
		mysql_query($update);
		header("Location:cancel.php");
	}
}
?>