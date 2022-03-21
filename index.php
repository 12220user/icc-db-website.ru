<?php
// sender 0000
require './scripts/Config.php';
// Инициализация базы данных
$conn = new mysqli($database , $userDB , $passwordDB , "icc_db");
if($conn->connect_error){
    echo $conn->connect_error;
}
else
{
    require './scripts/app/header.php';
?> 

<div class="content">
<?php 
    require './scripts/app/search_bar_catalog.php';
    require './scripts/app/books_list.php';
?>
</div>
<?php
}
?>

<script src="./js/AnyEventsHandler.js"></script>
</body>
</html>