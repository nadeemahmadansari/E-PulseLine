<?php
$docid=$_REQUEST['id'];
//echo $docid;
include("../connect.php");
$query="select status from tbl_doctor where docid='$docid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	if($row['status']=='y')
	{
		$update="update tbl_doctor set status='n' where docid='$docid'";
		mysql_query($update);
		header("Location:valdoctor.php");
	}
	if($row['status']=='n')
	{
		$update="update tbl_doctor set status='y' where docid='$docid'";
		mysql_query($update);
		header("Location:valdoctor.php");
	}
}
?>