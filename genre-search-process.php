<?php

session_start();

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$genre = $_GET['name'];

$stmt = $pdo->prepare("SELECT `locations`.`locationname`,`films`.`id`, `locations`.`id`,`films`.`title`, `films-genres`.`genreid`, `genres`.`name` FROM ((`films` INNER JOIN `films-genres` ON `films`.`id` = `films-genres`.`filmid`) INNER JOIN `genres` ON `genres`.`genreid` = `films-genres`.`genreid`) INNER JOIN `films-locations` ON `films-locations`.`filmid` = `films`.`id` INNER JOIN `locations` ON `films-locations`.`locationid` = `locations`.`id` WHERE `genres`.`name` = '$genre'");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo($json);

?>