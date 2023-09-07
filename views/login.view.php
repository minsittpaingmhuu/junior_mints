

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log in</title>
    <link rel="stylesheet" href="src/css/login.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="src/img/favicon.ico">
</head>


<body>
    <div class="wrapper">
        
        <form form action="config/login.inc.php" method="post">
            <?php 
            if($_GET['error']=="none"){
            echo "<p style=\"text-align:center;\">You can now Login with registered account.</p><br>";
            }else if($_GET['error']=="wronglogi1n"){
                echo "<p style=\"text-align:center;\">Username (or) Password Wrong ! Try Again.</p><br>";
            }else if($_GET['error']=="passchange"){
                echo "<p style=\"text-align:center;\">Password has been successfully changed.</p><br>";
            }
            ?>
                <div class="contain">
                    <a href="/"><img src="src/img/logo.png" height="50px" alt=""></a>
                </div>
                <h2>Log In</h2>
             <div class="input">
                <i class='bx bxs-user'></i>
                 <input type="text" name="username" placeholder="Username"required>
            </div>
            <div class="input">
                <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="password" placeholder="Password"required>
            </div>
            <div class="remember-forgot">
                <label>
                    <a href="/"><p>Back to Home</p></a>
                </label>
                <a href="/forgotpass">Forgot Password?</a>
            </div>
    
            <button type="submit" name="submit" class="btn">Login</button>

            <div class="sign-up">
                <p>Don't have an account?
                    <a href="signup">Sign Up</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>