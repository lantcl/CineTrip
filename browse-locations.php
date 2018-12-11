<?php
session_start(); 
$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";
$pdo = new PDO($dsn, $dbusername, $dbpassword);
$stmt = $pdo->prepare("SELECT `films-locations`.`locationid`, `locations`.`locationname`, `locations`.`address`, `locations`.`featuredimg`, `films-locations`.`filmid`, `films`.`title` FROM (`films` INNER JOIN `films-locations` ON `films-locations`.`filmid` = `films`.`id`) INNER JOIN `locations`ON `films-locations`.`locationid` = `locations`.`id`");
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
	    <style type="text/css">
			@media screen and (max-width:960px){
				.location{
	width: 100%;
	height: 4200px;
	overflow: auto;
	background-color: #EBEBEB;
	display:block; 
	text-align:center;
/*	margin-top: -1%;*/
}

.location h1{
	font-family: "Arial Rounded Mt",arial;
	   font-size: 3em;
	   font-color:#2e2e2e;
	   padding-top: 3%;
	   padding-bottom: 3%; 
	   text-align: center;
	   margin:0 auto;
}

.location .locgrid{
	background-color:rgba(255,255,255,.8);
    width:80%;
	height: 4000px;
	margin-top: .5%;
    margin-left: .5%;
    margin-right: .5%;
    margin-bottom: 10%;
    display:inline-block;
    vertical-align: top;
	text-align: center;
	border-radius: 5px;
}

.location .locgrid .locinner{
    border: 2px #303030;
    margin:3%;
    padding:3%;
    display: block;
}

.location .locgrid .locinner img{
	width:70%;
	border-radius: 5px;
	
}

.location .locgrid #title{
	font-size: 2.5em;
	text-align: center;
}

.location .locgrid #mv{
	font-size:.8em;
	font-color:#2d2d2d;
	text-align: center;
}

.location .locgrid .locinner .buttonView {
	width: 109px;
	height: 28px;
	background: #ffab17;
	border-radius: 5px;
	margin-left: 10%;
	margin-right: 10%;
	align-items: center;
	display: inline-block;
	text-align: center;
	font-family: "Arial Rounded Mt",arial;
	color: #ffffff;
	overflow: hidden;
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
			<a href="locations.php?id=<?php echo($row["locationid"]);?>">
			<button type="button" class="buttonView">
		   	 View More
			</button>
			</a>
		</div>
		<?php } ?>
			</div>
	</main>
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
</body>
</html>