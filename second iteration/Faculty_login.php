<!DOCTYPE html>
<html>
	<head>
		<title>Login.php</title>
		 <link href = "empty.jpg" rel="icon" type="image/jpg"> 
	</head>
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
	<img src = "Logo.png" width = "150" height = "150" id = "Logo">
		<p class = "heading1" align = "center">ONLINE FACULTY RECUITMENT PORTAL</p>
		<p class = "heading2" align = "center">IIT INDORE</p>
		<body background = "Background1.jpg" >
		<br><br>
		<form method = "post" action = "fvalidate.php">
		<table align="center" >
			<tr>
				<th height = "40" width = "200"><p class = "head">&nbsp;&nbsp;&nbsp;&nbsp;Faculty Login</p></th>
			</tr>
			<tr>
				<td width = "400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><input name="username" placeholder = "username" type="text" id="username" size = "45"><br>
					
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><input name="password" type="password" placeholder = "password" id="password" size = "45"><br></td>
			</tr><tr>
				<td  height = "50" ><br><button class = "myButton">Log In</a></button></td>
			</tr>
			<tr><td><br></td></tr>
		</table> 
		</form>
		<p  class ="three" align = "center" >Forgot Your Password Click Here&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	</body>
</html>