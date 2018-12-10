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
			<meta http-equiv="Cache-Control" content="no-transform" /> 
			<meta http-equiv="Cache-Control" content="no-siteapp" />
			<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	        <link rel="stylesheet" type="text/css" href="css/main.css">
			<link rel="stylesheet" type="text/css" href="css/organize.css">
			<link rel="stylesheet" media="screen and (max-width:960px)" href="css/small.css">
			
			
			
			<style type="text/css">
			@media screen and (max-width:960px){


					
					
					body{
						font-size: .9em;
					}
					h1{
						font-size: 2.8em;
					}
					h2 h3 h4 h5 h6{
						font-size: 2em;
					}
					.profileSec{
							width: 100%;
							height: 800px;
							overflow: auto;
							background-color: #EBEBEB;
							display:block; 
							text-align:center;
							/*	margin-top: -1%;*/
	
					}

					.profileSec h1{
					font-family: "Arial Rounded Mt",arial;
					font-size: 2.8em;
					font-color:#2e2e2e;
					padding-top: 2%;
					padding-bottom: 2%; 
					text-align: center;
					margin:0 auto;
					}

    				.profileSec .info{
					background-color:rgba(255,255,255,.8);
    				width:80%;
					height: 50%;
					margin-top:0;
    				margin-left: .5%;
    				margin-right: .5%;
    				margin-bottom: 3%;
    				display:inline-block;
    				vertical-align: top;
					text-align: center;
					border-radius: 5px;
	
					}

					.profileSec .info img{
					width: 30%;
					margin: 5%;
	
					}

					.profileSec .info p{
					font-family:"Arial Rounded Mt",arial;
					font-size:1.5em;
					margin:0 auto;
					line-height: -20%；
	
					}

					.profileSec h2{
					font-family: "Arial Rounded Mt",arial;
					font-size: 2.8em;
					font-color:#2e2e2e;
					padding-top: -2%;
					padding-bottom:0; 
					text-align: center;
					margin:0 auto;
					}

					.badges img{
					width:12%;
					margin-top: 3%;
					margin-bottom: 2%;
	 
					}
				}
			
			
			</style>
	
	
	
       </head>
<body>
	<div class="mainContainer">
	<header>
		
		<div>
			<img src="assets/logo-01.png" href="homepage.php" class="logo"/>
		</div>
		
    	<nav>
     	 <ul>
        	<div></div>
       		 <li class="current"><a href="homepage.php">Home</a></li>
        	 <li><a href="browse-locations.php">Locations</a></li>
        	 <li><a href="search.php">Search</a></li>
        	 <li><a href="contact.php">Contact</a></li>
		 <?php if($_SESSION['logged-in'] == true){?>
                 <li><a href="logout.php">Log out</a></li>
                 <li><a href="userprofile.php">Profile</a></li>
                 <?php } else {?>
                 <li><a href="signup.php">Sign up</a></li>
                 <li><a href="login.php">Log in</a></li>
                 <?php } ?>	
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
  </div>
   <div class="footer">
   <footer>
        <a href="homepage.php">
          <img src="assets/logo-01.png" />
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
