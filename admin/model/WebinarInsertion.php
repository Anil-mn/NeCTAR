<?php
include('connection.php');
if(isset($_POST['webinar']))
{
    $name=$_POST['Name'];
    $desig=$_POST['Designation'];
    $sectionName = $_POST['SectionName'];
    $videoLength = $_POST['VideoLength'];
    $Videoname = $_POST['VideoName'];

    $WebinarInsertion = mysqli_query($con,"INSERT INTO `webinar`( `Name`, `Designation`, `Video_Name`, `Section_Name`, `Video_Length`) VALUES ('$name','$desig','$Videoname','$sectionName','$videoLength')");
    // if($WebinarInsertion==true)
    // {
    //    $innsertphoto=mysqli_query($con,"SELECT * from `webinar` order by  `Webinar_ID` desc limit 1");
    //    while($row=mysqli_fetch_array($innsertphoto))
    //    {
    //        $Id=$row[0];
        
    //    }

}

function Webinar()
{
    include('connection.php');
    $query = mysqli_query($con,"SELECT * from `webinar`");
    while($row = mysqli_fetch_array($query)){
       $id =$row[0];
        echo '<tr><form method="POST"><td><input  value="'.$id.'" name="id" hidden> '.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[3].'</td><td><button type="submit" name="dele" class="btn btn-danger mr-2">Delete</button></td></form></tr>';
    }
     if(isset($_POST['dele']))
        {
            $delet=$_POST['id'];
            $deletesect=mysqli_query($con,"DELETE from `webinar` where `Webinar_ID`=' $delet'");

    }

}
    