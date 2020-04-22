<?php

$Heading = ' <div class="news-event-area">
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
            <h2 class="title-default-left">Latest News</h2>
            <ul class="news-wrapper">';

function News($newshead,$des1,$date){
    $timestamp = strtotime($date);
    $date1= date('d', $timestamp);
    $formattedDate = date('F d, Y', $timestamp);
    //echo $formattedDate;
            echo '<li >
<div class="news-img-holder">
    <a href="#"><img src="img/news/1.jpg" class="img-responsive" alt="news"></a>
</div>
<div class="news-content-holder">
    <h3><a href="single-news.html" >'.$newshead.'</a></h3>
    <div class="post-date">'.$formattedDate.'</div>
    <p>'.$des1.'</p>
</div>
</li>';
}

$NewsEnd = '<div class="news-btn-holder">
<a href="#" class="view-all-accent-btn">View All</a>
</div>
</div>';

$UpcomingHead ='<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 event-inner-area">
                  <h2 class="title-default-left">Upcoming Events</h2>
                          <ul class="event-wrapper">';
                          $i=1;

                          function upcoming($id,$heading,$date,$time,$descpn){
                          
                            $timestamp = strtotime($date);
                            $date1= date('d', $timestamp);
                            $month = date('F',$timestamp);
                            $year = date('Y',$timestamp);
                            $formattedDate = date('F d, Y', $timestamp);  
        echo '<li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".'.$GLOBALS ['i'].'s">
                <div class="event-calender-wrapper">
                    <div class="event-calender-holder">
                        <h3>'.$date1.'</h3>
                        <p>'.$month.'</p>
                        <span>'.$year.'</span>
                    </div>
                </div>
                <div class="event-content-holder">
                    <h3><a href="single-event.html">'.$heading.'</a></h3>
                    <p>'.$descpn.'</p>
                    <ul>
                        <li>'.$time.'</li>
                        <li>NCREC , KERALA</li>
                    </ul>
                </div>
                </li>';
                $GLOBALS ['i']=$GLOBALS ['i']+6;
            }
                          
 $upComingEnd =' </ul>
                    <div class="event-btn-holder">
                        <a href="#" class="view-all-primary-btn">View All</a>
                    </div>
                   </div>
                   </div>
                   </div>
                   </div></div>'  ;             
?>