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
// Get the user_id from the session
$user_id = $_SESSION['user_id'];

// Fetch user details based on user_id
// Assuming $pdo is your database connection
$stmt = $pdo->prepare("SELECT username, email FROM users WHERE user_id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Fetch events created by the user
$stmt = $pdo->prepare("SELECT * FROM events WHERE user_id = ?");
$stmt->execute([$user_id]);
$userEvents = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

<section class="user-profile">
    <div class="user-info">
        <h3>Hey there!! <?php echo $user['username']; ?></h3>
        <!-- <p> <?php //echo $user['email']; ?></p> -->
        <p>Find you created events, liked events and favurite evnts down below. You could also edit or delete your created events if you dont feel up to it.</p>
        <!-- Display other user information as needed -->
    </div>

    <div class="user-events">
        <h3>User's Events</h3>
        <div class="horizontal-line"></div>
        <div id="events-library">
            <?php
            if ($userEvents) {
                foreach ($userEvents as $event) {
                    echo '<div class="userevent-container">';
                    echo '<a href="eventDetails.php?event_id=' . $event['event_id'] . '">'; 
                    echo '<img src="' . $event['image_path'] . '" alt="' . $event['event_name'] . '">';
                    echo '<h3>' . $event['event_name'] . '</h3>';
                // echo '<p>Organizer: ' . $event['organizer'] . '</p>';
                //  echo '<p>Category: ' . $event['category'] . '</p>';
                    echo '<p>Date & Time: ' . $event['date_time'] . '</p>';
                //  echo '<p>Date: ' . $event['date'] . '</p>';
                // echo '<p>Time: ' . $event['time'] . '</p>';
                    echo '<p>Location: ' . $event['location'] . '</p>';
                //  echo '<p>Description: ' . $event['description'] . '</p>';
                    echo '</a>';
                    echo '</div>';
                }
            } else {
                echo "No events created by this user.";
            }
            ?>
        </div>
        
    </div>
</section>

<!-- Other sections and footer content -->

</body>
</html>
