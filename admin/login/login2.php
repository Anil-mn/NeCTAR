<?php
include('../model/connection.php');
SESSION_START();
if(!isset($_SESSION['admin'])){
    header('location:index.html');
 }

 $ShopName = $_POST ['name'];
 $password = $_POST['password'];
 if($ShopName=='nectar2020' and $password=='nectar@20&mca#20') 
    {
        header('location:../userinfo.php');
        $_SESSION['admin'] = $_POST['name'];
        echo $_SESSION['admin'];
        
        
    }
   elseif ($ShopName=='nectar2020' and $password=='ncerc@20&nectar20') 
  { 
      header('location:../userinfo.php');
      $_SESSION['admin'] = $_POST['name'];
      echo $_SESSION['admin'];

    }
    else{
        echo "<script>alert('wrong Password')</script>";
    }