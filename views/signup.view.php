<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="src/css/signup.css">
    <link rel="icon" type="image/x-icon" href="src/img/favicon.ico">
</head>
<body>
    <div class="wrapper">
        <div class="contain">
                    <a href="/"><img src="src/img/logo.png" height="50px" alt=""></a>
                </div>
        <form action="config/signup.inc.php" method="post">
             <h2>SIGN UP</h2>
             <div class="input">
                 <input type="text" name="name" placeholder="Name"required>
            </div>

            <div class="input">
                <input type="email" name="email" placeholder="Email">
            </div>

            <div class="input">
                <input type="text" name="username" placeholder="Username"required>
           </div>

            <div class="input">
                    <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="input">
                <input type="password" name="password_confirm" placeholder="Confirm Password"required>
            </div>
    
            <button type="submit" name="submit" class="btn">Sign Up</button>
            <div class="remember-forgot">
                <label>
                    <a href="/"><p>Back to Home</p></a>
                </label>
                <a href="/forgotpass">Forgot Password?</a>
            </div>
            <div class="login">
                <p>Already have an account?
                    <a href="/login">Login</a>
                </p>
            </div>
        </form>
        
    </div>
</body>
</html>