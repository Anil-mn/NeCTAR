<?php

    
$lectureareaHead = ' <div class="lecturers-page2-area">
       <div class="container" id="inner-isotope">
           <div class="row">';
    $lectureareaEnd = '</div></div>
      </div>';
    $filterHead = ' 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="isotop-classes-tab isotop-btn">';
        $filterHead2 =' <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="isotop-classes-tab isotop-btn-accent">';

        function filterActive($filter){
            echo  '<a href="#"  class="current" data-filter=".'.$filter.'">'.$filter.'</a>';
        }

        function filter($filter)
    {
       
     echo  '<a href="#" data-filter=".'.$filter.'">'.$filter.'</a>';
    }
        $container = '<div class="row featuredContainer">';
        function box($roll1,$name,$designation,$image,$about){
            echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 '.$roll1.' ">
            <div class="single-item">
                <div class="lecturers-item-wrapper">
                    <a href="#"><img class="img-responsive" src="img/students/'.$image.'.jpg" alt="team"></a>
                    <div class="lecturers-content-wrapper">
                        <h3><a href="#">'.$name.'</a></h3>
                        <span>'.$designation.'</span>
                        <p>'.$about.'</p>
                        <ul class="lecturers-social">
                            <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>';
        
        } 


           
      
    
    
          $filterEnd =' </div>
           </div>
       </div>
      
      ';
       $container = '</div>
       </div>
   </div>
   <div class="row featuredContainer">'
       





      
?>