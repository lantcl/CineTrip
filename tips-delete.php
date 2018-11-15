<?php 
session_start();

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
			<p>Are you sure you want to delete?</p>

			<?php //interface for confirm or cancel ?>
			<form action="confirm-tip-delete.php" method="POST">
				<input type="hidden" value="<?php echo($row["id"]); ?>" name="id"/>
				<input type="submit" value="Delete"/>
			</form>
			<a href="mytips.php">Cancel</a>
		</main>
	</body>
</html>

<? } ?>