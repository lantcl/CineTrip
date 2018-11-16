<?php

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>CineTrip</title>
	</head>
<body>
	<h1> Edit Profile</h1>
			<a href=""images-profile/profile_01.png"/><img src="images-profile/profile_01.png" alt="Profile Photo" width="120" height="120" border="1">
</a><br>
<p3>Tap on image to change</p3><br>
		<input type="file" name="pic" accept="image/*">
  		<input type="submit"><br><br>


<form action="profile-input.php" method="POST">
	<fieldset>
		<label>Username</label>	<input type="text" name="uname" placeholder="Username"  /><br>
			<label>Email Address</label><input type="email" name="email" placeholder="Email" /><br>
			<label>Phone Number</label><input type="text" name="Phone"/><br>
			<label>Date of Birth</label><input type="date" name="dateofbirth"/><br>
			<label>Hide my age in public profile	&nbsp;	&nbsp;	&nbsp;</label><input type="checkbox" name="hideAge" value ="1"/><br>
			<label>Favourite Genres </label>
          <input type="checkbox" name="genreid[]" value="One">One 
          <input type="checkbox" name="genreid[]" value="Two">Two 
          <input type="checkbox" name="genreid[]" value="Three">Three 
          <input type="checkbox" name="genreid[]" value="Four">Four 
          <br><br>
        <input type="submit" value="Save Changes" />
	</fieldset>
</form><br>

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
</html>