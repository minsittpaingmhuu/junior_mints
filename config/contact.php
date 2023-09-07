<?php
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if(emptyContentInput($name, $phone, $email) !== false){
        header("location: /contact?error=emptyinput");
        exit();
    }

    makeContact($conn, $name, $phone, $email, $message);

}else{
    header("location: /forbidden");
}