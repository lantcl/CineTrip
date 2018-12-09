<?php

session_start();

$id = $_GET['id'];

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `locations` WHERE `id` = '$id'");
$stmt->execute();
$row = $stmt->fetch();

// $stmt2 = $pdo->prepare("SELECT * FROM `users` WHERE `id` = '$id'");
// $stmt2->execute();
// $row2 = $stmt2->fetch();

//user tips
$stmt3 = $pdo->prepare("SELECT `users`.`id`, `users`.`username`, `users`.`profilepic`, `locations`.`id`, `locations`.`locationname`, `location-user-tips`.`userid`, `location-user-tips`.`locationid`, `location-user-tips`.`tip`, `location-user-tips`.`dateadded` FROM(`users`INNER JOIN `location-user-tips` ON `users`.`id` = `location-user-tips`.`userid`) INNER JOIN `locations`ON `location-user-tips`.`locationid` = `locations`.`id` WHERE `locations`.`id` = '$id'");
$stmt3->execute();
$row3 = $stmt3->fetch();

//location trivia
$stmt4 = $pdo->prepare("SELECT `locations`.`id`, `locations`.`locationname`, `films`.`id`, `films`.`title`, `films-locations`.`locationid`, `films-locations`.`filmid`, `films-locations`.`trivia` FROM (`locations` INNER JOIN `films-locations` ON `locations`.`id` = `films-locations`.`id`) INNER JOIN `films`ON `films-locations`.`filmid` = `films`.`id` WHERE `locations`.`id` = '$id'");
$stmt4->execute();
$row4 = $stmt4->fetch();

//location images
$stmt5 = $pdo->prepare("SELECT `locations`.`id`, `locations`.`locationname`, `films`.`id`, `films`.`title`, `location-photos`.`filmid`, `location-photos`.`locationid`, `location-photos`.`imagename` FROM (`locations` INNER JOIN `location-photos` ON `locations`.`id` = `location-photos`.`locationid`) INNER JOIN `films` ON `location-photos`.`filmid` = `films`.`id` WHERE `locations`.`id` = '$id'");
$stmt5->execute();
$row5 = $stmt5->fetch();

// $stmt2 = $pdo->prepare("SELECT * FROM `films-locations` WHERE `id` = '$id'");
// $stmt2->execute();
// $row2 = $stmt2->fetch();

// $stmt3 = $pdo->prepare("SELECT * FROM `location-user-tips` WHERE `id` = '$id'");
// $stmt3->execute();
// $row3 = $stmt3->fetch();

// $stmt4 = $pdo->prepare("SELECT * FROM `users` WHERE `id` = '$id'");
// $stmt4->execute();
// $row4 = $stmt4->fetch();

// $stmt5 = $pdo->prepare("SELECT * FROM `location-photos` WHERE ")

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Cinetrip - Locations</title>
	<meta http-equiv="Cache-Control" content="no-transform" /> 
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/organize.css">
		<link rel="stylesheet" media="screen and (max-width:960px)" href="css/small.css">
	
        <style type="text/css">
			@media screen and (max-width:960px){
				.locMap{
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: #EBEBEB;
	display:block; 
	text-align:center;	
/*	margin-top: -1%;*/
}

.locMap h1{
	font-family: "Arial Rounded Mt",arial;
	font-size: 2.8em;
	font-color:#2e2e2e;
	padding-top: 3%;
	padding-bottom: 1%; 
	text-align: center;
	margin:0 auto;
}

.locMap .locInfo{
	background-color:rgba(255,255,255,.8);
    width:80%;
	height: 70%;
	margin-top: 1%;
    margin-left: 3%;
    margin-right: 3%;
    margin-bottom: 3%;
    display:inline-block;
    vertical-align: top;
	text-align: center;
	border-radius: 5px;
	padding: 4%;
}

.locMap .locInfo img{
	width:100%;
}

.locTips{
	background-color:rgba(255,255,255,.8);
    width:80%;
	height: 50%;
	margin-top: 1%;
    margin-left: 3%;
    margin-right: 3%;
    margin-bottom: 3%;
    display:inline-block;
    vertical-align: top;
	text-align: center;
	border-radius: 5px;
	padding: 3%;
}

.locTips h2{
	font-family: "Arial Rounded Mt",arial;
	font-size: 2.2em;
	font-color:#2e2e2e;
	padding-top: -2%;
	padding-bottom: 3%; 
	text-align: center;
	margin:0 auto;
}

.locTips img{
	width:30%;
}
.locTips ul #reply{
	width: 5%;
}

.locInfo2 ul #bookmark{
	width:3%;
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
		<iframe width="100%" height="300px" src="<?php echo($row["mapurl"]); ?>" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"></iframe>
	
			<div class="locMap">
			<h1><?php echo($row["locationname"]); ?></h1>
			<p><?php echo($row["address"]); ?></p>
			<div class="locInfo">
			
			<img src="imageslocations/<?php echo($row5["imagename"]); ?>" />
			<h2>Description</h2>
			<p><?php echo($row["description"]); ?></p>
			<h2>Trivia</h2>
				<p><?php echo($row4["trivia"]); ?></p>
	         </div>
				
	
		<div class="locTips">
			<h2>Tips</h2>
			<div class="locInfo2">
				<img id="comment-thumbnail" src="images-profile/<?php echo($row3["profilepic"]); ?>" />
				<h3><?php echo($row3["username"]); ?></h3>
				<p><?php echo($row3["tip"]); ?></p>
				<ul>
					<a href=""><img src="assets/grey-bookmark.png" href="#" id="bookmark"/></a>
					<a href=""><img src="assets/reply.png" href="#" id="reply"/></a>
				</ul>
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
