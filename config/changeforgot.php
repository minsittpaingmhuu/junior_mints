<?php

if(isset($_POST['submit'])){
    $email = htmlspecialchars($_POST['email']);
    $newpass = htmlspecialchars($_POST['newpass']);
    $passconfirm = htmlspecialchars($_POST['passconfirm']);

    function changePassword($conn, $username, $password){

        $sql = "UPDATE users SET password = ? where username = ? OR email = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: /profile?error=stmtfailed");
            exit();
        }
    
            $password = password_hash(md5($password),PASSWORD_DEFAULT);
    
            mysqli_stmt_bind_param($stmt, "sss", $password, $username, $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("location: /login?error=none");
            exit();
        
    }
    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if(checkUser($conn, $email) === false){
        header("location: /changepass?error=invaildUser");
        exit();
    }

    if(pwdMatch($newpass, $passconfirm) !== false){
        header("location: /changepass?email=$email&error=passwordsdontmatch");
        exit();
    }

    changePassword($conn, $email, $newpass);
}else{
    header("location: /forbidden");
}