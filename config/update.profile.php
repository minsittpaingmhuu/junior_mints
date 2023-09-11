<?php
session_start();

if(isset($_POST['submit'])){
    
    $id = htmlspecialchars($_POST['id']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $zip = htmlspecialchars($_POST['zip']);

    
    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    updateProfile($conn, $name, $email, $address, $city, $zip, $id);
    end();
    
}else{
    header("location: /forbidden");
}