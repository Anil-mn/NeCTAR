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
include('model/messageInsertion.php');
echo $head.$menus.$mainHead.$row;
formHead('news','model/messageInsertion.php');
input('name','text'); 
input('designation','text'); 
input('Email','text'); 
textArea('message');
upload('msg');
Button('submit');
echo $formEnd;

Table('Messages');
tableHead('id');
tableHead('name');
tableHead('delete');
display();
TabelEnd();
echo $rowEnd;
echo $footer.$connection;
 

?>
</html>