<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Recruitment Portal</title>
<link href="styles/adverts.css" rel="stylesheet" type="text/css" />
</head>
<?php require 'connect.inc.php';
require '/advertisements/connections/addconn.inc.php';
$query = "SELECT title , updated , description , dep , details FROM ads ORDER BY updated DESC";
$result = mysqli_query($link,$query) or die('kmn');
$rows = mysqli_fetch_assoc($result);



?>

<body height=100%>
<div id="total">
<div id="headera">
<div id="headeratext" > IIT INDORE ONLINE FACULTY RECRUITMENT </div>
</div>
<div id="sidebar">
<a href="<?php echo 'adminhome.php'?>">
<div id="sidelinks">
ADMIN HOMEPAGE
</div></a>

<a href="<?php echo 'login.php'?>">
<div id="sidelinks">
USER LOGIN
</div></a>

<a href="<?php echo 'signup1.php'?>">
<div id="sidelinks">
REGISTER
</div></a>
<a href="http://www.iiti.ac.in">
<div id="sidelinks">
IIT INDORE WEBSITE
</div></a>

<a href="<?php echo 'Faculty_Account.php'?>">
<div id="sidelinks">
FACULTY LOGIN
</div>
</div>
<div id="all">
<?php do{ $goDown = sprintf("download.php?filename=%s",$rows['details']);?>
<div id="adverts">
<h1><?php echo $rows['title']?>
<div id="upd">Updated: <?php echo $rows['updated']?></div>
</h1>
<p>
Department: <?php echo $rows['dep']?></p>
<br />
<?php echo $rows['description']?>
<p><a href="<?php echo $goDown;?>"> Download Details </a></p>
</div>
<?php }while($rows=mysqli_fetch_assoc($result))?>
</div>
</div>
</body>
</html>