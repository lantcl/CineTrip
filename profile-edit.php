<?php

session_start();

if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";
// $dbusername = "vinay";
// $dbpassword = "11111";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>CineTrip - Edit Profile</title>
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>
        <header id="header" class="alt">
              <a href = "homepage.php"><img src="assets/logo-01.png" alt="CineTrip Logo" style="width:100px"></a>
              <nav id="nav">
                  <ul>
                      <li><a href="homepage.php">Home</a></li>
                      <li><a href="search.php" class="icon fa-angle-down">Search</a></li>
                      <li><a href="browse-locations.php">Locations</a></li>
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
	<h1> Edit Profile</h1>
			<a href="images-profile/profile_01.png"/><img src="images-profile/profile_01.png" alt="Profile Photo" width="120" height="120" border="1">
</a><br>
<form action="profile-input.php" method="POST" enctype="multipart/form-data"> 
<p3>Tap on image to change</p3><br>
		<input type="file" name="profilepic" accept="image/*">
  		<input type="submit"><br><br>


                
                <label>Username</label> <input type="text" name="username" placeholder="Username"  /><br>
                <label>First Name</label> <input type="text" name="firstname" placeholder="First Name"  /><br>
                <label>Last Name</label> <input type="text" name="lastname" placeholder="Last Name"  /><br>
                <label>Email Address</label><input type="email" name="email" placeholder="Email Address" /><br>
                <label>Date of Birth</label><input type="date" name="birthday" /><br>
                <label>Hide my age in public profile </label><input type="checkbox" name="hideAge" value ="1"><br>
                <label>Location</label> 
                    <select name="location">
                        <option value="toronto">Toronto</option>
                        <option value="gta">Within the GTA</option>
                        <option value="outsidegta">Outside the GTA</option>
                        <option value="none">Prefer not to say</option>
                    </select>                                                            

                <input type="submit" />
                </form>


<h2>Badges earned</h2><br>
	<label>Hide my badges in public profile	&nbsp;	&nbsp;	&nbsp;</label><input type="checkbox" name="hideBadge" value ="1"/><br><br>
		<img src="images-profile/01_badge_horror.jpg" alt="Horror" width="80" height="80" border="1">
		<img src="images-profile/02_badge_scifi.jpg" alt="Sci-Fi" width="80" height="80" border="1">
		<img src="images-profile/03_badge_romance.jpg" alt="Romance" width="80" height="80" border="1">
		<img src="images-profile/04_badge_comedy.jpg" alt="Comedy" width="80" height="80" border="1">
		<img src="images-profile/05_badge_drama.jpg" alt="Drama" width="80" height="80" border="1">
		<img src="images-profile/06_badge_fan.jpg" alt="Fan" width="80" height="80" border="1">
		<img src="images-profile/07_badge_superfan.jpg" alt="Superfan" width="80" height="80" border="1">
		<img src="images-profile/08_badge_filmbuff.jpg" alt="Film Buff" width="80" height="80" border="1">
		<img src="images-profile/09_badge_expert.jpg" alt="Expert" width="80" height="80" border="1">
		<img src="images-profile/10_badge_director.jpg" alt="Director" width="80" height="80" border="1">

</body>
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
</html>

<?php } ?>