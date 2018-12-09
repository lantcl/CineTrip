<?php

session_start();

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//search by film
if (isset($_POST['filmsearch'])
){
$search = $_POST['filmsearch'];

$filmSearch = $pdo->prepare("SELECT `locations`.`locationname`, `films`.`title`, `films`.`id`, `locations`.`id` FROM `films` INNER JOIN `films-locations` ON `films-locations`.`filmid` = `films`.`id` INNER JOIN `locations` ON `films-locations`.`locationid` = `locations`.`id` WHERE `films`.`title` LIKE '%$search%' OR `locations`.`locationname` LIKE '%$search%'");

$filmSearch->execute();

}

?>

<!doctype html>
<html>
    <head>
        <title>Search Results</title>
        <meta http-equiv="Cache-Control" content="no-transform" /> 
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/organize.css">
	
        <style type="text/css">
			@media screen and (max-width:960px){
				.searchRes{
	width: 100%;
	height:100%;
	background-color: #EBEBEB;
	display:block; 
	text-align:center;
/*	margin-top: -1%;*/
}
.searchRes h2{
	font-family: "Arial Rounded Mt",arial;
	font-size: 2.8em;
	font-color:#2e2e2e;
	padding-top: 30%;
	padding-bottom: 5%; 
	text-align: center;
	margin:0 auto;
	
}

.searchRes .resuInfo{
	background-color:rgba(255,255,255,.8);
    width:80%;
	height: 35%;
	margin-top: .5%;
    margin-left: .5%;
    margin-right: .5%;
    margin-bottom: 3%;
    display:inline-block;
    vertical-align: top;
	text-align: center;
	border-radius: 5px;
	padding: 5%;
}

.searchRes .resuInfo a{
	color: #787878;
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
        <div class="rls">
            <?php 
        if (isset($_POST['filmsearch'])){ ?>
              <div>
            <h2>Location Results for '<?php echo($search);?>'</h2>
            <?php while($row2 = $filmSearch->fetch()) 
            { ?><a href="locations.php?id=<?php echo($row2["id"]);?>"><p><?php echo($row2["locationname"]);?></p></a> 
          <?php } ?>
          </div> <?php } ?>
        
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
