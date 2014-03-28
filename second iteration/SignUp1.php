<!DOCTYPE html>
<html>
	<head>
		<title>SignUp.php</title>
		<link href = "empty.jpg" rel="icon" type="image/jpg">
	</head>
	<style>

	select
	{
		font-family:times roman;
		font-size : 17px;
		border :1px;
		border-radius: 4px;
		border-radius: 4px;
		-moz-border-radius: 4px;
		-webkit-border-radius: 4px;
		box-shadow: 0px 0px 10px #d9d9d9;
		-moz-box-shadow: 0px 0px 10px #d9d9d9;
		-webkit-box-shadow: 0px 0px 10px #d9d9d9;
	}
	select:hover {
			outline: none;
			border: 1px solid #596380;
			box-shadow: 0px 0px 8px #596380;
			-moz-box-shadow: 0px 0px 8px #596380;
			-webkit-box-shadow: 0px 0px 8px #596380;
		}
		select:focus {
			outline: none;
			border: 1px solid #7bc1f7;
			box-shadow: 0px 0px 8px #7bc1f7;
			-moz-box-shadow: 0px 0px 8px #7bc1f7;
			-webkit-box-shadow: 0px 0px 8px #7bc1f7;
		}
	input[type="text"]
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
		input[type="text"]:hover {
			outline: none;
			border: 1px solid #596380;
			box-shadow: 0px 0px 10px #596380;
			-moz-box-shadow: 0px 0px 10px #596380;
			-webkit-box-shadow: 0px 0px 10px #596380;
		}
		input[type="text"]:focus {
			outline: none;
			border: 1px solid #7bc1f7;
			box-shadow: 0px 0px 8px #7bc1f7;
			-moz-box-shadow: 0px 0px 8px #7bc1f7;
			-webkit-box-shadow: 0px 0px 8px #7bc1f7;
		}
		input[type="SomeId"]
		{
		font-family:times roman;
			border: 1px solid #c4c4c4;
			height: 25px; width: 400px;
			font-size: 17px;
			padding: 4px 4px 4px 4px;
			border-radius: 4px;
			-moz-border-radius: 4px;
			-webkit-border-radius: 4px;
			box-shadow: 0px 0px 8px #d9d9d9;
			-moz-box-shadow: 0px 0px 8px #d9d9d9;
			-webkit-box-shadow: 0px 0px 8px #d9d9d9;
		}
		input[type="SomeId"]:hover {
			outline: none;
			border: 1px solid #596380;
			box-shadow: 0px 0px 10px #596380;
			-moz-box-shadow: 0px 0px 10px #596380;
			-webkit-box-shadow: 0px 0px 10px #596380;
		}
		input[type="SomeId"]:focus {
			outline: none;
			border: 1px solid #7bc1f7;
			box-shadow: 0px 0px 8px #7bc1f7;
			-moz-box-shadow: 0px 0px 8px #7bc1f7;
			-webkit-box-shadow: 0px 0px 8px #7bc1f7;
		}
		input[type="Email"]
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
		input[type="Email"]:hover {
			outline: none;
			border: 1px solid #596380;
			box-shadow: 0px 0px 10px #596380;
			-moz-box-shadow: 0px 0px 10px #596380;
			-webkit-box-shadow: 0px 0px 10px #596380;
		}
		input[type="Email"]:focus {
			outline: none;
			border: 1px solid #7bc1f7;
			box-shadow: 0px 0px 8px #7bc1f7;
			-moz-box-shadow: 0px 0px 8px #7bc1f7;
			-webkit-box-shadow: 0px 0px 8px #7bc1f7;
		}

		table
		{
			border-collapse:collapse;
		}
		table
		{
			background: rgba(255,255,255,0.5);
			border:0px solid green;
			box-shadow: 0px 0px 15px black;
		}
		table
		{

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
		p.heading1{font-family: "times roman", sans-serif;font-size:1.8em;color:#000000;position:absolute;top:30px;left:550px;}
		p.heading2{font-family:"Times New Roman";font-size:1.5em; color:#000000;position:absolute;top:100px;left:700px;}
        	p.head{font-family:"times roman", sans-serif;font-size:1.1em;}
          #logo (
                position:absolute;
              left:10px;
              top:10px;
            }
              body
 	{
            height:100%;
            width:100%;
            background-image:url(Background2.jpg);/*your background image*/
            background-repeat:no-repeat;/*we want to have one single image not a repeated one*/
            background-size:cover;/*this sets the image to fullscreen covering the whole screen*/
                 /*css hack for ie*/
    //        filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.image.jpg',sizingMethod='scale');
    //        -ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.jpg',sizingMethod='scale')";
	}
</style>
	<body>
                <img src = "Logo.png" width = "150" height = "150" id = "Logo">
       		<p class = "heading1" align = "center">ONLINE RECUITMENT PORTAL</p>
		<p class = "heading2" align = "center">IIT INDORE<br></p>
	</body>
<style>
body
{
   height:100%;
   width:100%;
   background-image:url(Background11.jpg);/*your background image*/
   background-repeat:no-repeat;/*we want to have one single image not a repeated one*/
   background-size:cover;/*this sets the image to fullscreen covering the whole screen*/
   /*css hack for ie*/
   filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.image.jpg',sizingMethod='scale');
   -ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.jpg',sizingMethod='scale')";
}
</style>
<body>
		<form method = "post" action = "Update.php">
		<table align="center" width = "800">
			<tr>
				<th height = "40" width = "180"><p class = "head">&nbsp;&nbsp;&nbsp;&nbsp;Sign Up Details </p></th>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "one">First Name*</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="firstname" type="text" id="firstname" size="35" required></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "two" >Middle Name</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="middlename" type="text" id="middlename" size="35"></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "three">Last Name*</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="lastname" type="text" id="lastname" size="35" required></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "eleven">Gender*</p></td>
				<td width = "7">:</td>
				<td width = "300">
				<select name="Gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				</td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "four">Username*</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="username" type="text" id="username" size="35"  required></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "five">Date of Birth*</p></td>
				<td width = "7">:</td>
				<td width = "300">
				<select name="Date">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<select name="Month">
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<select name="Year">	
					<?php
					for($i=1950;$i<=2000;$i++)
					{
						echo '<option value='.$i.'>'.$i.'</option>';
					}
					?>
				</select>
				<img src = "calendar.png" height = "25" width = "25">
				</td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "six">City/Town*</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="CityTown" type="text" id="CityTown" size="35" required></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "seven">Country*</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="Country" type="text" id="Country" size="35" required></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "eight">Postal/Zip Code*</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="PostalZip" type="SomeId" id="PostalZip" size="35" onkeypress="return isNumberKey(event)"  required></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "nine">Mobile No.*</p></td>
				<td width = "7">:</td>
				<td width = "300">
				<script type='text/javascript'>
					function isNumberKey(evt)
					{
						var charCode = (evt.which) ? evt.which : event.keyCode
						if (charCode > 31 && (charCode < 48 || charCode > 57))
							return false;
						return true;
					}
				</script><input name="Mobile" type="SomeId" id="Mobile" size="35" onkeypress="return isNumberKey(event)"  required></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "ten">E-mail ID*</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="Email" type="email" id="Email" size="35"  required></td>
			</tr>
			<tr>
                 <td width = "80" colspan = "2"></td>
                 <td width ="80">
                 <img id="imgCaptcha" src="create_image.php"/>
                 </td>
                 <tr>
                 <td align="left">
                 <label for="captcha">Captcha</label>
                 </td>
                 <td width = "7">:</td>
                 <td width ="300">
                 <input id="txtCaptcha" type="text" name="txtCaptcha" value="" maxlength="8" size="32" />
                 </td>                      
			</tr>
				<td  height = "50" ><input type="image" src="Sign.png" alt="Submit" width = "75" height = "30"></td>
				<td></td>
				<td><p class = "thirteen" align = "right" color = "RED">(*) mandatory fields</p></td>
		</table>
		</form>
	</body>
</html>