<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Events Page</title>
    <!-- Any necessary CSS or meta tags -->
</head>
<body>

<?php
if (isset($_GET['category'])) {
    $eventType = $_GET['category'];

    // Connect to your database and fetch events related to the category
    $dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
    $db_username = "root";
    $db_password = "";

    try {
        $pdo = new PDO($dsn, $db_username, $db_password);
        $stmt = $pdo->prepare("SELECT * FROM events WHERE LOWER(category) = LOWER(?)");
        $stmt->execute([$eventType]);
        $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "<h2>Events related to $eventType</h2>";

        // Display the fetched events
        foreach ($events as $event) {
            echo "<div>";
            echo "<h3>{$event['event_name']}</h3>";
            echo "<p>Category: {$event['category']}</p>";
            echo "<img src='http://localhost/sharedenImg/{$event['image_path']}' alt='{$event['event_name']}' width='200'>";
            echo "</div>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "No category specified";
}
?>

<!-- Other HTML content for the page -->
</body>
</html>
