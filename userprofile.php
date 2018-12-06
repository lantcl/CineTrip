<?php
session_start();

if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

?>

<!DOCTYPE html>
	<html>
		<head>
			<title>CineTrp My Profile</title>
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
        	 <li><a href="browse-locations.php">Locations</a></li>
        	 <li><a href="search.php">Search</a></li>
        	 <li><a href="about.php">About</a></li>
        	 <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
	</header>
	
	<div class="profileSec">
	<h1> User Profile</h1>
	

     <div class="info">
	 <a href="images-profile/profile_01.png"/>
		<img src="images-profile/profile_01.png" alt="Profile Photo">
	 </a><br>
	 
     <p>Username<br><br>Age<br><br>Favourite Genres</p>
	
	 
	 </div><br>

	 <h2>Badges earned</h2><br>
	 <div class="badges">

		<img src="images-profile/01_badge_horror.jpg" alt="Horror" >
		<img src="images-profile/02_badge_scifi.jpg" alt="Sci-Fi" />
		<img src="images-profile/03_badge_romance.jpg" alt="Romance" />
		<img src="images-profile/04_badge_comedy.jpg" alt="Comedy" />
		<img src="images-profile/05_badge_drama.jpg" alt="Drama" />
		<img src="images-profile/06_badge_fan.jpg" alt="Fan" />
		<img src="images-profile/07_badge_superfan.jpg" alt="Superfan" />
		<img src="images-profile/08_badge_filmbuff.jpg" alt="Film Buff" />
		<img src="images-profile/09_badge_expert.jpg" alt="Expert" />
		<img src="images-profile/10_badge_director.jpg" alt="Director" />
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

<?php } ?>
