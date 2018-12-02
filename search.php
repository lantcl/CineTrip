<?php

session_start();

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

// $genre = $pdo->prepare("SELECT * FROM `locations-genres` WHERE `genreid` = '$genreid'");
// $genre->execute();
// $row1 = $genre->fetch();

// $actor = $pdo->prepare("SELECT * FROM `locations-actors` WHERE `actorid` = '$actorid'");
// $actor->execute();
// $row2 = $actor->fetch();

// $director = $pdo->prepare("SELECT * FROM `locations-directors` WHERE `directorid` = '$directorid'");
// $director->execute();
// $row3 = $director->fetch();



//search by film

$filmid = 1; //$_POST['filmid'];

$filmSearch = $pdo->prepare("SELECT `locations`.`name`,`locations`.`id`, `films`.`title`, `films`.`id` FROM `films` INNER JOIN `films-locations` ON `films-locations`.`filmid` = `films`.`id` INNER JOIN `locations` ON `films-locations`.`locationid` = `locations`.`id` WHERE `films`.`id` = '$filmid'");

$filmSearch->execute();

while($row1 = $filmSearch->fetch()) 
  { 
    echo($row1["name"]);
  }

//search by genre

$genreid = 1; //$_POST['genreid'];

$filmSearch = $pdo->prepare("SELECT `locations`.`name`,`locations`.`id`, `genres`.`name`, `genres`.`genreid` FROM `genres` INNER JOIN `location-genres` ON `location-genres`.`genreid` = `genres`.`genreid` INNER JOIN `locations` ON `location-genres`.`locationid` = `locations`.`id` WHERE `genres`.`genreid` = 1");

$filmSearch->execute();

while($row1 = $filmSearch->fetch()) 
  { 
    echo($row1["name"]);
  }




// $genre = $_POST['genreid'];
// $actor = $_POST['actorid'];
// $director = $_POST['directorid'];


// $testing = $pdo->prepare("SELECT `locations`.`name`,`locations`.`id`, `films`.`title`, `films`.`id` FROM `films` INNER JOIN `films-locations` ON `films-locations`.`filmid` = `films`.`id` INNER JOIN `locations` ON `films-locations`.`locationid` = `locations`.`id` WHERE `films`.`title` = 'Hannibal'");

// $testing = $pdo->prepare("SELECT `locations`.`name`,`locations`.`id`,`films`.`id`, `films`.`title` FROM `films` INNER JOIN `films-locations` ON `films-locations`.`filmid` = `films`.`id` INNER JOIN `locations` ON `films-locations`.`locationid` = `locations`.`id` WHERE `films`.`title` LIKE '%Han%'");


// $testing->execute();
// arsort($test);


?>

<!doctype html>
<html>
    <head>
        <title>CineTrip Search</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <header id="header" class="alt">
              <a href = "homepage.php"><img src="assets/logo-01.png" alt="CineTrip Logo" style="width:100px"></a>
              <nav id="nav">
                  <ul>
                      <li><a href="homepage.php">Home</a></li>
                      <li><a href="search.php" class="icon fa-angle-down">Search</a></li>
                      <li><a href="locations.php">Locations</a></li>
                      <li><a href="about.php">About</a></li>
                      <?php if($_SESSION['logged-in'] == true){?>
                          <li><a href="userprofile.php" class="button">Profile</a></li>
                          <li><a href="logout.php" class="button">Logout</a></li>
                      <?php } else {?>
                          <li><a href="login.php" class="button">Log in</a></li>
                          <li><a href="signup.php" class="button">Sign up</a></li>
                      <?php } ?>
                  </ul>
              </nav>
          </header> 
        <section>
            <h1>Search for a Location</h1>
            	<nav>
                <ul>
                  <li>Search by Genre</li>
                  <li>Search by Movie</li>
                  <li>Search by Location</li>
                </ul>
              </nav>
        </section>
                <footer id="footer">
                    <div id="footer_logo">
                     <a href="homepage.php"><img src="assets/footer-logo.png" style="width:77px;height:28px"></a>
                     </div>
                    <ul class="icons">
                        <li><a href="about.php" ><span class="label">About CineTrip</span></a></li>
                        <li><a href="#" ><span class="label">Contribute</span></a></li>
                        <li><a href="#" ><span class="label">Privacy policy</span></a></li>
                    </ul>
                    <ul class="copyright">
                        <li>&copy; CineTrip. All rights reserved.</li>
                    </ul>
                </footer>       
    </body>
</html>
