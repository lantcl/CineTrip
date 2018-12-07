<?php

session_start(); 

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Cinetrip - Contact Us</title>
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
        	 <li><a href="browse-locations.php">Locations</a></li>
        	 <li><a href="search.php">Search</a></li>
        	 <li><a href="about.php">About</a></li>
        	 <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
	</header>
	<div class="contact">
		<div id="contactForm">
			<label>Full name:</label>
			<input type="text" name="name" id="nameInput" required>
			<label>Email:</label>
			<input type="email" name="email" id="emailInput" required>
			<label>Subject:</label>
			<input type="text" name="subject" id="subjectInput">
			<label>Message:</label>
			<textarea name="message" id="msgInput" ></textarea>
			<input type="submit" value="Send" id="sendBtn">
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
	
    <script src="javascript/contact.js"></script>
</body>
</html>
