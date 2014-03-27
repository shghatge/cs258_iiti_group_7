<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DELETE POST</title>

</head>
<?php
require 'core.inc.php';
require '/advertisements/Connections/addconn.inc.php';
if(loggedo())
{
	include 'adminlogin.inc.php';
}
else
{
	if(isset($_GET['id']))
	{
		$query = sprintf("DELETE FROM ads WHERE id=%d",$_GET['id']);
		$result = mysqli_query($link,$query);
		header('Location: manage_posts.php');
	}
	else
	{
		$goto="manage_posts.php";
	}

?>
<body>
</body>
</html>

<form action="<?php echo $goto;?>" method="delete" name="form3">
</form>
<?php } ?>