<?php
    require './scripts/Config.php';
    require './scripts/app/header.php';

    $mode = $_GET["mode"];
    $login    = base64_decode( $_COOKIE['login'] );
    $password = base64_decode( $_COOKIE['password'] );

    if($login === null || $login === '' || $password === null ){
        require './scripts/app/login_form.php';
    }
    else{
        try{
        $conn = new mysqli($database , $login , $password , "icc_db");
        if($conn->connect_error){
            require './scripts/app/login_form.php';
        }
        else
        {
            ?>

<div class="content">
    <?php
        if($mode == '' || $mode == null){
            require './scripts/app/editor_pages\create_and_search_bar.php';
            require './scripts/app/editor_pages/all_posts_list.php';
        }
        switch($mode){
            case 'delite':
                require './scripts/app/editor_pages/delite_get.php';
                break;
            case 'edit':
                require './scripts/app/editor_pages/create_or_edit_form.php';
                break;
            case 'create':
                require './scripts/app/editor_pages/create_or_edit_form.php';
                break;
        }
    ?>
</div>

            <?php
        }
        }
        catch(Exeption $e){
            
        }
    }
?>

<script src="./js/Cookie.js"></script>    
<script src="./js/EditorScript.js"></script>