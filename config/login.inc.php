<?php

if(isset($_POST['submit'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($username, $password) !== false){
        header("location: /login?error=emptyinput");
        exit();
    }
    loginUser($conn, $username, $password);
}else{
    header("location: /forbidden");
}