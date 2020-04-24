<?php
function reghead($id,$name){
echo'<div class="registration-page-area bg-secondary">
<div class="container">
    <h2 class="sidebar-title">'.$name.'</h2>
    <div class="registration-details-area inner-page-padding">
        <form id="'.$id.'" action="" Method="Post" enctype="multipart/form-data">';}
$rowStart = '<div class="row">';
function input($name,$type,$required,$msg){
    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label class="control-label" for="first-name">'.$name.' *</label>
        <input type="'.$type.'" name='.$name.' id="user-name" class="form-control" '.$required.'  placeholder='.$msg.'>
    </div>
</div>';
}
function uploadR($name){
   echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
   <div class="form-group">
   <label class="control-label" for="first-name">'.$name.' *</label>
   <input class="form-control" type="file" name="'.$name.'" required = "required">
   </div>
   </div>
   ';
}
function upload($name){
    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
    <label class="control-label" for="first-name">'.$name.' *</label>
    <input class="form-control" type="file" name="'.$name.'">
    </div>
    </div>
    ';
 }
function button($name){
echo '<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="pLace-order mt-30">
        <button class="view-all-accent-btn disabled" type="submit"  name="'.$name.'" >Submit</button>
    </div>
</div>
</div>';
}

function textArea($name,$msg){
    echo '<div class="form-group">
    <label for="exampleTextarea1">'.$name.'</label><br>
    <textarea  name="'.$name.'" id="exampleTextarea1" placeholder="'.$msg.'" rows="5" cols="70"></textarea>
  </div>';
}
function selectHead($name){
    echo ' <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label class="control-label" for="country">'.$name.'</label>
        <div class="custom-select">
            <select id="country" class=select2 name='.$name.'>';

}
function selectEnd(){
    echo '</select>
    </div>
</div>
</div>';
}

$rowEnd ='</div>';
$RegEnd ='</form>
</div>
</div>
</div>';

?>