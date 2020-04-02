<?php
$name=$_POST['name'];
//echo $name;
$email=$_POST['email'];
//echo $email;
$mobile=$_POST['mobile'];
//echo $mobile;
$msg=$_POST['msg'];
//echo $msg;
include("connect.php");
$query="insert into tbl_contact(name,email,mobile,message,date) values('$name','$email','$mobile','$msg',curdate())";
mysql_query($query);
header("Location:contact.php");
?>