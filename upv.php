<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php
include('Components/head.php');
include('Components/header.php');
//include('Components/counter.php');
include('pages/registrationPage.php');
//include('Components/about.php');
echo $head
    .$header3;
     
       about3Head('upload your paper');
       //h404('this page can only access after may 3','upload soon');

     pandV();
     //pv();
    if(isset($_POST['pandv']))
    {


    $heading=$_POST['Heading'];
    $descp=$_POST['Description'];
    $email=$_POST['Email'];
   // $Ylink=$_POST['Youtube'];
    //$section=$_POST['Section'];

   $userdetails = mysqli_query($con,"SELECT * from `user_info` where `Email_ID`='$email'");
   while($row78 = mysqli_fetch_array($userdetails))
   {
    $section = $row78[8];
    $nameee = $row78[1];
   }
   $userdetails = mysqli_query($con,"SELECT * from `user_info` where `Abstract`='$email'");
   $result = mysqli_fetch_array($userdetails);
  

   if($result == true)
   {
    $query = mysqli_query($con,"SELECT * from `papers` where `Email`='$email'");
    $row6 = mysqli_fetch_array($query);
          if($row6 ==true){
         echo "<script>confirm('You already uploaded paper ',window.location='index.php')</script>";
                 }
         else {
        $PaperInsertion=mysqli_query($con,"INSERT INTO `papers`( `Heading`, `Description`, `Section_Name`,`Email`) VALUES ('$heading','$descp','$section','$email')");
          }
    }
   else{
           echo "<script>confirm('You are not uploaded your abstract ',window.location='')</script>";
        }
   if($PaperInsertion==true)
   {
      $innsertphoto=mysqli_query($con,"SELECT * from `papers` where `Email`='$email'");
      while($row=mysqli_fetch_array($innsertphoto))
      {
         $id=$row[0];
         $section1=$row['Section_Name'];
      }
    

      $heading=$section1.' '.$heading;

 $target_dir = "..\Images/";
 $target_file = $target_dir . basename($_FILES["paper"]["name"]);

 $name =$id.'-'.$heading;
//
 $newfilename=$name ;
 echo $newfilename;
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
    
 if (file_exists($target_file)) {
     //$delete =mysqli_query($con,"DELETE FROM `papers` WHERE`Email`='$email'");
     echo "<script>alert('Sorry, file already exists.',window.location='')</script>";
     $uploadOk = 0;
 }
 // Check file size
 if ($_FILES["paper"]["size"] > 5000000) {
     //$delete =mysqli_query($con,"DELETE FROM `papers` WHERE`Email`='$email'");
     echo "<script>alert('Sorry, your file is too large.',window.location='')</script>";
     $uploadOk = 0;
 }
 // Allow certain file formats
 if( $imageFileType != "pdf" ) {
     echo "<script>alert('Sorry, only pdf files are allowed.',window.location='')</script>";
     $uploadOk = 0;
 }
 // Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) {
     $delete =mysqli_query($con,"DELETE FROM `papers` WHERE `Email`='$email'");
     echo "<script>alert('Sorry, your file was not uploaded.',window.location='')</script>";
 // if everything is ok, try to upload file
 }
  else {
     //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        if(move_uploaded_file($_FILES["paper"]["tmp_name"], "papers/" . $newfilename.'.pdf')){
         echo "The file ". basename( $_FILES["paper"]["name"]). " has been uploaded.";
         //header('Location:index.phpShop_CategorieInsertion.php');
                             $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
                             $extension = pathinfo($_FILES['video']['name'], PATHINFO_EXTENSION);
                             $namelink = $id.'-'.$heading.'.'.$extension;
                             echo "<br><br><br><br>".$namelink."<br><br><br><br>";
                             if ((($_FILES["video"]["type"] == "video/mp4")
                             || ($_FILES["video"]["type"] == "image/jpg")
                             || ($_FILES["video"]["type"] == "video/mkv")
                             || ($_FILES["video"]["type"] == "image/png")
                             || ($_FILES["video"]["type"] == "video/avi")
                             || ($_FILES["video"]["type"] == "video/3gp")
                             || ($_FILES["video"]["type"] == "image/pjpeg")
                             || ($_FILES["video"]["type"] == "image/gif")
                             || ($_FILES["video"]["type"] == "image/jpeg"))
                             
                             && ($_FILES["video"]["size"] < 70000000)
                             && in_array($extension, $allowedExts))
                             
                               {print_r($_FILES['video']['name']);
                               if ($_FILES["video"]["error"] > 0)
                                 {
                                  $delete =mysqli_query($con,"DELETE FROM `papers` WHERE`Email`='$email'");
                                  echo "<script>confirm('Sorry, there was an error uploading your file.',window.location='')</script>";
                                  //echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    
                                 }
                               else
                                 {
                                //  echo "Upload: " . $_FILES["video"]["name"] . "<br />";
                                //  echo "Type: " . $_FILES["video"]["type"] . "<br />";
                                //  echo "Size: " . ($_FILES["video"]["size"] / 1024) . " Kb<br />";
                                //  echo "Temp file: " . $_FILES["video"]["tmp_name"] . "<br />";
                             
                                 if (file_exists("store/" . $_FILES["video"]["name"]))
                                   {
                                    $delete =mysqli_query($con,"DELETE FROM `papers` WHERE`Email`='$email'");
                                    echo "<script>confirm('Sorry, there was an error uploading your file.',window.location='')</script>";
                                     ///echo $_FILES["video"]["name"] . " already exists. ";
                                   }
                                 else
                                   {
                                       echo  $name;
                                    move_uploaded_file($_FILES["video"]["tmp_name"],
                                    "videos/" . $namelink);
                                  //  echo "Stored in: " . "videos/" . $namelink;
                                    
                                    $update =  mysqli_query($con,"UPDATE `papers` SET   `Link_ID` = '$namelink' where Paper_ID='$id'");
                                    

                                                        $mail = new PHPMailer(true);

                                                        try {
                                                            //Server settings
                                                            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                                                            $mail->isSMTP();                                            // Send using SMTP
                                                            $mail->Host       = 'sg3plcpnl0230.prod.sin3.secureserver.net';                    // Set the SMTP server to send through
                                                            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                                                           // $mail->SMTPAutoTLS = false; 
                                                            $mail->Username   = 'noreply@nectar2020.in';                     // SMTP username
                                                            $mail->Password   = 'nectar@2020';                               // SMTP password
                                                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                                                            $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                                                            $mail->SMTPSecure = 'ssl';
                                                            $mail->SMTPDebug = 0;
                                                        
                                                            //Recipients
                                                            $mail->setFrom('noreply@nectar2020.in', 'Nectar2020');
                                                            $mail->addAddress($email);                                    // Add a recipient
                                                            //$mail->addAddress('ellen@example.com');                            // Name is optional
                                                           // $mail->addReplyTo('info@example.com', 'Information');
                                                           // $mail->addCC('cc@example.com');
                                                              $mail->addBCC('official@nectar2020.in');
                                                        
                                                            // Attachments
                                                             $mail->addAttachment('admin/model/nectar2020.jpg');         // Add attachments
                                                            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                                                        
                                                            // Content
                                                            $mail->isHTML(true);                                  // Set email format to HTML
                                                            $mail->Subject = 'Response from Nectar';
                                                            $mail->Body    = 'Dear '.$nameee.' <br>
                                                        
                                                        Thank you for uploading your Paper and Presentation at NeCTAR2020..
                                                        
                                                        We respect your scholarly contribution and hope that the e-Conference would serve a perfect platform to showcase your works..
                                                        <br><br>
                                                        Today, the whole nation is fighting against the Covid19 pandemic and all major activities remain locked, but at NehruGroup., we believe that sharing knowledge and progressing academic activities has no lockdown, and NeCTAR remains as a solid example.. 
                                                        We are proud to have a scholarly partner like you for this venture..
                                                        <br><br><br>
                                                        Please stay linked and visit our site for updates..
                                                        <br><br><br>
                                                        Stay Home.. Stay Safe.. 
                                                        <br><br><br>
                                                        Thank you
                                                        - Team NeCTAR';
                                                            //$mail->AltBody = 'This is the mail from php';
                                                        
                                                            $mail->send();
                                                          // echo 'Message has been sent';
                                                            echo "<script>confirm('Successfully Uploaded your Presentation ',window.location='index.php')</script>";
                                                        } catch (Exception $e) {
                                                           // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                                                        }
                                          









                                   // echo "<script>confirm('Successfully entered',window.location='index.php')</script>";
                                    
                                   }
                                 }
                               }
                             
                               else
                               {
                                $delete =mysqli_query($con,"DELETE FROM `papers` WHERE`Email`='$email'");
                                 echo "<script>confirm('Invalid file',window.location='index.php')</script>";
                               }
                             
                              } 
         else 
          {
            $delete =mysqli_query($con,"DELETE FROM `papers` WHERE`Email`='$email'");
           echo "<script>confirm('Sorry, there was an error uploading your file.',window.location='')</script>";
        
             }
     
     } 
    }
   
     
    }

    echo $footer
    .$connection;
    ?>
</html>