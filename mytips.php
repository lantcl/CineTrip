<?php 
session_start();

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
	</body>
</html>