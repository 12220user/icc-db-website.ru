<?php 

function Querry($post){
    global $conn;
    return $conn->query($post);
}
// Отдельный скрипт для работы с базой данных
function GetAllBooks(){
    $sql = "SELECT * FROM textbook";
    return Querry($sql);
}

function GetBook($id){
    $sql = "SELECT * FROM textbook WHERE id IN ($id)";
    return Querry($sql)->fetch_array();
}

function GetBooksSortAbc($reverse){
    $sql = "SELECT * FROM `textbook`  \n"
    ."ORDER BY `textbook`.`Name`  ".(!$reverse?"ASC":"DESC");
    return Querry($sql);
}

function GetBooksSortDate($reverse){
    $sql = "SELECT * FROM `textbook`  \n"
    . "ORDER BY `textbook`.`Date` ".(!$reverse?"DESC":"ASC");
    return Querry($sql);
}

function GetBooksSortPopular($reverse){
    $sql = "SELECT * FROM `textbook`  \n"
    ."ORDER BY `textbook`.`views`  ".(!$reverse?"ASC":"DESC");
    return Querry($sql);
}

function DeliteBook($id){
    $sql = "DELETE FROM `textbook` WHERE `textbook`.`id` = ".$id;
    return Querry($sql);
}


function CreateNewBook($name , $author , $date , $status , $description , $picture ){
    $sql = "INSERT INTO `textbook` ( `Name`, `Description`, `PictureLinq`, `Author`, `Date`, `Status`) VALUES ".
    "('".$name."', '".$description."', '".$picture."','".$author."', '".$date."', '".$status."')";  
    return Querry($sql);
}

function UpdateBook($id , $name , $author , $date , $status , $description , $picture){
    $sql = "UPDATE `textbook` 
    SET 
        `Name`='".$name."',
        `Description`='".$description."',
        `PictureLinq`='".$picture."',
        `Author`='".$author."',
        `Date`='".$date."',
        `Status`='".$status."' 
    WHERE `id` = ".$id;
    return Querry($sql);
}

function WatchBookCounterAdd($id){
    $sql = "UPDATE `textbook` SET `views` = `views` + 1  WHERE `id` = ".$id;
    return Querry($sql);
}

?>