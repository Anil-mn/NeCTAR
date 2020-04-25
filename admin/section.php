<html>

<?php

SESSION_START();
if(!isset($_SESSION['admin'])){
   header('location:index.html');
}
include('components/head.php');
include('components/sidemenus.php');
include('components/main.php');
include('components/form.php');
include('components/table.php');
include('model/Section.php');
echo $head.$menus.$mainHead.$row;


formHead('Sections','model/Section.php');
input('Name','text');
input('SubSection','text');
input('Description1','text');
input('Description2','text');
upload('photo');
Button('InserSection');
echo $formEnd;

Table('Section');
tableHead('id');
tableHead('name');
tableHead('delete');
display();
TabelEnd();
echo $rowEnd;

echo $footer.$connection;
 

?>
</html>