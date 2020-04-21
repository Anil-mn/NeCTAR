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
include('components/filter.php');
include('components/webnar.php');
include('components/Registration.php');


// function index(){
//     echo $GLOBALS['Slider'];
//     echo $GLOBALS['about'];
//     echo $GLOBALS['whyThis'];
//     echo $GLOBALS['start2'];
    
 
//     echo $GLOBALS['end2'];
//     echo $GLOBALS['counter'];
//     echo $GLOBALS['Heading'];
// }
//     function Featured()
//      {
//        $query = mysqli_query($GLOBALS ['con'],"SELECT * from `Sections`");
//        while($row = mysqli_fetch_array($query))
//          {
//           $id =$row[0];
//           $Name=$row[1];
//           test1($Name);
//           //echo $id.$Name;
//          }
//          echo $GLOBALS['NewsEnd'];
         
//       }
     

//     function headlines()
//     {
//         echo $GLOBALS['UpcomingHead'];
//         $newsQuery = mysqli_query($GLOBALS ['con'],"SELECT * from `news`");
//         while($row1 = mysqli_fetch_array($newsQuery))
//         {
//          $newsid =$row1[0];
//          $newshead=$row1[1];
//          $des1=$row1[2];
//          $des2=$row1[3];
//          $date=$row1[4];
//          News($newshead,$des1,$date);
//         // echo $newsid.$newshead.$des1.$des2.$date;
//         }
//         echo $GLOBALS['upComingEnd'];
//     }
   
   
    

//     function Message()
//                  {
//                     echo $GLOBALS['messageHead'];
//                     $MessageQuery = mysqli_query($GLOBALS ['con'],"SELECT * from `message`");
//                     while($row2 = mysqli_fetch_array($MessageQuery))
//                     {
//                      $Messageid =$row2[0];
//                      $name1=$row2[1];
//                      $designation=$row2[2];
//                      $message=$row2[3];
//                      Mesg($name1,$designation,$message);
//                     }
//                     echo $GLOBALS['messageEnd'];
//                 }
               





$firstPage_1 = $Slider
              .$about 
              .$whyThis
              .$start2;
 
                $firstPage_2= $end2.$counter;

                $firstPage_3= $Heading;
                
               
                 
                // echo $id.$Name;
                      
                 function Featured()
                 {
                   $query = mysqli_query($GLOBALS ['con'],"SELECT * from `Sections`");
                   while($row = mysqli_fetch_array($query))
                     {
                      $id =$row[0];
                      $Name=$row[1];
                      test1($Name);
                      //echo $id.$Name;
                     }
                 }


function headlines(){
             $newsQuery = mysqli_query($GLOBALS ['con'],"SELECT * from `news`");
             while($row1 = mysqli_fetch_array($newsQuery))
             {
              $newsid =$row1[0];
              $newshead=$row1[1];
              $des1=$row1[2];
              $des2=$row1[3];
              $date=$row1[4];
              News($newshead,$des1,$date);
             // echo $newsid.$newshead.$des1.$des2.$date;
             }
}
                
                
                $firstPage_4=$NewsEnd.$UpcomingHead;
                $firstPage_5=$upComingEnd.$messageHead;
                
 function Message()
                 {
                    $MessageQuery = mysqli_query($GLOBALS ['con'],"SELECT * from `message`");
                    while($row2 = mysqli_fetch_array($MessageQuery))
                    {
                     $Messageid =$row2[0];
                     $name1=$row2[1];
                     $designation=$row2[2];
                     $message=$row2[3];
                     Mesg($name1,$designation,$message);
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

   Function webinar(){
    about3Head('webinars');
    echo $GLOBALS ['webHead'];
    echo $GLOBALS ['filterHead'];
    filter('All');
    filter('Demo');
    echo $GLOBALS ['filterEnd'];
    echo $GLOBALS ['webHead'];
    echo $GLOBALS['weba'];
    web('All','demo dfsdf sdfsdf sdfsdfsdf sedfsdfdsf sdfsdfds fdsf asdasd asda sd dasdasd');
    web('Demo','demo');
    echo $GLOBALS['webaEnd'];
    echo $GLOBALS ['webEnd'];
   }
   

Function webdet(){
    about3Head('webinarDetails');
    echo $GLOBALS['webDetailsHead'];
    webDetails();
    echo $GLOBALS['rightDet'];
    echo $GLOBALS['related'];
    echo $GLOBALS['webDetailsEnd'];
}






function regi()
{    
    about3Head('Submit Paper');
    echo $GLOBALS['REGHEAD'];
    echo $GLOBALS['rowStart'];
    input('name','text');
    input('Designation','text');
    input('Qualification','text');
    input('Email','email');
    input('PhoneNumber','Number');
    upload('Pdf');
    upload('News');
    button('Submit');
    echo $GLOBALS['rowEnd'];
    echo $GLOBALS['RegEnd'];
    
}
?>