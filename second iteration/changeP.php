<?php

require 'fac_con.inc.php';
require 'core.inc.php';
$gobackto = "Faculty_Account_Change_Password.php";
if (loggedo())
{
	include 'Faculty_login.inc.php';
}

else{
if(isset($_POST['old']))
{
	$old = $_POST['old'];	
	//$user_id = $_SESSION['user_id'];
	
}

if(isset($_POST['new']))
{
	$new = $_POST['new'];	
	//$user_id = $Session['user_id'];
	
}
if(isset($_POST['newc']))
{
	$newc = $_POST['newc'];	
	
	
}

if(!empty($old)&&!empty($new)&&!empty($newc))
{
$user_id = $_SESSION['user_id'];
$query = "SELECT password FROM users WHERE id='$user_id'";
$result = @mysqli_query($link,$query) or die ('connection error');
$rows=mysqli_fetch_assoc($result);
if($rows['password']==$old)
{
	//echo 'yes';
	
	if($new==$newc)
	{
		
		$gobackto='Faculty_Account.php';
		$query2 = "UPDATE users SET password='$new' WHERE id='$user_id'";
		$result2 = mysqli_query($link,$query2);
		if($result2)
		{
			
		
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='$gobackto';
    </SCRIPT>");
		}
	}
	
	else
	{
		//echo "no mathc";
		?>
	<script> window.alert("NEW PASSWORDS DON'T MATCH")
	window.location.href='<?php echo $gobackto?>'; </script>
    <?php
    
	}
	
}
else
{	echo $_SESSION['user_id'];
	echo $rows['password'];
	echo $old;
	?>
	<script> window.alert('WRONG CURRENT PASSWORD')
    window.location.href='<?php echo $gobackto?>'; </script>
    <?php
	 
}


}
}
?>