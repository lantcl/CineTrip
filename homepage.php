<?php
 session_start(); 
 $dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";
 ?>

<!doctype html>
<html>
    <head>
        <title>CineTrip Homepage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" character="utf-8"/>
        <link rel="stylesheet" href="css/main.css" />

        <style>
            
        </style>
    </head>
    <body class="landing">
        <div id="page-wrapper">
          <header id="header" class="alt" style>
            <nav id="nav">
              <ul>
                <li style="white-space: nowrap;">
                  <a href="homepage.php">Home</a>  
                </li>
                <li class="opener" style="user-select: none;cursor: pointer;white-space: nowrap;">
                  <a href="#" class="icon fa-angle-down">Search</a>
                </li>
                <li class="opener" style="user-select: none;cursor: pointer;white-space: nowrap;">
                  <a href="locations.php" class="icon fa-angle-down">Locations</a>
                </li>
                <li class="opener" style="user-select: none;cursor: pointer;white-space: nowrap;">
                  <a href="#" class="icon fa-angle-down">Contact</a>
                </li>
                <li class="opener" style="user-select: none;cursor: pointer;white-space: nowrap;">
                  <a href="login.php" class="icon fa-angle-down">Log in</a>
                </li>
                <li class="opener" style="user-select: none;cursor: pointer;white-space: nowrap;">
                  <a href="signup.php" class="icon fa-angle-down">Sign up</a>
                </li>
              </ul>
            </nav>
            
          </header>
          
        </div>

        <section>         
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe width="750" height="1334" id="gmap_canvas" src="https://maps.google.com/maps?q=toronto%20union%20station&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
                <a href="https://www.pureblack.de">pure black gmbh</a>
              </div>

              <style>
               .mapouter{
                  text-align:right;
                  height:811px;
                  width:1080px;
               }
               .gmap_canvas {
                  overflow:hidden;
                  background:none!important;
                  height:811px;
                  width:1080px;
              }
             </style>

             </div>     
        </section>

    <footer>
        <div id="footer_logo">

        <a href="homepage.php"><img src="images/footer_logo.png" alt="CineTrip Logo" style="width:77px;height:28px"></a>
        </div>
     <nav id="footerMenu">
              <ul>
                <li><a href = "#">About Cinetrip</a></li> 
                <li><a href = "#">Contribute</a></li>
                <li><a href = "#">Privacy Policy</a></li>  
              </ul>
     </nav>
    </footer>

  <!-- navigation -->
  <div id="navButton">
    <a href="#navPanel" class="toggle">
    </a>
  </div>
  <div id="navPanel">
    <nav>
      <a class="link depth-0" href="homepage.php" style="-webkit-tap-highlight-color:rgba(0,0,0,0);">
        <span class="indent-0"></span>Home</a>
      <a class="link depth-0" href="#" style="-webkit-tap-highlight-color:rgba(0,0,0,0);">
        <span class="indent-0"></span>Search</a>
      <a class="link depth-0" href="locations.php" style="-webkit-tap-highlight-color:rgba(0,0,0,0);">
        <span class="indent-0"></span>Locations</a>
      <a class="link depth-0" href="#" style="-webkit-tap-highlight-color:rgba(0,0,0,0);">
        <span class="indent-0"></span>Contact</a>
      <a class="link depth-0" href="login.php" style="-webkit-tap-highlight-color:rgba(0,0,0,0);">
        <span class="indent-0"></span>Log in</a>
      <a class="link depth-0" href="signup.php" style="-webkit-tap-highlight-color:rgba(0,0,0,0);">
        <span class="indent-0"></span>Sign up</a>
    </nav>
  </div>
        
    </body>
</html>