<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php
include('Components/head.php');
include('Components/header.php');
include('pages/firstPage.php');
//include('model/news.php');


echo $head
     .$header
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


echo $messageHead;

Message();


 
 echo $firstPage_6;
 img();
   echo  $footer
    .$connection;

 ?>