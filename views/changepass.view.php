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
        
        <form form action="config/changeforgot.php" method="POST">
            <?php 
            if($_GET['error']=="none"){
            echo "<p style=\"text-align:center;\">You can now Login with registered account.</p><br>";
            }else if($_GET['error']=="wronglogi1n"){
                echo "<p style=\"text-align:center;\">Username (or) Password Wrong ! Try Again.</p><br>";
            }
            ?>
             <h2>Change Password</h2>
                 <input type="hidden" name="email" value=<?php echo $_GET['email']?>>
            <div class="input">
                <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="newpass" placeholder="New Password"required>
            </div>
            <div class="input">
                <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="passconfirm" placeholder="Confirm New Password"required>
            </div>
            <br>
            <button type="submit" name="submit" value="submit" class="btn">Change Password</button>

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