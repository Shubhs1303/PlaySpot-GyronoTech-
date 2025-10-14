<?php require('../../connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in</title>
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> 
    <link rel="shortcut icon" href="../../playlogo.png" type="image/svg+xml">

</head>
<body>
    <div class="con">
        <div class="wrapper">
            <img src="../img/[removal.ai]_7e2a2cf3-a147-4bb2-889a-b8616d3836df-image.png" alt="">
            <form method="POST" action="register.php" >
                <h2>Sign-in</h2>
                <div class="field name">
                    <div class="input-area">
                        <input type="text" placeholder="Name" name="name" id="name" autocomplete="off" required>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <i class="error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-txt">Name can't be blank</div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="E-mail" name="email" id="email" required>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <i class="error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-txt">E-mail can't be blank</div>
                </div>

                <div class="field mobile">
                    <div class="input-area">
                        <input type="number"  maxlength="10" placeholder="Mobile No" name="mobile" id="mobile" required>
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <i class="error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-txt">Mobile number can't be blank</div>
                </div>

                <div class="field password">
                    <div class="input-area">
                        <input type="Password"  placeholder="Password" name="password" id="password" required>
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <i class="error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-txt">Password can't be blank</div>
                </div>
                <input type="submit" value="submit" name="submit">
            </form>
            
        </div>
    </div>

 
</body>
</html>