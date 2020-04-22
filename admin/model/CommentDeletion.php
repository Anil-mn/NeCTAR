<?php

function Display()
{
    include('connection.php');
    $query = mysqli_query($con,"SELECT * from `feedback`");
    while($row = mysqli_fetch_array($query))
    {
       $id =$row[0];
        echo '<tr><form method="POST"><td><input  value="'.$id.'" name="id" hidden> '.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[3].'</td></form></tr>';
    }

}
function Disp()
{
    include('connection.php');
    $query1 = mysqli_query($con,"SELECT * from `comments`");
    while($row = mysqli_fetch_array($query1))
    {
       $id =$row[0];
        echo '<tr><form method="POST"><td><input  value="'.$id.'" name="id" hidden> '.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td><button type="submit" name="dele" class="btn btn-danger mr-2">Delete</button></td></form></tr>';
    }


if(isset($_POST['dele']))
        {
            $delet=$_POST['id'];
            $deletesect=mysqli_query($con,"DELETE from `comments` where `Comment_ID`=' $delet'");

    }
}


?>