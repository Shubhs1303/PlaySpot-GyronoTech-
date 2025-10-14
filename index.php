<?php require('connect.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="shortcut icon" href="playlogo.png" type="image/svg+xml">

</head>

<body>
<div class="con">
    <div class="wrapper">
    <img src="files/img/[removal.ai]_7e2a2cf3-a147-4bb2-889a-b8616d3836df-image.png" alt="">
    
        <form method="POST" action="login.php">
            <h2>Login</h2>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Email Address" name="email" id="email" required>
                        <i class="icon fas fa-envelope"></i>
                        <i class="error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-txt">Email can't be blank</div>
                </div>

            
                <div class="field password">
                    <div class="input-area">
                        <input type="password" placeholder="Password" name="password" id="password" required>
                        <i class="icon fas fa-lock"></i>
                        <i class="error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-txt">Password can't be blank</div>
                </div>

            
                <div class="pass-txt"><a href="files/frogot_password/forgot.html">Forgot password?</a></div>
                <input type="submit" value="Login" name="login">

        </form>
        <div class="sign-txt">Not yet member? <a href="files/sigin/signin.php">Signup now</a></div>

    </div>
</div>
    

</body>

</html>