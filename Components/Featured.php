<?php
 

 $start='<!-- Featured Area Start Here -->
 <div class="courses2-area bg-common-style" style="background-image: url("img/featured/back2.jpg");">
     <div class="container">
         <h2 class="title-default-left">Featured Courses</h2>
     </div>
     <div class="container courses-list-wrapper">
         <div class="row courses-wrapper courses-list">';

$start2 =' <div class="courses1-area" id="sec">
<div class="container">
    <h2 class="title-default-left">Paper Sections</h2>
</div>
<div class="container">
    <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="500" data-smart-speed="3000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">';         

function test1($name,$id,$shorname){

    
    echo '<div class="courses-box1" onclick="view('.$id.')">
    <div class="single-item-wrapper">
        <div class="courses-img-wrapper hvr-bounce-to-bottom">
            <img style="height:160px;" class="img-responsive" style="object-fit: cover;" src="images/section/'.$id.'.jpg" alt="courses">
            <a href="callforpaper.php"><i class="fa fa-link" aria-hidden="true"></i></a>
        </div>
        <div class="courses-content-wrapper">
            <h3 class="item-title"><a href="callforpaper.php?">'.$shorname.'</a></h3>
           <p class="item-content">'.$name.'</p> 
          
        </div>
    </div>
</div>';

   
}
         function test ()
         { $names = ['anil','amitha'];
            for ($x = 0; $x <= 5; $x++) {
                echo ' <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item">
                <div class="courses-box2">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-right">
                            <img class="img-responsive" src="img/course/5.jpg" alt="courses">
                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">'.$names[0].'</a></h3>
                            <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                            <ul class="courses-info">
                                <li>1 Year
                                    <br><span> Course</span></li>
                                <li>70
                                    <br><span> Classes</span></li>
                                <li>7 pm - 10 pm
                                    <br><span> Time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>';
            }
            
         }   
   



$end =  '
</div>
</div>';

$end2='</div></div></div>';




$image = 'img/featured/back.jpg';
 
function featured2Head(){
    echo '<div class="featured-area bg-common-style" style="background-image: url('.$GLOBALS['image'].');">
    <div class="container">
        <h2 class="title-default-textPrimary-left">Defining Nectar</h2>
    </div>
    <div class="container">
        <div class="row featured-wrapper" id="gallery-wrapper">';
}
function featured2main($name,$eoname,$desc1){
    echo '<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <div class="featured-box">
       
        <iframe width="550" height="475" allow-scripts id="iframeId"  style="position:centre;"  src="videos/intro/'.$eoname.'.mp4" frameborder="0" volume="0" allowfullscreen></iframe>
            
       
        <div class="featured-content-holder">
            <h3><a href="#">'.$name.'</a></h3>
            <p>'.$desc1.'</p>
        </div>
    </div>
</div>';
}
function featured2($name,$eoname,$desc1){
    echo ' <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    <div class="featured-box">
       
        <iframe width="280" height="175"  allow-scripts id="iframeId" style="position:centre;" src="videos/intro/'.$eoname.'.mp4" frameborder="0" allowfullscreen></iframe>
           
        <div class="featured-content-holder">
            <h3><a href="#">'.$name.'</a></h3>
            <p>'.$desc1.'</p>
        </div>
    </div></div>';
}
$features2spe ='</div>
</div>';
function featured2End(){
    echo '<div class="view-all-btn-area">
    <a href="viewall.php" class="ghost-btn-big">View All Corses</a>
</div>
</div>
</div>';
}


$reso ='img/featured/back2.jpg';
$featured3Head = ' <div class="courses2-area bg-common-style" style="background-image: url('.$reso.');">
<div class="container" id="web">
    <h2 class="title-default-left">Webinars</h2>
</div>
<div class="container courses-list-wrapper">
    <div class="row courses-wrapper courses-list">';

    function featured3($name,$videoname,$videolength,$sectionName){
        echo ' <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item" >
        <div class="courses-box2">
            <div class="single-item-wrapper">
           
                    <iframe width="300" height="195"  id="iframeId" style="position:centre;" src="videos/webinars/'.$videoname.'.mp4" frameborder="0" allowfullscreen volume="0"></iframe>
                   
            
                <div class="courses-content-wrapper">
                    <h3 class="item-title"><a href="#">'.$videoname.'</a></h3>
                    <p class="item-content">'.$name.'</p>
                    <ul class="courses-info">
                        <li>1 '.$sectionName.'
                            <br><span> </span></li>
                       
                        <li>'.$videolength.'
                            <br><span> Time</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>';
}

    $fea3End ='</div>
    </div>
</div>
';
$tyur = 'img/banner/03.jpg';
$capusVi = '<!-- Video Area Start Here -->
<div class="video-area overlay-video bg-common-style" style="background-image: url('.$tyur.');">
    <div class="container">
        <div class="video-content">
            <h2 class="video-title">NCERC Campus Life </h2>
            <p class="video-sub-title">Nehru College of Engineering and Research Centre
                <br>NGI.</p>
            <a class="play-btn popup-youtube wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s" href="https://www.youtube.com/watch?v=mDWLeftFCq8"><i class="fa fa-play" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
<!-- Video Area End Here -->';
    
?>