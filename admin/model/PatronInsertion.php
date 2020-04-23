<?php
include('connection.php');
if(isset($_POST['patron']))
{
 $name = $_POST['Name'];
 $designation = $_POST['Designation'];
 $descpn = $_POST['Role1'];
 $descpn2 =$_POST['Role2'];
 $role1 = $_POST['Description1'];
 $role2 = $_POST['Description2'];

$PatronsInsertion = mysqli_query($con,"INSERT INTO `patrons`(`Name`, `Designation`, `Role1`, `Role2`,`Description`, `Description1`) VALUES ('$name','$designation','$role1','$role2','$descpn','$descpn2')");

    // if($WebinarInsertion==true)
    // {
    //    $innsertphoto=mysqli_query($con,"SELECT * from `webinar` order by  `Webinar_ID` desc limit 1");
    //    while($row=mysqli_fetch_array($innsertphoto))
    //    {
    //        $Id=$row[0];
        
    //    }
}
    function Patron()
{
    include('connection.php');
    $query = mysqli_query($con,"SELECT * from `patrons`");
    while($row = mysqli_fetch_array($query)){
       $id =$row[0];
        echo '<tr><form method="POST"><td><input  value="'.$id.'" name="id" hidden> '.$row[0].'</td><td>'.$row[1].'</td><td><button type="submit" name="dele" class="btn btn-danger mr-2">Delete</button></td></form></tr>';
    }
     if(isset($_POST['dele']))
        {
            $delet=$_POST['id'];
            $deletesect=mysqli_query($con,"DELETE from `patrons` where `Patron_ID`='$delet'");

    }

}
?>