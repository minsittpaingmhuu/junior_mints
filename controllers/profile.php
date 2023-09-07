<?php

session_start();
$id = $_SESSION['userid'];
if(!isset($_SESSION['role'])){
    
    header('location: /login');
    exit();
}if($_SESSION['role']==="admin"){header("location: /admin");exit();}
require_once 'config/db.inc.php';
$sql = "SELECT * from users where id = $id LIMIT 1;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ./login?error=stmtfailed");
    exit();
}
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);

require 'views/profile.view.php';