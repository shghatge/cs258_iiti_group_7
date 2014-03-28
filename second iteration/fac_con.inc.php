<?php
$conn_error='could not connect';
$mysql_db = 'faculty';
$link = @mysqli_connect('localhost','root',NULL,'faculty');
if($link)
{
	//echo 'success';
}

?>