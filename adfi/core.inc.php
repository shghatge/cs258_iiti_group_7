<?php
ob_start();
session_start();


  $current_file = $_SERVER['PHP_SELF'];

  if(isset($_SERVER['HTTP_REFERER']))
{
  $http_refer=$_SERVER['HTTP_REFERER'];
}
      else
      {
        $http_refer=$_SERVER['PHP_SELF'];
      }
  function loggedo()  {
    if(!isset($_SESSION['user_id'])||empty($_SESSION['user_id']))
{
 return true;

}
else
{

  return false;
}
  }
?>

