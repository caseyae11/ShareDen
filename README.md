# ShareDen

**ShareDen** is a community-focused event sharing platform designed exclusively for Sheridan College students. It serves as an interactive hub for students to explore, share, and engage with local events, enriching campus life and fostering community interaction.

## Introduction

The development of ShareDen introduces a user-friendly website that connects students with local events. The platform is built to enhance the social and academic lives of students by providing a central hub for event discovery and participation.

## Project Overview

ShareDen offers a dynamic and interactive experience for users with features such as event listings, customizable profiles, and community tools. These features are designed to encourage active participation and foster a vibrant community atmosphere.

## Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- SQL
- AJAX

## Features

- **Personalized Event Recommendations:** Tailor event suggestions based on user preferences and past interactions.
- **Interactive Event Calendars:** Allow users to find and keep track of events easily.
- **Social Sharing and Community Discussion Forums:** Enable users to share events and engage in discussions, enhancing the social experience.

## Installation

To set up ShareDen locally, follow these steps:

1. Clone the repository:
   ```
   git clone https://github.com/caseyae11/ShareDen.git
   ```
2. Navigate to the project directory:
   ```
   cd ShareDen
   ```
3. Import the SQL database schema and data from the provided SQL file into your MySQL database.

4. Configure your database connection settings in `config.php` (or relevant PHP files).

5. Start your local server and access the project through your browser.

## Challenges and Solutions

The primary challenge was balancing the functional requirements with an intuitive user experience, catering to a diverse student body. This was addressed by adopting adaptive design principles and incorporating continuous feedback from user sessions to refine the interface and functionality.

## Code Snippets

Here is a snippet from the event fetching functionality, which demonstrates interaction with the database to retrieve event details:

```php
// Fetch events based on category
if (isset($_GET['category'])) {
    $eventType = $_GET['category'];
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=debug_demons;charset=utf8mb4", "root", "");
        $stmt = $pdo->prepare("SELECT * FROM events WHERE LOWER(category) = LOWER(?)");
        $stmt->execute([$eventType]);
        $events = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($events as $event) {
            echo "<div><h3>{$event['event_name']}</h3><img src='{$event['image_path']}' alt='{$event['event_name']}' width='200'></div>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
```

## License

This project is licensed under the MIT License - see the LICENSE.md file for details.

## Acknowledgements

- Sheridan College for providing the environment to inspire this project.
- All students and faculty who participated in the testing and feedback sessions.
