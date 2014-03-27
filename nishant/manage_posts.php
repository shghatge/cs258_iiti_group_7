<html>

<?php require '/advertisements/connections/addconn.inc.php';
require  'core.inc.php';
if(loggedo())
{
include 'adminlogin.inc.php';
}
else
{
  $max_posts = 4;
  $current_page = 0;
  if (isset($_GET['page_num'])) {
  $current_page = $_GET['page_num'];
  }
  $start_row = $max_posts * $current_page;
  $query = "SELECT title , updated , id FROM ads";
  $query_limit = sprintf("%s ORDER BY updated DESC LIMIT %d, %d ",$query, $start_row, $max_posts);
  $result = mysqli_query($link,$query_limit) or die('query error');
 
  $row_Posts = mysqli_fetch_assoc($result);
  if (isset($_GET['row_cnt'])) {
  $row_cnt = $_GET['row_cnt'];
} else {
  $all = mysqli_query($link,$query) or die('query error2');
  $row_cnt = mysqli_num_rows($all);
}

   $pages = ceil($row_cnt/$max_posts)-1;
   $query_String="";
   if (!empty($_SERVER['QUERY_STRING'])) {
          $params = explode("&", $_SERVER['QUERY_STRING']);
          $newParams = array();
          foreach ($params as $param) {
            if (stristr($param, "current_page") == false &&
                stristr($param, "row_cnt") == false) {
              array_push($newParams, $param);
            }
  }
  if (count($newParams) != 0) {
    $query_String = "&" . htmlentities(implode("&", $newParams));
  }
   }
   $query_String = sprintf("&row_cnt=%d%s", $row_cnt, $query_String);
	$first_page = sprintf("manage_posts.php?page_num=%d",0);
	$next_page = sprintf("manage_posts.php?page_num=%d",$current_page+1);
	$prev_page = sprintf("manage_posts.php?page_num=%d",$current_page-1);
	$last_page = sprintf("manage_posts.php?page_num=%d",$pages);
	$rem_pages = $pages - $current_page;
?>
<body>
<h2> MANAGE POSTS </h2>
<p> <a href="adminhome.php"> Admin Home </a> </p>
<p> <a href="new_post.php"> New Post </a></p>

<table width="922" border="1">
  <tr>
    <th scope="col">DATE</th>
    <th width="200" scope="col">TITLE</th>
    <th width="200" scope="col">&nbsp;</th>
    <th width="200" scope="col">&nbsp;</th>
  </tr>
  <?php do {  $goto = sprintf("update_posts.php?id=%d",$row_Posts['id']);
 $goto2 = sprintf("delete_post.php?id=%d",$row_Posts['id']); ?>
  <tr>
  
  <td><?php echo $row_Posts['updated']; ?></td>
  <td><?php echo $row_Posts['title'];?></td>
  <td><a href=" <?php echo $goto;?>"> EDIT </a> </td>
  <td><a href=" <?php echo $goto2;?>"> DELETE </a> </td>
  </tr>
  <?php } while($row_Posts=mysqli_fetch_assoc($result))?> 
  <table border="0">
  <tr>
    <td><?php if ($current_page > 0) { // Show if not first page ?>
    <a href=" <?php echo $first_page;?>"> FIRST </a>
    </td><?php }?>
    <td><?php if ($current_page > 0 ) {?>
    <a href="<?php echo $prev_page;?>"> PREVIOUS </a></td> <?php }?>
    <td><?php if ($rem_pages > 0 ) {?>
    <a href="<?php echo $next_page;?>"> NEXT </a></td> <?php }?>
    <td><?php if ($rem_pages > 0 ) {?>
    <a href="<?php echo $last_page;?>"> LAST </a></td> <?php }?>
    
</body>
</html>
<?php } ?>