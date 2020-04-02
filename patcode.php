<?php
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$gender=$_POST['a'];
//echo $gender;
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
$mobile=$_POST['mobile'];
//echo $mobile;
$age=$_POST['age'];
//echo $age;
$address=$_POST['address'];
//echo $address;
include("connect.php");
$query="insert into tbl_patient(name,fname,gender,email,password,mobile,age,address,date) values ('$name','$fname','$gender','$email','$password','$mobile','$age','$address',curdate())";
if(mysql_query($query))
{
	echo "<script>
window.location.href='doctor.php';
alert('Succesfully Registered');
</script>";
}
else
{
	echo mysql_error();
}
?>