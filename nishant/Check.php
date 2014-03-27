<!DOCTYPE html>
<html>
<head>
<title>update</title>
</head>
<body>
<?php
$user_name = "root";
$password = "cseproject1";
$database = "Check";
$server = "127.0.0.1";
$check = false;
$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);
if(!db_found)
{
    echo "databasenotfound";
}
else
{
    echo "databasefound";
}
?>
</body>
</html>