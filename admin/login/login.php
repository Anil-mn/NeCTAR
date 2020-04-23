<?php
include('../model/connection.php');
SESSION_START();

 $ShopName = $_POST ['name'];
 $password = $_POST['password'];
 if($ShopName=='nectar2020' and $password=='nectar2020') 
    {
        header('location:../userinfo.php');
        $_SESSION['admin'] = $_POST['name'];
        echo $_SESSION['admin'];
        
        
    }
   else 
  { 
      echo "invalid login";

      }
    
        
    


   
    

?>