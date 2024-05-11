<?php
$dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
$db_username = "root";  
$db_password = "";

$pdo = new PDO($dsn, $db_username, $db_password);

$event_id = $_GET["event_id"];

$stmt = $pdo->prepare("SELECT * FROM events WHERE event_id = ?");
$stmt->execute([$event_id]);

$event = $stmt->fetch(PDO::FETCH_ASSOC);

if ($event) {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="casey.css?v=1.2">

</head>
<body>
<header>
        <div class="logo">
        <h1><a href="main_home.php">ShareDen</a></h1>
        </div>
        
        <!-- THIS HEADBAR SEARCH CANNOT BE EDITED ALSO THE CSS -->
        <div class="search">
            <form action="search_results.php" method="GET">
                <input type="text" id="search" name="search" placeholder="Search by title or category">
                <button type="submit">Search</button>
            </form>

            <!-- <button onclick="searchEvents()">Search</button> 
           <div id="events-container">
            </div> -->
        </div>
         <!-- THIS HEADBAR SEARCH CANNOT BE EDITED ALSO THE CSS -->

        <div class="navigation">
            <ul>
                <li><a href="event.php">Create Event</a></li>
                <li><a href="event_page.php">View Events</a></li>
                <li><a href="userViewEvents.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
</header>


<section class="creating-event">
    <div class="creating">
    <h1>EDIT EVENT</h1>
        <p>If you would like to edit your own event to be featured on our platform, we welcome
            your participation! To ensure the quality and relevance of events for all our users,
            we have a submission process in place. <br>
            Edit this form and update with new information!
        </p>

    <form action="update_event.php" method="POST" enctype="multipart/form-data">
    <div class="createEvForm">

        <input type="hidden" name="event_id" value="<?php echo $event['event_id']; ?>">

        <label for="event">Event Name (required):</label>
        <input type="text" name="event_name" value="<?php echo $event['event_name']; ?>">

        <label for="organizer">Organizer(required):</label>
        <input type="text" name="organizer" value="<?php echo $event['organizer']; ?>">

        <label for="category">Which Category:</label>
        <select id="category" name="category">
            <option value="Education" <?php if ($event['category'] === 'Education') echo 'selected'; ?>>Education</option>
            <option value="Party" <?php if ($event['category'] === 'Party') echo 'selected'; ?>>Party</option>
            <option value="Food" <?php if ($event['category'] === 'Food') echo 'selected'; ?>>Food</option>
        </select>

        <label for="date_time">Date & Time</label>
        <input type="datetime-local" name="date_time" value="<?php echo date('Y-m-d\TH:i', strtotime($event['date_time'])); ?>">

        <label for="date">Date:</label>
        <input type="date" name="date">

        <label for="time">Time:</label>
        <input type="time" name="time">

        <label for="location">Location(required):</label>
        <input type="text" name="location" value="<?php echo $event['location']; ?>">

        </div>

        <div class="form-details">
        <label for="Description">Description(required):</label>
        <textarea type="text" name="description" rows= "7" cols="50" value="<?php echo $event['description']; ?>"></textarea>

        <label for="photo">Upload picture (required):</label>
        <input type="file" name="photo" accept="image/*">

        <input type="submit" value="Update">
        </div>

    </form>

    </div>

</section>

    <?php
} else {
    echo "Event not found!";
}
?>
