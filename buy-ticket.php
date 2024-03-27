<!DOCTYPE htnl>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        body{
            margin: 0;
        }
        header{
            display:flex;
            align-items: center;
            justify-content: center;
        }

        header #search-container{
            /*display:flex;
            align-items: center;
            justify-content: center;*/           
        }

        #search-container{
            /*border: 2px solid black;
            background-color: red;
            background-color: ;*/
            margin: 50px;
        }

        input[type=search]{
            width: 85%;
            margin: 10px;
            padding: 10px;
            border: none;
            outline:none;
        }

        /**/form{
            
            border: 1px solid black;
        }

        #search-container button{
                background: #fff;
                border: none;
                cursor: pointer;
                margin: 10px;
                padding: 10px;
        }

        .flex-container{
            display: flex;
        }

        .flex-container > div{
            width: 100px;
            height: 150px;
            background-color:;
            border: 1px solid black;
            margin: 10px;
            padding: 20px;
            border-radius: 10%; 
        }

        .flex-container > div:hover{
            box-shadow: 10px 10px 5px grey;
        }

        #scroll-menu{
            padding: 10px;
            margin: 5px;
        }
        
        #scroll-menu a{
            text-decoration: none;
            border: 0.5px solid black;
            border-radius: 100px;
            padding: 10px;
            margin: 5px;
            
        }
    </style>
</head>

<body>
    <header>
    <div id="search-filter-container">
            <div id="search-container">
                <form method="get" action="">
                <input type="search" placeholder="Search ticket by category, artist, country..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <div id="scroll-menu">
                <a href="#popular">Popular</a>
                <a href="#family">Family</a>
                <a href="#adventure">Adventure</a>
                <a href="#comedy">Comedy</a>
                <a href="#sports">Sports</a>
                <a href="#plays">Plays</a>
                <a href="#theater">Theater</a>
            </div>
        </div>
    </header>

    <main>
        <p>Popular<a href="">See All</a>
        </p>
        <div class="flex-container">
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>