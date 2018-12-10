<?php

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

?>

<!doctype html>
<html>
    <head>
        <title>CineTrip Sign Up</title>
       <meta http-equiv="Cache-Control" content="no-transform" /> 
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/organize.css">
	<link rel="stylesheet" media="screen and (max-width:960px)" href="css/small.css">
	
        <style type="text/css">
			@media screen and (max-width:960px){
				
				.signupForm{
	width: 100%;
	hegiht:1200px;
	overflow: auto;
	background-color: #EBEBEB;
	display:block; 
	text-align:center;
/*	margin-top:-1%;*/
}

.signupForm h1{
	text-align: center;
    font-family: "Arial Rounded Mt",arial;
	font-size: 2.8em;
	padding-top: 1%;
	margin-top:2%;
}

.signupForm .part1{
	background-color:rgba(255,255,255,.8);
    width:80%;
	height: 60%;
	margin-top: 1%;
    margin-left: .5%;
    margin-right: .5%;
    margin-bottom: 3%;
    display:inline-block;
    vertical-align: top;
	text-align: center;
	border-radius: 5px;
}

.signupForm .part2{
	background-color:rgba(255,255,255,.8);
    width: 80%;
	height: 25%;
	margin-top: 3%;
    margin-left: .5%;
    margin-right: .5%;
    margin-bottom: 3%;
    display:inline-block;
    vertical-align: top;
	text-align: center;
	border-radius: 5px;
}
.signupForm .part1 input{
	width: 60%;
    display: block;
    height: 13%;
    margin:0 auto;
	text-align: center;
	align-items: center;
    padding: 1.5%;
	justify-content: center;
    align-content: center;
	
}

.signupForm .part1 input[type="text"], .signupForm .part1 input[type="firstname"] {
            font-family: "Arial Rounded Mt",arial;
			background-color: #EBEBEB;
            font-size: 1em;
            color: #787878;
	        border-radius: 5px;
}

.signupForm .part1 input[type="text"], .signupForm .part1 input[type="lastname"] {
            font-family: "Arial Rounded Mt",arial;
			background-color: #EBEBEB;
            font-size: 1em;
            color: #787878;
	        border-radius: 5px;
}

.signupForm .part1 input[type="text"], .signupForm .part1 input[type="username"] {
            font-family: "Arial Rounded Mt",arial;
			background-color: #EBEBEB;
            font-size: 1em;
            color: #787878;
	        border-radius: 5px;
}

.signupForm .part1 input[type="text"], .signupForm .part1 input[type="password"] {
            font-family: "Arial Rounded Mt",arial;
			background-color: #EBEBEB;
            font-size: 1em;
            color: #787878;
	        border-radius: 5px;
}

.signupForm .part1 input[type="email"], .signupForm .part1 input[type="email"] {
            font-family: "Arial Rounded Mt",arial;
			background-color: #EBEBEB;
            font-size: 1em;
            color: #787878;
	        border-radius: 5px;
}

.signupForm .part2 {
	background-color:rgba(255,255,255,.8);
    width:80%;
	height: 300px;
	margin-top: 1%;
    margin-left: .5%;
    margin-right: .5%;
    margin-bottom: 10%;
    display:inline-block;
    vertical-align: top;
	border-radius: 5px;
	
}

.signupForm .part2 select{
	margin:3% 3% 3% 3%; 
    padding: 1%;
}

.signupForm .part2 input{
	width: 60%;
    display: block;
    height: 40px;
    margin:1% 1% 1% 1%; 
    padding: 1%;
	
}

.signupForm .part2 input[type='submit'] {
	        font-family: "Arial Rounded Mt",arial;
            font-size: 16px;
            color: #ffffff;
            background-color: #ffab17;
	        border-radius: 5px;
	        margin:0 auto;
}
			}
		</style>
    </head>
    <body>
	    <div class="mainContainer">
      	<header>
		
		<div>
			<a href="homepage.php"><img src="assets/logo-01.png" href="homepage.php" class="logo"/></a>
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
    
		<div class="signupForm">
    <h1>Welcome to CineTrip</h1>
		<div class="part1">
        <form action="signup-process.php" method="POST" enctype="multipart/form-data"> 
        <h2>Make an Account</h2>
        <input type="text" placeholer="First Name" name="firstname" />
        <input type="text" placeholer="Last Name" name="lastname" />
        <input type="email" placeholer="Email" name="email" />
        <input type="text" placeholer="Username" name="username" />
        <input type="text" placeholer="Password" name="password" />
        Birthday:<input type="date" name="birthday" min="1909-12-31" max="2018-12-31" />
        Gender:<select name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="nonbinary">Non-Binary</option>
                        <option value="none">Prefer not to say</option>
                    </select>
        Choose a profile picture:<input type="file" name="profilepic">
			</div>
			
		
		
		<div class="part2">
			
                <h2>Tell us about yourself</h2>
			Why you are interested in using CineTrip:</br>
                    <select name="reason">
                        <option value="professional">I work in the film industry</option>
                        <option value="casual">I enjoy movie trivia</option>
                        <option value="tourist">I am visiting Toronto</option>
                        <option value="fan">I am a fan of a particular film or genre</option>
                        <option value="other">other</option>
                    </select></br>
                
                Where do you live:</br> 
                    <select name="location">
                        <option value="toronto">Toronto</option>
                        <option value="gta">Within the GTA</option>
                        <option value="outsidegta">Outside the GTA</option>
                        <option value="none">Prefer not to say</option>
                    </select></br>                                                            

                <input type="submit" />
                </form>
        
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
