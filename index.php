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
   
  
echo $firstPage_2
    .$firstPage_3;

    headlines();

echo $firstPage_4;
event();

echo $firstPage_5;
Message();


 
 echo $firstPage_6
    .$footer
    .$connection;

 ?>