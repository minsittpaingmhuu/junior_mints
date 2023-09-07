<?php

if(isset($_POST['submit'])){
    $id = htmlspecialchars($_POST['id']);
    $role = htmlspecialchars($_POST['role']);

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if(emptyDeleteBlogInput($id) !== false){
        header("location: /admin/user?error=emptyinput");
        exit();
    }
    if($role !== "admin"){
        makeAdmin($conn, $id);
    }else{
        makeUser($conn, $id);
    }
    
}else{
    header("location: /forbidden");
}