<?php
include('Components/head.php');
include('Components/header.php');
include('components/imageSlider.php');
include('components/about.php');
include('components/Featured.php');
include('components/Counter.php');
include('components/Message.php');
include('components/News/newsMain.php');
include('components/News/faq.php');
include('components/filter.php');
include('components/webnar.php');
include('components/Registration.php');
include('admin/model/connection.php');
//include('model/regi.php');
//include('model/demo.php');

function regi()
{    
    about3Head('Submit Paper');
    echo $GLOBALS['REGHEAD'];
    echo $GLOBALS['rowStart'];
    input('name','text','required','Name');
    input('Designation','text','','Designation');
    input('Qualification','text','required','Qualification');
    input('Email','email','required','Email');
    input('PhoneNumber','Number','required','PhoneNumber');
    input('place','text','required','place');
    upload('ProfileImage','required');
    upload('Abstract','not required');
    // upload('Pdf');
    // upload('file');
    button('Submit');
    echo $GLOBALS['rowEnd'];
    echo $GLOBALS['RegEnd'];   
}

if(isset($_POST['submit']))
{
  echo "<script>confirm('There is')</script>";
   //$ok =1;
   $name  = $_POST['name'];
   $Designation  = $_POST['Designation'];
   $Qualification  = $_POST['Qualification'];
   $Email  = $_POST['Email'];
   $PhoneNumber  = $_POST['PhoneNumber'];
   $place = $_POST['place'];
   $userdetails = mysqli_query($con,"SELECT * from `user_info` where `Email_ID`='$Email'");
   $result = mysqli_fetch_array($userdetails);
   if($result == true)
   {
    echo "<script>confirm('There is email is already exisit,window.location='registration.php')</script>";
   }
  else {
    $UserInsertion =mysqli_query($con,"INSERT INTO `user_info`( `Name`, `Designation`, `Qualification`, `Email_ID`, `PhoneNumber`,`Place`) VALUES('$name','$Designation','$Qualification','$Email','$PhoneNumber','$place')");
  }


  //  $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
  //  $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
  //  if ((($_FILES["file"]["type"] == "video/mp4")
  //  || ($_FILES["file"]["type"] == "audio/mp3")
  //  || ($_FILES["file"]["type"] == "audio/mpeg")
  //  || ($_FILES["file"]["type"] == "audio/wma")
  //  || ($_FILES["file"]["type"] == "image/pjpeg")
  //  || ($_FILES["file"]["type"] == "image/gif")
  //  || ($_FILES["file"]["type"] == "image/jpeg"))
   
  //  && ($_FILES["file"]["size"] < 20000000000000)
  //  && in_array($extension, $allowedExts))
   
  //    {print_r($_FILES['file']['name']);
  //    if ($_FILES["file"]["error"] > 0)
  //      {
  //      echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
  //      }
  //    else
  //      {
  //      echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  //      echo "Type: " . $_FILES["file"]["type"] . "<br />";
  //      echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  //      echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
   
  //      if (file_exists("store/" . $_FILES["file"]["name"]))
  //        {
  //        echo $_FILES["file"]["name"] . " already exists. ";
  //        }
  //      else
  //        {
  //        // move_uploaded_file($_FILES["file"]["tmp_name"],
  //        // "../Videos/" . $_FILES["file"]["name"]);
  //        // echo "Stored in: " . "../Videos/" . $_FILES["file"]["name"];
  //        }
  //      }
  //    }
   
  //    else
  //    {
  //      echo "Invalid file";
  //    }

  

}
function MoreDetails()
{    
    about3Head('Submit Paper');
    echo $GLOBALS['REGHEAD'];
    echo $GLOBALS['rowStart'];
    input('PhoneNumber','Number','required');
    input('PaperName','text','required');
    selectHead('section');
    $query = mysqli_query($GLOBALS['con'],"SELECT * From `papers`");
    while($row=mysqli_fetch_array($query)){
    echo '<option>'.$row[1].'<option>';
    }
    SelectEnd();
    input('Discription','text','');
    input('Qualification','text','required');
    input('Email','email','required');
    upload('profilePhoto');
    // upload('Pdf');
    // upload('file');
    textArea('Description');
    button('Submit');
    echo $GLOBALS['rowEnd'];
    echo $GLOBALS['RegEnd'];   
}