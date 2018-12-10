<?php

session_start();

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$director = $pdo->prepare("SELECT * FROM `directors`");
$director->execute();


?>

<!doctype html>
<html>
    <head>
        <title>CineTrip Search</title>
	<meta http-equiv="Cache-Control" content="no-transform" /> 
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/organize.css">
<link rel="stylesheet" media="screen and (max-width:960px)" href="css/small.css">
		
	
        <style type="text/css">
			@media screen and (max-width:960px){
				.searchSec{
	width: 100%;
	height:800px;
	overflow: auto;
	background-color: #EBEBEB;
	display:block; 
	text-align:center;
	margin-bottom: 3.5%;
/*	margin-top:-1%;*/
	
}

.searchSec h1{
	font-family: "Arial Rounded Mt",arial;
	font-size: 2.8em;
	font-color:#2e2e2e;
	padding-top: 5%;
	padding-bottom: 1%; 
	text-align: center;
	margin:0 auto;
}
.searchSec .search{
	background-color:rgba(255,255,255,.8);
    width:80%;
	height: 25%;
	margin-top: 3%;
    margin-left: .5%;
    margin-right: .5%;
    margin-bottom: 3%;
    display:inline-block;
    vertical-align: top;
	text-align: center;
	border-radius: .8em;
	
}

.searchSec .search .searchBar1{
    width:80%;
	margin-top: 1%;
    margin-left: .5%;
    margin-right: .5%;
    margin-bottom: 1%;
    display:inline-block;
    vertical-align: top;
	text-align: center;
	border-radius: 5px;
	
}

 .searchBar1 input {
			width:70%;
			height: 20%;
            border: 1px solid #f72e05;  
            border-radius: 5px;  
            background: #ffffff;  
            color: #d9d9d9;
			font-family: "Arial Rounded Mt",arial;
			font-size: 2em;
			padding-left: 5px;
	        margin-top: -50%;
        }  
 .searchBar1 button { 
			width:42px;
			height:42px;
            top: 0;  
            margin-right: 15px;  
            background: #f72e05;
	        border-radius: 5px;
        }  
.searchBar1 button img{
	width: 25px;
	height: 25px;
}

.search h2{
	font-size: 1.5em;
	font-family: "Arial Rounded Mt",arial;
	margin-top: 5%;
	margin-bottom: 5%;
}

.search img{
	width:15%;
	
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
		
<!--Search Section-->
        <div class="searchSec">
			<h1>Search for a Location</h1>
		  <div class="search">	
          
              <div id ="section1" class="searchBar1">
                  <h2 id="searchHeading">Search by Movie/Show name or Location Name</h2> 
                    <input type = "text" name="search" id="searchInput">
                    <button >
                      <img id="searchsubmit" src="assets/search.png"/>
                    </button>
                    <div id="results"></div>  
              </div>
		  </div>
          
		<div class="search">	  
          <h2>Search by Genre</h2>

           <img class="genreicon" id="comedy" src="assets/genre-comedy.jpg" alt="genre icon comedy" >
           <img class="genreicon" id="horror" src="assets/genre-horror.jpg" alt="genre icon horror" >
           <img class="genreicon" id="drama" src="assets/genre-drama.jpg" alt="genre icon drama" >
           <img class="genreicon" id="Science-Fiction" src="assets/genre-scifi.jpg" alt="genre icon sci-fi" >
           <img class="genreicon" id="romance" src="assets/genre-romance.jpg" alt="genre icon romance" >
<!--            <a href= "search-results.php?name=romance"><img id="icon-romance" src="assets/genre-romance.jpg" alt="genre icon romance" ></a> -->
           <div id="results2"></div> 
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
    <script type="text/javascript" src="javascript/script.js"></script>
    </body>
</html>
