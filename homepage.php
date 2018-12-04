<?php

session_start(); 

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$db1 = $pdo = new PDO($dsn, $dbusername, $dbpassword);
$db2 = $pdo = new PDO($dsn, $dbusername, $dbpassword);
$db3 = $pdo = new PDO($dsn, $dbusername, $dbpassword);



$stmt1 = $db1= $pdo->prepare("SELECT * FROM `locations` WHERE `id`='1'");
$stmt2 = $db2= $pdo->prepare("SELECT * FROM `locations` WHERE `id`='5'");
$stmt3 = $db3= $pdo->prepare("SELECT * FROM `locations` WHERE `id`='8'");


$stmt1->execute();
$stmt2->execute();
$stmt3->execute();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--	<link rel="stylesheet" type="text/css" href="css/small.css">-->
	
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
        	 <li><a href="locations.php">Locations</a></li>
        	 <li><a href="search.php">Search</a></li>
        	 <li><a href="about.php">About</a></li>
        	 <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
	</header>

   <section>
      <div id="map">
         <iframe width="100%" height="680px" src="https://maps.google.com/maps?q=toronto%20union%20station&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
      <style type="text/css">
      #map{
         padding:0;
         margin:0;
         width:100%;
         height:100%;
      }
         
      </style>
      
   </section>
	
<!--Recommend Locations-->
	<div class="rls">
		
		<h1>Popular Locations</h1>
		<div id="box1" class="grid">
		<?php while($row = $stmt1->fetch()) {
                   //echo($row["email"]); //or $row[0];
        ?>
		<div class="inner">
		<img src="imageslocations/elginoutside.jpg" />
		<p id="title"><?php echo($row["locationname"]); ?></p>
        <p id="mv">related movie:The Shape Of Water</p>
        <p><?php echo($row["address"]); ?></p>
			<a href="locations.php">
			<button type="button" class="buttonView">
		    View More
		</button>
		</a>
        </div>
        <?php }?>
		</div>
		
		<div id="box2" class="grid">
		<?php while($row = $stmt2->fetch()) {
                   //echo($row["email"]); //or $row[0];
        ?>
		<div class="inner">
		<img src="imageslocations/graffiti.jpg" />
		<p id="title"><?php echo($row["locationname"]); ?></p>
        <p id="mv">related movie:The Shape Of Water</p>
        <p><?php echo($row["address"]); ?></p>
		<a href="locations.php">
			<button type="button" class="buttonView">
		    View More
		</button>
		</a>
        </div>
        <?php }?>
		</div>
		
		<div id="box3" class="grid">
		<?php while($row = $stmt3->fetch()) {
                   //echo($row["email"]); //or $row[0];
        ?>
		<div class="inner">
		<img src="imageslocations/dunlap3.jpg" />
		<p id="title"><?php echo($row["locationname"]); ?></p>
        <p id="mv">related TV show:NBC Television series Hannibal</p>
        <p><?php echo($row["address"]); ?></p>
		<a href="locations.php">
			<button type="button" class="buttonView">
		    View More
		</button>
		</a>
        </div>
        <?php }?>
		</div>
		
	</div>

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
