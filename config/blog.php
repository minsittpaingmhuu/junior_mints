<?php

if(isset($_POST['submit'])){
    $title = htmlspecialchars($_POST['title']);
    $body = htmlspecialchars($_POST['body']);

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if(emptyBlogInput($title, $body) !== false){
        header("location: /admin/blog?error=emptyinput");
        exit();
    }

    addBlog($conn, $title, $body);
}else{
    header("location: /forbidden");
}