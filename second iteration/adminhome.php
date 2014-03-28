<html>
<title> Admin Home </title>
<?php
echo '<h1> ADMIN HOMEPAGE </h1>';
require  'core.inc.php';
require  'connect.inc.php';

if(loggedo())
{
include 'adminlogin.inc.php';
}
else
{
echo '<p><a href="logout.inc.php"> Log Out </a>';
echo '<p><a href="new_post.php"> Add New Posts </a>';
echo '<p><a href="manage_posts.php"> Manage Posts </a>';

}
?>
<br><br>
<input type="button"onclick="upload()" id="up" value="UPLOAD DETAILS FILE"/>
<script type="text/javascript">
function upload()
{
window.open('up_ind.php','UPLOAD DETAILS FILE');
}
</script>

</html>