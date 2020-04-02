<?php
session_start();
$email=$_SESSION['doctor'];
//echo $email;
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;
include("connect.php");
$query="select password from tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pp=$row['password'];
}
if($op==$pp)
{
	if($op==$np)
	{
		header("Location:dchange.php?msg=2");
	}
	else if($np==$cnp)
	{
		$update="update tbl_doctor set password='$cnp' where email='$email'";
		mysql_query($update);
		session_destroy();
		header("Location:login.php?msg=4");
	}
	else
	{
		header("Location:dchange.php?msg=2");
	}
}
else
{
	header("Location:dchange.php?msg=1");
}
?>