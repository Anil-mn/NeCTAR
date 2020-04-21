<html>

<?php
include('components/head.php');
include('components/sidemenus.php');
include('components/main.php');
include('components/form.php');
include('components/table.php');
include('model/newsInsertion.php');
echo $head.$menus.$mainHead.$row;

formHead('news','model/newsInsertion.php');
input('Heading','text'); 
textArea('Description1');
textArea('Description2'); 
upload('News');
Button('name');
echo $formEnd;

Table('news');
tableHead('id');
tableHead('news');
tableHead('delete');
Display();
TabelEnd();
echo $rowEnd;
echo $footer.$connection;
 

?>
</html>