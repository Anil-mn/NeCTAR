<html>

<?php

SESSION_START();
if(!isset($_SESSION['admin'])){
   header('location:index.html');
}
include('model/connection.php');
include('components/head.php');
include('components/sidemenus.php');
include('components/main.php');
include('components/form.php');
include('components/table.php');
include('model/newsInsertion.php');
include('model/WebinarInsertion.php');

echo $head.$menus.$mainHead.$row;

formHead('UserInfo','model/WebinarInsertion.php');
input('Name','text'); 
input('Designation','text');
//input('SectionName','text');
select('SectionName');
$query = mysqli_query($con,"SELECT * From `sections`");
while($row=mysqli_fetch_array($query)){
    echo '<option value='.$row[2].'>'.$row[1].'';
}

echo $selectEnd;
input('VideoName','text');
input('VideoLength','text');
upload('file');
Button('webinar');
echo $formEnd;

Table('Webinar');
tableHead('id');
tableHead('Name');
tableHead('VideoName');
tableHead('delete');
webinar();
TabelEnd();
echo $rowEnd;







// echo $rowEnd;
echo $footer.$connection;
?>
</html>
 
