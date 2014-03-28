 <?php
 require 'connect.inc.php';
 $loginformaction = $_SERVER['PHP_SELF'];
 //echo $loginformaction;
   if(isset($_POST['submit']))
   {
    if(isset($_POST['myusername'])&&isset($_POST['mypassword']))
{
  $username=  $_POST['myusername'];
  $password=  $_POST['mypassword'];
   if(!empty($username)&&!empty($password))
   {
   $query = "SELECT id FROM admins ";

     if ($result= mysqli_query($link,"SELECT DATABASE()"))
     {
    $row = mysqli_fetch_row($result);
    mysqli_free_result($result);
     }
   if($query)
     {

    $result = mysqli_query($link,"SELECT id FROM admins WHERE username='$username' AND password='$password'");
    
       $row_cnt = mysqli_num_rows($result);
       if($row_cnt==1)
       {
         $user_id = mysqli_data_seek($result,0);

         $_SESSION['user_id']=$user_id;
			echo 'HELLO'.$username;
         header('Location: '.$loginformaction);

       }
       else
       {
         echo 'login failure';
       }

     }



   }


}
   }

 ?>
 <body>
<form id="form1" name="form1" method="POST" action="<?php echo $loginformaction; ?>">
<p>USERNAME: <input type="text" name="myusername" id='myusername' required />
<p>PASSWORD: <input type="password" name="mypassword" id='myusername'  required/>
<p><input type="submit" name="submit" value="LOG IN" required/>
</form>
</body>
