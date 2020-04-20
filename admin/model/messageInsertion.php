<?php
include('connection.php');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $desig=$_POST['designation'];
    $message=$_POST['message'];
    $messageInsertion=mysqli_query($con,"INSERT INTO `message`(`Name`, `Designation`, `Message`) VALUES ('$name','$desig','$message')");

}

function display()
{
    include('connection.php');
    $query = mysqli_query($con,"SELECT * from `message`");
    while($row = mysqli_fetch_array($query)){
       $id =$row[0];
        echo '<tr><form method="POST"><td><input  value="'.$id.'" name="id" hidden> '.$row[0].'</td><td>'.$row[1].'</td><td><button type="submit" name="dele" class="btn btn-danger mr-2">Delete</button></td></form></tr>';
    }
     if(isset($_POST['dele']))
        {
            $delet=$_POST['id'];
            $deletesect=mysqli_query($con,"DELETE from `message` where `message_ID`=' $delet'");

    }

}
?>