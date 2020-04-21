<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php
include('Components/head.php');
include('Components/header.php');
include('pages/registrationPage.php');
include('components/imageSlider.php');
//include('components/about.php');
// include('components/Featured.php');
// include('components/Counter.php');
// include('components/Message.php');
// include('components/News/newsMain.php');
// include('components/News/faq.php');
// include('components/filter.php');
// include('components/webnar.php');
// include('components/Registration.php');
include('admin/model/connection.php');
//include('model/news.php');

echo $head
    .$header;
  
    about3Head('Submit Paper');
    echo $GLOBALS['REGHEAD'];
    echo $GLOBALS['rowStart'];
    input('PhoneNumber','Number','required');
    input('PaperName','text','required');
    selectHead('section');
    $query = mysqli_query($con,"SELECT * From `sections`");
    while($row3=mysqli_fetch_array($query))
    {
    echo '<option>'.$row3[1].'';
    }
    SelectEnd();
    input('Discription','text','');
    // input('Qualification','text','required');
    // input('Email','email','required');
    //upload('profilePhoto');
     upload('Pdf');
    upload('file');
    textArea('Description');
    button('Submit');
    echo $GLOBALS['rowEnd'];
    echo $GLOBALS['RegEnd']; 

echo $footer
    .$connection;