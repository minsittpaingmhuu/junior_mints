<?php

if(isset($_POST['submit'])){
    $token = htmlspecialchars($_POST['token']);
    $id = htmlspecialchars($_POST['id']);
    $username = htmlspecialchars($_POST['username']);

    require_once 'db.inc.php';
    require_once 'functions.inc.php';
    function updateVerify($conn, $id){
        $sql = "UPDATE users SET verify = 1 where id = ?; ";
        $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /profile?error=stmtfailed");
        exit();
    }
    
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: /profile?error=adminok");
        exit();
    }
    

    if(checkToken($conn,$username, $token)){
            updateVerify($conn, $id);
        }else{
            header("location: /profile?error=invaildToken");
        }
}else{
    header("location: /forbidden");
}
