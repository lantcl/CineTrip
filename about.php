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
	    <link rel="stylesheet" media="screen and (max-width:960px)" href="css/small.css">
	
        <style type="text/css">
		.aboutInner img{
	width: 50%;
}
	@media screen and (max-width:960px){
				.about{
	width: 100%;
	height: 2800px;
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
	height: 550px;
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
	width: 40%;
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
    <h1>Our Team: Accidental Admins</h1>
    <div class="grid">
		<div class="aboutInner">
      <a><img src="assets/cleo.jpg" alt="Cleo"></a><br>
        <h2>Cleo Lant</h2>
        <p>Project Mom</p>
        <p>Since graduating from Sheridan College with an Illustration degree, Cleo has followed the urge to create through motion graphics, fine art, and most recently, interactive media. Her favourite show filmed in Toronto is NBC’s Hannibal.</p>
		<div class="aboutbutton">
        <a href="https://www.mynameiscleo.com/"><p>My Website</p>
		</div>
      </div>
    </div>
		
    
    <div class="grid">
		<div class="aboutInner">
      <a><img src="assets/carly.jpg" alt="Carly"></a><br>
        <h2>Carly Wysocki</h2>
        <p>Location Guru</p>
        <p>Carly is a Media Studies graduate from the University of Guelph-Humber specializing in communications, front-end development and UX design. Her favourite movie filmed in Toronto is Scott Pilgrim vs. the World.</p>
		<div class="aboutbutton">
        <a href="https://www.google.com/"><p>My Website</p>
		</div>
      </div>
    </div>

      <div class="grid">
		  <div class="aboutInner">
      <a><img src="assets/renjing.jpg" alt="Renjing" ></a><br>
        <h2>Renjing Hu</h2>
        <p>CSS Wizard</p>
        <p>Renjing graduated from Visual Communication Design Program in Hubei Institute of Fine Arts. She has worked as a web visual designer in last 4 years. Her favourite movie filmed in Toronto is The Shape of Water.</p>
	    <div class="aboutbutton">
        <a href="https://www.google.com/"><p>My Website</p>
		</div>
      </div>
    </div>

      <div class="grid">
		  <div class="aboutInner">
      <a><img src="assets/vinay.jpg" alt="vinay" ></a><br>
        <h2>B. Vinay Kumar</h2>
        <p>User Specialist</p>
        <p>Vinay has over 15 years of experience in Graphic Design, particularly Realtime 3D, Rendering and Visualisation. He is passionate about Travel, Photography, & Food. His favourite movie shot in Toronto are The Boondock Saints.</p> 
	 	<div class="aboutbutton">
        <a href="https://www.google.com/"><p>My Website</p>
		</div>
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
