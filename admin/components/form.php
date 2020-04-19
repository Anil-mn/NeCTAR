<?php
Function formHead ($name,$action){
echo '<div class="col-md-6 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h4 class="card-title">'.$name.'</h4>
    <p class="card-description">
      
    </p>
    <form class="forms-sample" action="'.$action.'" Method="Post">';

}
function input($name,$type){
    echo '<div class="form-group">
    <label for="exampleInputEmail3">'.$name.'</label>
    <input type="'.$type.'" class="form-control" id="exampleInputEmail3" name="'.$name.'" placeholder="'.$name.'">
  </div>';
}
function textArea($name){
    echo '<div class="form-group">
    <label for="exampleTextarea1">'.$name.'</label>
    <textarea class="form-control" name="'.$name.'" id="exampleTextarea1" rows="2"></textarea>
  </div>';
}

  function Button($name)
  {
      echo ' <button type="submit" name="'.$name.'" class="btn btn-success mr-2">Submit</button>
  <button  type="reset" class="btn btn-light">Cancel</button>';
  }
  $formEnd = '</form>
</div>
</div>
</div>'  ;

  
?>