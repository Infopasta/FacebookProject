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
            }
            ul {list-style: none;padding: 0px;margin: 0px;}
            ul li {display: block;position: relative;float: left;border:1px solid #000}
            li ul {display: none;}
            ul li a {display: block;background: #000;padding: 5px 10px 5px 10px;text-decoration: none;
                     white-space: nowrap;color: #fff;}
            ul li a:hover {background: #f00;}
            li:hover ul {display: block; position: absolute;}
            li:hover li {float: none;}
            li:hover a {background: #f00;}
            li:hover li a:hover {background: #000;}
            #drop-nav li ul li {border-top: 0px;}
        </style>
    </head>
    <body>
        <?php
            session_start();
        ?>
        <nav>
            <ul>
                <li><a href="inicio.php">Home</a></li>
                <li style="float:right"><a href="registro.php">Sign In</a></li>
                <li style="float:right"><a href="login.php">Sign Up</a></li>
            </ul>
        </nav>
    </body>
</html>
