<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
function sendToken($token){
    $email = htmlentities($_GET['email']);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'minsittpaingmhuu16205@gmail.com';
    $mail->Password = 'wwmumwjtrfuwzojv';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom("juniormints@noreplay.com", "Junior Mints");
    $mail->addAddress($email);
    $mail->Subject = ("Account Verification Token ");
    
    $mail->Body = 
    "
    We received email verification request for your account. Please enter this token to verify your account.<br/>
    <br>Token : $token
    ";
    $mail->send();

    header("Location: /profile?=email_sent!");
}


if(isset($_GET['id'])){
    require 'db.inc.php';
    $id = htmlspecialchars($_GET['id']);
    $token = md5(rand());
    

    function setToken($conn, $token, $id){
        $sql = "UPDATE users SET token = ? where id = ? LIMIT 1; ";
        $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /profile?error=stmtfailed");
        exit();
    }
    
        mysqli_stmt_bind_param($stmt, "ss", $token, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        sendToken($token);
        header("location: /profile?error=addtoken");
        exit();
    }
    

    setToken($conn, $token, $id);
    
}else{
    header("location: /profile?error=redr");
}

    