<?php
include('Components/head.php');
include('Components/header.php');
include('Components/imageSlider.php');
include('Components/about.php');
include('Components/Featured.php');
include('Components/Counter.php');
include('Components/Message.php');
include('Components/News/newsMain.php');
include('Components/News/Faq.php');
include('Components/filter.php');
include('Components/webnar.php');
include('Components/Registration.php');
include('admin/model/connection.php');
//include('model/regi.php');
//include('model/demo.php');

function regi()
{    
    about3Head('Submit Paper');
    reghead('1','Registration');
    echo $GLOBALS['rowStart'];
    input('name','text','required','Name');
    input('Designation','text','','Designation');
    input('Qualification','text','required','Qualification');
    input('Email','email','required','Email');
    input('PhoneNumber','Number','required','PhoneNumber');
    input('place','text','required','place');
    uploadR('ProfileImage');
    //upload('Abstract');
    button('Submit');
    echo $GLOBALS['rowEnd'];
    echo $GLOBALS['RegEnd'];   
    
}




function absss(){ 
  reghead('2','Adsctract Upload');
  echo $GLOBALS['rowStart'];
  input('Email','email','required','Email');
  upload('Abstract');
  button('absss');
  echo $GLOBALS['rowEnd'];
  echo $GLOBALS['RegEnd'];   
}






function pandV(){ 
  reghead('2','Paper and video');
  echo $GLOBALS['rowStart'];
  input('Email','email','required','Email');
  input('Heading','text','required','PaperName');
  
  selectHead('Section');
  $query = mysqli_query($GLOBALS ['con'],"SELECT * From `Sections`");
  while($row=mysqli_fetch_array($query)){
      echo '<option value='.$row[2].'>'.$row[1].'';
  }
  selectEnd();
  uploadR('paper'); 
  uploadR('video');
  textarea('Description','Description');
  button('pandv');
  echo $GLOBALS['rowEnd'];
  echo $GLOBALS['RegEnd'];   
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

//   if(isset($_POST['submit']))
// {
  
//    $name  = $_POST['name'];
//    $Designation  = $_POST['Designation'];
//    $Qualification  = $_POST['Qualification'];
//    $Email  = $_POST['Email'];
//    $PhoneNumber  = $_POST['PhoneNumber'];
//    $place = $_POST['place'];
//    echo $name.$Designation.$Qualification.$email.$PhoneNumber.$place;
//    $userdetails = mysqli_query($con,"SELECT * from `user_info` where `Email_ID`='$Email'");
//    $result = mysqli_fetch_array($userdetails);
//    if($result == true)
//    {
//    // echo "<script>confirm('emailID  already exisit,window.location='registration.php')</script>";
//    }
//   else {
//     $UserInsertion =mysqli_query($con,"INSERT INTO `user_info`( `Name`, `Designation`, `Qualification`, `Email_ID`, `PhoneNumber`,`Place`) VALUES('$name','$Designation','$Qualification','$Email','$PhoneNumber','$place')");
//   }
// }
  


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