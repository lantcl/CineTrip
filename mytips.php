<?php 
session_start();

if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{

$id = $_GET['id'];

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `location-user-tips`");
$stmt->execute();

$stmt2 = $pdo->prepare("SELECT * FROM `locations` WHERE `id` = '$id'");
$stmt2->execute();
$row2 = $stmt2->fetch();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cinetrip - My Tips</title>
		<meta charset="UTF-8" />
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
		<main>
			<h1>My Tips</h1>
			<?php
			while($row = $stmt->fetch()) {     
				?>
			<div>
				<h2><?php echo($row2["name"]); ?></h2>
				<p><?php echo($row["tip"]); ?></p>
				<span><a href="tip-edit.php?id=<?php echo($row["id"]);?>">Edit</a></span>
				<span><a href="tip-delete.php?id=<?php echo($row["id"]);?>">Delete</a></span>
			</div>
			<?php }
			?>
		</main>
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

<?php } ?>