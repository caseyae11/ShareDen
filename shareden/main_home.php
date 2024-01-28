<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="casey.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" />


</head>
<body>

<header>
        <div class="logo">
        <h1><a href="main_home.php">ShareDen</a></h1>
        </div>
        
        <div class="search">
            <form action="search_results.php" method="GET">
            <i class="fas fa-search"></i>
                <input type="text" id="search" name="search" placeholder="Search by title or category">
                <button type="submit">Search</button>
            </form>
        </div>

        <div class="navigation">
            <ul>
                <li><a href="event.php">Create Event</a></li>
                <li><a href="event_page.php">View Events</a></li>
                <li><a href="userViewEvents.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
</header>

<section class="page1">
    <div class="info">
        <h1>Welcome</h1>
        <p>Introducing ShareDen, our innovative project dedicated to cultivating a vibrant college community. This platform enables students to effortlessly share and discover various events, fostering engagement and connection among peers. Become a part of our dynamic digital hub, enhancing your college experience and forging meaningful connections throughout your educational journey.</p>
    </div>
    <div class="pic">
            <img src="sharedenImg/welcome.png" alt="img">
        </div>
</section>

<section class="explore">
    <div class="info">
        <h1>Start Exploring Events</h1>
        <p>Connecting with new faces and exploring exciting events has never been more effortless.</p>

        <div class="choose">
            <div class="choose1">
            <img src="sharedenImg/choose.png" alt="img">
                <h3>Choose an Event</h3>
                <p>Enrich your campus experience through a variety of engaging events.</p>
            </div>
            <div class="choose1">
            <img src="sharedenImg/save.png" alt="img">
                <h3>Save your Event</h3>
                <p>Add the event to your saved list and receive notifications when the event is about to begin. Stay in the loop, stay engaged!</p>
            </div>
        </div>
    </div>
</section>

<section class="category">
    <h1>Choose a category for more tailored results </h1>
    <p>Discover the most popular events and easily filter through them to find the ones that align with your interests. Your ideal event is just a search away. Start exploring now!</p>

    <div class="categories">
        <div class="category-item">
            <img src="sharedenImg/education.png" alt="img">
            <p>Education</p>
        </div>
        <div class="category-item">
            <img src="sharedenImg/health.png" alt="img">
            <p>Health</p>
        </div>
        <div class="category-item">
            <img src="sharedenImg/music.png" alt="img">
            <p>Music</p>
        </div>
        <div class="category-item">
            <img src="sharedenImg/dance.png" alt="img">
            <p>Dance</p>
        </div>
        <div class="category-item">
            <img src="sharedenImg/art.png" alt="img">
            <p>Art</p>
        </div>
        <div class="category-item">
            <img src="sharedenImg/culture.png" alt="img">
            <p>Culture</p>
        </div>
    </div>
</section>

<!-- THIS section class recommended cannot be edited in the html and css -->

<section class="recommended">
    <p>Recommended</p>
    <div class="horizontal-line"></div>
    <div class="recommended-events">
   
    <div id="events-library">
        <!-- Events will be displayed here -->
    </div>
    </div>
   
</section>

<!-- THIS section class recommended cannot be edited in the html and css -->


<section class="footer">
    <div class="info">
        <div class="logo">
            <h1>ShareDen</h1>
        </div>
        <p>©2023 Debug Demons. All rights reserved</p>
        <p>A platform to empower connections, foster community, and enrich campus life.</p>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
    
    </div>
</section>



<script src="casey.js"></script>

</body>
</html>