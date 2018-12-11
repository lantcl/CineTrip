<?php

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

?>

<!DOCTYPE html>
<html>
<head>
	<title>CineTrip Login</title>
	<meta http-equiv="Cache-Control" content="no-transform" /> 
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/organize.css">
	<link rel="stylesheet" media="screen and (max-width:960px)" href="css/small.css">
	
        <style type="text/css">
			@media screen and (max-width:960px){
				.logForm{
	width: 100%;
	height: 1000px;
	background-color: #EBEBEB;
	text-align:center;
	margin-top: -6%;
    justify-content: center;
    align-content: center;
	
}

.logForm h1{
	font-family: "Arial Rounded Mt",arial;
	font-size: 2.8em;
	padding-top: 40%;
	padding-bottom: 1%;
}

.logForm form{
	width: 80%;
	height:25%;
    margin: 0 auto;
	background-color:#ffffff;
	border-radius:10px;
	text-align: center;
	padding: 2%;
	
}

.logForm form input{
	width: 70%;
    display: block;
    height: 14%;
    border: 0;
    outline: 0;
    margin:0 auto;
	text-align: center;
	align-items: center;
    padding: 2%;
	justify-content: center;
    align-content: center;
}

.logForm input[type="text"] , .logForm input[type="password"]  {
            font-family: "Arial Rounded Mt",arial;
			background-color: #EBEBEB;
            font-size: 1em;
            color: #787878;
	        border-radius: 5px;
	        margin-bottom: 2%;
        }
 .logForm input[type='submit'] {
	        font-family: "Arial Rounded Mt",arial;
            font-size: 1em;
            color: #ffffff;
            background-color: #ffab17;
	        border-radius: 5px;
	        margin: 0 auto;
        }

.logFrom input:focus {
            width: 300px;
        }
.logForm input[type='submit']:hover {
            cursor: pointer;
            width: 300px;
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
		<div class="logForm">
            <h1>Welcome back</h1>
                <form action="login-process.php" method="POST"> 
                <input type="text" placeholder="username" name="username" />
                <input type="text" placeholder="password" name="password" />
                <input type="submit" />
            	</form>
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
	</div>
    </body>
</html>
