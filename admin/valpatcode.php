<?php
$patid=$_REQUEST['id'];
//echo $patid;
include("../connect.php");
$query="select status from tbl_patient where patid='$patid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	if($row['status']=='y')
	{
		$update="update tbl_patient set status='n' where patid='$patid'";
		mysql_query($update);
		header("Location:valpatient.php");
	}
	if($row['status']=='n')
	{
		$update="update tbl_patient set status='y' where patid='$patid'";
		mysql_query($update);
		header("Location:valpatient.php");
	}
}
?>