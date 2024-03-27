<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
            *{
                box-sizing: border-box;
                margin: 0;
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
            .sign-up{
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
            input{
                width: 100%;
                padding: 10px;
            }
            input[type=submit]{
                border: none;
                border-radius: 8px;
            }
            a{
                text-decoration: none;
            }
            a .social{
                border:1px solid red;
                background-color: red;
            }

            legend{
                padding: 2px;
                margin-left:calc(50% - 35px - 8px);
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
            <div class="sign-up">
                <form  method="post" action="">         
                    Name:<br>
                    <input type="text" name="name"><br><br>
                    Email:<br>
                    <input type="email" name="email"><br><br>
                    Password:<br>
                    <input type="password" name="password"><br><br>
                    Confirm Password:<br>
                    <input type="password" name="confirmPassword"><br><br>
                    <input type="submit" name="submit" value="submit">
                
                <fieldset><legend><p>Or</p></legend>
                        <a href="sell.php">Already have an account? Sign In</a><br><br>
                        <a href="">Sign in with Google</a><br><br>
                        <a href="">Sign in with Facebook</a><br><br>
                        <a href="">Sign in with Apple</a><br><br>
                        <p>By joining, you agree to our <a href="terms-and-conditions.html">Terms and Conditiions.</a> 
                    </fieldset>
                </form>
            </div>
        </main>
    </body>
</html>