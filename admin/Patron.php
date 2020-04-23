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
include('model/PatronInsertion.php');

echo $head.$menus.$mainHead.$row;

formHead('Patrons','model/PatronInsertion.php');
input('Name','text'); 
input('Designation','text');
input('Role1','text');
input('Role2','text');
input('Description1','text');
input('Description2','text');
upload('patron');
Button('patron');
echo $formEnd;

Table('Patrons');
tableHead('id');
tableHead('Name');
tableHead('delete');
Patron();
TabelEnd();
echo $rowEnd;








// echo $rowEnd;
echo $footer.$connection;
?>
</html>