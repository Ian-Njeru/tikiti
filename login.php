<?php
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <title>Login</title>
    </head>

    <body>
        <div name="container">
        <div name="container-header">
            <p><i class="fa fa-lock"></i>&ensp;Sign-In</p>
        </div>

        <div name="container-body">
            <label for="identity">
                <i class = "fa fa-user"></i>&ensp;Enter phone number or email<br>
                <input type="text" name="identity" placeholder="Enter your email or phone number">
            </label><br><br>

            <label for="password">
                <i class="fa fa-key"></i>&ensp;Password<br>
                <input type="password" name="password" placeholder="Password">
            </label><br><br>
        </div>

        <div name="container-footer">
            <label for="sign-in">
                <input type="submit" name="submit" Value="Sign-In">
            </label>
        </div>
        </div>
    </body>
</html>

