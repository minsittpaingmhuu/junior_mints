<?php

if(isset($_POST['submit'])){
    $token = htmlspecialchars($_POST['token']);
    $email = htmlspecialchars($_POST['email']);

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if(checkToken($conn,$email, $token)){
            header("location: /changepass?error=tokenMatch&email=$email");
        }else{
            header("location: /changepass?error=invaildToken&email=$email");
        }
}else{
    header("location: /forbidden");
}
