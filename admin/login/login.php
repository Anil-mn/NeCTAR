<?php
include('../model/connection.php');
SESSION_START();

 $ShopName = $_POST ['name'];
 $password = $_POST['password'];
 if($ShopName=='nectar2020' and $password=='nectar2020') 
    {
        header('location:../userinfo.php');
    }
   else 
  { 
      echo "invalid login";
//  $query = "select * from shop_info where PhoneNumber = '$ShopName' and Password = '$password'";
//  $result = mysqli_query($con, $query);
//  $check = mysqli_fetch_array($result);
//  if ($check == true){
//     $_SESSION['PhoneNumber'] = $_POST['PhoneNumber'];
//     header('location:../../../Shop/Shop/CurrentUser.php');}

//     else {
//         echo '<script> confirm("Wrog Password",window.location="../../../Shop")</script>';
      }
    
        
    


   
    

?>