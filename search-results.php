<?php

session_start();

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//search by film
if (isset($_POST['filmsearch']))
{
$search = $_POST['filmsearch'];

$filmSearch = $pdo->prepare("SELECT `locations`.`locationname`, `films`.`title`, `films`.`id`, `locations`.`id` FROM `films` INNER JOIN `films-locations` ON `films-locations`.`filmid` = `films`.`id` INNER JOIN `locations` ON `films-locations`.`locationid` = `locations`.`id` WHERE `films`.`title` LIKE '%$search%' OR `locations`.`locationname` LIKE '%$search%'");

$filmSearch->execute();

}

//search by genre
if (isset($_GET['name']))
{
$genre = $_GET['name'];

$genreSearch = $pdo->prepare("SELECT `locations`.`locationname`,`films`.`id`, `locations`.`id`,`films`.`title`, `films-genres`.`genreid`, `genres`.`name` FROM ((`films` INNER JOIN `films-genres` ON `films`.`id` = `films-genres`.`filmid`) INNER JOIN `genres` ON `genres`.`genreid` = `films-genres`.`genreid`) INNER JOIN `films-locations` ON `films-locations`.`filmid` = `films`.`id` INNER JOIN `locations` ON `films-locations`.`locationid` = `locations`.`id` WHERE `genres`.`name` = '$genre'");

$genreSearch->execute();
}

//search by director
if (isset($_GET['directorid']))
{
$director = $_GET['directorid'];

//$directorName = $directorSearch = $pdo->prepare
$directorSearch = $pdo->prepare("SELECT `directors`.`firstname`, `directors`.`lastname`,`directors`.`directorid`, `films`.`title`, `films`.`id` FROM `films` INNER JOIN `films-directors` ON `films-directors`.`filmid` = `films`.`id` INNER JOIN `directors` ON `films-directors`.`directorid` = `directors`.`directorid` WHERE `directors`.`directorid` = $director");

//seems weird to give a list of locations based on this so the result will be films and users can find locations from there

$directorSearch->execute();
}

?>

<!doctype html>
<html>
    <head>
        <title>Search Results</title>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
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
            <li><a href="logout.php" class="button">Log out</a></li>
            <li><a href="userprofile.php" class="button">Profile</a></li>
        <?php } else {?>
            <li><a href="signup.php" class="button">Sign up</a></li>
            <li><a href="login.php" class="button">Log in</a></li>
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
        <div class="rls">
            <?php 
        if (isset($_POST['filmsearch'])){ ?>
              <div>
            <h2>Location Results for '<?php echo($search);?>'</h2>
            <?php while($row2 = $filmSearch->fetch()) 
            { ?><a href="locations.php?id=<?php echo($row2["id"]);?>"><p><?php echo($row2["locationname"]);?></p></a> 
          <?php } ?>
          </div> <?php }
        
        if (isset($_GET['name'])){ ?>
          <div>
            <h2>Location Results for '<?php echo($genre);?>'</h2>
            <?php while($row3 = $genreSearch->fetch()) 
            { ?><a href="locations.php?id=<?php echo($row3["id"]);?>"><p><?php echo($row3["locationname"]);?></p></a> 
          <?php } ?>            
          </div>
        <?php } 
        
        if (isset($_GET['directorid'])){ ?>
          <div id="advanced search">
            <h2>Location Results for '<?php echo($row5["firstname"]. ' ' .["lastname"]);?>'</h2>
            <?php while($row4 = $directorSearch->fetch())
            { ?><a href="films.php?id=<?php echo($row4["id"]);?>"><p><?php echo($row4["title"]);?></p></a>  
          <?php } ?>            
          </div>
        <?php } ?>
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
