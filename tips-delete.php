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

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cinetrip - Delete Tip</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="profile.php">My Profile</a></li>
				<li><a href="settings.php">Settings</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<main>
			<p>Are you sure you want to delete?</p>

			<?php //interface for confirm or cancel ?>
			<form action="confirm-tip-delete.php" method="POST">
				<input type="hidden" value="<?php echo($row["id"]); ?>" name="id"/>
				<input type="submit" value="Delete"/>
			</form>
			<a href="mytips.php">Cancel</a>
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

<? } ?>