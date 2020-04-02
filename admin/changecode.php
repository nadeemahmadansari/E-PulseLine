<?php
session_start();
$email=$_SESSION['admin'];
//echo $email;
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;
include("../connect.php");
$query="select password from tbl_admin where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pp=$row['password'];
}
if($op==$pp)
{
	if($op==$np)
	{
		header("Location:change.php?msg=2");
	}
	else if($np==$cnp)
	{
		$update="update tbl_admin set password='$cnp' where email='$email'";
		mysql_query($update);
		session_destroy();
		header("Location:index.php?msg=3");
	}
	else
	{
		header("Location:change.php?msg=2");
	}
}
else
{
	header("Location:change.php?msg=1");
}
?>