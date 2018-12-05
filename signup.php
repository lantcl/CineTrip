<?php

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

?>

<!doctype html>
<html>
    <head>
        <title>CineTrip Sign Up</title>
        <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
<!--<link rel="stylesheet" type="text/css" media="screen and (max-width: 768px)" href="css/small.css">-->
		<link rel="stylesheet" type="text/css" href="css/organize.css"/>
        
    </head>
    <body>
      	<div class="top">
		<a href="homepage.php" class="logo">
      		<img src="assets/logo-03.png" />
    	</a>
		<div class="userImage">
			<a href="signin.php">
			<img src="assets/userimage.png" />
			</a>
		</div>
		<div class="topnav">
		<ul>
       <?php if(isset($_SESSION['logged-in']) && ($_SESSION['logged-in'] == true)){?>
           <li><a href="logout.php">Log out</a></li>
           <li><a href="userprofile.php">Profile</a></li>
       <?php } else {?>
           <li><a href="signup.php">Sign up</a></li>
           <li><a href="login.php">Log in</a></li>
       <?php } ?>	
		</ul>
		</div>
		<div class="searchBar">  
        	<form action="search-results.php" method="POST">
            <input type = "text" name="filmsearch">
            <button type="submit">
			<img src="assets/search.png" href="locations.php"/>
			</button>  
        	</form>  
    	</div>  
	</div>
	<header>
		
		<a href="homepage.php">
			<img src="assets/logo-01.png" />
		</a>
		
    	<nav>
     	 <ul>
        	<div></div>
       		 <li class="current"><a href="homepage.php">Home</a></li>
        	 <li><a href="browse-location.php">Locations</a></li>
        	 <li><a href="search.php">Search</a></li>
        	 <li><a href="about.php">About</a></li>
        	 <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
	</header>
    
		<div class="signupForm">
    <h1>Welcome to CineTrip</h1>
		<div class="part1">
        <form action="signup-process.php" method="POST" enctype="multipart/form-data"> 
        <h2>Make an Account</h2>
        <input type="text" placeholer="First Name" name="firstname" />
        <input type="text" placeholer="Last Name" name="lastname" />
        <input type="email" placeholer="Email" name="email" />
        <input type="text" placeholer="Username" name="username" />
        <input type="text" placeholer="Password" name="password" />
        Birthday:<input type="date" name="birthday" min="1909-12-31" max="2018-12-31" />
        Gender:<select name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="nonbinary">Non-Binary</option>
                        <option value="none">Prefer not to say</option>
                    </select>
        Choose a profile picture:<input type="file" name="profilepic">
			</div>
			
		
		
		<div class="part2">
			
                <h2>Tell us about yourself</h2>
			Why you are interested in using CineTrip:</br>
                    <select name="reason">
                        <option value="professional">I work in the film industry</option>
                        <option value="casual">I enjoy movie trivia</option>
                        <option value="tourist">I am visiting Toronto</option>
                        <option value="fan">I am a fan of a particular film or genre</option>
                        <option value="other">other</option>
                    </select></br>
                
                Where do you live:</br> 
                    <select name="location">
                        <option value="toronto">Toronto</option>
                        <option value="gta">Within the GTA</option>
                        <option value="outsidegta">Outside the GTA</option>
                        <option value="none">Prefer not to say</option>
                    </select></br>                                                            

                <input type="submit" />
                </form>
        
		</div>
		</div>
		
               <div class="footer">
   <footer>
        <a href="homepage.php">
          <img src="assets/footer-logo.png" />
        </a>               
    <ul class="bottomNav">
        <li><a href="about.php" >About CineTrip</a></li>
        <li><a href="#">Contribute</a></li>
        <li><a href="#">Privacy policy</a></li>
    </ul>
    </footer>
	</div>   
    </body>
</html>
