<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UPDATE POSTS</title>
</head>
<?php require '/advertisements/Connections/addconn.inc.php';
		require 'core.inc.php';
		if(loggedo())
		{
			include 'adminlogin.inc.php';
		}
		else
		{
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
//$sql = "UPDATE `adsadmin`.`ads` SET `title` = \'secondi\' WHERE `ads`.`id` = 2;";

if(isset($_GET['id']))
{
	$id = $_GET['id'];
}
else
{
	$id = 0;
}
$goto= sprintf("%s?id=%d",$_SERVER['PHP_SELF'],$id);	
/*
	if (isset($_SERVER['QUERY_STRING'])) {
  $goto .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}*/
if(isset($_POST['submit']))
{
	
	if(isset($_POST['upd']))
	{
		$tt_upd = $_POST['upd'];
		
	if($tt_upd =='form2')
	{
	
		
		$update_query = sprintf("UPDATE ads SET title=%s, description=%s, dep=%s, details=%s WHERE id=$id",
                       GetSQLValueString($_POST['title'], "text"),
                       GetSQLValueString($_POST['description'], "text"),
					   GetSQLValueString($_POST['dep'], "text"),
                       GetSQLValueString($_POST['details'], "text")
                       );
		$result2 = mysqli_query($link,$update_query) or die('no');
		 
/* if (isset($_SERVER['QUERY_STRING'])) {
    $goto .= (strpos($goto, '?')) ? "&" : "?";
    $goto .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $goto));*/
	}
	}
	
		
}
$query = "SELECT description , title , dep , details FROM ads WHERE id= $id";
$result = mysqli_query($link,$query) or die('cannot');
$post = mysqli_fetch_assoc($result);
		
		
?>
<body>
<h1> UPDATE POST </h1>
<p><a href="manage_posts.php"> Manage Posts </a></p>
<p> <a href="adminhome.php"> Admin Home </a> </p>
<p><a href="logout.inc.php"> Log Out </a></p>
<form action="<?php echo $goto;?>" method='post' name='form2'>
<p>
<h3>TITLE : </h3><p><input type="text" name="title" value= "<?php echo $post['title'];?>"> </p>
<p><h3> DEPARTMENT :</h3> <p><input type="text" name="dep" value= "<?php echo $post['dep'];?>"> </p>
<p><h3> DESCRIPTION : </h3></p><p><textarea name="description" rows="5" cols="45"><?php echo $post['description'];?> </textarea> 
</p>
<p><h3> DETAILS FILE LINK : </h3><p> <input type="text" name="details" value= "<?php echo $post['details'];?>"> </p>
<input type="submit" name="submit" value="save" />
<input type="hidden" name="upd" value="form2" />
</form>
</body>
</html>
<?php } ?>