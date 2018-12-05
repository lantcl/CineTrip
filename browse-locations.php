<?php

session_start(); 

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT `locations`.`id`, `locations`.`locationname`, `locations`.`address`, `locations`.`featuredimg`, `films`.`id`, `films`.`title`, `films-locations`.`locationid`, `films-locations`.`filmid` FROM (`locations` INNER JOIN `films-locations` ON `locations`.`id` = `films-locations`.`id`) INNER JOIN `films`ON `films-locations`.`filmid` = `films`.`id`");
$stmt->execute();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cinetrip - Browse</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/small.css">
	
</head>
<body>
	<div class="top">
		<a href="homepage.php" class="logo">
      		<img src="assets/logo-03.png" />
    	</a>
		<div class="userImage">
			<a href="signin.php">
			<img src="assets/userimage.png" />
			</a>
		</div>
		<div class="topnav">
		<ul>
        <?php if($_SESSION['logged-in'] == true){?>
            <li><a href="logout.php">Log out</a></li>
            <li><a href="userprofile.php">Profile</a></li>
        <?php } else {?>
            <li><a href="signup.php">Sign up</a></li>
            <li><a href="login.php">Log in</a></li>
        <?php } ?>			
		</ul>
		</div>
		<div class="searchBar">  
        	<form action="search-results.php" method="POST">
            <input type = "text" name="filmsearch">
            <button type="submit">
			<img src="assets/search.png" href="locations.php"/>
			</button>  
        	</form>  
    	</div>  
	</div>
	<header>
		<a href="homepage.php">
			<img src="assets/logo-01.png" />
		</a>
		
    	<nav>
     	 <ul>
        	<div></div>
       		 <li class="current"><a href="homepage.php">Home</a></li>
        	 <li><a href="browse-locations.php">Locations</a></li>
        	 <li><a href="search.php">Search</a></li>
        	 <li><a href="about.php">About</a></li>
        	 <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
	</header>
	<main>
		<h1>Browse Locations</h1>
		<?php while($row = $stmt->fetch()){ ?>
		<div>
			<img src="imageslocations/<?php echo($row["imagename"]); ?>" />
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
	</main>
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