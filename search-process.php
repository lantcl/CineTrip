<?php

session_start();

$dsn = "mysql:host=localhost;dbname=lantc_cinetrip;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("SELECT * FROM `locations`");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo($json);

//search by film
// if (isset($_POST['search']))
// {
// $search = $_POST['search'];

// $filmSearch = $pdo->prepare("SELECT `locations`.`locationname`, `films`.`title`, `films`.`id`, `locations`.`id` FROM `films` INNER JOIN `films-locations` ON `films-locations`.`filmid` = `films`.`id` INNER JOIN `locations` ON `films-locations`.`locationid` = `locations`.`id` WHERE `films`.`title` LIKE '%$search%' OR `locations`.`locationname` LIKE '%$search%'");

// $filmSearch->execute();
// $results = $filmSearch->fetchAll();
// $json = json_encode($results);


// }

//search by genre
// if (isset($_GET['name']))
// {
// $genre = $_GET['name'];

// $genreSearch = $pdo->prepare("SELECT `locations`.`locationname`,`films`.`id`, `locations`.`id`,`films`.`title`, `films-genres`.`genreid`, `genres`.`name` FROM ((`films` INNER JOIN `films-genres` ON `films`.`id` = `films-genres`.`filmid`) INNER JOIN `genres` ON `genres`.`genreid` = `films-genres`.`genreid`) INNER JOIN `films-locations` ON `films-locations`.`filmid` = `films`.`id` INNER JOIN `locations` ON `films-locations`.`locationid` = `locations`.`id` WHERE `genres`.`name` = '$genre'");

// $genreSearch->execute();

// }


// //search by director
// if (isset($_GET['directorid']))
// {
// $director = $_GET['directorid'];

// //$directorName = $directorSearch = $pdo->prepare
// $directorSearch = $pdo->prepare("SELECT `directors`.`firstname`, `directors`.`lastname`,`directors`.`directorid`, `films`.`title`, `films`.`id` FROM `films` INNER JOIN `films-directors` ON `films-directors`.`filmid` = `films`.`id` INNER JOIN `directors` ON `films-directors`.`directorid` = `directors`.`directorid` WHERE `directors`.`directorid` = $director");


// $directorSearch->execute();
// }