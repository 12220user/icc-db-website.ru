<?php
$id = $_GET['id'];
if(!empty($id)){
    require './scripts/DataBase.php';
    DeliteBook($id);
}
?>
<div style="display: flex; align-items: center;">
<a href="./Editor.php">< назад </a>
<p style="margin-left: 20px"> Удаление прошло успешно!</p>
</div>