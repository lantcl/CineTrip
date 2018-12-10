<?php
session_start();
if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{
$id = $_SESSION['id'];
$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";
$pdo = new PDO($dsn, $dbusername, $dbpassword);
$userInfo = $pdo->prepare("SELECT * FROM `users` WHERE `id` = $id");
$userInfo->execute();
$bookmarks = $pdo->prepare("SELECT `users-savedlocations`.`userid`, `locations`.`id`, `locations`.`locationname` FROM  `users-savedlocations` INNER JOIN `locations` ON `users-savedlocations`.`locationid` = `locations`.`id` WHERE `userid` = $id");
$bookmarks->execute();
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>CineTrp My Profile</title>
			<meta http-equiv="Cache-Control" content="no-transform" /> 
			<meta http-equiv="Cache-Control" content="no-siteapp" />
			<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	        <link rel="stylesheet" type="text/css" href="css/main.css">
			<link rel="stylesheet" type="text/css" href="css/organize.css">
			<link rel="stylesheet" media="screen and (max-width:960px)" href="css/small.css">
			
			
			
			<style type="text/css">
			@media screen and (max-width:960px){
					
					body{
						font-size: .9em;
					}
					h1{
						font-size: 2.8em;
					}
					h2 h3 h4 h5 h6{
						font-size: 2em;
					}
					.profileSec{
							width: 100%;
							height: 1150px;
							overflow: auto;
							background-color: #EBEBEB;
							display:block; 
							text-align:center;
							/*	margin-top: -1%;*/
	
					}
					.profileSec h1{
					font-family: "Arial Rounded Mt",arial;
					font-size: 2.8em;
					font-color:#2e2e2e;
					padding-top: 10%;
					padding-bottom: 4%; 
					text-align: center;
					margin:0 auto;
					}
    				.profileSec .info{
					background-color:rgba(255,255,255,.8);
    				width:80%;
					height: 50%;
					margin-top:0;
    				margin-left: .5%;
    				margin-right: .5%;
    				margin-bottom: 3%;
    				display:inline-block;
    				vertical-align: top;
					text-align: center;
					border-radius: 5px;
	
					}
					.profileSec .info img{
					width: 30%;
					margin: 5%;
	
					}
					.profileSec .info p{
					font-family:"Arial Rounded Mt",arial;
					font-size:1em;
					margin:0 auto;
					padding: 1%;
	
					}
					.profileSec h2{
					font-family: "Arial Rounded Mt",arial;
					font-size: 2em;
					font-color:#2e2e2e;
					padding-top: -2%;
					padding-bottom:0; 
					text-align: center;
					margin:0 auto;
					}
					.profileSec .badges img{
					width:3%;
					margin-top: 3%;
					margin-bottom: 2%;
	 
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
	
	<div class="profileSec">
	<h1>My Profile</h1>

     <div class="info">
        <?php while($row = $userInfo->fetch()){ ?>
            <img src="images-profile/<?php echo($row["profilepic"]);?>" alt="profile pic"><br>
            <h2><?php echo($row["firstname"].' '.$row["lastname"]);?></h2>
            <p><?php echo($row["gender"]);?></p>
            <p><?php echo($row["email"]);?></p>
       <?php } ?>
	 </div>
	 <h2>Bookmarked Locations</h2><br>
	 <div class="badges">
        <?php while($row = $bookmarks->fetch()){ ?>
        <a href="locations.php?id=<?php echo($row["id"]);?>"><p><?php echo($row["locationname"]);?></p></a>
        <img src="assets/red-bookmark.png" alt="bookmark">
       <?php } ?>
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

<?php } ?>