<!DOCTYPE html>
<html>
<head>
<title>update</title>
</head>
<body>
<?php
$fn = $_POST["firstname"];
$mn = $_POST["middlename"];
$ln = $_POST["lastname"];
$un = $_POST["username"];
$dt = $_POST["Date"];
$mt = $_POST["Month"];
$yr = $_POST["Year"];
$gn = $_POST["Gender"];
$ct = $_POST["CityTown"];
$cn = $_POST["Country"];
$pz = $_POST["PostalZip"];
$mb = $_POST["Mobile"];
$em = $_POST["Email"];
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
$ps = generateRandomString();
date_default_timezone_set('Etc/UTC');

require '/PHPMailer-master/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
//$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
//$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "nishant.khali@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "sidSDIBCSIEo23085B4EH84Akdj349dnw0N38N3k29";
//Set who the message is to be sent from
$mail->setFrom('nishant.khali@gmail.com', 'Nishant Kumar');
//Set an alternative reply-to address
$mail->addReplyTo('nishant.khali@gmail.com', 'Nishant Kumar');
//Set who the message is to be sent to
$mail->addAddress($em, $fn);
//Set the subject line
$mail->Subject = 'Password';
//Replace the plain text body with one created manually
$mail->isHTML(true);
$mail->Body    = 'Your password is '.$ps;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//send the message, check for errors
$user_name = "root";
$password = "cseproject1";
$database = "Credentials";
$server = "127.0.0.1";
$check = false;
$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);

$SQL = "INSERT INTO acc_database (First_Name,Middle_Name,Last_Name,Gender,User_Name,Password,City_Town,Country,PostalZip,Mobile,Email) VALUES ('$fn','$mn','$ln','$gn','$un','$ps','$ct','$cn','$pz','$mb','$em')";
$result = mysql_query($SQL);
if(!$result)
{
	die("Error:".mysql_error());
}
	echo "List updated";
	
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "<script>window.open('registeringpage.php', '_self');</script>";
}
?>
</body>
</html>