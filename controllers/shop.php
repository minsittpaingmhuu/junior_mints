<?php

session_start();
$id = $_SESSION['userid'];
if(!isset($_SESSION['role'])){
    
    require 'views/noshop.view.php';
    exit();
}if($_SESSION['role']==="admin"){header("location: /admin/shop");exit();}


require 'views/shop.view.php';


