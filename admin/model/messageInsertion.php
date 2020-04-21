<?php
include('connection.php');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $desig=$_POST['designation'];
    $message=$_POST['message'];
    $messageInsertion=mysqli_query($con,"INSERT INTO `message`(`Name`, `Designation`, `Message`) VALUES ('$name','$desig','$message')");

    if($messageInsertion==true)
    {
       $msgphoto=mysqli_query($con,"SELECT * from `message` order by  `Message_ID` desc limit 1");
       while($row=mysqli_fetch_array($msgphoto))
       {
           $MsgId=$row[0];
        
       }
       $target_dir = "..\Images/";
  $target_file = $target_dir . basename($_FILES["msg"]["name"]);
  
  $name = $MsgId;
 
  $newfilename=$name ;
  //echo $newfilename;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  //if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["msg"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["msg"]["size"] > 5000000) {
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
         if(move_uploaded_file($_FILES["msg"]["tmp_name"], "../../Images/Message/" . $newfilename.'.jpg')){
          echo "The file ". basename( $_FILES["msg"]["name"]). " has been uploaded.";
          //header('Location:../Shop_CategorieInsertion.php');
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
    }
 }
 
 
 





function display()
{
    include('connection.php');
    $query = mysqli_query($con,"SELECT * from `message`");
    while($row = mysqli_fetch_array($query)){
       $id =$row[0];
        echo '<tr><form method="POST"><td><input  value="'.$id.'" name="id" hidden> '.$row[0].'</td><td>'.$row[1].'</td><td><button type="submit" name="dele" class="btn btn-danger mr-2">Delete</button></td></form></tr>';
    }
     if(isset($_POST['dele']))
        {
            $delet=$_POST['id'];
            $deletesect=mysqli_query($con,"DELETE from `message` where `message_ID`=' $delet'");

    }

}
?>