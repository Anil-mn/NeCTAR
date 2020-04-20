<?php
include('../admin/model/connection.php');
$query = mysqli_query($con,"SELECT * from `Sections`");
while($row = mysqli_fetch_array($query))
  {
   $id =$row[0];
   $Name=$row[1];
   //echo $id.$Name;
  }
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






?>