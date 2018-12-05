<?php

session_start();

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

?>

<?php

session_start();

$dsn = "mysql:host=localhost;dbname=cinetrip;charset=utf8mb4";
$dbusername = "huren";
$dbpassword = "jam19901004";

?>

<!doctype html>
<html>
    <head>
        <title>CineTrip Sign Up - Interests</title>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/organize.css">
<!--	<link rel="stylesheet" type="text/css" href="css/small.css">-->
	
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
        	 <li><a href="locations.php">Locations</a></li>
        	 <li><a href="search.php">Search</a></li>
        	 <li><a href="about.php">About</a></li>
        	 <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
	</header>
        <div class="interestSec">
            <h2>Thanks for signing up!</h2>
            <h1>Tell us about your interests</h1>
                <form action="user-interests-process.php" method="POST"> 

					<h4>I enjoy the genres:</h4></br>
				<div class="interestForm">
                     <label><input type="checkbox" name="genreid" value="4" hidden/><i></i>Horror</label></br><hr/>
                     <label><input type="checkbox" name="genreid" value="6" hidden/><i></i>Science Fiction</label></br><hr/>
                     <label><input type="checkbox" name="genreid" value="7" hidden/><i></i>Fantasy</label></br><hr/>
                     <label><input type="checkbox" name="genreid" value="1" hidden/><i></i>Action</label></br><hr/>
                     <label><input type="checkbox" name="genreid" value="2" hidden/><i></i>Comedy</label></br><hr/>
                     <label><input type="checkbox" name="genreid" value="3" hidden/><i></i>Romance</label></br><hr/>
                     <label><input type="checkbox" name="genreid" value="8" hidden/><i></i>Adventure</label></br><hr/>
                     <label><input type="checkbox" name="genreid" value="1" hidden/><i></i>Action</label></br><hr/>
                     <label><input type="checkbox" name="genreid" value="5" hidden/><i></i>Drama</label></br><hr/>
                     <label><input type="checkbox" name="genreid" value="9" hidden/><i></i>War</label></br><hr/>
                     <label><input type="checkbox" name="genreid" value="10" hidden/><i></i>Western</label></br><hr/>
                     <label><input type="checkbox" name="genreid" value="11" hidden/><i></i>Musical</label></br><hr/>
                     <label><input type="checkbox" name="genreid" value="12" hidden/><i></i>Crime</label></br><hr/>
                     <label><input type="checkbox" name="genreid" value="13" hidden/><i></i>Documentary</label></br><hr/>
                     <label><input type="checkbox" name="genreid" value="14" hidden/><i></i>Historical</label></br><hr/>                                                         
               
                <input type="submit" id="submit" />
                <p><a href="homepage.php">Skip this for now</a></p>
				 </div>
                </form>

                
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
        </footer>        
    </body>
</html>
