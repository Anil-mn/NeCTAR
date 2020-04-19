<?php
include('../model/connection.php');
$date=date('Y-m-d');
if(isset($_POST['name']))
{
    $head=$_POST['Heading'];
    $description1=$_POST['Description1'];
    $description2=$_POST['Description2'];
$newsInsertion=mysqli_query($con,"INSERT INTO `news`( `Headline`, `Description`, `Description1`, `Date`) VALUES ('$head','$description1','$description2','$date')");

}

?>