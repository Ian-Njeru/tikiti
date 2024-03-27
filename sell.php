<?php
    session_start();

    if(isset($_SESSION['merchant_name'])){
        header('location:home.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
        <style>
            *{
                box-sizing: border-box;
                margin:0;
            }
            .navigation{
              
                padding:20px;
            }
            ul{
                list-style-type: none;
                margin:0;
                padding:0;
                display: flex;
                align-items: space-between;
                justify-content: flex-end;
                padding: 12px;
                border: none;
                margin-top: -17px;
                margin-right: 12px;
            }

            li{
                
            }

            li a{
                 text-decoration: none;
                background-color: #0061e0;
                padding: 10px; 
                color: #fff;
                border-radius: 10px; 
                margin: 0px 5px;       
            }

            li a:hover{
                background-color: #fff;
                color: #0061e0;
                border: 2px solid #0061e0;
            }
            fieldset{
                border: none;
                border-top: 1px solid black;
            }
            

            body main{
                /*background-image:url('img/concert-stage-2.jpg');*/
                background-repeat: no-repeat;
                background-size: 100%;
            }

            .login{
                border-radius:8px;
                backdrop-filter: blur(20px);
                background-color:rgba(255,255,255,0.5);
                box-shadow:0 1px 12px rgba(0, 0, 0, 0.25);
                border:1px solid rgba(255, 255, 255,0.3);
                margin: 50px  150px; 
	            padding: 25px;
	            border: 1px solid #ddd;
                overflow: auto;
                justify-content:left;
            }
            form{
                border: 1px solid red;
                float: left;
                width: 50%;
                padding: 10px;
            }
            img{
                width: 50%;
                height: 100%;
            }
            .login h1{
                text-align: center;
                font-style: oblique;
                font-family: monospace;
                font-size: 2em;
            }

            input{
                width: 100%;
                padding: 10px;
            }

            input[type=submit]{
                border: none;
                border-radius: 8px;
            }

            legend{
                padding: 2px;
                margin-left:calc(50% - 35px - 8px);
            }

            a{
                text-decoration: none;
            }

            a .social{
                border:1px solid red;
                background-color: red;

            }
        </style>
    </head>

    <body>
    <header>
        <nav class = "navigation">
            <a class="logo" href="#">
                <img src="" alt="tikiti logo" />
            </a>
            
                <ul>
                   <li> 
                       <a href="buy-ticket.php"> Buy</a>
                    </li>
                    <li>
                        <a href="sell.php">Sell</a>
                    </li>
                </ul>
            
        </nav>
    </header>

        <main>
            
            <div class="">
                <div class="login">
                <form method="post" action="m_login.php">
                <?php 
                    if(isset($_SESSION['message'])){
                    echo "<div class ='alert text-center'>";
                    echo $_SESSION['message'];
                    echo "</div>";

                    unset($_SESSION['message']);
                    }
                ?>
                <h1>Have your tickets reach a wide audience by using our platform.</h1>
                        Email:<br>
                        <input type="email" name="email"><br><br>
                        Password:<br>
                        <input type="password" name="password"><br><br>

                        <input type="submit" name="signin" value="Sign In">
                        <br><br>

                        <a href="forgot-password.php">Forgot password?</a>
                    
                    <fieldset><legend>Or</legend>
                        <a href="signUp.php">No account? Join now</a><br><br>
                        <a href="" class="social">Continue with Google</a><br><br>
                        <a href="" class="social">Continue with Facebook</a><br><br>
                        <a href="" class="social">Continue with Apple</a><br><br>
                        <p>By joining, you agree to our <a href="terms-and-conditions.html">Terms and Conditiions.</a></p> 
                    </fieldset>
        </form>
                </div>
                </div>
        </main>
    </body>
</html>