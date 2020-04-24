<?php
include('connection.php');
if(isset($_POST['user']))
{
    $name=$_POST['Name'];
    $name=ucfirst($name);
    $Designation=$_POST['Designation'];
    $Qualification=$_POST['Qualification'];
    $email=$_POST['Email'];
    $phno=$_POST['PhoneNumber'];
    $place=$_POST['Place'];
    echo $name.$Designation.$Qualification.$email.$phno.$place;
    $userdetails = mysqli_query($con,"SELECT * from `user_info` where `Email_ID`='$email'");
   $result = mysqli_fetch_array($userdetails);
   if($result == true)
   {
    echo "<script>confirm('There is email is already exisit',window.location='../userinfo.php')</script>";
    
   }
   else
   {
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
         echo "<script>confirm('profile Image Uploaded',window.location='../userinfo.php')</script>";
     } else {
         echo "Sorry, there was an error uploading your file.";
     }
     
    }
    //..........abstract....
    $target_dir = "..\Images/";
    $target_file = $target_dir . basename($_FILES["Abstract"]["name"]);
   
    $name =$email;
   //
    $newfilename=$name ;
    echo $newfilename;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
       
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["Abstract"]["size"] > 5000000) {
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
           if(move_uploaded_file($_FILES["Abstract"]["tmp_name"], "../../Abstract/" . $newfilename.'.pdf')){
            echo "The file ". basename( $_FILES["Abstract"]["name"]). " has been uploaded.";
            $update=mysqli_query($con,"UPDATE `user_info` SET `Abstract`='$newfilename' where `Email_ID`='$name' ");
            echo "<script>confirm('Abstract Uploaded',window.location='../userinfo.php')</script>";
            } else {
            echo "Sorry, there was an error uploading your file.";
                }
        
        } 
   
    }
}

//-----Paper insertion------------------



if(isset($_POST['paper']))
{
   
    $heading=$_POST['Heading'];
    $descp=$_POST['Description1'];
    $email=$_POST['Email'];
    $Ylink=$_POST['Youtube'];
    $section=$_POST['Section'];

 $userdetails = mysqli_query($con,"SELECT * from `user_info` where `Email_ID`='$email'");
 $result = mysqli_fetch_array($userdetails);

   if($result == true)
   {
   $PaperInsertion=mysqli_query($con,"INSERT INTO `papers`( `Heading`, `Description`, `Section_Name`,`Email`,`Link_ID`) VALUES ('$heading','$descp','$section','$email','$Ylink')");
   }
   else{
       echo "<script>confirm('There is no registerd email ',window.location='../Userinfo.php')</script>";
   }
   if($PaperInsertion==true)
   {
      $innsertphoto=mysqli_query($con,"SELECT * from `papers` order by  `Paper_ID` desc limit 1");
      while($row=mysqli_fetch_array($innsertphoto))
      {
         $id=$row[0];
      }
    



 $target_dir = "..\Images/";
 $target_file = $target_dir . basename($_FILES["pdf"]["name"]);

 $name =$id.'-'.$heading;
//
 $newfilename=$name ;
 echo $newfilename;
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
    
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
   $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
   $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
   $namelink = $id.'-'.$heading.'.'.$extension;
   echo "<br><br><br><br>".$namelink."<br><br><br><br>";
   if ((($_FILES["file"]["type"] == "video/mp4")
   || ($_FILES["file"]["type"] == "audio/mp3")
   || ($_FILES["file"]["type"] == "audio/jpg")
   || ($_FILES["file"]["type"] == "audio/png")
   || ($_FILES["file"]["type"] == "audio/mpeg")
   || ($_FILES["file"]["type"] == "audio/wma")
   || ($_FILES["file"]["type"] == "image/pjpeg")
   || ($_FILES["file"]["type"] == "image/gif")
   || ($_FILES["file"]["type"] == "image/jpeg"))
   
   && ($_FILES["file"]["size"] < 20000000000000)
   && in_array($extension, $allowedExts))
   
     {print_r($_FILES['file']['name']);
     if ($_FILES["file"]["error"] > 0)
       {
       echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
       }
     else
       {
       echo "Upload: " . $_FILES["file"]["name"] . "<br />";
       echo "Type: " . $_FILES["file"]["type"] . "<br />";
       echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
       echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
   
       if (file_exists("store/" . $_FILES["file"]["name"]))
         {
         echo $_FILES["file"]["name"] . " already exists. ";
         }
       else
         {
             echo $name;
          move_uploaded_file($_FILES["file"]["tmp_name"],
          "../../Videos/" . $namelink);
          echo "Stored in: " . "../../Videos/" . $namelink;
          
          $update =  mysqli_query($con,"UPDATE `papers` SET   `Link_ID` = '$namelink' where Paper_ID='$id'");
         }
       }
     }
   
     else
     {
       echo "Invalid file";
     }
     echo "<script>confirm('Succeflly enterd',window.location='../Userinfo.php')</script>";
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