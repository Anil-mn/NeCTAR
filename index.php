<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php
include('Components/head.php');
include('Components/header.php');
include('pages/firstPage.php');
//include('model/news.php');


echo $head
     .$header3
     .$firstPage_1;
   
     Featured();
    
   //echo $query;
   
  
   coun();

$WebinarDetails = mysqli_query($GLOBALS ['con'],"SELECT * from `webinar`");
$roesult2 = mysqli_fetch_array($WebinarDetails);
if($roesult2 == true)
{
webinarsVideo();
}
compus();
echo $firstPage_3;

    headlines();

echo $firstPage_4;
event();

echo $firstPage_5;

 
$Details = mysqli_query($GLOBALS ['con'],"SELECT * from `introvideos`");
$result3 = mysqli_fetch_array($Details);
if($result3==true){
testrimo();
}



$MessageQuery = mysqli_query($GLOBALS ['con'],"SELECT * from `message`");
$row56 = mysqli_fetch_array($MessageQuery);
if($row56 == true){
Message();
}

 
 echo $firstPage_6;

 $userdetails = mysqli_query($GLOBALS ['con'],"SELECT Count(`User_ID`) from `user_info`");
 while($row8 = mysqli_fetch_array($userdetails));{

 if($row8[0]>15){

 img();
 }
}
   echo  $footer
    .$connection;

 ?>