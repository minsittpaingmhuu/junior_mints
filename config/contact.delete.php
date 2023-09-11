<?php

if(isset($_POST['submit'])){
    $id = htmlspecialchars($_POST['id']);

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if(emptyDeleteBlogInput($id) !== false){
        header("location: /admin/contact?error=emptyinput");
        exit();
    }

    deleteContact($conn, $id);
}else{
    header("location: /forbidden");
}