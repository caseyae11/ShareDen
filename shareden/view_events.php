<?php
$dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
$db_username = "root";  
$db_password = "";

$pdo = new PDO($dsn, $db_username, $db_password);

$stmt = $pdo->query("SELECT * FROM events");
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (empty($events)) {
    echo "No events found";
} else {
    // Display all events
    foreach ($events as $event) {
        ?>
        <h2>Event Details</h2>
        <p><strong>Event Name:</strong> <?php echo $event['event_name']; ?></p>
        <p><strong>Organizer:</strong> <?php echo $event['organizer']; ?></p>
        <p><strong>Category:</strong> <?php echo $event['category']; ?></p>
        <p><strong>Date & Time:</strong> <?php echo $event['date_time']; ?></p>
        <p><strong>Date</strong> <?php echo $event['date']; ?></p>
        <p><strong>Time:</strong> <?php echo $event['time']; ?></p>
        <p><strong>Location:</strong> <?php echo $event['location']; ?></p>
        <p><strong>Description:</strong> <?php echo $event['description']; ?></p>
        <p><strong>Photo:</strong> <img src="<?php echo $event['image_path']; ?>" alt="Event Image" height="200" width="200"></p>

          <!-- Edit and Delete buttons -->
        <form action="edit.php" method="GET">
            <input type="hidden" name="event_id" value="<?php echo $event['event_id']; ?>">
            <input type="submit" value="Edit">
        </form>
        <form action="delete.php" method="POST">
            <input type="hidden" name="event_id" value="<?php echo $event['event_id']; ?>">
            <input type="submit" value="Delete">
        </form>

        <hr>
        <?php
    }
}
?>
