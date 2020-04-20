<?php
include('Components/head.php');
include('Components/header.php');
include('components/imageSlider.php');
include('components/about.php');
include('components/Featured.php');
include('components/Counter.php');
include('components/Message.php');
include('components/News/newsMain.php');
include('components/News/faq.php');

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
                

 

function about(){
    about3Head('AboutUs');
    echo $GLOBALS['about3'];
}

function paper(){
    
    about3Head('Call For papers');
    echo $GLOBALS['about3'];
    echo $GLOBALS['faqHead'];
    faq('Demo','1','One','dem');
    faq('Demo','1','Two','dem');
    faq('Demo','1','Three','dem');
    echo '</div>';
    echo ' <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
    faq('Demo','1','Four','dem');
    faq('Demo','1','Five','dem');
    faq('Demo','1','Six','dem');
    echo $GLOBALS ['faqEnd'];

   
   


}

   




?>