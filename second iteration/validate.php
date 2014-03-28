<?php
$un = $_POST["username"];
$pass = $_POST["password"];
$user_name = "root";
$password = "";
$database = "Credential";
$server = "127.0.0.1";
$check = false;
$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);
if (!$db_found) {
	echo "<script>window.open('Login.php','_self');</script>";
	
}
$SQL = "SELECT * FROM Account_details";
$result = mysql_query($SQL);
if(!$result)
{
	die("Error:".mysql_error());
	} 
while ( $db_field = mysql_fetch_assoc($result) ) {
if($db_field['User_Name']==$un&&$db_field['Password'] ==$pass)
{
$check = true;
break;
}
}
if(!$check)
{
$message = "Invalid username or password";
echo "<script>window.open('Login.php','_self');</script>";
}
else
{
echo "<script>window.open('Account.php','_self');</script>";
session_start();
$_SESSION['loginsession'] = "1";
$_SESSION['username'] = $un;
$_SESSION['password'] = $pass;
}
mysql_close($db_handle);
?>