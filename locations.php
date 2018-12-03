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

// $stmt2 = $pdo->prepare("SELECT * FROM `users` WHERE `id` = '$id'");
// $stmt2->execute();
// $row2 = $stmt2->fetch();

$stmt3 = $pdo->prepare("SELECT `users`.`id`, `users`.`username`, `users`.`profilepic`, `locations`.`id`, `locations`.`locationname`, `location-user-tips`.`userid`, `location-user-tips`.`locationid`, `location-user-tips`.`tip`, `location-user-tips`.`dateadded` FROM(`users`INNER JOIN `location-user-tips` ON `users`.`id` = `location-user-tips`.`userid`) INNER JOIN `locations`ON `location-user-tips`.`locationid` = `locations`.`id` WHERE `locations`.`id` = '$id'");
$stmt3->execute();
$row3 = $stmt3->fetch();

$stmt4 = $pdo->prepare("SELECT `locations`.`id`, `locations`.`locationname`, `films`.`id`, `films`.`title`, `films-locations`.`locationid`, `films-locations`.`filmid`, `films-locations`.`trivia` FROM (`locations` INNER JOIN `films-locations` ON `locations`.`id` = `films-locations`.`id`) INNER JOIN `films`ON `films-locations`.`filmid` = `films`.`id` WHERE `locations`.`id` = '$id'");
$stmt4->execute();
$row4 = $stmt4->fetch();

$stmt5 = $pdo->prepare("SELECT `locations`.`id`, `locations`.`locationname`, `films`.`id`, `films`.`title`, `location-photos`.`filmid`, `location-photos`.`locationid`, `location-photos`.`imagename` FROM (`locations` INNER JOIN `location-photos` ON `locations`.`id` = `location-photos`.`locationid`) INNER JOIN `films` ON `location-photos`.`filmid` = `films`.`id` WHERE `locations`.`id` = '$id'");
$stmt5->execute();
$row5 = $stmt5->fetch();

// $stmt2 = $pdo->prepare("SELECT * FROM `films-locations` WHERE `id` = '$id'");
// $stmt2->execute();
// $row2 = $stmt2->fetch();

// $stmt3 = $pdo->prepare("SELECT * FROM `location-user-tips` WHERE `id` = '$id'");
// $stmt3->execute();
// $row3 = $stmt3->fetch();

// $stmt4 = $pdo->prepare("SELECT * FROM `users` WHERE `id` = '$id'");
// $stmt4->execute();
// $row4 = $stmt4->fetch();

// $stmt5 = $pdo->prepare("SELECT * FROM `location-photos` WHERE ")

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Cinetrip - Locations</title>
		<meta charset="UTF-8" />
		<!-- <link rel="stylesheet" href="css/main.css" /> -->
	</head>
	<body>
		<nav>
		    <a href = "homepage.php"><img src="assets/logo-01.png" alt="CineTrip Logo" style="width:100px"></a>
			<ul>
				<li><a href="userprofile.php">My Profile</a></li>
				<li><a href="settings.php">Settings</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<main>
			<div id="map">
				<iframe width="100%" height="300px" src="<?php echo($row["mapurl"]); ?>" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0""></iframe>
			</div>
			<h1><?php echo($row["locationname"]); ?></h1>
			<p><?php echo($row["address"]); ?></p>
			<img src="imageslocations/<?php echo($row5["imagename"]); ?>" />
			<h2>Description</h2>
			<p><?php echo($row["description"]); ?></p>
			<h2>Trivia</h2>
			<?php while($row4 = $stmt4->fetch()){ ?>
				<p><?php echo($row4["trivia"]); ?></p>
			<?php } ?> 
		</main>
		<section class="tips">
			<h2>Tips</h2>
			<div>
				<img id="comment-thumbnail" src="images-profile/<?php echo($row3["profilepic"]); ?>" />
				<h3><?php echo($row3["username"]); ?></h3>
				<p><?php echo($row3["tip"]); ?></p>
				<ul>
					<li><a href="">Like</a></li>
					<li><a href="">Reply</a></li>
				</ul>
			</div>
		</section>
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