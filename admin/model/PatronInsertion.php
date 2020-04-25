<?php
include('connection.php');
if(isset($_POST['patron']))
{
 $name = $_POST['Name'];
 $name=ucfirst($name);
 $designation = $_POST['Designation'];
 $role1 = $_POST['Role1'];
 $role2 =$_POST['Role2'];
 $descpn = $_POST['Description1'];
 $descpn2 = $_POST['Description2'];
 echo $descpn;
$PatronsInsertion = mysqli_query($con,"INSERT INTO `patrons`(`Name`, `Designation`, `Role1`, `Role2`,`Description`, `Description1`) VALUES ('$name','$designation','$role1','$role2','$descpn','$descpn2')");

    if($PatronsInsertion==true)
    {
       $innsertphoto=mysqli_query($con,"SELECT * from `webinar` order by  `Webinar_ID` desc limit 1");
       while($row=mysqli_fetch_array($innsertphoto))
       {
           $Id=$row[0];
        
       }
    $target_dir = "..\Images/";
    $target_file = $target_dir . basename($_FILES["patron"]["name"]);
   
    $name =$name.'-'.$role1;
   //
    $newfilename=$name ;
    echo $newfilename;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
       
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["patron"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 && $imageFileType != "gif" ) {
        echo "Sorry, only image files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
           if(move_uploaded_file($_FILES["patron"]["tmp_name"], "../../images/patrons/" . $newfilename.'.jpg')){
            echo "The file ". basename( $_FILES["patron"]["name"]). " has been uploaded.";
            //header('Location:../Shop_CategorieInsertion.php');
            } else {
            echo "Sorry, there was an error uploading your file.";
                }
               echo "<script>confirm('Succeflly enterd',window.location='../patron.php')</script>";
        } 



    }

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