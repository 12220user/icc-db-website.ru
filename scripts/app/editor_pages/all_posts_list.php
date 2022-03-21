<?php
require './scripts/DataBase.php';
$filter =$_GET['filter'];
$items = GetAllBooks();


if(count($items) === 0){
    echo 'В базе не существует записей.';
}
else{
$count = 0;
foreach ($items as $item):
    if($item['id'] !== '0'){
        if(stristr($item['Name'], $filter) || empty($filter))
        {
            $count = $count +1;
?>
<div class="e_item">
    <div class="e_item_id"><?=$item['id']?></div>
    <span>|</span>
    <div class="e_item_name"><?=$item['Name']?></div>
    <span>|</span>
    <div class="e_item_author"><?=$item['Author']?></div>
    <span>|</span>
    <div class="e_item_date"><?=$item['Date']?></div>
    <span>|</span>
    <div class="e_item_status">
        <?php
            if($item['Status'] === 'published')
                echo '<span style="color: rgb(0, 191, 0);" >Опубликован</span>';
            else if($item['Status'] == 'in_making')
                echo '<span style="color: red;">Не опубликован</span>';
        ?>
    </div>
    <button class="e_item_b_change" onclick='linqEnter("<?="./Editor.php?mode=edit&id=".$item["id"] ?>")'>Изменить</button>
    <button class="e_item_b_delite"  onclick='linqEnter("<?="./Editor.php?mode=delite&id=".$item["id"] ?>")'>Удалить</button>
</div>
<?php
        }
    }
endforeach;
if($count === 0)
    echo 'По запросу не найдено записей';
}
?>