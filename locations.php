<?php
session_start();

$id = $_GET['id'];

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `locations` WHERE `id` = '$id'");
$stmt->execute();
$row = $stmt->fetch();

$stmt2 = $pdo->prepare("SELECT * FROM `films-locations` WHERE `id` = '$id'");
$stmt2->execute();
$row2 = $stmt2->fetch();

$stmt3 = $pdo->prepare("SELECT * FROM `location-user-tips` WHERE `id` = '$id'");
$stmt3->execute();
$row3 = $stmt3->fetch();

$stmt4 = $pdo->prepare("SELECT * FROM `users` WHERE `id` = '$id'");
$stmt4->execute();
$row4 = $stmt4->fetch();

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Cinetrip - Locations</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="profile.php">My Profile</a></li>
				<li><a href="posts.php">My Posts</a></li>
				<li><a href="settings.php">Settings</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<main>
			<h1><?php echo($row["name"]); ?></h1>
			<p><?php echo($row["address"]); ?></p>
			<img src="images/<?php echo($row["photo"]); ?>" />
			<h2>Description</h2>
			<p><?php echo($row["description"]); ?></p>
			<h2>Trivia</h2>
			<?php while($row2 = $stmt2->fetch()){ ?>
				<p><?php echo($row2["trivia"]); ?></p>
			<?php } ?> 
		</main>
		<section class="tips">
			<h2>Tips</h2>
			<div>
				<img id="comment-thumbnail" src="images/<?php echo($row4["profilepic"]); ?>" />
				<h3><?php echo($row4["username"]); ?></h3>
				<p><?php echo($row3["tip"]); ?></p>
				<ul>
					<li><a href="">Like</a></li>
					<li><a href="">Reply</a></li>
				</ul>
			</div>
		</section>
	</body>
</html>