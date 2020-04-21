<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php
include('Components/head.php');
include('Components/header.php');
//include('pages/firstPage.php');
include('pages/registrationPage.php');


echo $head
    .$header;
    if($ok==0){
    regi();
}


else {

}
echo $footer
    .$connection;