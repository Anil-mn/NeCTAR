<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\xampp\php\vendor\autoload.php';

// $mail = new PHPMailer(TRUE);

// // $mail->isSMTP(); 
// // $mail->Host = 'a2plcpnl0426.prod.iad2.secureserver.net';    // Must be GoDaddy host name
// // $mail->SMTPAuth = true; 
// // $mail->Username = 'guy@mydomain.com';
// // $mail->Password = 'guyPassword';
// // $mail->SMTPSecure = 'tls';   // ssl will no longer work on GoDaddy CPanel SMTP
// // $mail->Port = 587;    // Must use port 587 with TLS

// // $mail->isSMTP();
// // $mail->Host = 'localhost';
// // $mail->SMTPAuth = false;
// // $mail->SMTPAutoTLS = false; 
// // $mail->Port = 25; 
//  //Server settings
//  //$mail->SMTPDebug = SMTP::DEBUG_SERVER; 
//  $mail->SMTPDebug  = 3;                     // Enable verbose debug output
//  $mail->isSMTP();                                            // Send using SMTP
//  $mail->Host       = 'info@nectar2020.in';                    // Set the SMTP server to send through
//  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//  $mail->Username   = 'info@nectar2020.in';                     // SMTP username
//  $mail->Password   = 'nectar@2020';                               // SMTP password
//  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//  $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//  //Recipients
//  $mail->setFrom('info@nectar2020.in', 'Mailer');
//  $mail->addAddress('amn.nmb@gmail.com', 'Joe User');     // Add a recipient
//  $mail->addAddress('amn.nmb@gmail.com');               // Name is optional
//  //$mail->addReplyTo('info@example.com', 'Information');
//  //$mail->addCC('cc@example.com');
//  //$mail->addBCC('bcc@example.com');

//  // Attachments
//  //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

//  // Content
//  $mail->isHTML(true);                                  // Set email format to HTML
//  $mail->Subject = 'Here is the subject';
//  $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//  $mail->send();
//  echo 'Message has been sent';















 
 //SMTP needs accurate times, and the PHP time zone MUST be set
 //This should be done in your php.ini, but this is how to do it if you don't have access to that
 date_default_timezone_set('Etc/UTC');
  
 //require '../PHPMailerAutoload.php';
  
 //Create a new PHPMailer instance
 $mail = new PHPMailer();
 //Tell PHPMailer to use SMTP
 $mail->isSMTP();
 //Enable SMTP debugging
 // 0 = off (for production use)
 // 1 = client messages
 // 2 = client and server messages
 $mail->SMTPDebug   = 2;
 $mail->DKIM_domain = '127.0.0.1';
 //Ask for HTML-friendly debug output
 $mail->Debugoutput = 'html';
 //Set the hostname of the mail server
 $mail->Host        = "smtpout.secureserver.net";
 //Set the SMTP port number - likely to be 25, 465 or 587
 $mail->Port        = 465;
 //Whether to use SMTP authentication
 $mail->SMTPAuth    = true;
 //Username to use for SMTP authentication
 $mail->Username    = "noreplay@nectar2020.in";
 //Password to use for SMTP authentication
 $mail->Password    = "W@mKC7Fy+Ek!";
 $mail->SMTPSecure  = 'ssl';
 //Set who the message is to be sent from
 $mail->setFrom('noreplay@nectar2020.in', 'First Last');
 //Set an alternative reply-to address
 //$mail->addReplyTo('replyto@example.com', 'First Last');
 //Set who the message is to be sent to
 $mail->addAddress('amn.nmb@gmail.com', 'Anil');
 //Set the subject line
 $mail->Subject = 'PHPMailer SMTP test';
 //Read an HTML message body from an external file, convert referenced images to embedded,
 //convert HTML into a basic plain-text alternative body
 //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
 $mail->msgHTML('asdf');
 //Replace the plain text body with one created manually
 $mail->AltBody = 'This is a plain-text message body';
 //Attach an image file
 //$mail->addAttachment('images/phpmailer_mini.png');
  
 //send the message, check for errors
 if (!$mail->send()) {
     echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
     echo "Message sent!";
 }
 ?>

?>