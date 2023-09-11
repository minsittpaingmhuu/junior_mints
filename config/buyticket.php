<?php
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phoneNumber']);
    $email = htmlspecialchars($_POST['email']);
    $type = htmlspecialchars($_POST['type']);
    $match_type = htmlspecialchars($_POST['matchSelect']);
    $payment = htmlspecialchars($_POST['payment']);
    $ticket_number = htmlspecialchars($_POST['ticket']);
    $remarks = htmlspecialchars($_POST['comment']);


    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if(emptyInput($name, $phone, $email,$match_type, $type, $payment, $ticket_number) !== false){
        header("location: /getticket?error=emptyinput");
        exit();
    }
    makeOrder($conn, $name, $phone, $email,$match_type, $type, $payment, $ticket_number, $remarks);

}else{
    header("location: /forbidden");
}

