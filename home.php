<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
        <style>
            *{
                box-sizing: border-box;
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
            body{
                margin: 0;
            }
            body main{
                height: 100vh; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                background-image: url("img/concert-stage.jpg");
                background-repeat: no-repeat;
                background-size: 100%;
                /* Specify the background image */ 
                background-color: rgba(255, 255, 255, 0.6); 
            } 

            #main-search{
                background-color: #fff;
                padding: 10px;
                margin: 20px 0;
            }

            input[type=search]{
                width: 90%;
                border: none;
                outline:none;
            }
            
            #main-search button{
                background: #fff;
                border: none;
                cursor: pointer;
            }

            #main-filter select{
                border:none;
                outline: none;
                /*padding: 2px;*/
                margin: 10px;
                border-radius: 20px;
                padding: 10px;
                background-color: #f2f2f2;
            }

            #main-filter option{
                border: none;

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
            <div id="search">
            <div id="main-search">
                <form method="get" action="">
                <input type="search" placeholder="Search ticket by category, artist, country..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <div id="main-filter">
                <select>
                    <option>Category</option>
                </select>
                <select>
                    <option>Country</option>
                </select>
                <select>
                   <option>Choose date and time</option>
                </select> 
            </div>
        </div>
        </main>

        <footer>
        </footer>
    </body>

</html>
