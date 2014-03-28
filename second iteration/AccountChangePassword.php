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
	table
		{
			position:absolute;
		left:258px;
		top:123px;
		}
	input[type="password"]
		{
		font-family:times roman;
			border: 1px solid #c4c4c4;
			height: 25px;
			width: 400px;
			font-size: 17px;
			padding: 4px 4px 4px 4px;
			border-radius: 4px;
			-moz-border-radius: 4px;
			-webkit-border-radius: 4px;
			box-shadow: 0px 0px 8px #d9d9d9;
			-moz-box-shadow: 0px 0px 8px #d9d9d9;
			-webkit-box-shadow: 0px 0px 8px #d9d9d9;
		}
		input[type="password"]:hover {
			outline: none;
			border: 1px solid #596380;
			box-shadow: 0px 0px 10px #596380;
			-moz-box-shadow: 0px 0px 10px #596380;
			-webkit-box-shadow: 0px 0px 10px #596380;
		}
		input[type="password"]:focus {
			outline: none;
			border: 1px solid #7bc1f7;
			box-shadow: 0px 0px 8px #7bc1f7;
			-moz-box-shadow: 0px 0px 8px #7bc1f7;
			-webkit-box-shadow: 0px 0px 8px #7bc1f7;}
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
		<form method = "post">
		<table align="center"  class = "table2"width ="1000">
		<tr>
			<td width = "207"><p class ="four">Current Password</td><td >:</td><td>
			<input name="cup" type="password" id="cup" size = "25" required></p></td></tr><tr>
			<td width = "207" ><p class ="five">New Password</td><td>:</td><td>
			<input name="np" type="password" id="np" size = "25" required></p></td></tr><tr>
			<td width = "207" ><p class ="six">Confirm Password</td><td>:</td><td>
			<input name="cop" type="password" id="cop" size = "25" required></p></td>
		</tr>
		</table>
	</form>
	</body>
</html>
		
