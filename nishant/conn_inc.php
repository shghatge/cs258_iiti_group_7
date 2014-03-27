<?php
$conn_error='could not connect';
$mysql_db = 'adsadmin';
$link = mysqli_connect('localhost','root','');
if(!$link or (!mysqli_select_db($link,$mysql_db))  )
  {
    die($conn_error);
  }

?>