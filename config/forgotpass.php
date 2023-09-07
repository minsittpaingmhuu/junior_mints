<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
function sendToken($token ,$email){

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
    $mail->Subject = ("Password Reset Token ");
    
    $mail->Body = 
    "
    We received a password reset request for your account. Please enter this token to verify your account.<br/>
    <br>Token : $token
    ";
    $mail->send();

    header("Location: /entertoken?error=tokenSent");
}


if(isset($_GET['email'])){
    require 'db.inc.php';
    $email = htmlspecialchars($_GET['email']);
    $token = md5(rand());
    

    function setToken($conn, $token, $email){
        $sql = "UPDATE users SET token = ? where email = ? LIMIT 1; ";
        $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /forgotpass?error=stmtfailed");
        exit();
    }
    
        mysqli_stmt_bind_param($stmt, "ss", $token, $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        sendToken($token, $email);
        header("location: /entertoken?error=tokenSent&email=$email");
        exit();
    }
    

    setToken($conn, $token, $email);
    
}else{
    header("location: /forgotpass?error=redr");
}

    