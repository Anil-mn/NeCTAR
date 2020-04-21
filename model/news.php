<?php
include('admin/model/connection.php');


//function set(){
$query = mysqli_query($con,"SELECT * from `Sections`");
while($row = mysqli_fetch_array($query))
  {
   $id =$row[0];
   $Name=$row[1];
   echo '<option>'.$row[1].'<option>';
   //echo $id.$Name;
  }
//}
 $newsQuery = mysqli_query($con,"SELECT * from `news`");
  while($row1 = mysqli_fetch_array($newsQuery))
  {
   $newsid =$row1[0];
   $newshead=$row1[1];
   $des1=$row1[2];
   $des2=$row1[3];
   $date=$row1[4];
   
  // echo $newsid.$newshead.$des1.$des2.$date;
  }
  $MessageQuery = mysqli_query($con,"SELECT * from `message`");
  while($row2 = mysqli_fetch_array($MessageQuery))
  {
   $Messageid =$row2[0];
   $name1=$row2[1];
   $designation=$row2[2];
   $message=$row2[3];
  }
$paperdetails=mysqli_query($con,"SELECT * from `papers`");
while($row = mysqli_fetch_array($paperdetails))
{
 $paperid = $row[0];
 $heading = $row[1];
 $descpt = $row[2];
 $sectionid = $row[3];
 $userid = $row[4];
 $linkid = $row[5];

}

$userdetails = mysqli_query($con,"SELECT * from `user_info`");
while($row = mysqli_fetch_array($userdetails))
{
 $userid = $row[0];
 $name = $row[1];
 $designation = $row[2];
 $phno = $row[5];
 $email = $row[3];
 $quali = $row[4];
 
 //$UserInsertion = mysqli_query($con,"INSERT INTO `user_info`( `Name`, `Designation`, `Qualification`, `Email_ID`, `PhoneNumber`) VALUES('$name','$designation','$quali','$email','$phno')");

}

$eventdetails = mysqli_query($con,"SELECT * from `event`");
while($row = mysqli_fetch_array($eventdetails))
{
 $eventid = $row[0];
 $heading = $row[1];
 $date = $row[2];
 $time = $row[3];
 $descpn = $row[4];
}
?>