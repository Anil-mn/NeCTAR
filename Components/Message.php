<?php

$messageHead ='<!-- Students Say Area Start Here -->
<div class="students-say-area" >
    <h2 class="title-default-center">What Our Stake holders Say</h2>
    <div class="container">
        <div class="rc-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="false" data-autoplay-timeout="100" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="2" data-r-large-nav="false" data-r-large-dots="true">
            ';
function Mesg($name,$designation,$msg,$id)
{
echo '<div class="single-item">
<div class="single-item-wrapper">
    <div class="profile-img-wrapper">
        <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" style="height: 120px;width:120px;" src="images/message/'.$id.'.jpg" alt="Testimonial"></a>
    </div>
    <div class="tlp-tm-content-wrapper">
        <h3 class="item-title"><a href="#">'.$name.'</a></h3>
        <span class="item-designation">'.$designation.'</span>
        <ul class="rating-wrapper">
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
        </ul>
        <div class="item-content">'.$msg.'</div>
    </div>
</div>
</div>';    
}


$messageEnd ='</div>
</div>
</div>';




?>