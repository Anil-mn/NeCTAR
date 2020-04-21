<?php
include('connection.php');
if(isset($_POST['user']))
{
    $name=$_POST['Name'];
    $Designation=$_POST['Designation'];
    $Qualification=$_POST['Qualification'];
    $email=$_POST['Email'];
    $phno=$_POST['PhoneNumber'];


    $UserInsertion =mysqli_query($con,"INSERT INTO `user_info`( `Name`, `Designation`, `Qualification`, `Email_ID`, `PhoneNumber`) VALUES('$name','$Designation','$Qualification','$email','$phno')");

}
if(isset($_POST['paper']))
{
   
    $heading=$_POST['Heading'];
    $descp=$_POST['Description1'];
    $phno=$_POST['PhoneNumber'];
    $Ylink=$_POST['Youtube'];
    $section=$_POST['Section'];

    $PaperInsertion=mysqli_query($con,"INSERT INTO `papers`( `Heading`, `Description`, `Section_ID`, `User_ID`, `Link_ID`) VALUES ('$heading','$descp','$section','$phno','$Ylink')");
}