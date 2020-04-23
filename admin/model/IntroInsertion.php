<?php
include('connection.php');
if(isset($_POST['de']))

{
    $name=$_POST['name'];
    $name=ucfirst($name);
    $desig=$_POST['designation'];
    $status = $_POST['Status'];
 $Videoname = $_POST['VideoName'];
 $desc1 = $_POST['Description1'];
 $desc2 = $_POST['Description2']; 

 $infos = mysqli_query($con,"INSERT INTO `introvideos`(`Name`, `Designation`,`Status`, `Video_name`, `d1`, `d2`) VALUES('$name','$desig','$status','$sectionName','$Videoname','$desc1','$desc2')");
}


function Intro()
{
    include('connection.php');
    $query = mysqli_query($con,"SELECT * from `intovideos`");
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