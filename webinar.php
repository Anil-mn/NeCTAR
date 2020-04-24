<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php
include('Components/head.php');
include('Components/header.php');
include('pages/firstPage.php');

echo $head
    .$header3;
    
    $paperdetails=mysqli_query($con,"SELECT * from `papers`");
    $result = mysqli_fetch_array($paperdetails);
    if($result == true)
    {
    webinar();
    }
    else{
        about3Head('404error');
        h404('site is under maintaince','404');
    }

echo $footer
    .$connection;
