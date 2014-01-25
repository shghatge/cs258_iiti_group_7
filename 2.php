<?php require_once('Connections/vac_advert.php'); ?>
<?php
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


mysql_select_db($database_vac_advert, $vac_advert);
$query_getRecent = "SELECT vacancies.post_id, vacancies.title FROM vacancies ORDER BY vacancies.updated DESC LIMIT 10";
$getRecent = mysql_query($query_getRecent, $vac_advert) or die(mysql_error());
$row_getRecent = mysql_fetch_assoc($getRecent);
$totalRows_getRecent = mysql_num_rows($getRecent);



$var1_getDisplay2 = "-1";
if (isset($_GET['post_id'])) {
  $var1_getDisplay2 = $_GET['post_id'];

$query_getDisplay = sprintf("SELECT vacancies.title, DATE_FORMAT(vacancies.updated,'%%M %%e, %%Y') AS formatted, vacancies.post FROM vacancies WHERE vacancies.post_id = %s  ", GetSQLValueString($var1_getDisplay2, "int"));
}
else
{
$query_getDisplay = "SELECT title,  post, DATE_FORMAT(vacancies.updated, '%M %e,%Y') AS formatted FROM vacancies ORDER BY vacancies.updated DESC LIMIT 1";
}
$getDisplay = mysql_query($query_getDisplay, $vac_advert) or die(mysql_error());
$row_getDisplay = mysql_fetch_assoc($getDisplay);
$totalRows_getDisplay = mysql_num_rows($getDisplay);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FACULTY RECRUITMENT</title>
<link href="styles/home_ad.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="main">
<div id="deli">
	<a href="http://www.iiti.ac.in">
	<div id="deli_links">
    IIT INDORE WEBPAGE</div>
    </a>
  
    <div id="deli_links">
    <div>
      <strong>HOME</strong> </div>
    </div>
    <div id="deli_links">
    <div>
   	ONLINE APPLICATIONS
    </div>
    </div>
    
    <div id="deli_links">
    <div>
   	ADMIN LOGIN
    </div>
    </div>
    
    <div id="deli_links">
    <div>
   	LOG OUT
    </div>
    </div>
    
</div>

<div id="recent">
<h1> RECENT POSTS 8</h1>

<?php do {?>
 <a href="2.php?post_id=<?php echo $row_getRecent['post_id']; ?>"> <div id="recent_links"><?php echo $row_getRecent['title']; ?></div></a>
  <?php } while ($row_getRecent= mysql_fetch_assoc($getRecent)); ?>
  
</div>
<div id="posts">
<?php do { ?>
<h1><?php echo $row_getDisplay['title']; ?>
<div id="upd">UPDATED ON <?php echo $row_getDisplay['formatted']; ?></div></h1>
<div id="a_text"> <?php echo $row_getDisplay['post'];?>

</div> 
<?php } while ($row_getDisplay = mysql_fetch_assoc($getDisplay));?>
</div>
</div>

</body>

<?php
mysql_free_result($getRecent);
mysql_free_result($getDisplay);
?>
</html>