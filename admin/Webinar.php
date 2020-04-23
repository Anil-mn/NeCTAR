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
input('SectionName','text');
input('VideoName','text');
input('VideoLength','text');
upload('xxx');
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
 
