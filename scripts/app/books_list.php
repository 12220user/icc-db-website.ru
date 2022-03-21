<?php
require './scripts/DataBase.php';
$search = $_GET["search"];
$filter = $_GET["filter"];


$books = null;//GetAllBooks();
switch($filter){
    case 'ABC':
        $books = GetBooksSortAbc(false);break;
    case 'CBA':
        $books = GetBooksSortAbc(true);break;  
    case 'NEW':
        $books = GetBooksSortDate(false);break;
    case 'OLD':
        $books = GetBooksSortDate(true);break;
    case 'POP':
        $books = GetBooksSortPopular(true);break;
    case 'UPOP':
        $books = GetBooksSortPopular(false);break;
    default:
        $books = GetAllBooks();break;
}

// Проверка если есть параметр поиска, то мы отображаем только нужные элементы
?>
<span id="search_data" style="display:none;"><?=$search?></span>
<span id="filter_data" style="display:none;"><?=$filter?></span>
<?php

$count = 0;
foreach($books as $book):
    if($book['Status'] === 'published'){
    if($search !== ""){
        // Алгоритм поиска по совпадениям в названии или автор
        if( stristr($book['Name'], $search) || 
            stristr($book['Author'], $search) || 
            stristr($book['Name']." ".$book['Author'], $search) ||
            stristr($book['Author']." ".$book['Name'], $search)
        ){
            DrawItem($book);
            $count = $count+1;
        }
    }
    // Отрисовка всех без исключения элементов
    else{
        DrawItem($book);
        $count = $count+1;
    }
    if($search === null){
        DrawItem($book);
        $count = $count+1;
    }
    }
endforeach;

if($count===0 ){
    DrawUdefiend();
}
?>


<?php
function DrawItem($book){
?>
    <div class="item" id="item_id<?=$book['id']?>">
    <img class="item_image" src="<?=$book['PictureLinq']?>" alt="">
    <div class="item_content">
        <div class="item_header"><p><?=$book['Name']?></p>
            <div class="metadata">
                <div class="date"><?=$book['Date']?></div>    
                <a href="<?="index.php?search=".$book['Author']?>" class="author"><?=$book['Author']?></a>
            </div>
        </div>
        <p class="item_description" maxlenght="200">
        <?=$book['Description']?>
        </p>
        <div class="item_control" style="display:flex;align-items: center;">
            <a class="button" href="./Fullview.php?id=<?=$book['id']?>">Подробнее</a>
            
            <p style="margin-left:30px">Просмотров : <?=$book['views']?></p>
        </div>
    </div>
</div>
<?php
}

function DrawUdefiend(){
    ?>
    <p>Записей не найдено.</p>
    <?php
}

?>