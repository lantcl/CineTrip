<?php

session_start(); 

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `locations` WHERE `featured` = '1'");
$stmt->execute();
$row = $stmt->fetch();

$stmt2 = $pdo->prepare("SELECT `films-locations`.`locationid`, `locations`.`locationname`, `locations`.`address`, `locations`.`featuredimg`, `films-locations`.`filmid`, `films`.`title` FROM (`films` INNER JOIN `films-locations` ON `films-locations`.`filmid` = `films`.`id`) INNER JOIN `locations`ON `films-locations`.`locationid` = `locations`.`id` LIMIT 3;");
$stmt2->execute();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<meta http-equiv="Cache-Control" content="no-transform" /> 
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" media="screen and (max-width:960px)" href="css/small.css">
	    <style type="text/css">
			@media screen and (max-width:960px){
				.container{
		   width: 100%;
	height: 1800px;
	overflow: auto;
	background-color: #EBEBEB;
	display:block; 
	text-align:center;
/*	margin-top: -1%;*/
		}


.container h1{
	   
	   font-family: "Arial Rounded Mt",arial;
	   font-size: 2.5em;
	   font-color:#2e2e2e;
	   padding-top: 3%;
	   padding-bottom: 3%; 
	   text-align: center;
	   margin:0 auto;
}


.container .grid{
   background-color:rgba(255,255,255,.8);
    width:80%;
	height: 1600px;
	margin-top: .5%;
    margin-left: .5%;
    margin-right: .5%;
    margin-bottom: 5%;
    display:inline-block;
    vertical-align: top;
	text-align: center;
	border-radius: 5px;
	
}

.container .grid #title{
	font-size: 28px;
}

.container .grid #mv{
	font-size:12px;
	font-color:#2d2d2d;
}
.inner{
  border: 2px #303030;
    margin:3%;
    padding:3%;
    display: block;
}

.inner img{
	width:90%;
	border-radius: 5px;
	
}

.container .inner .buttonView {
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

   <section>
	   
      <div id="map">
         <iframe width="100%" height="680px" src="<?php echo($row["mapurl"]); ?>" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"></iframe>
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
  <div class="container">  
    <h1>Popular Locations</h1>
    <div class="grid">
    <?php while($row2 = $stmt2->fetch()){ ?>
        <div class="inner">
          <img src="imageslocations/<?php echo($row2["featuredimg"]); ?>" />
          <p id="title"><?php echo($row2["locationname"]); ?></p>
          <p id="mv">Related movie:<?php echo($row2["title"]); ?></p>
          <p><?php echo($row2["address"]); ?></p>
          <a href="locations.php?id=<?php echo($row2["locationid"]);?>">
          <button type="button" class="buttonView">
             View More
          </button>
          </a>
        </div>
        <?php } ?>
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
	</div>
   
</body>
</html>
