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
		<meta http-equiv="Cache-Control" content="no-transform" /> 
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/organize.css">
	
        <style type="text/css">
			@media screen and (max-width:960px){
				.contact{
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: #EBEBEB;
	display:block; 
	text-align:center;
/*	margin-top: -1%;*/
}

.contact #contactForm{
	background-color:rgba(255,255,255,.8);
    width:80%;
	height: 50%;
	margin-top: 35%;
    margin-left: 3%;
    margin-right: 3%;
    margin-bottom: 3%;
    display:inline-block;
    vertical-align: top;
	text-align: center;
	border-radius: 5px;
	padding: 4%;
}

.contact #contactForm input{
	width: 75%;
    display: block;
    height: 10%;
    border: 0;
    outline: 0;
    margin:0 auto;
	text-align: center;
	align-items: center;
    padding: 1%;
	justify-content: center;
    align-content: center;
	background-color: #DFDFDF;
	border-radius: 5px;
}
.contact #contactForm textarea{
	width: 75%;
    display: block;
    height: 10%;
    border: 0;
    outline: 0;
    margin:0 auto;
	text-align: center;
	align-items: center;
    padding: 1%;
	justify-content: center;
    align-content: center;
	background-color: #DFDFDF;
	border-radius: 5px;
}

.contact #contactForm input[type='submit'] {
	        font-family: "Arial Rounded Mt",arial;
            font-size: .9em;
            color: #ffffff;
            background-color: #ffab17;
	        border-radius: 5px;
	        margin-top:10%;
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
