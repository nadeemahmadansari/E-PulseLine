<?php
session_start();
$email=$_SESSION['doctor'];
//echo $email;
$name=$_POST['name'];
//echo $name;
$gender=$_POST['a'];
//echo $gender;
$address=$_POST['address'];
//echo $address;
$mobile=$_POST['mobile'];
//echo $mobile;
$fees=$_POST['fees'];
//echo $fees;
$timing=$_POST['timing'];
//echo $timing;
include("connect.php");
$query="update tbl_doctor set name='$name',gender='$gender',address='$address',mobile='$mobile',fees='$fees',timing='$timing' where email='$email'";
if(mysql_query($query))
{
header("Location:dupdate.php?msg=1");
}
else
{
	mysql_error();
}
?>