<?php

include_once '../lib/PHPMailerAutoload.php';

$nameuser = 'Name User';
$usergmail = 'usergmail@gmail.com';
$password = 'password';


$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
$mail->Port  = 587;
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $usergmail;                            // SMTP username
$mail->Password = $password;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = $usergmail;
$mail->FromName = $nameuser;

$mail->addAddress('othermail@domain.com', 'Other User');  // Add a recipient

$mail->addReplyTo($usergmail, 'Reply To');

$mail->addCC('usercc@example.com');
$mail->addBCC('userbcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';

?>