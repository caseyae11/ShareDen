<?php

// $dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
// $db_username = "root";
// $db_password = "";

// try {
//     $pdo = new PDO($dsn, $db_username, $db_password);

//     // Check if a category parameter is provided in the URL
//     if(isset($_GET['category'])) {
//         $category = $_GET['category'];
//         $stmt = $pdo->prepare("SELECT event_name, image_path, category FROM events WHERE category = ?");
//         $stmt->execute([$category]);
//     } else {
//         // If no category parameter, fetch all events
//         $stmt = $pdo->prepare("SELECT event_name, image_path, category FROM events");
//         $stmt->execute();
//     }

//     $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     echo json_encode($events); // Send data as JSON
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
//}
?>

<?php
$dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
$db_username = "root";
$db_password = "";

if(isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $pdo = new PDO($dsn, $db_username, $db_password);
    $stmt = $pdo->prepare("SELECT DISTINCT event_name, category FROM events WHERE LOWER(event_name) LIKE ? OR LOWER(category) LIKE ?");
    $stmt->execute(["%$searchTerm%", "%$searchTerm%"]);
    $suggestions = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($suggestions);
}
?>

