<?php
 session_start();
 if(!(isset($_SESSION['loginsession'])))
 echo "<script>window.open('login.php','_self');</script>";
 ?>
 <!DOCTYPE html>
<html>
	<head>
		<title>Application1.php</title>
	</head>
	<style>
	
	select
	{
		font-family:cursive;
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
	textarea
		{ 
			border: 1px solid #c4c4c4; 
			height: 95px; 
			font-size: 13px; 
			padding: 4px 4px 4px 4px; 
			border-radius: 4px; 
			-moz-border-radius: 4px; 
			-webkit-border-radius: 4px; 
			box-shadow: 0px 0px 8px #d9d9d9; 
			-moz-box-shadow: 0px 0px 8px #d9d9d9; 
			-webkit-box-shadow: 0px 0px 8px #d9d9d9; 
		}
		textarea:hover { 
			outline: none; 
			border: 1px solid #596380; 
			box-shadow: 0px 0px 10px #596380; 
			-moz-box-shadow: 0px 0px 10px #596380; 
			-webkit-box-shadow: 0px 0px 10px #596380; 
		}	
		textarea:focus { 
			outline: none; 
			border: 1px solid #7bc1f7; 
			box-shadow: 0px 0px 8px #7bc1f7; 
			-moz-box-shadow: 0px 0px 8px #7bc1f7; 
			-webkit-box-shadow: 0px 0px 8px #7bc1f7; 
		} 
	input[type="text"]
		{ 
			border: 1px solid #c4c4c4; 
			height: 25px; 
			font-size: 13px; 
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
			border: 1px solid #c4c4c4; 
			height: 25px; 
			font-size: 13px; 
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
			border: 1px solid #c4c4c4; 
			height: 25px; 
			 
			font-size: 13px; 
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
		
		table.table1
		{
			border-collapse:collapse;
			position : absolute;
			top: 178px;
			left : 184px;
		}
		table.photo
		{
		border:1px solid green;
			border-collapse:collapse;
			position : absolute;
			top: 178px;
			right : 166px;
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
		table.table1 td
		{
				text-align:left;
		}
		table.table2 td
		{
				text-align:center;
		}
		table.table8 td
		{
				text-align:center;
				vertical-align:middle;
		}
		table.table9 td
		{
				text-align:center;
				vertical-align:middle;
		}
		table.table4 td
		{
				text-align:center;
		}
		
		table.table8 th
		{
				text-align:left;
		}
		table.table2 th
		{
				text-align:left;
		}
		table.table3 th
		{
				text-align:left;
		}
		table.table9 th
		{
				text-align:left;
		}
		p.four{line-height:150%;}
		p.five{line-height:150%;}
		p.six{line-height:150%;}
		p.thirtyone{line-height:240%;}
		p.heading1{font-family: "Copperplate Gothic Light", sans-serif;font-size:1.8em;color:#ccecd8;} 
		p.heading2{font-family:"Times New Roman";font-size:1.5em; color:#ccecd8;} 
		p.head1{font-family:"Century Gothic", sans-serif;font-size:1.1em;color:white;}  
	</style>
	<body>
		<p class = "heading1" align = "center"><b>ONLINE FACULTY RECUITMENT PORTAL</b></p>
		<p class = "heading2" align = "center">IIT INDORE</p>
		<body background = "Background1.jpg">
		<br><br><br><br><br><br><br><br><br><br>
		<table class = "photo" height = "164" width = "164"><td><input type="file" name="pic" accept="image/*">
  <input type="submit"></td></table>
		<form method = "post" action = "Update.php">
		<table align="center"  class = "table1"width ="837">
			<tr>
				<td width = "200"><p class = "one">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Application</p></td>
				<td width = "50">:</td>
				<td width = "400">
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
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<select name="Year">	
					<?php
					for($i=2014;$i<=2015;$i++)
					{
						echo '<option value='.$i.'>'.$i.'</option>';
					}
					?>
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img src = "calendar.png" height = "25" width = "25">
				</td>
				
			</tr>
			<tr>
				<td width = "200" ><p class = "one">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Post Applied for</p></td>
				<td width = "50">:</td>
				<td width = "470">
				<select name="post">
					<option value="Option1">Option1</option>
					<option value="Option2">Option2</option>
					<option value="Option3">Option3</option>
					<option value="Option4">Option4</option>
					<option value="Option5">Option5</option>
					<option value="Option6">Option6</option>
					<option value="Option7">Option7</option>
				</select>
				</td>
			</tr>
			<tr>
				<td width = "200"><p class = "three">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Discipline</p></td>
				<td width = "50">:</td>
				<td width = "400">
				<select name="discipline">
					<option value="Computer Science and Engineering">Computer Science and Engineering</option>
					<option valuxe="Mechanical Engineering">Mechanical Engineering</option>
					<option value="Electrical Engineering">Electrical Engineering</option>
					<option value="Physics">Physics</option>
					<option value="Chemistry">Chemistry</option>
					<option value="Mathematics">Mathematics</option>
					<option value="Humanities and Social Science">Humanities and Social Science</option>
					<option value="Astrophysics">Astrophysics</option>
					<option value="Biosciences and Biomedical Engineering">Biosciences and Biomedical Engineering</option>
					<option value="Surface Science and Engineering">Surface Science and Engineering</option>
				</select>
				</td>
			</tr>
		</table> 
		<table align="center"  class = "table2"width ="1000">
		<tr>
		<tr>
			<td width = "307"><p class ="four">First Name<br>
			<input name="firstname" type="text" id="firstname" size = "25" required></p></td>
			<td width = "308" ><p class ="five">Middle Name<br>
			<input name="middlename" type="text" id="middlename" size = "25" required></p></td>
			<td width = "307" ><p class ="six">Last Name<br>
			<input name="lastname" type="text" id="lastname" size = "25" required></p></td>
		</tr>
		</table>
		<table align = "center" class = "table3"width ="1000">
		<tr>
		<th width = "930" height = "50" colspan = "5"><p class = "thirty">Personal Details:</th>
		</tr>
		<tr>
				<td width = "80" height = "50" ><p class = "seven">Date of Birth</p></td>
				<td width = "7">:</td>
				<td width = "260" >
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
				<td width = "115" height = "50" ><p class = "eight">Gender</p></td>
				<td width = "7">:</td>
				<td width = "122">
				<select name="Gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				</td>
				</td>
				<td width = "135" height = "50" ><p class = "nine">Marital Status</p></td>
				<td width = "7">:</td>
				<td width = "140">
				<select name="maritalstatus">
					<option value="Single">Single</option>
					<option value="Married">Married</option>
					<option value="Widowed">Widowed</option>
					<option value="Separated">Separated</option>
					<option value="Divorced">Divorced</option>
				</select>
				</td>
			</tr>
			<tr>
			<tr>
			<td width = "83" height = "50" ><p class = "twentyone">Category(*)</p></td>
			
				<td width = "7">:</td>
				<td width = "89" >
				<select name = "category">
					<option value="General">General</option>
					<option value="ST">Scheduled Tribe(ST)</option>
					<option value="SC">Scheduled Caste(SC)</option>
					<option value="OBC">Other Backward Classes(OBC)</option></td>
				<td width = "97" height = "50" ><p class = "eleven">Nationality</p></td>
				<td width = "7">:</td>
				<td width = "143" ><input name="Nationality" type="text" id="nationality" size="15"  STYLE="color: black;"required></td>
				<td width = "80" height = "50" ><p class = "ten">Age  <i>(in years)</i></p></td>
				<td width = "7">:</td>
				<td width = "140">
				<script type='text/javascript'>
					function isNumberKey(evt)
					{
						var charCode = (evt.which) ? evt.which : event.keyCode
						if (charCode > 31 && (charCode < 48 || charCode > 57))
							return false;
						return true;
					}
				</script><input name="Age" type="SomeId" id="Age" size="10" onkeypress="return isNumberKey(event)"  required>yrs</td>
					
			</tr>
			<tr>
			<td width = "83" height = "50" colspan = "9"><p class = "thirtytwo"><i>(*)Please upload the scanned certificate from the authority prescribed under government rules for SC/ST/OBC.</p></td>
						</i></td>
			</tr>	
		</table>
		<table class = "table4" align = "center"width ="1000"> 
		    <tr>
			<td width = "463"><p class ="twelve">Contact Address<br>
			<textarea name="contactadd" cols="40" rows="5"></textarea></p></td>
			<td width = "463" ><p class ="thirteen">Permanent Address<br>
			<textarea name="permanentadd" cols="40" rows="5"></textarea></p></td>
		</tr>
		</table>
		<table class = "table5" align = "center"width ="1000">
			<tr>
			 <td width = "80" height = "50" ><p class = "fourteen">Phone No.(Office)</p></td>
				<td width = "7">:</td>
				<td width = "212">
				<input name="phoneoff" type="SomeId" id="phoneoff" size="24" onkeypress="return isNumberKey(event)"  required></td>
			<td width = "80" height = "50" ><p class = "fifteen">Fax</p></td>
				<td width = "7">:</td>
				<td width = "212">
				<input name="fax" type="SomeId" id="fax" size="24" onkeypress="return isNumberKey(event)"  required></td>
			<td width = "80" height = "50" ><p class = "sixteen">Mobile no.</p></td>
				<td width = "7">:</td>
				<td width = "213">
				<input name="mobile" type="SomeId" id="mobile" size="24" onkeypress="return isNumberKey(event)"  required></td>
			</tr>
			<tr>
			<td width = "80" height = "50" ><p class = "seventeen">Phone No.(Res)</p></td>
				<td width = "7">:</td>
				<td width = "212">
				<input name="phoneres" type="SomeId" id="phoneres" size="24" onkeypress="return isNumberKey(event)"  required></td>
			<td width = "80" height = "50" ><p class = "eighteen">Email</p></td>
				<td width = "7">:</td>
				<td width = "212" colspan = "2">
				<input name="email" type="text" id="email" size="40" required></td>
			</tr>
		</table>
		<table align = "center" class  = "table8"width ="1000">
		<tr>
		<th width = "930" height = "50" colspan = "5"><p class = "twentytwo">Academic record starting with school leaving exam:<br>
		(Please upload scanned copies of transcripts/ mark sheets/ grade card and certificates for all your degrees):</th>
		</tr>
		<tr>
			<td width = "10"><p class ="twentythree">Specialization<br>/Discipline<br>
			<input name="specialization1" type="text" id="specialization1" size = "15" required><br>
			<input name="specialization2" type="text" id="specialization2" size = "15" required><br>
			<input name="specialization3" type="text" id="specialization3" size = "15" required><br>
			<input name="specialization4" type="text" id="specialization4" size = "15" required><br>
			<input name="specialization5" type="text" id="specialization5" size = "15" required><br>
			<input name="specialization6" type="text" id="specialization6" size = "15" required><br>
			<input name="specialization7" type="text" id="specialization7" size = "15" required></p></td>
			<td width = "100" ><p class ="twentyfour">College/University/Institute<br><br>
			<input name="CollUniIns1" type="text" id="CollUniIns1" size = "55" required><br>
			<input name="CollUniIns2" type="text" id="CollUniIns2" size = "55" required><br>
			<input name="CollUniIns3" type="text" id="CollUniIns3" size = "55" required><br>
			<input name="CollUniIns4" type="text" id="CollUniIns4" size = "55" required><br>
			<input name="CollUniIns5" type="text" id="CollUniIns5" size = "55" required><br>
			<input name="CollUniIns6" type="text" id="CollUniIns6" size = "55" required><br>
			<input name="CollUniIns7" type="text" id="CollUniIns7" size = "55" required></p></td>
			<td width = "10" ><p class ="twentyfive">Year of <br>Joining<br>
			<input name="YrJoin1" type="SomeId" id="YrJoin1" size = "5" onkeypress="return isNumberKey(event)" maxlength="4"required><br>
			<input name="YrJoin2" type="SomeId" id="YrJoin2" size = "5" onkeypress="return isNumberKey(event)" maxlength="4"required><br>
			<input name="YrJoin3" type="SomeId" id="YrJoin3" size = "5" onkeypress="return isNumberKey(event)" maxlength="4"required><br>
			<input name="YrJoin4" type="SomeId" id="YrJoin4" size = "5" onkeypress="return isNumberKey(event)" maxlength="4"required><br>
			<input name="YrJoin5" type="SomeId" id="YrJoin5" size = "5" onkeypress="return isNumberKey(event)" maxlength="4"required><br>
			<input name="YrJoin6" type="SomeId" id="YrJoin6" size = "5" onkeypress="return isNumberKey(event)" maxlength="4"required><br>
			<input name="YrJoin7" type="SomeId" id="YrJoin7" size = "5" onkeypress="return isNumberKey(event)" maxlength="4"required></p></td>
			<td width = "10" ><p class ="twentysix">Year of <br>Leaving<br>
			<input name="YrLeave1" type="SomeId" id="YrLeave1" size = "5" onkeypress="return isNumberKey(event)" maxlength="4"required><br>
			<input name="YrLeave2" type="SomeId" id="YrLeave2" size = "5" onkeypress="return isNumberKey(event)" maxlength="4"required><br>
			<input name="YrLeave3" type="SomeId" id="YrLeave3" size = "5" onkeypress="return isNumberKey(event)" maxlength="4"required><br>
			<input name="YrLeave4" type="SomeId" id="YrLeave4" size = "5" onkeypress="return isNumberKey(event)" maxlength="4"required><br>
			<input name="YrLeave5" type="SomeId" id="YrLeave5" size = "5" onkeypress="return isNumberKey(event)" maxlength="4"required><br>
			<input name="YrLeave6" type="SomeId" id="YrLeave6" size = "5" onkeypress="return isNumberKey(event)" maxlength="4"required><br>
			<input name="YrLeave7" type="SomeId" id="YrLeave7" size = "5" onkeypress="return isNumberKey(event)" maxlength="4"required></p></td>
			<td width = "10" ><p class ="twentyseven">Percentage<br>/CGPA<br>
			<input name="per1" type="SomeId" id="per1" size = "5" onkeypress="return isNumberKey(event)" maxlength="2"required><br>
			<input name="per2" type="SomeId" id="per2" size = "5" onkeypress="return isNumberKey(event)" maxlength="2"required><br>
			<input name="per3" type="SomeId" id="per3" size = "5" onkeypress="return isNumberKey(event)" maxlength="2"required><br>
			<input name="per4" type="SomeId" id="per4" size = "5" onkeypress="return isNumberKey(event)" maxlength="2"required><br>
			<input name="per5" type="SomeId" id="per5" size = "5" onkeypress="return isNumberKey(event)" maxlength="2"required><br>
			<input name="per6" type="SomeId" id="per6" size = "5" onkeypress="return isNumberKey(event)" maxlength="2"required><br>
			<input name="per7" type="SomeId" id="per7" size = "5" onkeypress="return isNumberKey(event)" maxlength="2"required></p></td>
		</tr>
		</table>
		<table align = "center" class = "table6"width ="1000">
			<tr>
			 <td width = "160" height = "50" ><p class = "nineteen">Areas of Specialization</p></td>
				<td width = "30">&nbsp;&nbsp;:</td>
				<td width = "685" colspan = "4">
				<input name="specs" type="text" id="specs" size="97" required></td>
			</tr>
			<tr>
			 <td width = "207" height = "50" ><p class = "nineteen">Current Area of Specialization</p></td>
				<td width = "30">&nbsp;&nbsp;:</td>
				<td width = "685" colspan = "4">
				<input name="specs" type="text" id="specs" size="97" required></td>
			</tr>
		</table>			
		<table align = "center" class  = "table8"width ="1000">
		<tr>
		<th width = "80" height = "50" colspan = "5"><p class = "twentytwo">Present Employment Details: </th>
		</tr>
			<tr>
			 <td width = "80" height = "50" ><p class = "twentythree">Designation</p></td>
				<td width = "7">:</td>
				<td width = "212">
				<input name="designation" type="text" id="designation" size="24" required></td>
			<td width = "80" height = "50" ><p class = "twentyfour">Organization</p></td>
				<td width = "7">:</td>
				<td width = "212">
				<input name="organization" type="text" id="organization" size="24" required></td>
			<td width = "80" height = "50" ><p class = "twentyfive">Pay in Rs.</p></td>
				<td width = "7">:</td>
				<td width = "212">
				<input name="payinrs" type="SomeId" id="payinrs" size="24" onkeypress="return isNumberKey(event)"  required></td>
			</tr>
			<tr>
			<td width = "80" height = "50" ><p class = "twentyseven">Date of joining</p></td>
				<td width = "7">:</td>
				<td width = "212">
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
				<select name="Year">	
					<?php
					for($i=1950;$i<=2014;$i++)
					{
						echo '<option value='.$i.'>'.$i.'</option>';
					}
					?>
				</select>
				</td>
			<td width = "80" height = "50" ><p class = "twentyeight">Scale of Pay in Rs.</p></td>
				<td width = "7">:</td>
				<td width = "212" >
				<input name="scaleinrs" type="SomeId" id="scaleinrs" size="24" onkeypress="return isNumberKey(event)"  required></td>
			<td width = "80" height = "50" ><p class = "twentynine">Total Emoluments (per month) in Rs.</p></td>
				<td width = "7">:</td>
				<td width = "212" >
				<input name="emoinrs" type="SomeId" id="emoinrs" size="24" onkeypress="return isNumberKey(event)"  required></td>
			</tr>
		</table>
		<table align = "center" class = "table7" width ="1000">
			<tr>
			 <td width = "207" height = "50" ><p class = "twenty">Basic Pay Expected by IITI as per advertisement, Rs</p></td>
				<td width = "30">&nbsp;&nbsp;:</td>
				<td width = "685" colspan = "4">
				<input name="rupees" type="SomeId" id="rupees" size="105" onkeypress="return isNumberKey(event)" required></td>
			</tr>
		</table>
		</table>
		<table align = "center" class  = "table9"width ="1000">
		<tr>
		<th width = "930" height = "50" colspan = "5"><p class = "thirty">Information of three Referees:<br>
		(Names and contact details of referees who would be willing to write in support of your application):</th>
		</tr>
		<tr>
			<td width = "10"><p class ="thirtyone"><br>
			Name<br>
			Designation<br>
			Organization/Institute<br>
			Address Line 1<br>
			Address Line 2<br>
			Address Line 3<br>
			Telephone No.<br>
			E-Mail ID</p></td>
			<td width = "100" ><p class ="thirtyone">Referee1<br>
			<input name="Rname1" type="text" id="Rname1" size = "34" required><br>
			<input name="Rdesignation1" type="text" id="Rdesignation1" size = "34" required><br>
			<input name="Rorgan1" type="text" id="Rorgan1" size = "34" required><br>
			<input name="Raddress11" type="text" id="Raddress11" size = "34" required><br>
			<input name="Raddress21" type="text" id="Raddress21" size = "34" required><br>
			<input name="Raddress31" type="text" id="Raddress31" size = "34" required><br>
			<input name="Rtelephone1" type="someID" id="Rtelephone1" onkeypress="return isNumberKey(event)" size = "34" maxlength="10" required><br>
			<input name="Remail1" type="text" id="Remail1" size = "34" required><br></p></td>
			<td width = "10" ><p class ="thirtyone">Referee2<br>
			<input name="Rname2" type="text" id="Rname2" size = "34" required><br>
			<input name="Rdesignation2" type="text" id="Rdesignation2" size = "34" required><br>
			<input name="Rorgan2" type="text" id="Rorgan2" size = "34" required><br>
			<input name="Raddress12" type="text" id="Raddress12" size = "34" required><br>
			<input name="Raddress22" type="text" id="Raddress22" size = "34" required><br>
			<input name="Raddress32" type="text" id="Raddress32" size = "34" required><br>
			<input name="Rtelephone2" type="Someid" id="Rtelephone2" onkeypress="return isNumberKey(event)" size = "34" maxlength="10"required><br>
			<input name="Remail2" type="text" id="Remail2" size = "34" required><br></p></td>
			<td width = "10" ><p class ="thirtyone">Referee3<br>
			<input name="Rname3" type="text" id="Rname3" size = "34" required><br>
			<input name="Rdesignation3" type="text" id="Rdesignation3" size = "34" required><br>
			<input name="Rorgan3" type="text" id="Rorgan3" size = "34" required><br>
			<input name="Raddress13" type="text" id="Raddress13" size = "34" required><br>
			<input name="Raddress23" type="text" id="Raddress23" size = "34" required><br>
			<input name="Raddress33" type="text" id="Raddress33" size = "34" required><br>
			<input name="Rtelephone3" type="someId" id="Rtelephone3" onkeypress="return isNumberKey(event)" size = "34" maxlength="10"required><br>
			<input name="Remail3" type="text" id="Remail3" size = "34" required><br></p></td>
		</tr>
		</table>
		<table align = "center" class  = "table9"width ="1000">
		<tr>
		<th width = "930" height = "50" colspan = "5"><p class = "thirtythree"><input type="checkbox" name="vehicle" value="Bike">&nbsp;&nbsp;&nbsp;I hereby declare that I have carefully read and understood the instructions and particulars supplied to me, and that the entries in this form as well as in attached sheets are true to the best of my knowledge and belief.<br><a href = "Application2.php"><p class="lnk" align = "center">Go to next page.</p></a></th>
		</tr>
		</table>
		</form>
	</body>
</html>