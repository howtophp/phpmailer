<?php
/* 
This code shows how to use PHPMailer with a simple example of sending mail. Thus we have an example that does not comply with the above list and so this kind of shipping is listed SPAM mail

Note: If your mail server is not configured to output relay connected to a smpt mail server does not use this example because it will be classified as SPAM.
*/

// We include the Library of PHPMailer

include_once '../lib/PHPMailerAutoload.php';

// Initialize the library
$mail = new PHPMailer;

// Email Address outgoing
$mail->From = 'my@domain.com';

// Name in outgoing mail
$mail->FromName = 'Name User';

// Add a recipient , Name is optional
$mail->addAddress('other@otherdomain.com', 'Recipient User Name');  

// Add the automatic reply to mail sent
$mail->addReplyTo('replye@domain.com', 'Reply Mail');

// Address to send a copy of the email
$mail->addCC('cc@otherdomain.com');

// Add address for sending mail BCC
$mail->addBCC('bcc@otherdomain.com');

// Add the Email Subject
$mail->Subject = 'Here is the subject';

// Add the information that goes in the mail 
$mail->Body = 'This is the body in plain text for non-HTML mail clients';

// Validate if not sending and show error otherwise continue and show successful message delivery
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';


?>