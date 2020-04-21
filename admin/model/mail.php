<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\xampp\php\vendor\autoload.php';

$mail = new PHPMailer(TRUE);

// $mail->isSMTP(); 
// $mail->Host = 'a2plcpnl0426.prod.iad2.secureserver.net';    // Must be GoDaddy host name
// $mail->SMTPAuth = true; 
// $mail->Username = 'guy@mydomain.com';
// $mail->Password = 'guyPassword';
// $mail->SMTPSecure = 'tls';   // ssl will no longer work on GoDaddy CPanel SMTP
// $mail->Port = 587;    // Must use port 587 with TLS

// $mail->isSMTP();
// $mail->Host = 'localhost';
// $mail->SMTPAuth = false;
// $mail->SMTPAutoTLS = false; 
// $mail->Port = 25; 
 //Server settings
 //$mail->SMTPDebug = SMTP::DEBUG_SERVER; 
 $mail->SMTPDebug  = 3;                     // Enable verbose debug output
 $mail->isSMTP();                                            // Send using SMTP
 $mail->Host       = 'info@nectar2020.in';                    // Set the SMTP server to send through
 $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
 $mail->Username   = 'info@nectar2020.in';                     // SMTP username
 $mail->Password   = 'nectar@2020';                               // SMTP password
 $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
 $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

 //Recipients
 $mail->setFrom('info@nectar2020.in', 'Mailer');
 $mail->addAddress('amn.nmb@gmail.com', 'Joe User');     // Add a recipient
 $mail->addAddress('amn.nmb@gmail.com');               // Name is optional
 //$mail->addReplyTo('info@example.com', 'Information');
 //$mail->addCC('cc@example.com');
 //$mail->addBCC('bcc@example.com');

 // Attachments
 //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
 //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

 // Content
 $mail->isHTML(true);                                  // Set email format to HTML
 $mail->Subject = 'Here is the subject';
 $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
 $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

 $mail->send();
 echo 'Message has been sent';
?>