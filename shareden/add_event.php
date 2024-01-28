<?php

$event_name = $_POST["event_name"];
$organizer = $_POST["organizer"];
$category = $_POST["category"];
$date_time = $_POST["date_time"];
$date = $_POST["date"];
$time = $_POST["time"];
$location = $_POST["location"];
$description = $_POST["description"];
$photo = $_POST["photo"];

$dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword);


$stmt = $pdo->prepare("INSERT INTO `events`
(`event_id`, `event_name`, `organizer`, `category`, `date_time`, `date`, `time`, `location`, `description`, `photo` )
VALUES 
(NULL, '$event_name', '$organizer', '$category', '$date_time', '$date', '$time', '$location', '$description', '$photo');");

if($stmt->execute()){ ?>
	<h1>Success!</h1>
<?php
}else{ 
	?><h1>Error</h1> <?php
}

?>