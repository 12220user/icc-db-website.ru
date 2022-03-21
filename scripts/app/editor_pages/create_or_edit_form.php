
<?php
require './scripts/DataBase.php';
$mode = $_GET['mode'];

if($mode==='create')
    CreateEmptyForm();
else if($mode === 'edit'){
    $id = $_GET['id'];
    if(empty($id))
        echo 'Запись не найдена!';
    else{
        CreateEditForm($id);
    }
} 
?>


<?php
function CreateEmptyForm()
{
?>
<form action="./scripts/app/editor_pages/create_action.php" name="CreateOrEdit" class="form" id="CreateOrEdit_form">
    <div class="input_with_name">
        <input type="button" value="Проверка" class="button" onclick="CheckCorrectFormData()" id="cheack_b_f_c">
        <input type="submit" value="Сохранить" class="button hide" id="submit_button_createform">
        <input type="reset" value="Сбросить" class="button">
    </div>

    <span class="line"></span>
    <p>* - обязательные к заполнению поля.</p>
    <div class="input_with_name">
        <p class="">Опубликован</p>
        <input type="checkbox" name="status" id="ec_i_pub" value="pub">
    </div>
    
    <div class="input_with_name">
        <p class="needed">Название</p>
        <input type="text" name="name" id="ec_i_name" value="">

        <p class="needed">Автор</p>
        <input type="text" name="author" id="ec_i_author" value="">
    
        <p class="needed">Дата</p>
        <input type="date" name="date" id="ec_i_date" value="">
    </div>

    <div class="input_with_name">
        <p>Картинка</p>
        <input type="text" id="ec_i_date" name="picture" value="">
    </div>

    <p>Описание</p>
    <textarea id="ec_i_description" name="description" form="CreateOrEdit_form" cols="30" rows="30"></textarea>
</form>
<?php
}
?>


<?php
function CreateEditForm($id)
{
    $item = GetBook($id);
?>
<form action="./scripts/app/editor_pages/change_action.php" name="CreateOrEdit" class="form" id="CreateOrEdit_form">
    <input type="hidden" value="<?=$id?>" name="id">
    <div class="input_with_name">
        <input type="button" value="Проверка" class="button" onclick="CheckCorrectFormData()" id="cheack_b_f_c">
        <input type="submit" value="Сохранить" class="button hide" id="submit_button_createform">
        <input type="reset" value="Сбросить" class="button">
    </div>

    <span class="line"></span>
    <p>* - обязательные к заполнению поля.</p>
    <div class="input_with_name">
        <p class="">Опубликован</p>
        <input type="checkbox" name="status" id="ec_i_pub" value="pub" 
        <?php
            if($item['Status']==='published')
            echo 'checked';
        ?>>
    </div>
    
    <div class="input_with_name">
        <p class="needed">Название</p>
        <input type="text" name="name" id="ec_i_name" value="<?=$item['Name']?>">

        <p class="needed">Автор</p>
        <input type="text" name="author" id="ec_i_author" value="<?=$item['Author']?>">
    
        <p class="needed">Дата</p>
        <input type="date" name="date" id="ec_i_date" value="<?=$item['Date']?>">
    </div>

    <div class="input_with_name">
        <p>Картинка (url)</p>
        <input type="text" id="ec_i_date" name="picture" value="<?=$item['PictureLinq']?>">
    </div>

    <p>Описание</p>
    <textarea id="ec_i_description" name="description" form="CreateOrEdit_form" cols="30" rows="30"><?=$item['Description']?></textarea>
</form>
<?php
}
?>