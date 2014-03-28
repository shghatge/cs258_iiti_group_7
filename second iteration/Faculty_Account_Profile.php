 <!DOCTYPE html>
<html>
	<head>
    <? require  'core.inc.php';
	require 'fac_con.inc.php';
	if (loggedo())
	{
		include 'Faculty_login.inc.php';
	}
	else
	{
		$user_id = $_SESSION['user_id'];
		$depa = $_SESSION['department'];
		
?>
		<title>Account.php</title>
		<link href = "empty.jpg" rel="icon" type="image/jpg"> 
	</head>
	<style>
	label{
display:inline-block;
width:200px;
margin-right:30px;
text-align:right;
}

input{
color: #060;
height:60px;
width:200px;
}

fieldset{
border:none;
width:500px;
margin:0px auto;
}
	#wrapper{
		 width: 100%;
    border: 1px solid black;
    overflow: hidden;
	}
	#buttons{
		float:left;
		overflow:hidden;
	}
	#profile{
		float:right;
		max-width:300px;
		width:600px;
		max-height:500px;
		overflow:hidden;;
		
	}
	.img{
		max-height:500px;
	}
	#profile2{
		float:left;
		width:600px;
		height:100%;
		overflow:hidden;
		font-size:18px;
		color: #333;
	}
	
	
	
	
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
    <body background = "Background1.jpg">
		<div style="background-color:#00d2ff;">
			<img src="Picture1.png" width = "727px" height = "79px"><p class = "one">WELCOME&nbsp;&nbsp;<?php echo $_SESSION['firstname'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="logout.inc.php">Log Out</a></p>
			<hr class ="hOne">
		</div>
        <div id="wrapper">
        <div id="buttons">
		<a href="Faculty_Account_Submitted_History.php"><button class = "classname1" >History</button></a>
		<a href="Faculty_Account_Profile.php"><button class = "classname2">Profile</button></a>
		<a href="Faculty_Account_Change_Password.php"><button class = "classname3">Change Password</button></a>
        </div>
		
        <div id="profile">
        <?php if ($depa=='cse'){?>
        <img src="styles/cse.gif">
        <?php } else if ($depa=='ee'){?>
        <img src="styles/ee.jpg">
        <?php } else if ($depa=='me'){?>
        <img src="styles/me.gif">
        <?php }?>
        </div>
        <fieldset>
        <div id="profile2"><h1><?php if ($depa=="cse"){?> COMPUTER SCIENCE<?php }else if($depa=='ee'){?>ELECTRICAL ENGINEERING<?php }else if($depa=='me'){?>MECHANICAL ENGINEERING<?php }?></h1>
       <h2><label> NAME : </label> <input type="text" readonly value="<?php echo "	".$_SESSION["firstname"]."    ".$_SESSION["lastname"];?>"><br><br>
       <label> EMAIL ID : </label> <input type="text" readonly value="<?php echo "	".$_SESSION["email"];?>"><br><br>
       <label> MOBILE NUMBER : </label> <input type="text" readonly value="<?php echo "	".$_SESSION["mobile"]?>"><br><br>
		
        </h2>
        </fieldset>
        </div>
	</body>
</html>
<?php } ?>		
