<?php
session_start();
$_SESSION['logged-in'] == true;

?>

<!DOCTYPE html>
  <html>
    <head>
      <title>CineTrip About</title>
      <meta http-equiv="Cache-Control" content="no-transform" /> 
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/organize.css">
	
        <style type="text/css">
		.aboutInner img{
	width: 50%;
}
	@media screen and (max-width:960px){
				.about{
	width: 100%;
	height: 1600px;
	background-color: #EBEBEB;
	display:block; 
	text-align:center;
/*	margin-top: -1%;*/
}

.about h1{
	font-family: "Arial Rounded Mt",arial;
	font-size: 3em;
	font-color:#2e2e2e;
	padding-top: 7%;
	padding-bottom: 3%; 
	text-align: center;
	margin:0 auto;
}

.about .grid{
	background-color:rgba(255,255,255,.8);
    width:80%;
	height: 300px;
	margin-top: 3%;
    margin-left: 3%;
    margin-right: 3%;
    margin-bottom: 3%;
    display:inline-block;
    vertical-align: top;
	text-align: center;
	border-radius: 5px;
	padding: 2%;
}

.aboutInner{
  border: 2px #303030;
  margin:5%;
  padding:4%;
  display: inline-block;
}

.aboutInner img{
	width: 30%;
}

.about .aboutbutton{
	display: inline-block;
	width: 45%;
	height: 15%;
	background-color: #ffab17;
	
	border-radius: 5px;
}

.about .aboutbutton p{
	font-size: 1em;
	margin-top: 8%;
	font-color: #ffffff;
}

}

			
		</style>
    </head>
    <body>
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
        	 <li><a href="about.php">About</a></li>
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
