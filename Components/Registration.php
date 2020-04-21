<?php
$REGHEAD = '<div class="registration-page-area bg-secondary">
<div class="container">
    <h2 class="sidebar-title">Registration</h2>
    <div class="registration-details-area inner-page-padding">
        <form id="checkout-form">';
$rowStart = '<div class="row">';
function input($name,$type){
    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label class="control-label" for="first-name">'.$name.' *</label>
        <input type="'.$type.'" name='.$name.' id="user-name" class="form-control">
    </div>
</div>';
}
function button(){
echo 'div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="pLace-order mt-30">
        <button class="view-all-accent-btn disabled" type="submit" value="Login">Submit</button>
    </div>
</div>
</div>';
}
$rowEnd ='</div>';
$RegEnd ='/form>
</div>
</div>
</div>';

?>