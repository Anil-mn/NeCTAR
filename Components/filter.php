<?php

    
    $filterHead = ' 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="isotop-classes-tab isotop-btn">';

        function filterActive($filter){
            echo  '<a href="#"  class="current" data-filter=".'.$filter.'">'.$filter.'</a>';
        }

function filter($filter)
    {
       
     echo  '<a href="#" data-filter=".'.$filter.'">'.$filter.'</a>';
    }
           
      
    
    
          $filterEnd =' </div>
           </div>
       </div>';
       
       





?>