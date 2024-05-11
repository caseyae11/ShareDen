<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or show an error message
    header("Location: login.php");
    exit();
}

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
    <h1>CREATE EVENT</h1>
        <p>If you would like to submit your own event to be featured on our platform, we welcome
            your participation! To ensure the quality and relevance of events for all our users,
            we have a submission process in place. <br>
            Submit this form and we will get in touch with you!
        </p>
        

    <form action="test.php" method="post" enctype="multipart/form-data">
        <div class="createEvForm">
            
            <label for="event">Event Name (required):</label>
            <input type="text" name="event_name" value="Football competition">

            <label for="organizer">Organizer(required):</label>
            <input type="text" name="organizer" value="Casey">

            <label for="category">Which Category:</label>
            <select id="category" name="category">
                <option value="Education">Education</option>
                <option value="Party">Party</option>
                <option value="Food">Food</option>
            </select>

            <label for="date_time">Date & Time</label>
            <input type="datetime-local" name="date_time">

            <label for="date">Date:</label>
            <input type="date" name="date"  required>

            <label for="time">Time:</label>
            <input type="time" name="time"  required>
            
            <label for="location">Location(required):</label>
            <input type="text" name="location" value="Sheridan Mac Hazel Campus">
          
        </div>
        
        <div class="form-details">
            <label for="Description">Description(required):</label>
            <textarea type="text" name="description" rows= "7" cols="50" value="Come play ball with us my gs. Winner takes all."></textarea>

            <label for="photo">Upload picture (required):</label>
            <input type="file" name="photo" accept="image/*" placeholder="Drop or Upload Photos" required>

            <input type="submit" value="Submit" id="submit">
        </div>

    </form>

    </div>

</section>


<!-- <section class="footer">
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
</section> -->



</body>
</html>