<?php
$repid=$_POST['repid'];
//echo $repid;
$remark=$_POST['remark'];
//echo $remark;
include("connect.php");
$query="insert into tbl_remark(repid,remark,date) values ('$repid','$remark',curdate())";
mysql_query($query);
header("Location:dreport.php?msg=1");
?>