<?php
$un = $_POST["username"];
$pass = $_POST["password"];
$user_name = "root";
$password = "cseproject1";
$database = "Credentials";
$server = "127.0.0.1";
$check = false;
$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);

$SQL = "SELECT * FROM user_pass";
$result = mysql_query($SQL);
if(!$result)
{
	die("Error:".mysql_error());
	} 
	while ( $db_field = mysql_fetch_assoc($result) ) {

if($db_field['User_name']==$un&&$db_field['Password'] ==$pass)
{
$check = true;
break;
}
}
if($check)
{
$message = "Success";
echo "<script type='text/javascript'>navigate(\"http://www.google.co.in\");</script>";
}
else
{
$message = "Unsuccessful";
echo "<script type='text/javascript'>alert('$message');</script>";
}
?>