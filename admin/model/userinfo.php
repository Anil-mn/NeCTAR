<?php
include('connection.php');
if(isset($_POST['user']))
{
    $name=$_POST['Name'];
    $Designation=$_POST['Designation'];
    $Qualification=$_POST['Qualification'];
    $email=$_POST['Email'];
    $phno=$_POST['PhoneNumber'];


   // $UserInsertion =mysqli_query($con,"INSERT INTO `user_info`( `Name`, `Designation`, `Qualification`, `Email_ID`, `PhoneNumber`) VALUES('$name','$Designation','$Qualification','$email','$phno')");

}
if(isset($_POST['paper']))
{
   
    $heading=$_POST['Heading'];
    $descp=$_POST['Description1'];
    $phno=$_POST['PhoneNumber'];
    $Ylink=$_POST['Youtube'];
    $section=$_POST['Section'];

   // $PaperInsertion=mysqli_query($con,"INSERT INTO `papers`( `Heading`, `Description`, `Section_ID`, `User_ID`, `Link_ID`) VALUES ('$heading','$descp','$section','$phno','$Ylink')");
}



if(isset($_POST['paper']))
{
 $target_dir = "..\Images/";
 $target_file = $target_dir . basename($_FILES["pdf"]["name"]);

 $name = $heading;
// 
 $newfilename=$name ;
 echo $newfilename;
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 // Check if image file is a actual image or fake image
 //if(isset($_POST["submit"])) {
    //  $check = getimagesize($_FILES["pdf"]["tmp_name"]);
    //  if($check !== false) {
    //      echo "File is an image - " . $check["mime"] . ".";
    //      $uploadOk = 1;
    //  } else {
    //      echo "File is not an image.";
    //      $uploadOk = 0;
    //  }

 // Check if file already exists
 if (file_exists($target_file)) {
     echo "Sorry, file already exists.";
     $uploadOk = 0;
 }
 // Check file size
 if ($_FILES["pdf"]["size"] > 5000000) {
     echo "Sorry, your file is too large.";
     $uploadOk = 0;
 }
 // Allow certain file formats
 if( $imageFileType != "pdf" ) {
     echo "Sorry, only pdf files are allowed.";
     $uploadOk = 0;
 }
 // Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) {
     echo "Sorry, your file was not uploaded.";
 // if everything is ok, try to upload file
 } else {
     //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        if(move_uploaded_file($_FILES["pdf"]["tmp_name"], "../../papers/" . $newfilename.'.pdf')){
         echo "The file ". basename( $_FILES["pdf"]["name"]). " has been uploaded.";
         //header('Location:../Shop_CategorieInsertion.php');
     } else {
         echo "Sorry, there was an error uploading your file.";
     }
    }}

