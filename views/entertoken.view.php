

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="src/css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="src/img/favicon.ico">
</head>
<body>
    <div class="wrapper">
    <div class="contain">
                    <a href="/"><img src="src/img/logo.png" height="50px" alt=""></a>
                </div>
    <form form action="config/entertoken.php" method="POST">
            <?php 
            if($_GET['error']=="invaildToken"){?>
                <p style="text-align:center;">Invaild Token.</p><br>
            <?php }elseif($_GET['error']=="tokenSent"){ ?>
               <p style="text-align:center;">An Email with password reset token has been sent to <?php echo $_GET['email']?>.</p><br>
            <?php }?>
            <br>
            <h2>Forgot Password</h2>
             
             
            <div class="input">
                <i class='bx bxs-lock-alt'></i>
                <input type="hidden" name="email" value=<?= $_GET['email'];?>>
                <input type="password" name="token" placeholder="Enter Your Token"required>
            </div>
            <br><br>
    
            <button type="submit" name="submit" class="btn">Submit</button>

            <div class="sign-up">
            <a href="/"><p>Back to Home</p></a><br>
                <p>Don't have an account?
                    <a href="signup">Sign Up</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>