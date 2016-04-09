<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello World!</title>
        <style>
        
        body{
            font-family: Arial, sans-serif; 
            background-attachment: fixed;
            background-repeat: no-repeat;
            color:white;
        }
        .menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #e56c00;
            font-family: Arial, sans-serif;
        }
        
        .menuinfo {
            float: left;
        }

        .menuinfo a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 30px;
            text-decoration: none;
        }

        .menuinfo a:hover:not(.active) {
            background-color: #ffffff;
            color: #e56c00;
        } 
            
        .vertmenu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 15%;
            background-color: #8c8c8c;
            height: 100%; 
            position: fixed; 
            overflow: auto; 
           }

        .vertmenu_info a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 30px;
            text-decoration: none;
            padding: 15px 0 8px 16px;
            
        }


        .vertmenu_info a:hover {
            background-color: #555;
            color: white;
        }
        
        
        .dropbtn {
            background-color: #ff00c6;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor:pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ff00c6;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #000000}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #ffd200;
        }
        </style>
    </head>
    <body>
        <div>
            <nav>
                <ul class="menu">
                    <li class="menuinfo"><a href="inicio.php"><b>Home</b></a></li>
                    <li class="menuinfo" style="float:right"><a href="#"><b>Register</b></a></li>
                    <li class="menuinfo" style="float:right">
                    <li class="vertmenu_info" style="float:right"> 
                                <div class="dropdown">
                                    <button class="dropbtn">Dropdown</button>
                                        <div class="dropdown-content">
                                            <a href="#">Link 1</a>
                                            <a href="#">Link 2</a>
                                            <a href="#">Link 3</a>
                                        </div>
                                </div>
                            </li>
                    
                </ul>
            </nav>
        </div>
            <ul class="vertmenu">          
                <li class="vertmenu_info"><a href="pag_fisica.php"><b>Fisica</b></a></li>
                <li class="vertmenu_info"><a href="pag_lenguaje.php"><b>Lenguaje</b></a></li>
                <li class="vertmenu_info"><a href="pag_ed.php"><b>Estructuras Discretas</b></a></li>
                
            </ul>
        <div>
            
            
            
        </div>
        
        
        
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
