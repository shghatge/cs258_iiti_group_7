<?php

	echo "Hello World";

$user_name = "root";
$password = "cseproject1";
$database = "Credentials";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);

echo "<br />\n";
if ($db_found) {

print "Database Found";
echo "<br />\n";
$SQL = "INSERT INTO user_pass (ID,User_name,Password) VALUES ('9', 'IN', 'IN')";
$result = mysql_query($SQL);
if(!$result)
{
	die("Error:".mysql_error());
	} 
$SQL = "SELECT * FROM user_pass";
$result = mysql_query($SQL);
if (!$result) {
    die("Error: ".mysql_error()); 
}
while ( $db_field = mysql_fetch_assoc($result) ) {

print $db_field['ID'] ."    ";
print $db_field['User_name'] . "    ";
print $db_field['Password'] . "    ";
echo "<br />\n";
}
}
else {

print "Database NOT Found";

}

?>
	