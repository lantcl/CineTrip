<?php
 session_start(); 
 $dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";
 ?>

<!doctype html>
<html>
	<head>
		<title>CineTrip</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

		
				<header id="header" class="alt">
					<nav id="nav">
						<ul>
							<li><a href="homepage.php">Home</a></li>
							<li><a href="search.php" class="icon fa-angle-down">Search</a></li>
							<li><a href="locations.php">Locations</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="login.php" class="button">Log in</a></li>
							<li><a href="signup.php" class="button">Sign up</a></li>
						</ul>
					</nav>
				</header>

			
				<section id="main" class="container">

					 <div class="mapouter">
                     <div class="gmap_canvas">
                       <iframe width="1080" height="811" id="gmap_canvas" src="https://maps.google.com/maps?q=toronto%20union%20station&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                       </iframe>
                     </div>

                     <style>
                      .mapouter{
                         text-align:right;
                         height:1080px;
                         width:811px;
                      }
                      .gmap_canvas {
                         overflow:hidden;
                         background:none!important;
                         height:1080px;
                         width:811px;
                     }
                     </style>
                 </div>     

				</section>

			
		
				<footer id="footer">
					<div id="footer_logo">
                     <a href="homepage.php"><img src="images/footer-logo.png" style="width:77px;height:28px"></a>
                     </div>
					<ul class="icons">
						<li><a href="#" ><span class="label">About CineTrip</span></a></li>
						<li><a href="#" ><span class="label">Contribute</span></a></li>
						<li><a href="#" ><span class="label">Privacy policy</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; CineTrip. All rights reserved.</li>
					</ul>
				</footer>

		</div>

		
	</body>
</html>