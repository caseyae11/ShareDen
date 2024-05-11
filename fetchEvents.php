<?php
$dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
$db_username = "root";
$db_password = "";

$pdo = new PDO($dsn, $db_username, $db_password);

$stmt = $pdo->query("SELECT event_id, image_path, event_name, date_time, location FROM events LIMIT 4");
$eventData = $stmt->fetchAll();

echo json_encode($eventData);

?>