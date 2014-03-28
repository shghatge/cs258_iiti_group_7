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

$sql2 = "SELECT * FROM Account_details";
$result2 = mysqli_query($db_handle,$sql2);
if(!$result2)
{
    $sql3 = "CREATE TABLE Account_details
(
id MEDIUMINT NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id),
First_Name varchar(60),
Middle_Name varchar(60),
Last_Name varchar(60),
Gender varchar(60),
Dat int(11),
Month varchar(60),
Year int(11),
User_Name varchar(60),
UNIQUE (User_Name),
Password varchar(60),
City varchar(60),
Country varchar(60),
Zip int(11),
Mobile int(15),
Email varchar(60)
)";
    mysql_query($sql3);
}
