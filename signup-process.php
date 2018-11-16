<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$location = $_POST['location'];
$reason = $_POST['reason'];

$uploaddir = 'user-profile-pics/';
$uploadfile = $uploaddir . basename($_FILES['profilepic']['name']);
$profilepic = $_FILES['profilepic']['name'];

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//submit data to users table
$stmt = $pdo->prepare("INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `birthday`, `gender`, `profilepic`, `location`, `reason`) VALUES (NULL, '$firstname', '$lastname', '$username', '$password', '$email', '$birthday', '$gender', '$profilepic', '$location', '$reason');");

$stmt->execute();


header("Location: user-interests.php");

}else{
	echo('signup was not successful');
}

?>

