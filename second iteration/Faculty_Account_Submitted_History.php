 <!DOCTYPE html>
<html>
	<head>
    <?php require  'core.inc.php';
	require 'fac_con.inc.php';
	if (loggedo())
	{
		include 'Faculty_login.inc.php';
	}
	else
	{
		$depa = $_SESSION['department'];
		
		$link2 = @mysqli_connect('localhost','root',NULL,'applicants') or die('connection error');
		$query2 = "SELECT * FROM forms WHERE dep = '$depa' ORDER BY 'submitted' DESC";
		$result2 = mysqli_query($link2,$query2);
		$result3 = mysqli_query($link2,$query2);
		if($result2)
		{
			//echo "yes  ";
			$rc = mysqli_num_rows($result2);
			$rows = mysqli_fetch_assoc($result2);
			//echo $rows['first_name']." ";
			//echo $rows['last_name'];
			$tor = mysqli_fetch_assoc($result3);
			do{
				$id = "read".$tor['form_id'];
				
				if(isset($_POST['$id']))
				{
					echo $id;
					echo 'yes';
				}
			}while($tor=
			mysqli_fetch_assoc($result3));
		}
		
		function run()
		{
			
		}
		
?>
		<title>Account.php</title>
		<link href = "empty.jpg" rel="icon" type="image/jpg"> 
	</head>
	<style>
	#buttons{
		
		left:8px;
		width:200px;
		height:43px;
	}
	#forms{
	
		margin-left:300px;
		height:100%;	 
		width:100%;
		border-color:#060;
		border-style:groove;
		border-radius:5px;
		color:#000;
		float:right;
	}
	
	#ind{
		padding:30px;
		margin-left:
		height:10%;
		border-color:#060;
		text-transform:capitalize;
		text-indent:hanging;
		word-spacing:5px;
		
	}
	
	#buttons,#forms{
		float:left;
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
		position: relative;
		float:inherit;
		
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
			<img src="Picture1.png" width = "727px" height = "79px"><p class = "one">WELCOME&nbsp;&nbsp;<?php echo $_SESSION['firstname'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="logout.inc.php">Log Out</a></p>
			<hr class ="hOne">
		</div>
		<p><a href="Faculty_Account_Submitted_History.php">
        <div id="buttons">
     
       <button class = "classname1" >History</button></a><br>
		<p><a href="Faculty_Account_Profile.php"><button class= "classname1">Profile</button></a><br>
		<p><a href="Faculty_Account_Change_Password.php"><button class = "classname1">Change Password</button></a><br>
        </div>
       
         
      
        </p></p>
		<body background = "Background1.jpg">
		<div id="forms">
		<?php do {$goDown = sprintf("download2.php?filename=%s",$rows['form_link']);?>
        <div id="ind">
        <?php if($rows['replied']==0){?>
        <br>NEW<br>
        <? } else {?>
        <br>REPLIED<br>
        <?php }?>
        <p>First Name : <?php echo $rows['first_name'];?><br>Last Name :    <?php echo $rows['last_name'];?><br>Submitted   &nbsp;&nbsp;&nbsp;: <?php echo $rows['submitted'];?><br>Download Link :  <a href="<?php echo $goDown;?>"><?php echo $rows['form_link'];?> </a></p>
       <?php if($rows['rd']==0){?>
        <input type="checkbox" id="<?php echo 'read'.$rows['form_id']?>" value="Yes" checked name="read"> Mark As Read<br>
        <? } ?>
       <?php if($rows['replied']==0){?> 
         <input type="checkbox" id="<?php echo 'reply'.$rows['form_id']?>" name="reply" value="Yes" checked> Reply<br>
         <? }?>
        </div>
        
<?php }while($rows = mysqli_fetch_assoc($result2))?>
 </div>
	</body>
</html>
<?php }?>		
