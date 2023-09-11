<?php
session_start();
if(!($_SESSION['role']==="admin")){
    header('location: /forbidden');
    exit();
}
require_once 'config/db.inc.php';
$sql = "SELECT * from shop_order;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ./admin/ticket?error=stmtfailed");
    exit();
}
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);


require 'views/admin.shop.view.php';