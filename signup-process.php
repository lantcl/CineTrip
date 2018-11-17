<?php
session_start(); 

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$location = $_POST['location'];
$reason = $_POST['reason'];

$uploaddir = 'images-profile/';
$uploadfile = $uploaddir . basename($_FILES['profilepic']['name']);
$filename = $_FILES['profilepic']['name'];

if (move_uploaded_file($_FILES['profilepic']['tmp_name'], $uploadfile)) {
    	//header("Location: add-article-confirm.php");
	} else {
    	echo "Please select an image to upload\n";
	}

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//submit data to users table
$stmt = $pdo->prepare("INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `birthday`, `gender`, `profilepic`, `location`, `reason`) VALUES (NULL, '$firstname', '$lastname', '$username', '$password', '$email', '$birthday', '$gender', '$filename', '$location', '$reason');");

$stmt->execute();

//not sure if the below will work yet (starting the session on signup)

// $stmt1 = $pdo->prepare("SELECT * FROM `users` WHERE `username` = '$username' AND `userpassword` = '$password'");

// $stmt1->execute();
// if($row = $stmt1->fetch()){

// 	$_SESSION['logged-in'] = true;
// 	$_SESSION['username'] = $row['username'];
// 	$_SESSION['userpassword'] = $row['userpassword'];
// 	$_SESSION['userid'] = $row['userid'];


header("Location: user-interests.php");

//}

?>

