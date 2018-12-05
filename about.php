<?php
session_start();
$_SESSION['logged-in'] == true;

?>

<!DOCTYPE html>
  <html>
    <head>
      <title>CineTrip About</title>
      <link rel="stylesheet" href="css/main.css" />
	  <link rel="stylesheet" href="css/organize.css"/>
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
<!--
        <?php if($_SESSION['logged-in'] == true){?>
            <li><a href="logout.php">Log out</a></li>
            <li><a href="userprofile.php">Profile</a></li>
        <?php } else {?>
            <li><a href="signup.php">Sign up</a></li>
            <li><a href="login.php">Log in</a></li>
        <?php } ?>			
-->
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
        	 <li><a href="locations.php">Locations</a></li>
        	 <li><a href="search.php">Search</a></li>
        	 <li><a href="about.php">About</a></li>
        	 <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
	</header>
  
	<div class="about"> 
    <h1>Our Team</h1>
    <div class="grid">
		<div class="aboutInner">
      <a><img src="images-profile/Profile_Cleo.jpg" alt="Cleo" width="120" height="120" border="1"></a><br>
        <h2>Cleo Lant</h2>
        <p>Title</p>
		<div class="aboutbutton">
        <a href="https://www.mynameiscleo.com/"><p>My Website</p>
		</div>
      </div>
    </div>
		
   		
    
    <div class="grid">
		<div class="aboutInner">
      <a><img src="images-profile/Profile_Carly.jpg" alt="Carly" width="120" height="120" border="1"></a><br>
        <h2>Carly Wysocki</h2>
        <p>Title</p>
		<div class="aboutbutton">
        <a href="https://www.google.com/"><p>My Website</p>
		</div>
      </div>
    </div>

      <div class="grid">
		  <div class="aboutInner">
      <a><img src="images-profile/Profile_Renjing.jpg" alt="Renjing" width="120" height="120" border="1"></a><br>
        <h2>Renjing Hu</h2>
        <p>Title</p>
	    <div class="aboutbutton">
        <a href="https://www.google.com/"><p>My Website</p>
		</div>
      </div>
    </div>

      <div class="grid">
		  <div class="aboutInner">
      <a><img src="images-profile/Profile_Vinay.jpg" alt="vinay" width="120" height="120" border="1"></a><br>
        <h2>B. Vinay Kumar</h2>
        <p>Title</p>
	 	<div class="aboutbutton">
        <a href="https://www.google.com/"><p>My Website</p>
		</div>
      </div>
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
