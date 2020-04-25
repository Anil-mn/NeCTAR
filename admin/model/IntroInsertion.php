<?php
include('connection.php');
if(isset($_POST['de']))

{
    $name=$_POST['Name'];
    $name=ucfirst($name);
    $desig=$_POST['Designation'];
    $status = $_POST['Status'];
 $Videoname = $_POST['VideoName'];
 $desc1 = $_POST['Description1'];
 $desc2 = $_POST['Description2']; 

 $query = mysqli_query($con,"SELECT * from `introvideos` where `Video_name` = $Videoname");
 $row3 = mysqli_fetch_array($query);
 if($row3 == true){
    echo "<script>confirm('video name already exisist',window.location='../introVideos.php')</script>";
 }

else {

 $infos = mysqli_query($con,"INSERT INTO `introvideos`(`Person_Name`, `Designation`,`Status`, `Video_name`, `d1`, `d2`) VALUES('$name','$desig','$status','$Videoname','$desc1','$desc2')");

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
        "../../videos/intro/" . $namelink);
        echo "Stored in: " . "../../videos/intro/" . $namelink;
        echo "<script>confirm('Succeflly enterd',window.location='../IntroVideos.php')</script>";
       
       }


    }
   }

}
}


function Intro()
{
    include('connection.php');
    $query = mysqli_query($con,"SELECT * from `introvideos`");
    while($row = mysqli_fetch_array($query)){
       $id =$row[0];
        echo '<tr><form method="POST"><td><input  value="'.$id.'" name="id" hidden> '.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[5].'</td><td><button type="submit" name="dele" class="btn btn-danger mr-2">Delete</button></td></form></tr>';
    }
     if(isset($_POST['dele']))
        {
            $delet=$_POST['id'];
            $deletesect=mysqli_query($con,"DELETE from `introvideos` where `Video_ID`='$delet'");

    }

}
?>