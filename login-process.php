<?php

session_start(); 

$username = $_POST['username'];
$password = $_POST['password'];

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");

$stmt->execute();
if($row = $stmt->fetch()){

	$_SESSION['logged-in'] = true;
	$_SESSION['username'] = $row['username'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['id'] = $row['id'];

	header("Location: homepage.php"); 

}else{
	header("Location: login.php");	
}

?>
