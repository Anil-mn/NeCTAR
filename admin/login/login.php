<?php
include('../model/connection.php');
SESSION_START();

 $ShopName = $_POST ['name'];
 $password = $_POST['password'];
 if($ShopName=='nectar2020' and $password=='nectar@2020#mca20') 
    {
        header('location:../userinfo.php');
        $_SESSION['admin'] = $_POST['name'];
        echo $_SESSION['admin'];
        
        
    }
   elseif ($ShopName=='nectar2020' and $password=='nectar2020') 
  { 
      header('location:../login.php');
      $_SESSION['admin'] = $_POST['name'];
      echo $_SESSION['admin'];

    }
    
        
    else{
        echo "<script>alert('wrong Password')</script>";
    }


   
    

?>