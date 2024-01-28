<?php?>

 <!--MAIN LANDING PAGE - User not logged in-->

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShareDen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="/group class project/assets/SDfavicon.png">
    <link rel="stylesheet" href="home_page.css">
</head>

<body>
<script src="script.js"></script>

    <header>
        <div class="logo">
            <a href="index-alt.html"><img src="../assets/Logo.png" alt="logo"></a>
        </div>
        <div class="search">
        <input type="text" id="search" placeholder="Search by title or category">
            <button onclick="searchEvents()">Search</button>
            <div id="events-container">
                <!-- Search results will be displayed here -->
            </div>

        </div>
        <div class="navigation">
            <ul>
                <li><a href="createEvent.html">Create Event</a></li>
                <li><a href="events-alt.html">Events</a></li>
                <li><a href="saved-alt.html">Saved</a></li>
                <li><a href="profile.html">Profile</a></li>
            </ul>
        </div>
    </header>

    <section class="home">
        <div class="homeInfo">
            <h1>Welcome!!</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, odio? Ipsum quo omnis reiciendis
                labore ea, quibusdam expedita dolores aliquid praesentium doloribus a veritatis esse corrupti. Soluta
                officia nulla praesentium.</p>
        </div>
        <div class="pic">
            <img src="placeholder.png" alt="img">
        </div>
    </section>

    <section class="explore">
        <h1>Start Exploring Events</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, odio? Ipsum quo omnis reiciendis labore
            ea, quibusdam expedita dolores aliquid praesentium doloribus a veritatis esse corrupti. Soluta officia nulla
            praesentium.</p>
        <div class="info1">
            <img src="placeholder.png" alt="img">
            <h3>Header</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, odio? Ipsum quo omnis reiciendis
                labore ea, quibusdam expedita dolores aliquid praesentium doloribus a veritatis esse corrupti. Soluta
                officia nulla praesentium.</p>
        </div>

        <div class="info2">
            <img src="placeholder.png" alt="img">
            <h3>Header</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, odio? Ipsum quo omnis reiciendis
                labore ea, quibusdam expedita dolores aliquid praesentium doloribus a veritatis esse corrupti. Soluta
                officia nulla praesentium.</p>
        </div>
    </section>

    <section class="category">
        <div class="categoryText">
            <h1>Category for more tailored events</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum in voluptates rerum deleniti
                beatae alias fugit.</p>
        </div>

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
        </div>            
    </section>

    <section>
        <h3>Recommended for you</h3>
        <div class="divider1"></div>
        <div class="divider2"></div>

        <div class="eventP">

        <div id="events-library">
        <!-- Events will be displayed here -->
        </div>

        </div>
        <div class="interested">
            <h3>Interested</h3>
            <div class="divider1"></div>
            <div class="divider2"></div>
            <div class="eventP">
                <a href="#" class="event">
                    <img src="concert.jpeg" alt="eventcard">
                    <div class="eventText">
                        <div class="eventTitle">
                            <h3>Travis Scott Concert</h3>
                        </div>
                        <div class="timeDetails">
                            <div class="eventDate">
                                <p>Date: </p>
                            </div>
                            <div class="dateValue">
                                <p>xxxx</p>
                            </div>
                            <div class="eventTime">
                                <p>Time: </p>
                            </div>
                            <div class="timeValue">
                                <p>xxxx</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="event">
                    <img src="concert.jpeg" alt="eventcard">
                    <div class="eventText">
                        <div class="eventTitle">
                            <h3>Travis Scott Concert</h3>
                        </div>
                        <div class="timeDetails">
                            <div class="eventDate">
                                <p>Date: </p>
                            </div>
                            <div class="dateValue">
                                <p>xxxx</p>
                            </div>
                            <div class="eventTime">
                                <p>Time: </p>
                            </div>
                            <div class="timeValue">
                                <p>xxxx</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="event">
                    <img src="concert.jpeg" alt="eventcard">
                    <div class="eventText">
                        <div class="eventTitle">
                            <h3>Travis Scott Concert</h3>
                        </div>
                        <div class="timeDetails">
                            <div class="eventDate">
                                <p>Date: </p>
                            </div>
                            <div class="dateValue">
                                <p>xxxx</p>
                            </div>
                            <div class="eventTime">
                                <p>Time: </p>
                            </div>
                            <div class="timeValue">
                                <p>xxxx</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
    </section>
    <!--FOOTER---------------------------------------------------------------------------------->
    <section class="footer">
        <img src="/group class project/assets/Logo.png" alt="logo">
        <p>©2023 Debug Demons. All rights reserved</p><br>
        <p>A platform to empower connections, foster community, and enrich campus life.</p>
        <img src="facebook.jpg" alt="facebookLogo">
        <img src="twitter.jpg" alt="twitterLogo">
        <img src="instagram.jpg" alt="instagramLogo">
    </section>


</body>

</html>