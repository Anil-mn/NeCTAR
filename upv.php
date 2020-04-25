<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php
include('Components/head.php');
include('Components/header.php');
include('pages/registrationPage.php');

echo $head
    .$header3;
     
       about3Head('upload your paper');
       h404('this page can only access after may 3','upload soon');

     //pandV();
    if(isset($_POST['pandv'])){


    $heading=$_POST['Heading'];
    $descp=$_POST['Description'];
    $email=$_POST['Email'];
   // $Ylink=$_POST['Youtube'];
    $section=$_POST['Section'];

   $userdetails = mysqli_query($con,"SELECT * from `user_info` where `Email_ID`='$email'");
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
   }}
   else{
       echo "<script>confirm('There is no registerd email ',window.location='')</script>";
   }
   if($PaperInsertion==true)
   {
      $innsertphoto=mysqli_query($con,"SELECT * from `papers` order by  `Paper_ID` desc limit 1");
      while($row=mysqli_fetch_array($innsertphoto))
      {
         $id=$row[0];
      }
    



 $target_dir = "..\Images/";
 $target_file = $target_dir . basename($_FILES["paper"]["name"]);

 $name =$id.'-'.$heading;
//
 $newfilename=$name ;
 echo $newfilename;
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
    
 if (file_exists($target_file)) {
     echo "<script>alert('Sorry, file already exists.',window.location='')</script>";
     $uploadOk = 0;
 }
 // Check file size
 if ($_FILES["paper"]["size"] > 5000000) {
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
     echo "<script>alert('Sorry, your file was not uploaded.',window.location='')</script>";
 // if everything is ok, try to upload file
 } else {
     //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        if(move_uploaded_file($_FILES["paper"]["tmp_name"], "papers/" . $newfilename.'.pdf')){
         echo "The file ". basename( $_FILES["paper"]["name"]). " has been uploaded.";
         //header('Location:index.phpShop_CategorieInsertion.php');
         } else {
         echo "<script>confirm('Sorry, there was an error uploading your file.',window.location='')</script>";
             }
     
     } 
   }
   $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
   $extension = pathinfo($_FILES['video']['name'], PATHINFO_EXTENSION);
   $namelink = $id.'-'.$heading.'.'.$extension;
   echo "<br><br><br><br>".$namelink."<br><br><br><br>";
   if ((($_FILES["video"]["type"] == "video/mp4")
   || ($_FILES["video"]["type"] == "audio/mp3")
   || ($_FILES["video"]["type"] == "image/jpg")
   || ($_FILES["video"]["type"] == "image/png")
   || ($_FILES["video"]["type"] == "audio/mpeg")
   || ($_FILES["video"]["type"] == "audio/wma")
   || ($_FILES["video"]["type"] == "image/pjpeg")
   || ($_FILES["video"]["type"] == "image/gif")
   || ($_FILES["video"]["type"] == "image/jpeg"))
   
   && ($_FILES["video"]["size"] < 200000000000000)
   && in_array($extension, $allowedExts))
   
     {print_r($_FILES['video']['name']);
     if ($_FILES["video"]["error"] > 0)
       {
       echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
       }
     else
       {
      //  echo "Upload: " . $_FILES["video"]["name"] . "<br />";
      //  echo "Type: " . $_FILES["video"]["type"] . "<br />";
      //  echo "Size: " . ($_FILES["video"]["size"] / 1024) . " Kb<br />";
      //  echo "Temp file: " . $_FILES["video"]["tmp_name"] . "<br />";
   
       if (file_exists("store/" . $_FILES["video"]["name"]))
         {
         echo $_FILES["video"]["name"] . " already exists. ";
         }
       else
         {
             echo  $name;
          move_uploaded_file($_FILES["video"]["tmp_name"],
          "videos/" . $namelink);
          echo "Stored in: " . "videos/" . $namelink;
          
          $update =  mysqli_query($con,"UPDATE `papers` SET   `Link_ID` = '$namelink' where Paper_ID='$id'");
         }
       }
     }
   
     else
     {
       echo "<script>confirm('Invalid file',window.location='index.php')</script>";
     }
     echo "<script>confirm('Successfully entered',window.location='index.php')</script>";
}




    echo $footer
    .$connection;
    ?>
</html>