<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Search</title>
</head>
<body>
    <input type="text" id="search" placeholder="Search by title or category">
    <button onclick="searchEvents()">Search</button>

    <div id="events-container">
        <!-- Search results will be displayed here -->
    </div>

    <script src="search.js"></script>
</body>
</html>
