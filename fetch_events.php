<?php
$dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
$db_username = "root";
$db_password = "";

$pdo = new PDO($dsn, $db_username, $db_password);

$stmt = $pdo->query("SELECT event_name, image_path, organizer, category, date_time, date, time, location, description FROM events");
$eventData = $stmt->fetchAll();

echo json_encode($eventData);

?>