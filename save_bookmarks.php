<?php 

session_start();
var_dump($_GET);
var_dump($_SESSION);

$id = $_SESSION['userid'];
echo($id);
$locationid = $_GET['locationid'];

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

// $stmt = $pdo->prepare("SELECT * FROM `locations` WHERE `id` = '$locationid'");
// $stmt->execute();
// $row = $stmt->fetch();

// $stmt2 = $pdo->prepare("SELECT * FROM `users` WHERE `id` = '$id'");
// $stmt2->execute();
// $row2 = $stmt2->fetch();




$stmt3 = $pdo->prepare("INSERT INTO `users-savedlocations` (`id`, `userid`, `locationid`) VALUES (NULL, '$id', '$locationid'); ");

$stmt3->execute();



?>
