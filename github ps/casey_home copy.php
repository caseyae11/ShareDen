<?php?>

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
          <h1>ShareDen</h1>
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
                <li><a href="createEvent.html">Create Event</a></li>
                <li><a href="events-alt.html">Events</a></li>
                <li><a href="saved-alt.html">Saved</a></li>
                <li><a href="profile.html">Profile</a></li>
            </ul>
        </div>
</header>

<section class="page1">
    <div class="info">
        <h1>Welcome</h1>
        <p>Introducing ShareDen, our innovative project dedicated to cultivating a vibrant college community. This platform enables students to effortlessly share and discover various events, fostering engagement and connection among peers. Become a part of our dynamic digital hub, enhancing your college experience and forging meaningful connections throughout your educational journey.</p>
    </div>
    <img src="" alt="img">
</section>

<section class="explore">
    <div class="info">
        <h1>Start Exploring Events</h1>
        <p>Connecting with new faces and exploring exciting events has never been more effortless.</p>

        <div class="choose">
            <div class="choose1">
                <img src="" alt="img">
                <h3>Choose an Event</h3>
                <p>Enrich your campus experience through a variety of engaging events.</p>
            </div>
            <div class="choose1">
                <img src="" alt="img">
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
            <img src="placeholder.png" alt="img">
            <p>Notes</p>
        </div>
        <div class="category-item">
            <img src="placeholder.png" alt="img">
            <p>Notes</p>
        </div>
        <div class="category-item">
            <img src="placeholder.png" alt="img">
            <p>Notes</p>
        </div>
        <div class="category-item">
            <img src="placeholder.png" alt="img">
            <p>Notes</p>
        </div>
        <div class="category-item">
            <img src="placeholder.png" alt="img">
            <p>Notes</p>
        </div>
        <div class="category-item">
            <img src="placeholder.png" alt="img">
            <p>Notes</p>
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
        <img src="facebook.jpg" alt="img">
        <img src="twitter.jpg" alt="img">
        <img src="instagram.jpg" alt="img">
    </div>
</section>



<script src="casey.js"></script>

</body>
</html>