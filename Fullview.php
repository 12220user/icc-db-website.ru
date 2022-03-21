<?php
require './scripts/Config.php';
// Инициализация базы данных
$conn = new mysqli($database , $userDB , $passwordDB , "icc_db");
if($conn->connect_error){
    echo $conn->connect_error;
}
else
{
    require './scripts/app/header.php';
    $id = $_GET['id'];
    if($id === null || $id === ""){
        echo '<div class="content">Данные не найдены.</div>';
    }
    else{
    require './scripts/DataBase.php';
    $book = GetBook((int)$id);
    WatchBookCounterAdd($id);
?>
<div class="content">
    <div class="f_item">
        <div class="f_item_header">
            <img src="<?=$book['PictureLinq']?>" alt="" class="f_item_logo">
            <div class="fi_Head">
                <div class="fi_Name"><?=$book['Name']?></div>
                <div class="fi_Author"><?=$book['Author']?></div>
                <div class="fi_Date"><?=$book['Date']?></div>
            </div>
        </div>
        <div class="f_item_content">
            <p class="fi_descrition"><?=$book['Description']?></p>
            <div class="fi_custom_data"></div>
        </div>
    </div>
</div>
<?php
}
}
?>
