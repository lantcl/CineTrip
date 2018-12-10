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
		<meta http-equiv="Cache-Control" content="no-transform" /> 
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/organize.css">
<link rel="stylesheet" media="screen and (max-width:960px)" href="css/small.css">
	
        <style type="text/css">
			@media screen and (max-width:960px){
				
				.proEdit{
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: #EBEBEB;
	display:block; 
	text-align:center;
/*	margin-top: -1%;*/
}

.proEdit h1{
	font-family: "Arial Rounded Mt",arial;
	font-size: 2.8em;
	font-color:#2e2e2e;
	padding-top: 3%;
	padding-bottom: 3%; 
	text-align: center;
	margin:0 auto;
}

.proEdit .editInfo{
	background-color:rgba(255,255,255,.8);
    width:85%;
	height: 650px;
	margin-top:0;
    margin-left: 1%;
    margin-right: 1%;
    margin-bottom: 3%;
    display:inline-block;
    vertical-align: top;
	text-align: center;
	border-radius: 3px;
}

.proEdit .editInfo img{
	width: 25%;
	margin: 5%;
}

.editInfo p3{
	font-family: "Arial Rounded Mt",arial;
	font-size: 1em;
	font-color:#2e2e2e;
	padding-top: 1%;
	padding-bottom: 1%; 
	text-align: center;
	margin:0 auto;
}

.editInfo input{
	width:40%;
    height: 20%;
    border: 1em #AEAEAE;  
    border-radius: 5px;  
    background: #E2E2E2;  
    color: #d9d9d9;
	font-family: "Arial Rounded Mt",arial;
	font-size: 1em;
	padding-left: 1%;
	margin: 2%;
}

.proEdit .editInfo input[type='submit'] {
	        font-family: "Arial Rounded Mt",arial;
            font-size: 1em;
            color: #ffffff;
            background-color: #ffab17;
	        border-radius: 5px;
	        margin:0 auto;
	
}

.editBadges img{
	width:12%;
	margin-top: .5%;
	margin-bottom: 5%;
}

.proEdit .editBadges h2{
	font-family: "Arial Rounded Mt",arial;
	font-size: 2.8em;
	font-color:#2e2e2e;
	padding-top: 3%;
	padding-bottom:0; 
	text-align: center;
	margin:0 auto;
}

			}
		</style>
</head>
<body>
<div class="mainContainer">
	<header>
		
		<div>
			<img src="assets/logo-01.png" href="homepage.php" class="logo"/>
		</div>
		
    	<nav>
     	 <ul>
        	<div></div>
       		 <li class="current"><a href="homepage.php">Home</a></li>
        	 <li><a href="browse-locations.php">Locations</a></li>
        	 <li><a href="search.php">Search</a></li>
        	 <li><a href="contact.php">Contact</a></li>
		 <?php if($_SESSION['logged-in'] == true){?>
                 <li><a href="logout.php">Log out</a></li>
                 <li><a href="userprofile.php">Profile</a></li>
                 <?php } else {?>
                 <li><a href="signup.php">Sign up</a></li>
                 <li><a href="login.php">Log in</a></li>
                 <?php } ?>	
        </ul>
    </nav>
	</header>
	
	<div class="proEdit">
	<h1> Edit Profile</h1>
	<div class="editInfo">
			<a href="images-profile/profile_01.png"/><img src="images-profile/profile_01.png" alt="Profile Photo">
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
		</div>

<div class="editBadges">
<h2>Badges earned</h2><br>
	
	
	<label>Hide my badges in public profile	&nbsp;	&nbsp;	&nbsp;</label><input type="checkbox" name="hideBadge" value ="1"/><br><br>
		<img src="images-profile/01_badge_horror.jpg" alt="Horror">
		<img src="images-profile/02_badge_scifi.jpg" alt="Sci-Fi" />
		<img src="images-profile/03_badge_romance.jpg" alt="Romance" />
		<img src="images-profile/04_badge_comedy.jpg" alt="Comedy" />
		<img src="images-profile/05_badge_drama.jpg" alt="Drama" />
		<img src="images-profile/06_badge_fan.jpg" alt="Fan" />
		<img src="images-profile/07_badge_superfan.jpg" alt="Superfan" />
		<img src="images-profile/08_badge_filmbuff.jpg" alt="Film Buff" />
		<img src="images-profile/09_badge_expert.jpg" alt="Expert" />
		<img src="images-profile/10_badge_director.jpg" alt="Director" />
	</div>
	</div>
</div>


                <div class="footer">
   <footer>
        <a href="homepage.php">
          <img src="assets/logo-01.png" />
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

<?php } ?>
