<?php
$images =  'img/banner/04.jpg';
function counter($c1,$c2,$c3,$c4) {
echo '<!-- Counter Area Start Here -->
<div class="counter-area bg-primary-deep" style="background-image: url('.$GLOBALS ['images'].');">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                <h2 class="about-counter title-bar-counter" data-num="'.$c1.'">80</h2>
                <p>webinars</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                <h2 class="about-counter title-bar-counter" data-num="'.$c2.'">20</h2>
                <p>papers</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                <h2 class="about-counter title-bar-counter" data-num="'.$c3.'">56</h2>
                <p>sections</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                <h2 class="about-counter title-bar-counter" data-num="'.$c4.'">56</h2>
                <p>Events</p>
            </div>
        </div>
    </div>
</div>
<!-- Counter Area End Here -->';}




function h404($message,$image)  {
    echo '<div class="error-page-area">
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="error-top">
                <img src="img/'.$image.'.png" class="img-responsive" alt="404">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="error-bottom">
                <h2>Sorry!!! Page Was Not Found</h2>
                <p>'.$message.'</p>
                <a href="./" class="default-white-btn">Go To Home Page</a>
            </div>
        </div>
    </div>
</div>
</div>';
}
?>