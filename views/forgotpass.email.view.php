

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
        
        <form form action="config/forgotpass.php" method="GET">
            <br>
             <h2>Forgot Password</h2>
             
             <div class="input">
                <i class='bx bxs-user'></i>
                 <input type="email" name="email" placeholder="Enter Your Email"required>
            </div>
            <br><br>
    
            <button type="submit" name="submit" class="btn">Next</button>
            <div class="remember-forgot">
                <label>
                    
                </label>
                
            </div>
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