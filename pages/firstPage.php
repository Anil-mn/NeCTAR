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
include('admin/model/connection.php');
include('components/contactUs.php');
include('components/imagesDisplay.php');


//include('model/demo.php');


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
               





$firstPage_1 = $slider2
             .$service
              .$aboutHead
              .$aboutVideo
              .$aboutEnd;


            function webinarsVideo()
            {
              echo $GLOBALS ['featured3Head'];
              $WebinarDetails = mysqli_query($GLOBALS ['con'],"SELECT * from `webinar`");
               while($row = mysqli_fetch_array($WebinarDetails))
               {
                $id = $row[0];
                $name = $row[1];
                $sectionName = $row[4];
                $Videoname = $row[3];
                $videoLength = $row[5];
                $desig = $row[2];
              featured3($name,$Videoname,$videoLength,$sectionName);
            }
             
              echo $GLOBALS['fea3End'];
            }

              function Featured()
              {
                echo $GLOBALS ['start2'];
                $query = mysqli_query($GLOBALS ['con'],"SELECT * from `Sections`");
                while($row = mysqli_fetch_array($query))
                  {
                   $id =$row[0];
                   $Name=$row[1];
                   $shortName = $row[2];
                   test1($Name,$id,$shortName);
                   //echo $id.$Name;
                  }
                  echo $GLOBALS['end2'];
              }


                function coun(){
                  $SectionDetails = mysqli_query($GLOBALS ['con'],"SELECT count(`Section_ID`) from `sections`");
while($row = mysqli_fetch_array($SectionDetails))
  {
   $sid =$row[0];
  }
  $paperdetails=mysqli_query($GLOBALS ['con'],"SELECT count(`Paper_ID`) from `papers`");
while($row = mysqli_fetch_array($paperdetails))
{
 $paperid = $row[0];
}
$WebinarDetails = mysqli_query($GLOBALS ['con'],"SELECT count('Webinar_ID') from `webinar`");
while($row = mysqli_fetch_array($WebinarDetails))
{
 $wid = $row[0];}
 $eventdetails = mysqli_query($GLOBALS ['con'],"SELECT count('Event_ID') from `event`");
while($row = mysqli_fetch_array($eventdetails))
{
 $eventid = $row[0];}
                  counter($wid,$paperid,$sid,$eventid);
                }

                $firstPage_3= $Heading;
                
               
                 
                // echo $id.$Name;
                      
              function compus(){
                echo $GLOBALS['capusVi'];
              }


function headlines(){
             $newsQuery = mysqli_query($GLOBALS ['con'],"SELECT * from `news` order by  `News_ID` desc limit 3");
             while($row1 = mysqli_fetch_array($newsQuery))
             {
              $newsid =$row1[0];
              $newshead=$row1[1];
              $des1=$row1[2];
              $des2=$row1[3];
              $date=$row1[4];
              News($newsid,$newshead,$des1,$date);
             // echo $newsid.$newshead.$des1.$des2.$date;
             }
}
                
                
                $firstPage_4=$NewsEnd.$UpcomingHead;
                $firstPage_5=$upComingEnd;
                
 function Message()
                 {
                    $MessageQuery = mysqli_query($GLOBALS ['con'],"SELECT * from `message`");
                    while($row2 = mysqli_fetch_array($MessageQuery))
                    {
                     $Messageid =$row2[0];
                     $name1=$row2[1];
                     $designation=$row2[2];
                     $message=$row2[3];
                     Mesg($name1,$designation,$message,$Messageid);
                    }
                    
                }
                $firstPage_6=$messageEnd;
                
function event(){
    $eventdetails = mysqli_query($GLOBALS ['con'],"SELECT * from `event` order by Event_ID desc limit 2");
while($row = mysqli_fetch_array($eventdetails))
{
 $eventid = $row[0];
 $heading = $row[1];
 $date = $row[2];
 $time = $row[3];
 $descpn = $row[4];
 upcoming($eventid,$heading,$date,$time,$descpn);
}
}



function testrimo(){
  featured2Head();
  $Details = mysqli_query($GLOBALS ['con'],"SELECT * from `introvideos` limit 1");
while($row = mysqli_fetch_array($Details))
{
 $id = $row[0];
 $name = $row[1];
 $desig = $row[2];
 $status = $row[3];
 $eoname = $row[4];
 $desc1 = $row[5];
 $desc2 = $row[6];
 featured2main($name,$eoname,$desc1);
}
$Details = mysqli_query($GLOBALS ['con'],"SELECT * from `introvideos` limit 1,5");
while($row = mysqli_fetch_array($Details))
{
 $id = $row[0];
 $name = $row[1];
 $desig = $row[2];
 $status = $row[3];
 $eoname = $row[4];
 $desc1 = $row[5];
 $desc2 = $row[6];
 featured2($name,$eoname,$desc1);
}
    
    // featured2main();
    // featured2();featured2();featured2();featured2();
    echo $GLOBALS ['features2spe'];
    featured2End();
}



function about(){
    about3Head('AboutUs');
    echo $GLOBALS['about3'];
    
    $PatronsDetails = mysqli_query($GLOBALS ['con'],"SELECT * from `patrons`");
   $row23 = mysqli_fetch_array($PatronsDetails);
   if($row23 == true){
    about3Head('patrons');
    echo $GLOBALS ['lectureareaHead'];
    echo $GLOBALS ['filterHead2'];
    //echo $GLOBALS ['container']; 
    filterActive('patrons');
    filter('associ');
    filter('tecnical');
    echo $GLOBALS['container'];
    $PatronsDetails = mysqli_query($GLOBALS ['con'],"SELECT * from `patrons`");
   while($row = mysqli_fetch_array($PatronsDetails))
   {
    $id = $row[0];
    $name = $row[1];
   $designation = $row[2];
   $descpn = $row[5];
   $descpn2 = $row[6];
   $role1 = $row[3];
   $role2 = $row[4];
   
    box($role1,$name, $descpn,'chairman',$descpn2);
   }
  
  }
    //box('patrons'.' '.'associ','Adv. Dr. Krishnadas','Chairman and Mg.Trustee NGI','chairman','demo');
    echo $GLOBALS ['lectureareaEnd'];
   

}

function paper(){
    
    about3Head('Call For papers');
    //echo $GLOBALS['about3'];
    echo $GLOBALS['aboutHead123'];
    
    echo $GLOBALS['faqHead'];
    
    $query = mysqli_query($GLOBALS ['con'],"SELECT * from `Sections` limit 6");
    $arry =['One','Two','Three','Four','Five','Six','Seven'];
    $i=0;
    while($row = mysqli_fetch_array($query))
      {
        
       $id =$row[0];
       $Name=$row[1];
       $shortName = $row[2];
       faq($shortName,$id,$arry[$i],$Name);
       $i=$i+1;
       //echo $id.$Name;
      }
    // faq('Demo','1','One','dem');
    // faq('Demo','1','Two','dem');
    // faq('Demo','1','Three','dem');
    // echo '</div>';
    // echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
    // faq('Demo','1','Four','dem');
    // faq('Demo','1','Five','dem');
    // faq('Demo','1','Six','dem');
    echo $GLOBALS ['faqEnd'];
    echo $GLOBALS['aboutVideo'];
    echo $GLOBALS['aboutEnd'];

   }







   Function webinar(){
    $filename = basename($_SERVER['REQUEST_URI']);
    $idofpage =substr($filename,12);
    about3Head('webinars');
    echo $GLOBALS ['webHead'];
    echo $GLOBALS ['filterHead'];
    $query = mysqli_query($GLOBALS ['con'],"SELECT * from `Sections` limit 1");
    while($row = mysqli_fetch_array($query))
   {
   $id =$row[0];
   $Name=$row[1];
   $shortName =$row[2];
   filterActive($shortName);
    }
    $query = mysqli_query($GLOBALS ['con'],"SELECT * from `Sections`  limit 1,5 ");
    while($row = mysqli_fetch_array($query))
   {
   $id =$row[0];
   $Name=$row[1];
   $shortName =$row[2];
   $paperdetails=mysqli_query($GLOBALS ['con'],"SELECT * from `papers` where `Section_Name`='$shortName'");
   $result2 = mysqli_fetch_array($paperdetails);
   if($result2 == true){
   filter($shortName);
  }
    }
    

    echo $GLOBALS ['filterEnd'];
    echo $GLOBALS ['webHead'];
    echo $GLOBALS['weba'];
    
    $query = mysqli_query($GLOBALS ['con'],"SELECT * from `Sections`");
    while($row = mysqli_fetch_array($query))
   {
    $id =$row[0];
    $Name=$row[1];
    $shortName=$row[2];
    if($idofpage=='' || $idofpage=='10'){
        $i=9;
    $paperdetails=mysqli_query($GLOBALS ['con'],"SELECT * from `papers` where `Section_Name`='$shortName' limit $i");
    while($row = mysqli_fetch_array($paperdetails))
   {  
     $paperid = $row[0];
     $haeding = $row[1];
     $descpt = $row[2];
     $sectionid = $row[3];
     $userid = $row[4];
     $linkid = $row[5];
     web($paperid,$sectionid,$haeding,$linkid);
   }
        
    }
    if($idofpage=='20')
    {
        $i=8;
        $j=18;
        $paperdetails=mysqli_query($GLOBALS ['con'],"SELECT * from `papers` where `Section_Name`='$shortName' limit $i,$j");
    while($row = mysqli_fetch_array($paperdetails))
   {  
     $paperid = $row[0];
     $haeding = $row[1];
     $descpt = $row[2];
     $sectionid = $row[3];
     $userid = $row[4];
     $linkid = $row[5];
     web($paperid,$sectionid,$haeding,$linkid);
   }
    }
    if($idofpage=='30')
    {
        $i=18;
        $j=27;
        $paperdetails=mysqli_query($GLOBALS ['con'],"SELECT * from `papers` where `Section_Name`='$shortName' limit $i,$j");
    while($row = mysqli_fetch_array($paperdetails))
   {  
     $paperid = $row[0];
     $haeding = $row[1];
     $descpt = $row[2];
     $sectionid = $row[3];
     $userid = $row[4];
     $linkid = $row[5];
     web($paperid,$sectionid,$haeding,$linkid);
   }
    }
    
} 
    // web('Demo','demo');web('Demo','demo');
    echo $GLOBALS['webaEnd'];
    echo $GLOBALS ['webEnd'];
    $paperdetails=mysqli_query($GLOBALS ['con'],"SELECT  count(`Paper_ID`) from `papers`");
    while($row = mysqli_fetch_array($paperdetails))
    {  
      $count = $row[0];
    }

    if($count > 9)
    {
       if($idofpage=='' || $idofpage=='10'){
           links(10,1);ink(20,2);
       }
  }
    if($count > 18)
    {
       if($idofpage=='20'){
        ink(10,1);links(20,2);ink(30,3); }
      }
    if($count > 27){
         if($idofpage=='30'){
        ink(10,1);ink(20,2);links(30,3); 
    }
  }
    echo $GLOBALS['wenENd'];
   }
   












Function webdet(){
     $filename = basename($_SERVER['REQUEST_URI']);
     $paperIDS =substr($filename,15);
     $paperdetails=mysqli_query($GLOBALS ['con'],"SELECT * from `papers` where paper_ID = '$paperIDS'");
   while($row = mysqli_fetch_array($paperdetails))
    {
      $paperid = $row[0];
      $haeding = $row[1];
      $descpt = $row[2];
      $sectionid = $row[3];
      $userid = $row[4];
      $linkid = $row[5];
   }
   $userdetails = mysqli_query($GLOBALS ['con'],"SELECT * from `user_info` where `Email_ID` = '$userid'");
  while($row = mysqli_fetch_array($userdetails))
{
 $userid = $row[0];
 $name = $row[1];
 $designation = $row[2];
 $phno = $row[5];
 $email = $row[3];
 $quali = $row[4];
}
   about3Head($haeding);
   echo $GLOBALS['courseAreadHead'];

     VideoArea($linkid,$haeding,$descpt);
    details($sectionid,$name,$designation);
    echo $GLOBALS['commentHead'];

    $CommentDetails = mysqli_query($GLOBALS['con'],"SELECT * from `comments` where `Paper_ID`='$paperid' order by Comment_ID  Desc limit 3");
     while($row = mysqli_fetch_array($CommentDetails))
     {
      $id = $row[0];
      $name = $row[1];
      $paperid = $row[2];
      $comment = $row[3];
      $email = $row[4];
      comments($name,$comment);
     }
    
    YourComment($paperid);
    rightDet($paperid.'-'.$haeding);
    rel();
    $paperdetails=mysqli_query($GLOBALS ['con'],"SELECT * from `papers` where Section_Name = '$sectionid'");
    while($row = mysqli_fetch_array($paperdetails))
     {
       $pap = $row[0];
       $haeding = $row[1];
       $descpt = $row[2];
       $sectionid = $row[3];
       $userid = $row[4];
       $linkid = $row[5];
       related($pap,$haeding,$linkid);
    }
    relEnd();
    feedback($paperid);
    echo $GLOBALS['webDetailsEnd'];
}




function contact(){
  about3Head('Contact US');
  echo $GLOBALS ['contact'];
}


function viewall(){
    about3Head('Contact US');
    echo $GLOBALS['start'];
    
    $Details = mysqli_query($GLOBALS ['con'],"SELECT * from `introvideos` limit 1");
while($row = mysqli_fetch_array($Details))
{
 $id = $row[0];
 $name = $row[1];
 $desig = $row[2];
 $status = $row[3];
 $eoname = $row[4];
 $desc1 = $row[5];
 $desc2 = $row[6];
 featured2main($name,$eoname,$desc1);
}
$Details = mysqli_query($GLOBALS ['con'],"SELECT * from `introvideos` ");
while($row = mysqli_fetch_array($Details))
{
 $id = $row[0];
 $name = $row[1];
 $desig = $row[2];
 $status = $row[3];
 $eoname = $row[4];
 $desc1 = $row[5];
 $desc2 = $row[6];
 featured2($name,$eoname,$desc1);
}
    
    echo $GLOBALS ['features2spe'];
    echo $GLOBALS['end'];
}
    
function img(){
  echo $GLOBALS['imageHead'];
  $userdetails = mysqli_query($GLOBALS ['con'],"SELECT * from `user_info`");
  while($row = mysqli_fetch_array($userdetails))
    {
      $idname = $row[4];
      image($idname);image($idname);image($idname);
      image($idname);image($idname);image($idname);
      image($idname);image($idname);image($idname);
      image($idname);image($idname);image($idname);
      image($idname);image($idname);image($idname);
      image($idname);image($idname);image($idname);
      image($idname);image($idname);image($idname);
      image($idname);image($idname);image($idname);
      image($idname);image($idname);image($idname);
      image($idname);image($idname);image($idname);
    }
  echo $GLOBALS['imageEnd'];
}

?>