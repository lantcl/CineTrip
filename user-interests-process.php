<?php

session_start(); 

$userid = $_SESSION['userid'];
$genreid = $_POST['genreid'];

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//submit interests to users-interests table
$stmt = $pdo->prepare("INSERT INTO `users-interests` (`id`, `userid`, `genreid`) VALUES (NULL, '$userid', '$genreid');");
//not sure how to do multiple row inserts yet

$stmt->execute();

header("Location: home.php");

?>