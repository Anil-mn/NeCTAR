<?php
include('../model/connection.php');
SESSION_START();
if(!isset($_SESSION['admin'])){
    header('location:index.html');
 }

 $ShopName = $_POST ['name'];
 $password = $_POST['password'];
 if($ShopName=='nectar2020' and $password=='nectar@2020#Mca20') 
    {
        header('location:../userinfo.php');
        $_SESSION['admin'] = $_POST['name'];
        echo $_SESSION['admin'];
        
        
    }
   elseif ($ShopName=='nectar@2020' and $password=='ncerc@nectar') 
  { 
      header('location:../userinfo.php');
      $_SESSION['admin'] = $_POST['name'];
      echo $_SESSION['admin'];

    }
    else{
        echo "<script>alert('wrong Password')</script>";
    }