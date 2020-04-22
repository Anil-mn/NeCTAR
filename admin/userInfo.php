<html>

<?php
include('model/connection.php');
include('components/head.php');
include('components/sidemenus.php');
include('components/main.php');
include('components/form.php');
include('components/table.php');
include('model/newsInsertion.php');
include('model/userInfo.php');
echo $head.$menus.$mainHead.$row;





formHead('UserInfo','model/userInfo.php');
input('Name','text'); 
input('Designation','text'); 
input('Qualification','text'); 
input('Email','email'); 
input('PhoneNumber','number');
upload('photo'); 
input('Place','text');
Button('user');
echo $formEnd;




formHead('paper','model/userInfo.php');
input('Heading','text');
textArea('Description1');
input('Email','text');
input('Youtube','text');
select('Section');
$query = mysqli_query($con,"SELECT * From `Sections`");
while($row=mysqli_fetch_array($query)){
    echo '<option>'.$row[1].'';
}

echo $selectEnd;
upload('pdf');
upload('file');
Button('paper');

echo $formEnd;

Table('Papers');
tableHead('id');
tableHead('paper');
tableHead('delete');
Dis();
TabelEnd();
echo $rowEnd;







// echo $rowEnd;
echo $footer.$connection;