<?php
 

 $start='<!-- Featured Area Start Here -->
 <div class="courses2-area bg-common-style" style="background-image: url("img/featured/back2.jpg");">
     <div class="container">
         <h2 class="title-default-left">Featured Courses</h2>
     </div>
     <div class="container courses-list-wrapper">
         <div class="row courses-wrapper courses-list">';

$start2 =' <div class="courses1-area">
<div class="container">
    <h2 class="title-default-left">Featured Courses</h2>
</div>
<div class="container">
    <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="500" data-smart-speed="3000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">';         

function test1($name,$id){

    
    echo '<div class="courses-box1">
    <div class="single-item-wrapper">
        <div class="courses-img-wrapper hvr-bounce-to-bottom">
            <img class="img-responsive" style="object-fit: cover;" src="images/section/'.$id.'.jpg" alt="courses">
            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
        </div>
        <div class="courses-content-wrapper">
            <h3 class="item-title"><a href="#">'.$name.'</a></h3>
           <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p> 
          
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
   



$end = '
</div>
</div>';

$end2='</div></div></div>';




$image = 'img/featured/back.jpg';
 
function featured2Head(){
    echo '<div class="featured-area bg-common-style" style="background-image: url('.$GLOBALS['image'].');">
    <div class="container">
        <h2 class="title-default-textPrimary-left">Featured Courses</h2>
    </div>
    <div class="container">
        <div class="row featured-wrapper" id="gallery-wrapper">';
}
function featured2main(){
    echo '<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <div class="featured-box">
        <div class="featured-img-holder hvr-bounce-to-right">
            <img src="img/featured/1.jpg" class="img-responsive" alt="featured">
            <a href="img/featured/1.jpg" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
        </div>
        <div class="featured-content-holder">
            <h3><a href="#">Basic Philosopphy</a></h3>
            <p>Rimply dummy text of the printing and typesetting industry when an unknown printer took a galley scrambled.</p>
        </div>
    </div>
</div>';
}
function featured2(){
    echo ' <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    <div class="featured-box">
        <div class="featured-img-holder hvr-bounce-to-right">
            <img src="img/featured/4.jpg" class="img-responsive" alt="featured">
            <a href="img/featured/4.jpg" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
        </div>
        <div class="featured-content-holder">
            <h3><a href="#">Regular MBA</a></h3>
            <p>Rmply dummy printing ypesetting industry it’s free demo.</p>
        </div>
    </div></div>';
}
$features2spe ='</div>
</div>';
function featured2End(){
    echo '<div class="view-all-btn-area">
    <a href="#" class="ghost-btn-big">View All Corses</a>
</div>
</div>
</div>';
}

?>