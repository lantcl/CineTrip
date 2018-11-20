<?php
session_start(); 

$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$location = $_POST['location'];
$uploaddir = 'images-profile/';
$uploadfile = $uploaddir . basename($_FILES['profilepic']['name']);
$filename = $_FILES['profilepic']['name'];

if (move_uploaded_file($_FILES['profilepic']['tmp_name'], $uploadfile)) {
    	
	} else {
    	echo "Please select an image\n";
	}

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";
// $dbusername = "vinay";
// $dbpassword = "11111";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 


$stmt = $pdo->prepare("INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `birthday`,`location`,`profilepic`) VALUES (NULL, '$username', '$firstname', '$lastname', '$email', '$birthday', '$location', '$filename');");

$stmt->execute();

header("Location:profile-edit.php");

?>

