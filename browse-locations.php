<?php

session_start(); 

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT `locations`.`id`, `locations`.`locationname`, `locations`.`address`, `locations`.`featuredimg`, `films`.`id`, `films`.`title` FROM (`films` INNER JOIN `films-locations` ON `films-locations`.`filmid` = `films`.`id`) INNER JOIN `locations`ON `films-locations`.`locationid` = `locations`.`id`");
$stmt->execute();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Cinetrip - Browse</title>
	<meta http-equiv="Cache-Control" content="no-transform" /> 
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/organize.css">
		<link rel="stylesheet" media="screen and (max-width:960px)" href="css/small.css">
	
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
	
	<main class="location">
		<h1>Browse Locations</h1>
		<div class="locgrid">
		<?php while($row = $stmt->fetch()){ ?>
		<div class="locinner">
			<img src="imageslocations/<?php echo($row["featuredimg"]); ?>" />
			<p id="title"><?php echo($row["locationname"]); ?></p>
	    	<p id="mv">Related movie:<?php echo($row["title"]); ?></p>
	   		<p><?php echo($row["address"]); ?></p>
			<a href="locations.php?id=<?php echo($row["id"]);?>">
			<button type="button" class="buttonView">
		   	 View More
			</button>
			</a>
		</div>
		<?php } ?>
			</div>
	</main>
	
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
</body>
</html>
