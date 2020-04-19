<html>

<?php
include('components/head.php');
include('components/sidemenus.php');
include('components/main.php');
include('components/form.php');
include('components/table.php');
echo $head.$menus.$mainHead.$row;

formHead('news','model/newsInsertion.php');
input('Heading','text'); 
textArea('Description1');
textArea('Description2');

Button('name');
echo $formEnd;
formHead('delete','#');
input('id','number');
Button('name1');
echo $formEnd;

echo $rowEnd;
echo $row;
Table('news');
tableHead('id');
tableHead('news');
TabelEnd();
echo $rowEnd;
echo $footer.$connection;
 

?>
</html>