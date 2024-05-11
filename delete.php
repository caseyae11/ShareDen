<?php
$dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
$db_username = "root";
$db_password = "";

$pdo = new PDO($dsn, $db_username, $db_password);

// Check if "event_id" exists in the POST data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["event_id"])) {
    $event_id = $_POST["event_id"];

        // Prepare and execute the DELETE statement
$stmt = $pdo->prepare("DELETE FROM events WHERE event_id = ?");
$stmt->execute([$event_id]);

if ($stmt->rowCount() > 0) {
    echo "Record deleted successfully";
} else {
    echo "Could not delete record";
}

} else {
    echo "Invalid request or event ID not provided";
}
?>
