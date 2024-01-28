<?php
session_start(); // Start the session if not started already

// Check if user is logged in and retrieve their user_id
if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page if not logged in
    // For example: header("Location: login.php");
    exit("User is not logged in.");
}

$dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
$db_username = "root";
$db_password = "";

$pdo = new PDO($dsn, $db_username, $db_password);

// Fetch event details for $eventId from the database
$stmt = $pdo->query("SELECT * FROM events");
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
            <h2>Event Information</h2>
            <div class="horizontal-line"></div>
            <div class="event_page">
            <div id="longEvent">
                <?php
                    foreach ($events as $event) {
                        echo '<a href="lrgEventDetails.php?event_id=' . $event['event_id'] . '">'; 
                        echo '<div class="lrguserevent-container">';
                        echo '<div class="info">';
                        echo '<p>Date & Time: ' . $event['date_time'] . '</p>';
                        echo "<h3>{$event['event_name']}</h3>";
                        echo "<p>Category: {$event['category']}</p>";
                        echo '<p>Date: ' . $event['date'] . ' Time: ' . $event['time'] . '</p>';
                        echo '</div>';
                        echo '<div class="img">';
                        echo "<img src='http://localhost/sharedenImg/{$event['image_path']}' alt='{$event['event_name']}' width='200'>";
                        echo '</div>';
                        echo '</div>';
                        echo '</a>';
                    }
                ?>
            </div>
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

   

