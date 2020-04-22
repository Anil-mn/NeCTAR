<?php
include('connection.php');
if(isset($_POST['user']))
{
    $name=$_POST['Name'];
    $Designation=$_POST['Designation'];
    $Qualification=$_POST['Qualification'];
    $email=$_POST['Email'];
    $phno=$_POST['PhoneNumber'];
    $place=$_POST['Place'];

    $UserInsertion =mysqli_query($con,"INSERT INTO `user_info`( `Name`, `Designation`, `Qualification`, `Email_ID`, `PhoneNumber`,`Place`) VALUES('$name','$Designation','$Qualification','$email','$phno','$place')");




 $target_dir = "..\Images/";
 $target_file = $target_dir . basename($_FILES["photo"]["name"]);

 $name = $email;

 $newfilename=$name ;
 echo $newfilename;
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 // Check if image file is a actual image or fake image
 //if(isset($_POST["submit"])) {
     $check = getimagesize($_FILES["photo"]["tmp_name"]);
     if($check !== false) {
         echo "File is an image - " . $check["mime"] . ".";
         $uploadOk = 1;
     } else {
         echo "File is not an image.";
         $uploadOk = 0;
     }
 
 // Check if file already exists
 if (file_exists($target_file)) {
     echo "Sorry, file already exists.";
     $uploadOk = 0;
 }
 // Check file size
 if ($_FILES["photo"]["size"] > 5000000) {
     echo "Sorry, your file is too large.";
     $uploadOk = 0;
 }
 // Allow certain file formats
 if( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 && $imageFileType != "gif" ) {
     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
     $uploadOk = 0;
 }
 // Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) {
     echo "Sorry, your file was not uploaded.";
 // if everything is ok, try to upload file
 } else {
     //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        if(move_uploaded_file($_FILES["photo"]["tmp_name"], "../../Images/profile/" . $newfilename.'.jpg')){
         echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
         //header('Location:../Shop_CategorieInsertion.php');
     } else {
         echo "Sorry, there was an error uploading your file.";
     }
     
    }

}

//-----Paper insertion------------------



if(isset($_POST['paper']))
{
   
    $heading=$_POST['Heading'];
    $descp=$_POST['Description1'];
    $phno=$_POST['PhoneNumber'];
    $Ylink=$_POST['Youtube'];
    $section=$_POST['Section'];

   $PaperInsertion=mysqli_query($con,"INSERT INTO `papers`( `Heading`, `Description`, `Section_Name`,`phoneNumber`,`Link_ID`) VALUES ('$heading','$descp','$section','$phno','$Ylink')");
//    if($PaperInsertion==true)
//    {
//       $innsertphoto=mysqli_query($con,"SELECT * from `paper` order by  `Paper_ID` desc limit 1");
//       while($row=mysqli_fetch_array($innsertphoto))
//       {
//          $id=$row[0];
//       }



// if(isset($_POST['paper']))
// {
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
    }
}

    function Dis()
    {
        include('connection.php');
        $query = mysqli_query($con,"SELECT * from `papers`");
        while($row = mysqli_fetch_array($query)){
           $id = $row[0];
            // echo $id;
            echo '<tr><form method="POST"><td><input  value="'.$id.'" name="id" hidden> '.$row[0].'</td><td>'.$row[1].'</td><td><button type="submit" name="dele" class="btn btn-danger mr-2">Delete</button></td></form></tr>';
        }
    
    
    if(isset($_POST['dele']))
            {
                $delet=$_POST['id'];
               // echo $delet;
                $delpaper=mysqli_query($con,"DELETE from `papers` where `Paper_ID`=' $delet'");
    
        }
    
    }
?>