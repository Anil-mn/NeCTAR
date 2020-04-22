<?php
include('../admin/model/connection.php');
if(isset($_POST['Comment'])){
  
    $name =$_POST['name'];
    $paperid = $_POST['paper'];
    $comment = $_POST['com'];
    $email = $_POST['email'];
     echo $name;
    $CommentInsertion = mysqli_query($con,"INSERT INTO `comments`(`Name`, `Paper_ID`, `Comment`, `Email_ID`) VALUES ('$name','$paperid','$comment','$email')");
    header('../webdetails.php')
}


?>