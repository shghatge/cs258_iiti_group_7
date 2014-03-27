<!DOCTYPE html>
<html>
	<head>
		<title>SignUp.php</title>
	</head>
	<style>
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
		p.heading1{font-family: "Copperplate Gothic Light", sans-serif;font-size:1.8em;color:#ccecd8;} 
		p.heading2{font-family:"Times New Roman";font-size:1.5em; color:#ccecd8;} 
		p.head{font-family:"Century Gothic", sans-serif;font-size:1.1em;} 
		p.one{font-family:"Times New Roman";} 
		p.two{font-family:"Times New Roman";} 
		p.three{font-family:"Times New Roman";font-size:1.5em; color:#ccecd8;} 
	</style>
	<body>
		<p class = "heading1" align = "center"><b>ONLINE RECUITMENT PORTAL</b></p>
		<p class = "heading2" align = "center">IIT INDORE</p>
		<body background = "Background.jpg">
		<form method = "post" action = "Update.php">
		<table align="center" >
			<tr>
				<th height = "40" width = "150"><p class = "head">&nbsp;&nbsp;&nbsp;&nbsp;Sign Up Details</p></th>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "four">First Name</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="firstname" type="text" id="firstname" size="35"></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "four" >Middle Name</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="middlename" type="text" id="middlename" size="35"></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "sixth">Last Name</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="lastname" type="text" id="lastname" size="35"></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "one">Username</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="username" type="text" id="username" size="35"></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "seventh">Date of Birth</p></td>
				<td width = "7">:</td>
				<td width = "300">
				<select name="Date">
					<option value="na">Date</option>
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
				</select>
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
				</select>
				<select name="year">	
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
				<td width = "80" height = "50" ><p class = "eighth">City/Town</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="CityTown" type="text" id="CityTown" size="35"></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "ninth">Country</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="Country" type="text" id="Country" size="35"></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "tenth">Postal/Zip Code</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="PostalZip" type="SomeId" id="PostalZip" size="35" onkeypress="return isNumberKey(event)"></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "eleventh">Mobile No.</p></td>
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
				</script><input name="Mobile" type="SomeId" id="Mobile" size="35" onkeypress="return isNumberKey(event)"></td>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "twelfth">E-mail ID</p></td>
				<td width = "7">:</td>
				<td width = "300"><input name="Email" type="email" id="Email" size="35"></td>
			</tr>
				<td  height = "50" ><input type="image" src="Submit.png" alt="Submit" ></td>
		</table> 
		</form>
	</body>
</html>