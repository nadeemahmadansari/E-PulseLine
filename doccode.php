<?php
$name=$_POST['name'];
//echo $name;
$gender=$_POST['a'];
//echo $gender;
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
$address=$_POST['address'];
//echo $address;
$mobile=$_POST['mobile'];
//echo $mobile;
$fees=$_POST['fees'];
//echo $fees;
$spcl=$_POST['spcl'];
//echo $spcl;
$timing=$_POST['timing'];
//echo $timing;
$filename=$_FILES['file']['name'];
//echo $filename;
$type=$_FILES['file']['type'];
//echo $type;
$size=$_FILES['file']['size'];
//echo $size;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$location="doctor/";
include("connect.php");
$query="insert into tbl_doctor(name,gender,email,password,address,mobile,fees,speciality,timing,pic,date) values ('$name','$gender','$email','$password','$address','$mobile','$fees','$spcl','$timing','$filename',curdate())";
if(mysql_query($query))
{
echo "<script>
window.location.href='doctor.php';
alert('Successfully Registered');
</script>";
}
else
{
	echo mysql_error();
}
move_uploaded_file($tmp_name,$location.$filename);
?>