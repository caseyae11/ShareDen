<?php
$dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$event_id= $_GET["event_id"];

$stmt = $pdo->prepare("SELECT * FROM events WHERE event_id = '$event_id';");
$stmt->execute();

$article = $stmt->fetch();

if ($article) {
?>
    <form action="update_event.php" method="POST">
    <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
    <input type="text" name="event_name" value="<?php echo $event_name['event_name']; ?>">
    <input type="text" name="organizer" value="<?php echo $organizer['organizer']; ?>">
    <select id="category" name="category">
            <option value="Education">Education</option>
            <option value="Party">Party</option>
            <option value="Food">Food</option>
    </select>
    <input type="datetime-local" name="date_time">
    <input type="date" name="date">
    <input type="time" name="time">
    <input type="text" name="location" value="<?php echo echo $location['location']; ?>">
    <input type= "text" name="description" value="<?php echo echo $description['description']; ?>">
    <input type="file" name="photo" accept="image/*">
    </form>
<?php
} else {
    echo "Article not found!";
}

?>