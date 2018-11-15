<?php

$id = $_POST["id"];

//perform database delete using form values;
$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("DELETE FROM `location-user-tips` WHERE `id` = $id");

$stmt->execute();

header("Location: ../mytips.php");

?>