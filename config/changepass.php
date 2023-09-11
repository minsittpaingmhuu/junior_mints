<?php

if(isset($_POST['submit'])){
    $username = htmlspecialchars($_POST['username']);
    $oldpass = htmlspecialchars($_POST['oldpass']);
    $newpass = htmlspecialchars($_POST['newpass']);
    $passconfirm = htmlspecialchars($_POST['passconfirm']);

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if(checkUser($conn, $username) === false){
        header("location: /profile?error=invaildUser");
        exit();
    }

    if(checkPass($conn, $username, $oldpass) !== false){
        header("location: /profile?error=wrongOldPassword");
        exit();
    }

    if(pwdMatch($newpass, $passconfirm) !== false){
        header("location: /profile?error=passwordsdontmatch");
        exit();
    }

    changePass($conn, $username, $newpass);
}else{
    header("location: /profile");
}