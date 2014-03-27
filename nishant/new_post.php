<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Post</title>
</head>
<?php
//INSERT INTO `adsadmin`.`ads` (`id`, `updated`, `title`, `description`, `details`, `dep`) VALUES (NULL, CURRENT_TIMESTAMP, 'First', 'first vacancy', 'cse_1.pdf', 'cse');
require 'core.inc.php';
require '/advertisements/Connections/addconn.inc.php';
if(loggedo())
{
	include 'adminlogin.inc.php';
}
else{
	setcookie('user_id',time()+600);
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
$goto = $_SERVER['PHP_SELF'];	
	if(isset($_POST['submit']))
{
	
	if(isset($_POST['ins']))
	{
		$tt_upd = $_POST['ins'];
		
		
		
	if($tt_upd =='form4')
	{
	
		
	$title = $_POST['title'];
	
	$description= $_POST['description'];
	
	$dep=$_POST['dep'];
	
	$details=$_POST['details'];
	
	$query=  sprintf("INSERT INTO ads (title, description, details, dep) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($title, "text"),
                       GetSQLValueString($description, "text"),
					   GetSQLValueString($details, "text"),
                       GetSQLValueString($dep, "text"));
	
	$result = mysqli_query($link,$query) or die('query failure') ;
	
	
	}
	}
	
	}
	
?>

<body>
</body>
</html>

<form action="<?php echo $goto;?>" method="post" name="form4">
<p>
<h1>NEW POST</h1>
<p> <a href="adminhome.php"> Admin Home </a> </p>
<p><a href="manage_posts.php"> MANAGE POSTS </a></p>
<p><a href="logout.inc.php"> LOG OUT </a></p>

<h3>TITLE : </h3><p><input type="text" name="title" value= "" required="required"> </p>
<p><h3> DEPARTMENT :</h3> <p><input type="text" name="dep" value="" required="required"> </p>
<p><h3> DESCRIPTION : </h3></p><p><textarea name="description" rows="5" cols="45">" "</textarea> 
</p>
<p><h3> DETAILS FILE LINK : </h3><p> <input type="text" name="details" value= "" required="required">

<input type="submit" name="submit" value="ADD NEW POST" />
<input type="hidden" name="ins" value="form4" />
<p> <a href="up_ind.php" > UPLOAD DETAILS FILE </a></p>

</form>


</p>
</body>
</html>

<?php }?>