<?php 

session_start();

$id = $_SESSION['id'];
$locationid = $_POST['locationid'];

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt3 = $pdo->prepare("INSERT INTO `users-savedlocations` (`id`, `userid`, `locationid`) VALUES (NULL, '$id', '$locationid'); ");

$stmt3->execute();


?>
