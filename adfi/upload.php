<?php
require 'core.inc.php';
if(loggedo())
{
	include 'adminlogin.inc.php';
}
else
{
 $name = $_FILES["myfile"]["name"];
 $type = $_FILES["myfile"]["type"];
 $size = $_FILES["myfile"]["size"];
 $temp = $_FILES["myfile"]["tmp_name"];
 $error = $_FILES["myfile"]["error"];
 if($error > 0)
 {
	 die("error uploading file! Code $error.");
 }
 else
 {
	 move_uploaded_file($temp,"detail_files/".$name);
	 header("Location: new_post.php");
die();
	 
	 
 }
}
?>