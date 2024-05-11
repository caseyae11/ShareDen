<?php
$dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
$db_username = "root";
$db_password = "";

if(isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $pdo = new PDO($dsn, $db_username, $db_password);
    $stmt = $pdo->prepare("SELECT event_id, event_name, image_path, date_time, category, date, time FROM events WHERE LOWER(event_name) LIKE :searchTerm OR LOWER(category) LIKE :searchTerm");
    $stmt->execute([':searchTerm' => "%$searchTerm%"]);
    $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Events</title>
    <link rel="stylesheet" href="casey.css">
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


    <section>
    <div id="longEvent">
    <h1>Search Results:</h1>
    <?php
    foreach ($searchResults as $result) {
        echo '<a href="lrgEventDetails.php?event_id=' . $result['event_id'] . '">'; 
        echo '<div class="lrguserevent-container">';
        echo '<div class="info">';
        echo '<p>Date & Time: ' . $result['date_time'] . '</p>';
        echo "<h3>{$result['event_name']}</h3>";
        echo "<p>Category: {$result['category']}</p>";
        echo '<p>Date: ' . $result['date'] . ' Time: ' . $result['time'] . '</p>';
        echo '</div>';
        echo '<div class="img">';
        echo "<img src='http://localhost/sharedenImg/{$result['image_path']}' alt='{$result['event_name']}' width='200'>";
        echo '</div>';
        echo '</div>';
        echo '</a>';
    }
    
    ?>
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


