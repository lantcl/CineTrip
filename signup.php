<?php

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

?>


<!doctype html>
<html>
    <head>
        <title>CineTrip Sign Up</title>
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
            <h1>Welcome to CineTrip</h1>
                <form action="signup-process.php" method="POST" enctype="multipart/form-data"> 
                <h2>Make an Account</h2>
                First Name: <input type="text" name="firstname"/>
                Last Name: <input type="text" name="lastname"/>
                Email: <input type="email" name="email"/>
                Username: <input type="text" name="username"/>
                Password: <input type="text" name="password"/>
                Birthday: <input type="date" name="birthday" min="1909-12-31" max="2018-12-31" />
                Gender:<select name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="nonbinary">Non-Binary</option>
                        <option value="none">Prefer not to say</option>
                    </select>
                Choose a profile picture:<input type="file" name="profilepic">
                <h2>Tell us about yourself</h2>
                Why you are interested in using CineTrip:
                    <select name="reason">
                        <option value="professional">I work in the film industry</option>
                        <option value="casual">I enjoy movie trivia</option>
                        <option value="tourist">I am visiting Toronto</option>
                        <option value="fan">I am a fan of a particular film or genre</option>
                        <option value="other">other</option>
                    </select>
                
                Where do you live: 
                    <select name="location">
                        <option value="toronto">Toronto</option>
                        <option value="gta">Within the GTA</option>
                        <option value="outsidegta">Outside the GTA</option>
                        <option value="none">Prefer not to say</option>
                    </select>                                                            

                <input type="submit" />
                </form>
        </section>
        <footer>
            <nav>
                <a href = "home.php"><img src="assets/footer-logo1.png" alt="CineTrip Logo" style="width:50px"></a>
                <ul>
                <li><a href = "#">About Cinetrip</a></li> 
                <li><a href = "#">Contribute</a></li>
                <li><a href = "#">Privacy Policy</a></li>  
                </ul>
            </nav>
        </footer>        
    </body>
</html>