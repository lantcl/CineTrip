<?php

session_start();

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

?>


<!doctype html>
<html>
    <head>
        <title>CineTrip Sign Up - Interests</title>
        <meta http-equiv="Cache-Control" content="no-transform" /> 
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/organize.css">
		
		<style type="text/css">
		
			@media screen and (max-width:960px){
	.interestSec{
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: #EBEBEB;
	display:block; 
	text-align:center;
/*	margin-top: -1%;*/
	
}

.interestSec h1{
	font-family: "Arial Rounded Mt",arial;
	font-size: 2.8em;
	font-color:#2e2e2e;
	padding-top: 1%;
	padding-bottom: .5%; 
	text-align: center;
	margin:0 auto;
}

.interestSec h2{
	font-family: "Arial Rounded Mt",arial;
	font-size: 1.8em;
	font-color:#2e2e2e;
	padding-top: 3%;
	padding-bottom: 1%; 
	text-align: center;
	margin:0 auto;
}

h4{
	font-family: "Arial Rounded Mt",arial;
	font-color:#2e2e2e;
	padding-top: 1%;
	padding-bottom: 1%; 
	
}

.interestSec .interestForm{
	background-color:rgba(255,255,255,.8);
    width:80%;
	height: 40%;
	margin-top:0;
    margin-left: .5%;
    margin-right: .5%;
    margin-bottom: 5%;
    display:inline-block;
    vertical-align: top;
	text-align: center;
	border-radius: 5px;
	
}

.interestForm label i{
	width: 20px;
	height: 20px;
	border:1px solid #999;
	border-radius: 4px;
	display: inline-block;
	vertical-align: middle;
	margin:2%;
}

.interestForm label input{
	margin: 10%;
	float: left;
	text-align: left;
}

label input[type="checkbox"]:checked +i{
	background-color:#ffab17;
	background-size: 15px 15px;
	border:3px #BBA354;
}

.interestForm #submit{
	wdith: 15%;
	height: 8%;
	background-color: #ffab17;
	font-size: 1em;
	font-color:#ffffff;
	text-align: center;
	border-radius: 5px; 
}

.interestForm p{
	text-align: center;
	font-size: .8em;
	font-family:"Arial Rounded Mt",arial;
	margin-top: 7%;
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
