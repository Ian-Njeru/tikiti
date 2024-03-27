<?php
    include_once ('database/dbconnection.php');
    class login extends dbconnection{
        public function __constuct(){
            parent::__construct();
        }
    }

    public function login()
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
    </head>

    <body>
        <div class="login-container ">
        <form method="post" action="" >
            <p id="signin"><i class="fa fa-lock"></i>&ensp;Sign-In</p>

            <!--<label for="identity">Enter phone number or email</label> //-->
            <div class="input"><i class = "fa fa-user"></i><input type="text" name="identity" placeholder="Enter your email or phone number"></div>
            <br>

            <!--<label for="password">Password</label>//-->
                <div class="input"><i class="fa fa-key"></i><input type="password" name="password" placeholder="Password"></div>
            <br>

            <input type="submit" name="submit" Value="Sign-In">

        <form>
        </div>
    </body>
</html>

