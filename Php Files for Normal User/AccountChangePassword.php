<?php
 session_start();
 if(!(isset($_SESSION['loginsession'])))
 echo "<script>window.open('login.php','_self');</script>";
 ?>
 <!DOCTYPE html>
<html>
	<head>
		<title>Account.php</title>
		<link href = "empty.jpg" rel="icon" type="image/jpg"> 
	</head>
	<style>
	p.two
	{
		font-family:"Arial";font-size:1.2em;color:yellow;
		position:absolute;
		left:220px;
		top:100px;
	}
	.classname1 
	{
		-moz-box-shadow:inset -1px -1px 19px 0px #cae3fc;
		-webkit-box-shadow:inset -1px -1px 19px 0px #cae3fc;
		box-shadow:inset -1px -1px 19px 0px #cae3fc;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #4197ee) );
		background:-moz-linear-gradient( center top, #79bbff 5%, #4197ee 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#4197ee');
		background-color:#79bbff;
		-webkit-border-top-left-radius:3px;
		-moz-border-radius-topleft:3px;
		border-top-left-radius:3px;
		-webkit-border-top-right-radius:3px;
		-moz-border-radius-topright:3px;
		border-top-right-radius:3px;
		-webkit-border-bottom-right-radius:3px;
		-moz-border-radius-bottomright:3px;
		border-bottom-right-radius:3px;
		-webkit-border-bottom-left-radius:3px;
		-moz-border-radius-bottomleft:3px;
		border-bottom-left-radius:3px;
		text-indent:0;
		border:2px solid #469df5;
		display:inline-block;
		color:#ffffff;
		font-family:Arial;
		font-size:15px;
		font-weight:bold;
		font-style:normal;
		height:43px;
		line-height:43px;
		width:200px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 0px 0px #287ace;
		position:absolute;
		left:8px;
		top:103px;
	}
	.classname1:hover 
	{
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4197ee), color-stop(1, #79bbff) );
		background:-moz-linear-gradient( center top, #4197ee 5%, #79bbff 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#4197ee', endColorstr='#79bbff');
		background-color:#4197ee;
	}
	.classname1:active 
	{
		background:#7fb4c3;
	}
	.classname2 
	{
		-moz-box-shadow:inset -1px -1px 19px 0px #cae3fc;
		-webkit-box-shadow:inset -1px -1px 19px 0px #cae3fc;
		box-shadow:inset -1px -1px 19px 0px #cae3fc;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #4197ee) );
		background:-moz-linear-gradient( center top, #79bbff 5%, #4197ee 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#4197ee');
		background-color:#79bbff;
		-webkit-border-top-left-radius:3px;
		-moz-border-radius-topleft:3px;
		border-top-left-radius:3px;
		-webkit-border-top-right-radius:3px;
		-moz-border-radius-topright:3px;
		border-top-right-radius:3px;
		-webkit-border-bottom-right-radius:3px;
		-moz-border-radius-bottomright:3px;
		border-bottom-right-radius:3px;
		-webkit-border-bottom-left-radius:3px;
		-moz-border-radius-bottomleft:3px;
		border-bottom-left-radius:3px;
		text-indent:0;
		border:2px solid #469df5;
		display:inline-block;
		color:#ffffff;
		font-family:Arial;
		font-size:15px;
		font-weight:bold;
		font-style:normal;
		height:43px;
		line-height:43px;
		width:200px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 0px 0px #287ace;
		position:absolute;
		left:8px;
		top:153px;
	}
	.classname2:hover 
	{
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4197ee), color-stop(1, #79bbff) );
		background:-moz-linear-gradient( center top, #4197ee 5%, #79bbff 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#4197ee', endColorstr='#79bbff');
		background-color:#4197ee;
	}
	.classname2:active 
	{
		background:#7fb4c3;
	}
	.classname3 
	{
		-moz-box-shadow:inset -1px -1px 19px 0px #cae3fc;
		-webkit-box-shadow:inset -1px -1px 19px 0px #cae3fc;
		box-shadow:inset -1px -1px 19px 0px #cae3fc;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #4197ee) );
		background:-moz-linear-gradient( center top, #79bbff 5%, #4197ee 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#4197ee');
		background-color:#79bbff;
		-webkit-border-top-left-radius:3px;
		-moz-border-radius-topleft:3px;
		border-top-left-radius:3px;
		-webkit-border-top-right-radius:3px;
		-moz-border-radius-topright:3px;
		border-top-right-radius:3px;
		-webkit-border-bottom-right-radius:3px;
		-moz-border-radius-bottomright:3px;
		border-bottom-right-radius:3px;
		-webkit-border-bottom-left-radius:3px;
		-moz-border-radius-bottomleft:3px;
		border-bottom-left-radius:3px;
		text-indent:0;
		border:2px solid #469df5;
		display:inline-block;
		color:#ffffff;
		font-family:Arial;
		font-size:15px;
		font-weight:bold;
		font-style:normal;
		height:43px;
		line-height:43px;
		width:200px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 0px 0px #287ace;
		position:absolute;
		left:8px;
		top:203px;
	}
	.classname3:hover 
	{
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4197ee), color-stop(1, #79bbff) );
		background:-moz-linear-gradient( center top, #4197ee 5%, #79bbff 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#4197ee', endColorstr='#79bbff');
		background-color:#4197ee;
	}
	.classname3:active 
	{
		background:#7fb4c3;
	}
	.classname4 
	{
		-moz-box-shadow:inset -1px -1px 19px 0px #cae3fc;
		-webkit-box-shadow:inset -1px -1px 19px 0px #cae3fc;
		box-shadow:inset -1px -1px 19px 0px #cae3fc;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #4197ee) );
		background:-moz-linear-gradient( center top, #79bbff 5%, #4197ee 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#4197ee');
		background-color:#79bbff;
		-webkit-border-top-left-radius:3px;
		-moz-border-radius-topleft:3px;
		border-top-left-radius:3px;
		-webkit-border-top-right-radius:3px;
		-moz-border-radius-topright:3px;
		border-top-right-radius:3px;
		-webkit-border-bottom-right-radius:3px;
		-moz-border-radius-bottomright:3px;
		border-bottom-right-radius:3px;
		-webkit-border-bottom-left-radius:3px;
		-moz-border-radius-bottomleft:3px;
		border-bottom-left-radius:3px;
		text-indent:0;
		border:2px solid #469df5;
		display:inline-block;
		color:#ffffff;
		font-family:Arial;
		font-size:15px;
		font-weight:bold;
		font-style:normal;
		height:43px;
		line-height:43px;
		width:200px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 0px 0px #287ace;
		position:absolute;
		left:8px;
		top:253px;
	}
	.classname4:hover 
	{
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4197ee), color-stop(1, #79bbff) );
		background:-moz-linear-gradient( center top, #4197ee 5%, #79bbff 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#4197ee', endColorstr='#79bbff');
		background-color:#4197ee;
	}
	.classname4:active 
	{
		background:#7fb4c3;
	}
	.classname5 
	{
		-moz-box-shadow:inset -1px -1px 19px 0px #cae3fc;
		-webkit-box-shadow:inset -1px -1px 19px 0px #cae3fc;
		box-shadow:inset -1px -1px 19px 0px #cae3fc;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #4197ee) );
		background:-moz-linear-gradient( center top, #79bbff 5%, #4197ee 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#4197ee');
		background-color:#79bbff;
		-webkit-border-top-left-radius:3px;
		-moz-border-radius-topleft:3px;
		border-top-left-radius:3px;
		-webkit-border-top-right-radius:3px;
		-moz-border-radius-topright:3px;
		border-top-right-radius:3px;
		-webkit-border-bottom-right-radius:3px;
		-moz-border-radius-bottomright:3px;
		border-bottom-right-radius:3px;
		-webkit-border-bottom-left-radius:3px;
		-moz-border-radius-bottomleft:3px;
		border-bottom-left-radius:3px;
		text-indent:0;
		border:2px solid #469df5;
		display:inline-block;
		color:#ffffff;
		font-family:Arial;
		font-size:15px;
		font-weight:bold;
		font-style:normal;
		height:43px;
		line-height:43px;
		width:200px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 0px 0px #287ace;
		position:absolute;
		left:8px;
		top:303px;
	}
	.classname5:hover 
	{
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4197ee), color-stop(1, #79bbff) );
		background:-moz-linear-gradient( center top, #4197ee 5%, #79bbff 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#4197ee', endColorstr='#79bbff');
		background-color:#4197ee;
	}
	.classname5:active 
	{
		background:#7fb4c3;
	}
	p.one
	{
		font-family:"Times New Roman";font-size:1.2em;color:Black;
		position:absolute;
		right:20px;
		top:45px;
	}
	hr.hOne
	{
	position:absolute;
	top:84px;
	color: black; background:black; width: 98.8%; height: 5px;
	border: black;
	}
	</style>
	<body>
		<div style="background-color:#00d2ff;">
			<img src="Picture1.png" width = "727px" height = "79px"><p class = "one">welcome user&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="Logout.php">Log Out</a></p>
			<hr class ="hOne">
		</div>
		<a href="AccountVacancy.php"><button class = "classname1" >Vacancy</button></a>
		<a href="AccountSaved.php"><button class = "classname2">Saved Forms</button></a>
		<a href="AccountSubmitted.php"><button class = "classname3">Submitted Forms</button></a>
		<a href="AccountProfile.php"><button class = "classname4">Profile</button></a>
		<a href="AccountChangePassword.php"><button class = "classname5">Change Password</button></a>
		<body background = "Background1.jpg">
		<p class = 'two'>Here can change the account password.</p>
	</body>
</html>
		
