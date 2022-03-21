<?php
    $filter =$_GET['filter'];
?>
<div class="s_content">
    <form action="" name="search">
        <input id="searchbar_editor" type="text" value="<?=$filter?>">
        <input type="button" value="Поиск" class="button" onclick="FindPage()">
    </form>
    <form action="" name="create_bar">
        <span style="margin-left:30px;"></span>
        <input type="button" value="Создать новую запись" class="button"
        onclick ='linqEnter("./Editor.php?mode=create")'>
    </form>
</div>

<script>
    function FindPage(){
        let val = $('#searchbar_editor').val();
        document.location.replace('./Editor.php' + (val!=''?'?filter='+val:''));
    }
</script>