<?php

if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $password_confirm = htmlspecialchars($_POST['password_confirm']);
    $role = htmlspecialchars($_POST['role']);

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $email, $username, $password, $password_confirm) !== false){
        header("location: /signup?error=emptyinput");
        exit();
    }
    if(invaildUid($username) !== false){
        header("location: /signup?error=invaildUsername");
        exit();
    }
    if(invaildEmail($email) !== false){
        header("location: /signup?error=invaildEmail");
        exit();
    }
    if(pwdMatch($password, $password_confirm) !== false){
        header("location: /signup?error=passwordsdontmatch");
        exit();
    }
    if(uidExists($conn, $username, $email) !== false){
        header("location: /signup?error=usernametaken");
        exit();
    }

    if($role!=="admin"){
        $role = "user";
    }
    createUser($conn, $name, $email, $username, $password, $role);
}else{
    header("location: ../login/signup.php");
}