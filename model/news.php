<?php
include('admin/model/connection.php');


//function set(){
$SectionDetails = mysqli_query($con,"SELECT * from `sections`");
while($row = mysqli_fetch_array($SectionDetails))
  {
   $id =$row[0];
   $Name=$row[1];
   $subname=$row[2];
   $despn=$row[3];
   $despn1=$row[4];
   //echo '<option>'.$row[1].'<option>';
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
 $sectionname = $row[3];
 $email = $row[4];
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
 $place = $row[6];
 
 $UserInsertion = mysqli_query($con,"INSERT INTO `user_info`( `Name`, `Designation`, `Qualification`, `Email_ID`, `PhoneNumber`,`Place`) VALUES('$name','$designation','$quali','$email','$phno','$place')");

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

$feedbackDetails = mysqli_query($con,"SELECT * from `feedback`");
while($row = mysqli_fetch_array($feedbackDetails))
{
 $Fdid = $row[0];
 $name = $row[1];
 $email = $row[2];
 $msg = $row[3];
 $feedbackInsertion = mysqli_query($con,"INSERT INTO `feedback`( `Name`, `Email_ID`, `Message`) VALUES('$name','$email','$msg')");
}

$CommentDetails = mysqli_query($con,"SELECT * from `comments`");
while($row = mysqli_fetch_array($CommentDetails))
{
 $id = $row[0];
 $name = $row[1];
 $paperid = $row[2];
 $comment = $row[3];
 $email = $row[4];

 

}

$PatronsDetails = mysqli_query($con,"SELECT * from `patrons`");
while($row = mysqli_fetch_array($PatronsDetails))
{
 $id = $row[0];
 $name = $row[1];
 $designation = $row[2];
 $descpn = $row[5];
 $descpn2 = $row[6];
 $role1 = $row[3];
 $role2 = $row[4];

$PatronsInsertion = mysqli_query($con,"INSERT INTO `patrons`(`Name`, `Designation`, `Role1`, `Role2`,`Description`, `Description1`) VALUES ('$name','$designation','$role1','$role2','$descpn','$descpn2')");
}

$Details = mysqli_query($con,"SELECT * from `details`");
while($row = mysqli_fetch_array($Details))
{
 $id = $row[0];
 $name = $row[1];
 $sectionName = $row[2];
 $Videoname = $row[3];
 $desc1 = $row[4];
 $desc2 = $row[5];

 $infos = mysqli_query($con,"INSERT INTO `details`(`Name`, `Section_Name`, `Video_name`, `d1`, `d2`) VALUES('$name','$sectionName','$Videoname','$desc1','$desc2')");
}

$WebinarDetails = mysqli_query($con,"SELECT * from `webinar`");
while($row = mysqli_fetch_array($Details))
{
 $id = $row[0];
 $name = $row[1];
 $sectionName = $row[4];
 $Videoname = $row[3];
 $videoLength = $row[5];
 $desig = $row[2];
 $WebinarInsertion = mysqli_query($con,"INSERT INTO `webinar`( `Name`, `Designation`, `Video_Name`, `Section_Name`, `Video_Length`) VALUES ('$name','$desig','$Videoname','$sectionName','$videoLength')");
}
?>