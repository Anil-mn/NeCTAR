<?php
$neharu = '<a href="https://ncerc.ac.in/">Nehru Group of Institutions</a>';


$content = [['The Motive',
', is organizing a fully online e-conference on Technologies AnnexingReality.
Technological annexations have provided our world with new environments and keeps the human horizons to grow.
Technology.. it’s everywhere, it’s been growing like human population..'],
['The Concept',
'NeCTAR2020: is a virtual conference.. an online event that includes a series of large sessions
run by thought leaders in the industry who present to and interact with attendees. This would
replicate a traditional conference in a virtual environment'],
['The Significance',
'Technology makes our lives easier than what It was. It has made our life much faster. We don’t
have to wait for a long time to send and receive letters through the postal service. Travel is
much faster than ever. Shopping malls are at home through internet. The whole library is
available at a click at home. Connections among people are better established than the olden
time.. Yes.. the technology has made the whole world a global village.'],
['The Process',
'Stories will be told with Videos & Digital Content
Engagement augmented through creative visuals
Information shared in the form of videos, documents, and presentations
Understanding is made better.
Attendees allowed to download or save information for future reference
Engagement boosted with Live Webinars & Breakout Sessions
Expert Speakers will deliver the keynotes, through a series of live webinars.
Audience involvement accomplished with live Q&A.'],
['Call for papers','e-Conferences, virtually anywhere.. NeCT AR 2020 aim to discuss the Present Trends, Current Problems
and Futuristic Solutions that the Tech-domains can device so as to make the Realistic world to be more
influential. It is with great pleasure that we announce the 1st International e-Conference of NGIK
themed Technologies Annexing Reality.</br></br></br>



The conference will address research topics concerned with “present trends, current problems and
futuric solutions on various Tech-domains”, and it will include topical sessions focusing on: ']


];




$aboutHead = '<!-- About Page 2 Area Start Here -->
<div class="about-page2-area">
    <div class="container">
        <div class="row about-page2-inner">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h2 class="title-default-left">'.$content[0][0].'</h2>
                <p>'.$neharu.$content[0][1].'.</p>
                <ul>
                    <li><a href="#">Entertainment</a></li>
                    <li><a href="#">Healthcare</a></li>
                    <li><a href="#">Education</a></li>
                    <li><a href="#">Defense and many more</a></li>
                </ul>
            </div>';
         $aboutHead123 = '<!-- About Page 2 Area Start Here -->
            <div class="about-page2-area">
                <div class="container">
                    <div class="row about-page2-inner">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h2 class="title-default-left">'.$content[4][0].'</h2>
                            <p>'.$neharu.$content[4][1].'.</p> 
                            <ul>';
                            $aboutHead123End='    </ul> 
                        </div>';
    
function aboutul($section){
    echo '<li><a href="#">'.$section.'</a></li>';
}


     $aboutVideo ='<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="video-area2 overlay-video bg-common-style video-margin-top" style="background-image: url("img/banner/6.jpg");">
                    <div class="video-content">
                        <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>';
       $aboutEnd ='</div>
    </div>
</div>
<!-- About Page 2 Area End Here -->';



$images='img/banner/04.jpg';

$about1Head =' <div class="inner-page-banner-area" style="background-image: url('.$images.');">
<div class="container">
    <div class="pagination-area">
        <h1>About us - 01</h1>
        <ul>
            <li><a href="#">Home</a> -</li>
            <li>About</li>
        </ul>
    </div>
</div>
</div>';





function about3Head($name){
echo'  <!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('.$GLOBALS ['images'].');">
    <div class="container">
        <div class="pagination-area">
            <h1>'.$name.'</h1>
            <ul>
                <li><a href="#">Home</a> -</li>
                <li>'.$name.'</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->';
}




$about3 = '<!-- About Page 3 Area Start Here -->
<div class="about-page3-area">
    <div class="container">
        <div class="row about-page3-inner">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="about-box">
                    <h2 class="title-bar-medium-left "><a href="#">'.$content[1][0].'</a></h2>
                    <p>'.$content[1][1].'</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="about-box">
                    <h2 class="title-bar-medium-left "><a href="#">'.$content[2][0].'</a></h2>
                    <p>'.$content[2][1].'</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="about-box">
                    <h2 class="title-bar-medium-left "><a href="#">'.$content[3][0].'</a></h2>
                    <p>'.$content[3][1].'</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Page 3 Area End Here -->';





$whyThis = '<!-- Why Choose Area Start Here -->
<div class="why-choose-area">
    <div class="container">
        <h2 class="about-title">'.$content[1][0].'</h2>
        <p class="about-sub-title">'.$content[1][1].'</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="service-box4">
                    <div class="service-box-icon">
                        <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                    </div>
                    <h3><a href="#">Scholarship Facility</a></h3>
                    <p>Dorem Ipsum has been the industrys standard dummy text ever since the en an unknown printer galley dear.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="service-box4">
                    <div class="service-box-icon">
                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </div>
                    <h3><a href="#">Skilled Lecturers</a></h3>
                    <p>Dorem Ipsum has been the industrys standard dummy text ever since the en an unknown printer galley dear.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="service-box4">
                    <div class="service-box-icon">
                        <a href="#"><i class="fa fa-book" aria-hidden="true"></i></a>
                    </div>
                    <h3><a href="#">Book Library & Store</a></h3>
                    <p>Dorem Ipsum has been the industrys standard dummy text ever since the en an unknown printer galley dear.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Area End Here -->';




?>