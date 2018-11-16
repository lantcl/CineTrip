<?php

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

?>

<!doctype html>
<html>
    <head>
        <title>CineTrip Login</title>
        <meta charset="utf-8">
    </head>
    <body>
        <header>        
            <a href = "main.html"><img src="assets/logo-01.png" alt="CineTrip Logo" style="width:100px"></a>
            <nav>
                <ul>
                <li><a href = "main.html">Home</a></li>
                <li><a href = "#">Search</a></li>
                <li><a href = "login.html">Log in</a></li>
                <li><a href = "signup.html">Sign up</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <h1>Welcome back</h1>
                <form action="#" method="POST"> 
                Username: <input type="text" name="username" />
                Password: <input type="text" name="userpassword" />
                <input type="submit" />
            	</form>
        </section>
        <footer>
            <nav>
                <a href = "main.html"><img src="assets/footer-logo1.png" alt="CineTrip Logo" style="width:50px"></a>
                <ul>
                <li><a href = "#">About Cinetrip</a></li> 
                <li><a href = "#">Contribute</a></li>
                <li><a href = "#">Privacy Policy</a></li>  
                </ul>
            </nav>
        </footer>        
    </body>
</html>