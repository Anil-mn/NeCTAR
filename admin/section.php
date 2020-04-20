<html>

<?php
include('components/head.php');
include('components/sidemenus.php');
include('components/main.php');
include('components/form.php');
include('components/table.php');
include('model/section.php');
echo $head.$menus.$mainHead.$row;


formHead('Sections','model/section.php');
input('Name','text');
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