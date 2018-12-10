<?php 
session_start();

if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{

$id = $_GET['id'];

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `location-user-tips`");
$stmt->execute();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cinetrip - Delete Tip</title>
		<meta http-equiv="Cache-Control" content="no-transform" /> 
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/organize.css">
		<link rel="stylesheet" media="screen and (max-width:960px)" href="css/small.css">
	
        <style type="text/css">
			@media screen and (max-width:960px){
				.tipsDelete{
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: #EBEBEB;
	display:block; 
	text-align:center;
/*	margin-top: -1%;*/
}

.tipsDelete p{
	font-family: "Arial Rounded Mt",arial;
	font-size: 2.8em;
	font-color:#2e2e2e;
	padding-top: 50%;
	padding-bottom: 3%; 
	text-align: center;
	margin:0 auto;
	
}

.deleteInfo form input{
	text-align: center;
	margin-left: 10%;
	margin-right: 3%;
	width: 20%;
	height: 5%;
}
.deleteInfo input[type='submit'] {
	font-family: "Arial Rounded Mt",arial;
    font-size: 1em;
    color: #ffffff;
    background-color: #ffab17;
	border-radius: 5px;
	margin:0 auto;
	text-align: center;
}

.deleteInfo a{
	font-size: .9em;
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
		
		<div class="tipsDelete">
			<p>Are you sure you want to delete?</p>

			<?php //interface for confirm or cancel ?>
			<div class="deleteInfo">
			<form action="confirm-tip-delete.php" method="POST">
				<input type="hidden" value="<?php echo($row["id"]); ?>" name="id"/>
				<input type="submit" value="Delete"/>
			</form>
			<a href="mytips.php">Cancel</a>
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
<? } ?>
