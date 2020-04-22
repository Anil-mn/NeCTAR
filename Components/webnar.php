<?php
$webHead = ' <!-- Research Page 2 Area Start Here -->
<div class="courses-page-area2" >
<div class="container" id="inner-isotope">
    <div class="row ">';
$weba = '<div class="row featuredContainer" >';
function web($id,$name,$discri,$videoname)
{
    echo ' <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 '.$name.' ">
    <div class="research-box2">
        <div class="research-img-holder"> 
       <iframe width="320" height="215" id="iframeId" src="videos/'.$videoname.'" frameborder="0" allowfullscreen></iframe>
        <!--  <img src="img/research/14.jpg" alt="research" class="img-responsive"> -->
            <div class="research-details">
                <a href="webdetails.php?'.$id.'">Click<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <p>'.$discri.'</p>
    </div>
</div>';

} 

$webaEnd = '</div></div>';

 $webEnd =' <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 <ul class="pagination-center">';
 function links($id,$count){
     echo '<li class="active"><a href="webinar.php?'.$id.'" >'.$count.'</a></li>
     ';
 }
 function ink($id,$count){
    echo '<li ><a href="webinar.php?'.$id.'" >'.$count.'</a></li>
    ';
}
 $wenENd='</ul>
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
        <iframe width="800" height="475" src="videos/t_video6172442589371826309.mp4" frameborder="0" allowfullscreen></iframe>
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





function rightDet($papername) {
    echo  '<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<div class="sidebar">
    <div class="sidebar-box">
        <div class="sidebar-box-inner">
            <h3 class="sidebar-title">Article</h3>
            <div class="sidebar-course-price">
                <span>Download paper</span>
                <a href="viewpdf.php?download_file='.$papername.'" target="_blank" class="enroll-btn">View Pdf</a>
                <a href="/papers/'.$papername.'" class="download-btn" download>Download PDF</a>
            </div>
        </div>
    </div>
    ';
}

function rel(){
echo '<div class="sidebar-box">
<div class="sidebar-box-inner">
    <h3 class="sidebar-title">Related Courses</h3>
    <div class="sidebar-related-area">
        <ul>';
    }
        function related($id,$name,$videoName){ 
           echo ' <li>
                <div class="related-img">
                    <a href="#">
                    <iframe id="iframeId" width="80" height="80" src="videos/'.$videoName.'" frameborder="0"></iframe></a>
                </div>
                <div class="related-content">
                    <h4><a href="webdetails.php?'.$id.'">'.$name.'</a></h4>
                    <p></p>
                </div>
            </li>';}
            function relEnd(){
                echo'    </ul>
    </div>
</div>
</div>';
}



$courseAreadHead =' <div class="courses-page-area3">
<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            ';
           
   function VideoArea($videoName,$name,$discri){
       echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <!--<img src="img/course/15.jpg" class="img-responsive" alt="course">-->
       <iframe width="818" id="iframeId" height="475" src="videos/'.$videoName.'" frameborder="0" allowfullscreen></iframe>
       <div class="course-details-inner">
           <h2 class="title-default-left title-bar-high">'.$name.'</h2>
           <p>'.$discri.'</p>';
   }     
   function details($sectionid,$name,$designation){
       echo '<h3 class="sidebar-title">Course Features</h3>
       <ul class="course-feature">
           <li>Section:'.$sectionid.'</li>
           <li>Author :'.$name.'</li>
           <li>Designation: '.$designation.'</li>
           
       </ul>
   </div>';
    
    }   
    $commentHead ='<div class="section-divider"></div>
    <div class="course-details-inner">
        <div class="course-details-comments">
            <h3 class="sidebar-title">Comments</h3>';
    function comments($name,$comment){

        echo '<div class="media">
        <a href="#" class="pull-left">
            <img alt="Comments" src="img/course/16.jpg" class="media-object">
        </a>
        <div class="media-body">
            <h3><a href="#">'.$name.'</a></h3>
            <h4>My review</h4>
            <p>'.$comment.' </p>
            
        </div>
    </div>';
    } 

    function YourComment($paper){
        echo '<div class="leave-comments">
        <h3 class="sidebar-title">Leave A Comment</h3>
        <div class="row">
            <div class="contact-form" id="review-form">
                <form action="model/insertions.php" method="POST">
                    <fieldset>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name" class="form-control">
                                
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <input type="text" name="paper"  value='.$paper.' hidden>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="rate-wrapper">
                                    <div class="rate-label">Your Rating:</div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea placeholder="Comment" name="com" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <button type="submit" name="Comment" class="view-all-accent-btn">Post Comment</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>';
    }


  function feedback($paper){
      echo '       <div class="sidebar-box">
      <div class="sidebar-box-inner">
          <h3 class="sidebar-title">Your FeedBack</h3>
          <div class="sidebar-question-form">
              <form id="question-form" action="model/insertions.php" METHOD="POST">
                  <fieldset>
                      <div class="form-group">
                          <input type="text" placeholder="Name*" name="name" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                          <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                          <input type="email" placeholder="Email*" name="email" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                          <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                          <textarea placeholder="Message*" name="feedback" class="textarea form-control" name="message" id="sidebar-form-message" rows="3" cols="20" data-error="Message field is required" required></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                      <input type="text" name="paper"  value='.$paper.' hidden>
                      <div class="form-group">
                          <button type="submit" name="feed" class="default-full-width-btn">Send</button>
                      </div>
                      <div class="form-response"></div>
                  </fieldset>
              </form>
          </div>
      </div>
  </div></div></div>';
  }  

 
?>