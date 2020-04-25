<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php
include('Components/head.php');
include('Components/header.php');
//include('pages/firstPage.php');
include('pages/registrationPage.php');


echo $head
    .$header3;
   
    regi();

    absss();



    if(isset($_POST['Submit']))
    {
        //echo "<script>alert('submit')</script>";
       $name  = $_POST['name'];
       $Designation  = $_POST['Designation'];
       $Qualification  = $_POST['Qualification'];
       $email  = $_POST['Email'];
       $PhoneNumber  = $_POST['PhoneNumber'];
       $place = $_POST['place'];
       //echo $name.$Designation.$Qualification.$email.$PhoneNumber.$place;
       $userdetails = mysqli_query($con,"SELECT * from `user_info` where `Email_ID`='$email'");
       $result = mysqli_fetch_array($userdetails);
       if($result == true)
       {
        echo "<script>confirm('There is email is already exisit',window.location='registration.php')</script>";
        
       }
      else {
        $UserInsertion =mysqli_query($con,"INSERT INTO `user_info`( `Name`, `Designation`, `Qualification`, `Email_ID`, `PhoneNumber`,`Place`) VALUES('$name','$Designation','$Qualification','$email','$PhoneNumber','$place')");
       
    
    
      $target_dir = "..\Images/";
     $target_file = $target_dir . basename($_FILES["ProfileImage"]["name"]);
    
     $name = $email;
    
     $newfilename=$name ;
    // echo $newfilename;
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     // Check if image file is a actual image or fake image
     //if(isset($_POST["submit"])) {
         $check = getimagesize($_FILES["ProfileImage"]["tmp_name"]);
         if($check !== false) {
            // echo "File is an image - " . $check["mime"] . ".";
             $uploadOk = 1;
         } else {
             //echo "<script>alert('File is not an image.',window.location='registration.php')</script>";
             $uploadOk = 0;
         }
     
     // Check if file already exists
     if (file_exists($target_file)) {
         echo "<script>alert('Sorry, file already exists.',window.location='registration.php')</script>";
         $uploadOk = 0;
     }
     // Check file size
     if ($_FILES["ProfileImage"]["size"] > 5000000) {
         echo "<script>alert('Sorry, file already exists.',window.location='registration.php')</script>";
         $uploadOk = 0;
     }
     // Allow certain file formats
     if( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
     && $imageFileType != "gif" ) {
        echo '<script> alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")</script>';
         $uploadOk = 0;
     }
     // Check if $uploadOk is set to 0 by an error
     if ($uploadOk == 0) {
         echo "<script>alert('Sorry, your file was not uploaded.',window.location='registration.php')</script>";
     // if everything is ok, try to upload file
     } else {
         //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            if(move_uploaded_file($_FILES["ProfileImage"]["tmp_name"], "Images/profile/" . $newfilename.'.jpg')){
             echo "The file ". basename( $_FILES["ProfileImage"]["name"]). " has been uploaded.";
             //header('Location:.index.phpShop_CategorieInsertion.php');
             echo "<script>confirm('Registered successfully Add your abstract',window.location='registration.php?#2')</script>";
         } else {
            echo "<script>confirm('Error in upload',window.location='registration.php')</script>";
         }
         
        }
    }
}
      
//..........abstract....
        if(isset($_POST['absss'])){
            //echo "<script>alter('done')</script>";
            $email  = $_POST['Email'];
            $userdetails = mysqli_query($con,"SELECT * from `user_info` where `Email_ID`='$email'");
            $result = mysqli_fetch_array($userdetails);
            if($result == true)
            {
                $userdetails1 = mysqli_query($con,"SELECT * from `user_info` where `Abstract`='$email'");
                $result3 = mysqli_fetch_array($userdetails1);
                if($result3==true){
                   echo "<script>confirm('You already upload abstract',window.location='registration.php')</script>";
                   
                }
                else {
                $target_dir = "..\Images/";
                $target_file = $target_dir . basename($_FILES["Abstract"]["name"]);
               
                $name =$email;
               //
                $newfilename=$name ;
                //echo $newfilename;
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                
                   
                if (file_exists($target_file)) {
                    //echo '<script> alert("Sorry, file already exists.");</script>';
                    $uploadOk = 0;
                }
                // Check file size
                if ($_FILES["Abstract"]["size"] > 5000000) {
                   // echo '<script> alert("Sorry, your file is too large.");</script>';
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if( $imageFileType != "pdf" ) {
                   // echo '<script> alert("Sorry, only pdf files are allowed.")</script>';
                    $uploadOk = 0;
                }
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                  // echo '<script> alert("Sorry, your file was not uploaded.")</script>';
                // if everything is ok, try to upload file
                } else {
                    //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                       if(move_uploaded_file($_FILES["Abstract"]["tmp_name"], "Abstract/" . $newfilename.'.pdf')){
                        //echo "The file ". basename( $_FILES["Abstract"]["name"]). " has been uploaded.";
                        $update=mysqli_query($con,"UPDATE `user_info` SET `Abstract`='$newfilename' where `Email_ID`='$name' ");
                        echo "<script>confirm('Thank you for uploading abstract',window.location='upv.php')</script>";
                        } else {
                        echo "<script>confirm('upload error',window.location='index.php')</script>";
                            
                    
                    } 
               
                }
            }
            }
           else {
          
          
        }
    }




    


echo $footer
    .$connection;
