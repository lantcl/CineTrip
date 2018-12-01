<?php

session_start();


$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

?>

<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" media="screen and (max-width: 768px)" href="css/small.css">

<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

<title>CineTrip</title>
<div class="container">
   <header>
   	<div class="logo">
   		<img src="images/logo-01.png" href="homepage.php">
   	</div>

   	<nav>
   		<ul>
            <div class="menu"></div>
   			<li class="current"><a href="homepage.php">HOME</a></li>
   			<li><a href="search.php">SEARCH</a></li>
   			<li><a href="locations.php">LOCATIONS</a></li>
   			<li><a href="about.php">ABOUT</a></li>
   			<li><a href="login.php">LOG IN</a></li>
   			<li><a href="signup.php">SIGN UP</a></li>
        </ul>
   	</nav>
   </header>

   
</div>
</head>
<body>
   <section>
      <div id="map">
         <iframe width="100%" height="1000px" src="https://maps.google.com/maps?q=toronto%20union%20station&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0""></iframe>
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
</body>
</html>
