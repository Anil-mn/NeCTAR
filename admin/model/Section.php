<?php




function display()
{
    include('connection.php');
    $query = mysqli_query($con,"SELECT * from `Sections`");
    while($row = mysqli_fetch_array($query)){
       
        echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td><button type="submit" name="'.$row[1].'" class="btn btn-danger mr-2">Delete</button></td></tr>';
    }

}
?>