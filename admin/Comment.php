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
include('model/CommentDeletion.php');
echo $head.$menus.$mainHead.$row;

Table('Feedback');
tableHead('id');
tableHead('Name');
tableHead('Feedback');

Display();
TabelEnd();
// echo $rowEnd;

Table('Comment');
tableHead('id');
tableHead('Name');
tableHead('PaperName');
tableHead('Comment');
tableHead('delete');
Disp();
TabelEnd();
echo $rowEnd;

echo $footer.$connection;

?>
</html>