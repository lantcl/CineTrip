<?php

session_start();

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$director = $pdo->prepare("SELECT * FROM `directors`");
$director->execute();


?>

<!doctype html>
<html>
    <head>
        <title>CineTrip Search</title>
		
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/organize.css">
		
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
        <?php if($_SESSION['logged-in'] == true){?>
            <li><a href="logout.php" class="button">Log out</a></li>
            <li><a href="userprofile.php" class="button">Profile</a></li>
        <?php } else {?>
            <li><a href="signup.php" class="button">Sign up</a></li>
            <li><a href="login.php" class="button">Log in</a></li>
        <?php } ?>      
    </ul>
    </div>
    <div class="searchBar">  
          <form action="search-results.php" method="POST">
            <input type = "text" name="filmsearch">
            <button type="submit">
              <img src="assets/search.png"/>
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
           <li><a href="browse-locations.php">Locations</a></li>
           <li><a href="search.php">Search</a></li>
           <li><a href="about.php">About</a></li>
           <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
  </header>
		
<!--Search Section-->
        <div class="searchSec">
			<h1>Search for a Location</h1>
		  <div class="search">	
          
              <div id ="section1" class="searchBar1">
                  <h2 id="searchHeading">Search by Movie/Show name or Location Name</h2> 
                    <input type = "text" name="search" id="searchInput">
                    <button >
                      <img id="searchsubmit" src="assets/search.png"/>
                    </button>
                    <div id="results"></div>  
              </div>
		  </div>
          
		<div class="search">	  
          <h2>Search by Genre</h2>

           <img class="genreicon" id="comedy" src="assets/genre-comedy.jpg" alt="genre icon comedy" >
           <img class="genreicon" id="horror" src="assets/genre-horror.jpg" alt="genre icon horror" >
           <img class="genreicon" id="drama" src="assets/genre-drama.jpg" alt="genre icon drama" >
           <img class="genreicon" id="Science-Fiction" src="assets/genre-scifi.jpg" alt="genre icon sci-fi" >
           <img class="genreicon" id="romance" src="assets/genre-romance.jpg" alt="genre icon romance" >
<!--            <a href= "search-results.php?name=romance"><img id="icon-romance" src="assets/genre-romance.jpg" alt="genre icon romance" ></a> -->
           <div id="results2"></div> 
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
    <script type="text/javascript" src="javascript/script.js"></script>
    </body>
</html>
