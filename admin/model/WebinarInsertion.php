<?php
include('connection.php');
if(isset($_POST['webinar']))
{
    $name=$_POST['Name'];
    $name=ucfirst($name);
    $desig=$_POST['Designation'];
    $sectionName = $_POST['SectionName'];
    $videoLength = $_POST['VideoLength'];
    $Videoname = $_POST['VideoName'];

    $query = mysqli_query($con,"SELECT * from `webinar` where `Video_Name` = '$Videoname'");
    $row4 = mysqli_fetch_array($query);
    if($row4==true){
        echo "<script>confirm('video name already exisist',window.location='../Webinar.php')</script>";
    }
      else {

   

    $WebinarInsertion = mysqli_query($con,"INSERT INTO `webinar`( `Name`, `Designation`, `Video_Name`, `Section_Name`, `Video_Length`) VALUES ('$name','$desig','$Videoname','$sectionName','$videoLength')");
    // if($WebinarInsertion==true)
    // {
    //    $innsertphoto=mysqli_query($con,"SELECT * from `webinar` order by  `Webinar_ID` desc limit 1");
    //    while($row=mysqli_fetch_array($innsertphoto))
    //    {
    //        $Id=$row[0];
        
    //    }
   $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
   $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
   $namelink = $Videoname.'.'.$extension;
   echo "<br><br><br><br>".$namelink."<br><br><br><br>";
   if ((($_FILES["file"]["type"] == "video/mp4")
   || ($_FILES["file"]["type"] == "audio/mp3")
   || ($_FILES["file"]["type"] == "audio/mpeg")
   || ($_FILES["file"]["type"] == "audio/wma")
   || ($_FILES["file"]["type"] == "image/pjpeg")
   || ($_FILES["file"]["type"] == "image/gif")
   || ($_FILES["file"]["type"] == "image/jpeg"))
   
   && ($_FILES["file"]["size"] < 20000000000000)
   && in_array($extension, $allowedExts))
   
     {print_r($_FILES['file']['name']);
     if ($_FILES["file"]["error"] > 0)
       {
       echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
       }
     else
       {
       echo "Upload: " . $_FILES["file"]["name"] . "<br />";
       echo "Type: " . $_FILES["file"]["type"] . "<br />";
       echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
       echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
   
       if (file_exists("store/" . $_FILES["file"]["name"]))
         {
         echo $_FILES["file"]["name"] . " already exists. ";
         }
       else
         {
             echo $name;
          move_uploaded_file($_FILES["file"]["tmp_name"],
          "../../Videos/webinars/" . $namelink);
          echo "Stored in: " . "../../Videos/webinars/" . $namelink;
          echo "<script>confirm('inserted',window.location='../Webinar.php')</script>";
         
         }

        }
    }

}



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
            echo "<script>confirm('deleted',window.location='../Webinar.php')</script>";

    }

}
    