<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php
include('Components/head.php');
include('Components/header.php');
include('pages/firstPage.php');

echo $head
    .$header3;
    $filename = basename($_SERVER['REQUEST_URI']);
    $paperIDS =substr($filename,15);
    $paperdetails=mysqli_query($GLOBALS ['con'],"SELECT * from `papers` where Paper_ID = '$paperIDS'");
    $row = mysqli_fetch_array($paperdetails);
    if($row == true){
        webdet();
    }
    else {
        about3Head('404error','404');
        h404('this file is missing');
    }

   

echo $footer
    .$connection;
