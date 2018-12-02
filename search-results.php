<?php

session_start();

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//search by film
if (isset($_POST['filmsearch'])){
$search = $_POST['filmsearch'];

$filmSearch = $pdo->prepare("SELECT `locations`.`locationname`,`locations`.`id`, `films`.`title`, `films`.`id` FROM `films` INNER JOIN `films-locations` ON `films-locations`.`filmid` = `films`.`id` INNER JOIN `locations` ON `films-locations`.`locationid` = `locations`.`id` WHERE `films`.`title` LIKE '%$search%'");


}
//search by genre
if (isset($_GET['name'])){
$genre = $_GET['name'];

$genreSearch = $pdo->prepare("SELECT `locations`.`locationname`,`locations`.`id`,`films`.`id`, `films`.`title`, `films-genres`.`genreid`, `genres`.`name` FROM ((`films` INNER JOIN `films-genres` ON `films`.`id` = `films-genres`.`filmid`) INNER JOIN `genres` ON `genres`.`genreid` = `films-genres`.`genreid`) INNER JOIN `films-locations` ON `films-locations`.`filmid` = `films`.`id` INNER JOIN `locations` ON `films-locations`.`locationid` = `locations`.`id` WHERE `genres`.`name` = '$genre'");

$genreSearch->execute();
}
//search by director

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
            <?php if (isset($_POST['filmsearch'])){ ?>
              <div>
            <h1>Search Results for '<?php echo($search);?>'</h1>
            <?php while($row2 = $filmSearch->fetch()) 
            { ?><p><?php echo($row2["locationname"]);?></p> 
          <?php } ?>
          </div> <?php 
        } if (isset($_GET['name'])){ ?>
          <div>
            <h1>Search Results for '<?php echo($genre);?>'</h1>
            <?php while($row3 = $genreSearch->fetch()) 
            { ?><p><?php echo($row3["locationname"]);?></p> 
          <?php } ?>            
          </div>
        <?php } ?>
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
