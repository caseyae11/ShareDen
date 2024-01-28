<?php
// Check if the event ID is provided in the URL
if (!isset($_GET['eventId'])) {
    // Redirect or handle the case when the event ID is not provided
    header("Location: errorPage.php"); // Redirect to an error page
    exit();
}

// Get the event ID from the query parameter
$eventId = $_GET['eventId'];

// Establish a database connection
$dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
$db_username = "root";
$db_password = "";

$pdo = new PDO($dsn, $db_username, $db_password);

    // Prepare a SQL statement to fetch event details by ID
$stmt = $pdo->prepare("SELECT * FROM events WHERE event_id = :eventId");
$stmt->bindParam(':eventId', $eventId);
$stmt->execute();
$eventDetails = $stmt->fetch(PDO::FETCH_ASSOC);

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

    <section class="eventsInfo">
        <div class="event-info">
            <h3>Event Information</h3>
            <div class="horizontal-line"></div>
            <div id="eventInfo">
                <?php
                     if (!$eventDetails) {
                        // Handle case when event with provided ID doesn't exist
                        echo "Event not found";
                    } else {
                        // Display event details
                        echo "<img src='{$eventDetails['image_path']}' alt='{$eventDetails['event_name']}'>";
                        echo "<div class='horizontal-line'></div>";
                        echo "<h1>{$eventDetails['event_name']}</h1>";
                        echo "<p>Organizer: {$eventDetails['organizer']}</p>";
                        echo "<p>Category: {$eventDetails['category']}</p>";
                        echo "<p>Date & Time: {$eventDetails['date_time']}</p>";
                        echo "<p>Date: {$eventDetails['date']}</p>";
                        echo "<p>Time: {$eventDetails['time']}</p>";
                        echo "<p>Location: {$eventDetails['location']}</p>";
                        echo "<p>Description: {$eventDetails['description']}</p>";
                    }
                
                ?>
            </div>
        </div>

    </section>

    <section class="footer">
    <div class="info">
        <div class="logo">
            <h1>ShareDen</h1>
        </div>
        <p>©2023 Debug Demons. All rights reserved</p>
        <p>A platform to empower connections, foster community, and enrich campus life.</p>
        <img src="facebook.jpg" alt="img">
        <img src="twitter.jpg" alt="img">
        <img src="instagram.jpg" alt="img">
    </div>
    </section>
  
</body>
</html>

   

