<?php
session_start();
$email=$_SESSION['patient'];
//echo $email;
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$gender=$_POST['a'];
//echo $gender;
$mobile=$_POST['mobile'];
//echo $mobile;
$age=$_POST['age'];
//echo $age;
$address=$_POST['address'];
//echo $address;
include("connect.php");
$query="update tbl_patient set name='$name',fname='$fname',gender='$gender',mobile='$mobile',age='$age',address='$address' where email='$email'";
mysql_query($query);
header("Location:pupdate.php?msg=1");
?>