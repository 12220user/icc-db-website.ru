<?php
$login    = base64_decode( $_COOKIE['login'] );
$password = base64_decode( $_COOKIE['password'] );
$conn = new mysqli($database , $login , $password , "icc_db");
if($conn->connect_error){
    require './scripts/app/login_form.php';
}

require '../../DataBase.php';

$status = $_GET['status'];
if(!empty($status) && $status === 'pub')
    $status = 'published';
else $status = 'in_making';

$name = $_GET['name'];
$author = $_GET['author'];
$date = $_GET['date'];
$description = $_GET['description'];
$picture = $_GET['picture'];

CreateNewBook($name , $author , $date , $status , $description , $picture);
echo '<a href="../../../Editor.php">Назад</a><br>Запись успешно создана.';
?>