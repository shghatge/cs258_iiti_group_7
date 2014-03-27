 <!DOCTYPE html>
 <? require  'core.inc.php';
	require 'fac_con.inc.php';
	if (loggedo())
	{
		include 'Faculty_login.inc.php';
	}
	else
	{
?>
<html>
	<head>
		<title>Account.php</title>
		<link href = "empty.jpg" rel="icon" type="image/jpg"> 
	</head>
	<style>
	#buttons
	{
		max-width:200px;
	}
	#fields
	{	margin-top:10px;
	
		margin-left:300px;
		width:600px;
		float:right;
	}
	#buttons,#fields{
	float:left;
	}
	
	
	#fields.password{
		margin-left:800px;
	}
	label{
display:inline-block;
width:200px;
margin-right:30px;
text-align:right;
}

input{

}

fieldset{
border:none;
width:500px;
margin:0px auto;
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
    <style>
	::-webkit-input-placeholder { color:#565555; }
::-moz-placeholder { color:#565555; } 
:-ms-input-placeholder { color:#565555; } 
input:-moz-placeholder { color:#5655550; }
	input[type="text"]{
     
background:#4e9cc7; 
color: black; 
width: 220px; 
padding: 6px 15px 6px 35px; 
border-radius: 20px; 
box-shadow: 0 1px 0 #ccc inset; 
transition:500ms all ease; 
outline:0; 
} 
input[type="text"]:hover 
{ 
width:280px; 
}
	input[type="password"]{
     
background: #4e9cc7; 
color: black; 
width: 220px; 
padding: 6px 15px 6px 35px; 
border-radius: 20px; 
box-shadow: 0 1px 0 #ccc inset; 
transition:500ms all ease; 
outline:0; 
} 
input[type="password"]:hover 
{ 
width:280px; 
}

		table
		{
			border-collapse:collapse;
		}
		table
		{
			border:1px solid green;
		}
		table
		{
			background-color:white;
			color:black;
		}
		table
		{
			align:center;
		}
		th
		{
			text-align:left;
		}
		td
		{
			text-align:center;
		}
		td,th
		{
			vertical-align:middle;
		}
		p.heading1{font-family: "Algerian", sans-serif;font-size:2.8em;color:white;} 
		p.heading2{font-family:"Times New Roman";font-size:1.5em; color:#ccecd8;position:absolute;top:90px;left:625px;} 	
		p.head{font-family:"Century Gothic", sans-serif;font-size:1.1em;} 
		p.one{font-family:"Times New Roman";} 
		p.two{font-family:"Times New Roman";} 
		p.three{font-family:"Times New Roman";font-size:1em; color:#ccecd8;} 

.myButton {
	-moz-box-shadow:inset 0px 0px 16px 3px #a4e271;
	-webkit-box-shadow:inset 0px 0px 16px 3px #a4e271;
	box-shadow:inset 0px 0px 16px 3px #a4e271;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #89c403), color-stop(1, #77a809));
	background:-moz-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:-webkit-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:-o-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:-ms-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:linear-gradient(to bottom, #89c403 5%, #77a809 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#89c403', endColorstr='#77a809',GradientType=0);
	background-color:#89c403;
	-moz-border-radius:17px;
	-webkit-border-radius:17px;
	border-radius:17px;
	border:2px solid #74b807;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 110px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528009;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77a809), color-stop(1, #89c403));
	background:-moz-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-webkit-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-o-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-ms-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:linear-gradient(to bottom, #77a809 5%, #89c403 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77a809', endColorstr='#89c403',GradientType=0);
	background-color:#77a809;
}
.myButton:active {
	position:relative;
	top:1px;
}
#Logo{

position:absolute;
left:10px;

top:10px;

} 
body
	{height:100%;
   width:100%;
   background-image:url(Background1.jpg);/*your background image*/  
   background-repeat:no-repeat;/*we want to have one single image not a repeated one*/  
   background-size:cover;/*this sets the image to fullscreen covering the whole screen*/  
   /*css hack for ie*/     
   filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.image.jpg',sizingMethod='scale');
   -ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.jpg',sizingMethod='scale')";
	}
</style>
	<body>
		<div style="background-color:#00d2ff;">
			<img src="Picture1.png" width = "727px" height = "79px"><p class = "one">welcome user&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="Logout.php">Log Out</a></p>
			<hr class ="hOne">
		</div>
        <div id="buttons">
		<a href="Faculty_Account_Submitted_History.php"><button class = "classname1" >History</button></a>
		<a href="Faculty_Account_Profile.php"><button class = "classname2">Profile</button></a>
		<a href="Faculty_Account_Change_Password.php"><button class = "classname3">Change Password</button></a>
        </div>
        
		<body background = "Background1.jpg">
        <div id="fields">
        <form method="post" action="changeP.php" name="form1" >
        <fieldset>
        <table align="center" >
			<tr>
				<th height = "40" width = "200"><p class = "head">&nbsp;&nbsp;&nbsp;&nbsp;Change Password</p></th>
			</tr>
			<tr>
				<td width = "400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
    <input type="password"  id="old" name="old" placeholder="current password"><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
  <input type="password" id="new" name="new"  placeholder="new password"><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
      <input type="password" id="newc" name="newc"  placeholder="new password"> <br>
		
        </fieldset>
        </td>
			</tr><tr>
				<td  height = "50" ><br><button class = "myButton">Change Password</a></button></td>
			</tr>
			<tr><td><br></td></tr>
		</table> 
		</form>
       
      
        </div>
       
	</body>
</html>
		
<?php } ?>