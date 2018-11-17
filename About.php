<?php
session_start();

?>

<!DOCTYPE html>
  <html>
    <head>
      <title>CineTrip About</title>
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
  <h1>Our Team</h1>
  
    <div class=>
      <img src="images-profile/Profile_Cleo.jpg" alt="Cleo" width="120" height="120" border="1"></a><br>
        <h2>Cleo Lant</h2>
        <p>Title</p>
        <a href="https://www.mynameiscleo.com/"><p>My Website</p>
      
    </div>
    
    <div class=>
      <img src="images-profile/Profile_Carly.jpg" alt="Carly" width="120" height="120" border="1"></a><br>
        <h2>Carly Wysocki</h2>
        <p>Title</p>
        <a href="https://www.google.com/"><p>My Website</p>
      
    </div>

      <div class=>
      <img src="images-profile/Profile_Renjing.jpg" alt="Renjing" width="120" height="120" border="1"></a><br>
        <h2>Renjing Hu</h2>
        <p>Title</p>
        <a href="https://www.google.com/"><p>My Website</p>
      
    </div>

      <div class=>
      <img src="images-profile/Profile_Vinay.jpg" alt="vinay" width="120" height="120" border="1"></a><br>
        <h2>B. Vinay Kumar</h2>
        <p>Title</p>
        <a href="https://www.google.com/"><p>My Website</p>
      
    </div>
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