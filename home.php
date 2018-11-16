<?php

session_start(); 

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

?>
<html>
    <head>
        <title>Cinetrip</title>
        <meta charset="utf-8">
    </head>
    <body>
        <header>        
            <a href = "#"><img src="#" alt="CineTrip Logo" style="width:100px"></a>
            <nav>
                <ul>
                <li><a href = "main.php">Home</a></li>
                <li><a href = "#">Search</a></li>
                <li><a href = "login.php">Log in</a></li>
                <li><a href = "signup.php">Sign up</a></li>
                </ul>
            </nav>
        </header>

        <section>         
            <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="811" id="gmap_canvas" src="https://maps.google.com/maps?q=toronto%20union%20station&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">pure black gmbh</a></div><style>.mapouter{text-align:right;height:811px;width:1080px;}.gmap_canvas {overflow:hidden;background:none!important;height:811px;width:1080px;}</style></div>     
        </section>


        <footer>
            <nav>
                <ul>
                <li><a href = "#">About Cinetrip</a></li> 
                <li><a href = "#">Contribute</a></li>
                <li><a href = "#">Privacy Policy</a></li>  
                </ul>
            </nav>
        </footer>
    </body>
</html>

