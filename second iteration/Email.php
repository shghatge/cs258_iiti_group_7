<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PHPMailer - GMail SMTP test</title>
</head>
<body>
<?php

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
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
$mail->addAddress('nishant.khali92@gmail.com', 'Nishant Kumar');
//Set the subject line
$mail->Subject = 'Password';
//Replace the plain text body with one created manually
$mail->isHTML(true);
$mail->Body    = 'Soon user will be getting password by this mail';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>
</body>
</html>