<?php


  echo "<script>confirm('There is email is already exisit ')</script>";
   $ok =1;
   $name  = $_POST['name'];
   $Designation  = $_POST['Designation'];
   $Qualification  = $_POST['Qualification'];
   $Email  = $_POST['Email'];
   $PhoneNumber  = $_POST['PhoneNumber'];
  
   $userdetails = mysqli_query($con,"SELECT * from `user_info` where `Email_ID`='$Email'");
   $result = mysqli_fetch_array($userdetails);
   if($result == true)
   {
    echo "<script>confirm('There is email is already exisit ')</script>";
   }


?>