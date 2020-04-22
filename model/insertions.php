<?php
include('../admin/model/connection.php');
if(isset($_POST['Comment'])){
  
    $name =$_POST['name'];
    $paperid = $_POST['paper'];
    $comment = $_POST['com'];
    $email = $_POST['email'];
     echo $name;
     $pagename = '../webdetails.php?'.$paperid;
    $CommentInsertion = mysqli_query($con,"INSERT INTO `comments`(`Name`, `Paper_ID`, `Comment`, `Email_ID`) VALUES ('$name','$paperid','$comment','$email')");
    header('Location:'.$pagename);
}
if(isset($_POST['feed']))
{
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $msg = $_POST['feedback'];
 $paperid = $_POST['paper'];
 echo $name;
     $pagename = '../webdetails.php?'.$paperid;
 $feedbackInsertion = mysqli_query($con,"INSERT INTO `feedback`(`Name`, `Email_ID`, `Message`) VALUES('$name','$email','$msg')");
 header('Location:'.$pagename);
}

?>