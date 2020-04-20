<?php
include('Components/head.php');
include('Components/header.php');
include('components/imageSlider.php');
include('components/about.php');
include('components/Featured.php');
include('components/Counter.php');
include('components/Message.php');
include('components/News/newsMain.php');


$firstPage_1 = $Slider
              .$about 
              .$whyThis
              .$start2;
 
                $firstPage_2= $end2.$counter;

                $firstPage_3= $Heading;
                function News()
                 {
                    for ($x = 0; $x <= 2; $x++) {
                        echo $GLOBALS['News'];
                    }
                    
                }
                
                
                $firstPage_4=$NewsEnd.$UpcomingHead;
                $firstPage_5=$upComingEnd.$messageHead;
 function Message()
                 {
                    for ($x = 0; $x <= 5; $x++) {
                        echo $GLOBALS['message'];
                    }
                    
                }
                $firstPage_6=$messageEnd;
                

$secoundPage = $about3head.$about3;  



   




?>