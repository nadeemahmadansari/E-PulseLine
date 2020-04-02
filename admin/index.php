<?php
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<script src="../js/jquery-2.1.0.min.js" rel="javascript" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" rel="javascript" type="text/javascript"></script>
</head>
<body>
<div class="container-fluid" style="min-height:autos;">
<div class="row" style="min-height:700px;">
<div class="col-sm-2" style="min-height:700px;">
</div>
<div class="col-sm-8" style="min-height:700px;">
<center>
<div class="row" style="min-height:450px;width:500px;margin-top:150px;background-color:#a7ffeb;opacity:1;box-shadow:2px 2px 5px black;">
<form action="indexcode.php" method="post">
<h1>Admin Login</h1>
<br/>
<br/>
<br/>
<h4>Email</h4>
<input type="email" name="email" class="form-control" placeholder="Email" style="width:270px;"/>
<h4>Password</h4>
<input type="password" name="password" class="form-control" placeholder="Password" style="width:270px;"/>
<br/>
<input type="checkbox"/>&nbsp;<span style="font-size:15px;margin-right:0px;">Remember Me</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#"><span style="font-size:15px;margin-left:00px;">Forgot Password?<span></a>
<br/>
<br/>
<input type="submit" class="btn btn-default" value="Login"/>
</form>
</div>
</center>
</div>
<div class="col-sm-2" style="min-height:700px;">
</div>
</div>
</div>
</body>
</html>