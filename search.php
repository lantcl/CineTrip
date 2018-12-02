<?php

session_start();

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$director = $pdo->prepare("SELECT * FROM `directors`");
$director->execute();


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
<!--             <h1>Featured Locations this week</h1> -->
            <h1>Search for a Location</h1>
                  <div>
                    <h2>Search by Movie/Show name</h2>
                    <form action="search-results.php" method="POST">
                      <input type = "text" name="filmsearch">
                      <input type = "submit" text="search">
                    </form>
                  </div>
                  <div>
                    <h2>Search by Genre</h2>

                    <a href= "search-results.php?name=comedy"><img id="icon-comedy" src="assets/genre-comedy.jpg" alt="genre icon comedy" ></a>
                    <a href= "search-results.php?name=horror"><img id="icon-horror" src="assets/genre-horror.jpg" alt="genre icon horror" ></a>
                    <a href= "search-results.php?name=drama"><img id="icon-drama" src="assets/genre-drama.jpg" alt="genre icon drama" ></a>
                    <a href= "search-results.php?name=  
Science Fiction"><img id="icon-scifi" src="assets/genre-scifi.jpg" alt="genre icon sci-fi" ></a>
                    <a href= "search-results.php?name=romance"><img id="icon-romance" src="assets/genre-romance.jpg" alt="genre icon romance" ></a>
                  </div>
                  <div>
                  <h2>Search by Director</h2>
                  <form action='search-results.php' method='GET'>
                    <select name="directorid"><?php while($row = $director->fetch(PDO::FETCH_ASSOC)) { ?>
                      <option value="<?php echo($row["id"]);?>">
                        <?php echo($row["firstname"]. ' ' .$row["lastname"]); ?>
                  </option> 
                <?php } ?> 
                  </select>
                  <input type = "submit" text="search">
                  </form>
                  </div>
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