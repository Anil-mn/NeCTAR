<?php
include('../model/connection.php');
SESSION_START();

 $ShopName = $_POST ['name'];
 $password = $_POST['password'];

$query = "SELECT * from `admin` where `UserName` = 'MCAnectar' and `Password` = '$password'";
$result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
if( $check== true)
{
    $_SESSION['admin'] = $_POST['name'];
    header('location:../userinfo.php');
}
else
{
 $query = "SELECT * from `login` where `UserName` = '$ShopName' and `Password` = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
    $_SESSION['admin'] = $_POST['name'];
    header('location:../login.php');}

    else {
        echo '<script> confirm("Wrog Password",window.location="../login.php")</script>';
      }
    
   }









//  if($ShopName=='nectar2020' and $password=='nectar@20&mca#20') 
//     {
//         header('location:../userinfo.php');
//         $_SESSION['admin'] = $_POST['name'];
//         echo $_SESSION['admin'];
        
        
//     }
//    elseif ($ShopName=='nectar2020' and $password=='nectar&2020') 
//   { 
//       header('location:../login.php');
//       $_SESSION['admin'] = $_POST['name'];
//       echo $_SESSION['admin'];
//       header('location:../login.php');

//     }
    
        
//     else{
//         echo "<script>alert('wrong Password')</script>";
//         header('location:../index.html');
//     }


   
    

?>