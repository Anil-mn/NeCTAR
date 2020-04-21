<?php
$webHead = ' <!-- Research Page 2 Area Start Here -->
<div class="courses-page-area2">
<div class="container" id="inner-isotope">
    <div class="row ">';
$weba = '<div class="row featuredContainer">';
function web($name,$discri){
    echo ' <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 '.$name.'">
    <div class="research-box2">
        <div class="research-img-holder"> 
       <iframe width="320" height="215" src="Videos/Demo.mp4" frameborder="0" allowfullscreen></iframe>
        <!--  <img src="img/research/14.jpg" alt="research" class="img-responsive"> -->
            <div class="research-details">
                <a href="#">Click<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <p>'.$discri.'</p>
    </div>
</div>';
} 
$webaEnd = '</div></div>';
 $webEnd =' <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 <ul class="pagination-center">
     <li class="active"><a href="#">1</a></li>
     <li><a href="#">2</a></li>
     <li><a href="#">3</a></li>
     <li><a href="#">4</a></li>
 </ul>
</div>
</div>
</div>
</div></div>';       


$webDetailsHead = '  <div class="research-details-page-area">
<div class="container">
    <div class="row">';

function webDetails(){
    echo '<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
    <div class="row research-details-inner">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <iframe width="800" height="475" src="https://www.youtube.com/embed/fKopy74weus" frameborder="0" allowfullscreen></iframe>
            <!--   <img src="img/research/16.jpg" class="img-responsive" alt="research"> -->
            <h2 class="title-default-left-bold title-bar-high"><a href="#">Future UX Design Tecnique</a></h2>
            <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchangedwhen an unknown printer took a galley of type and scrambled.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
            <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
            <p><span>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industrys standard dummy type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan scrambled.</span></p>
            <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industrs standard dummy text ever since the 1500s, when an unknown printer.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchangedwhen an unknown printer took a galley of type and scrambled.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
        </div>
    </div>
</div>';
}

$webDetailsEnd = '</div></div</div></div></div>';





$rightDet = '<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<div class="sidebar">
    <div class="sidebar-box">
        <div class="sidebar-box-inner">
            <h3 class="sidebar-title">Course Price</h3>
            <div class="sidebar-course-price">
                <span>$400.00</span>
                <a href="#" class="enroll-btn">Enroll THis Course</a>
                <a href="#" class="download-btn">Download PDF</a>
            </div>
        </div>
    </div>
    ';


$related ='<div class="sidebar-box">
<div class="sidebar-box-inner">
    <h3 class="sidebar-title">Related Courses</h3>
    <div class="sidebar-related-area">
        <ul>
            <li>
                <div class="related-img">
                    <a href="#"><img src="img/sidebar/4.jpg" class="img-responsive" alt="related"></a>
                </div>
                <div class="related-content">
                    <h4><a href="#">GMAT Class</a></h4>
                    <p>$159</p>
                </div>
            </li>
            <li>
                <div class="related-img">
                    <a href="#"><img src="img/sidebar/5.jpg" class="img-responsive" alt="related"></a>
                </div>
                <div class="related-content">
                    <h4><a href="#">IELTS Class</a></h4>
                    <p>$200</p>
                </div>
            </li>
            <li>
                <div class="related-img">
                    <a href="#"><img src="img/sidebar/6.jpg" class="img-responsive" alt="related"></a>
                </div>
                <div class="related-content">
                    <h4><a href="#">Joomla Class</a></h4>
                    <p>$120</p>
                </div>
            </li>
            <li>
                <div class="related-img">
                    <a href="#"><img src="img/sidebar/7.jpg" class="img-responsive" alt="related"></a>
                </div>
                <div class="related-content">
                    <h4><a href="#">Graphic Desing</a></h4>
                    <p>$300</p>
                </div>
            </li>
        </ul>
    </div>
</div>
</div></div></div>';
    
?>