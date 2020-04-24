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
//include('model/newsInsertion.php');
include('model/IntroInsertion.php');

echo $head.$menus.$mainHead.$row;

formHead('Intro','model/IntroInsertion.php');
input('Name','text'); 
input('Designation','text');
input('Status','text');
input('VideoName','text');
input('Description1','text');
input('Description2','text');
upload('file');

Button('de');
echo $formEnd;

Table('IntroVideos');
tableHead('id');
tableHead('Name');
tableHead('delete');
Intro();
TabelEnd();
echo $rowEnd;








// echo $rowEnd;
echo $footer.$connection;
?>
</html>