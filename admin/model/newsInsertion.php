<?php
include('connection.php');
$date=date('Y-m-d');
if(isset($_POST['name']))
{
    $head=$_POST['Heading'];
    $description1=$_POST['Description1'];
    $description2=$_POST['Description2'];
$newsInsertion=mysqli_query($con,"INSERT INTO `news`( `Headline`, `Description`, `Description1`, `Date`) VALUES ('$head','$description1','$description2','$date')");
  if($newsInsertion==true)
   {
      $innsertphoto=mysqli_query($con,"SELECT * from `news` order by  `News_ID` desc lim 1");
      while($row=mysqli_fetch_array($innsertphoto))
      {
          $NewsId=$row[0];
      }
   }
}

function Display()
{
    include('connection.php');
    $query = mysqli_query($con,"SELECT * from `news`");
    while($row = mysqli_fetch_array($query)){
       $id =$row[0];
        echo '<tr><form method="POST"><td><input  value="'.$id.'" name="id" hidden> '.$row[0].'</td><td>'.$row[1].'</td><td><button type="submit" name="dele" class="btn btn-danger mr-2">Delete</button></td></form></tr>';
    }
     if(isset($_POST['dele']))
        {
            $delet=$_POST['id'];
            $deletesect=mysqli_query($con,"DELETE from `news` where `news_ID`=' $delet'");

    }

}

?>