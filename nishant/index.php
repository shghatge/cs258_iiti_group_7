<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Recruitment Portal</title>
<link href="styles/adverts.css" rel="stylesheet" type="text/css" />
</head>


<body height=100%>
<body background = "Background1.jpg">
<div>
<p class = "heading1" align = "center">ONLINE FACULTY RECUITMENT PORTAL</p>
		<p class = "heading2" align = "center">IIT INDORE</p>
</div>
<div id="sidebar">
<a href="<?php echo 'login.php'?>">
<div id="sidelinks">
USER LOGIN
</div>
</a>
<a href="<?php echo 'SignUp.php'?>">
<div id="sidelinks">
SIGN UP
</div>
</a>
<div id="sidelinks">
FACULTY LOGIN
</div>
<a href="<?php echo 'adminhome.php'?>">
<div id="sidelinks">
ADMIN LOGIN
</div></a>
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