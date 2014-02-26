<?PHP
//include 'validate.php';
include 'Account.php';
include 'login.php';
session_destroy();
echo "<script type='text/javascript'>window.alert('Logged Out Successfully');</script>";
echo "<script type='text/javascript'>window.open('login.php','_self')</script>";
?>