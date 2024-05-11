<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id']; // Retrieve the user_id from the session
    } else {
        // Redirect the user to the login page or handle the case when the user isn't logged in
        // For example: header("Location: login.php");
        exit("User is not logged in.");
    }

    // Check if a file was uploaded successfully
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['photo'];

        // Perform file validations (e.g., file type, size, etc.)
        $allowedTypes = ['image/jpeg', 'image/png']; // Define allowed file types
        $maxFileSize = 5 * 1024 * 1024; // 5MB limit

        if (!in_array($file['type'], $allowedTypes)) {
            echo "Invalid file type. Please upload a JPEG or PNG image.";
            exit();
        }

        if ($file['size'] > $maxFileSize) {
            echo "File size exceeds the limit (5MB).";
            exit();
        }
      
        // Move the uploaded file to a permanent location
        $uploadDirectory = '/Applications/XAMPP/xamppfiles/htdocs/sharedenImg/'; // Update with your storage path
        $filename = uniqid() . '_' . $file['name']; // Generate a unique filename
        $destination = $uploadDirectory . $filename;
        $relativeImagePath = '../sharedenImg/' . $filename;

        if (!move_uploaded_file($file['tmp_name'], $destination)) {
            echo "Failed to move the uploaded file.";
            exit();
        }

        //get user and form data
        $event_name = $_POST["event_name"];
        $organizer = $_POST["organizer"];
        $category = $_POST["category"];
        $date_time = $_POST["date_time"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $location = $_POST["location"];
        $description = $_POST["description"];
        // $photo = $_POST["photo"]; // No need for this line, file path already obtained

        //connect to database
        $dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
        $db_username = "root";
        $db_password = "";

        //create pdo instance
        $pdo = new PDO($dsn, $db_username, $db_password);

        //prepare stmt
        $stmt = $pdo->prepare("INSERT INTO events (user_id, event_name, image_path, organizer, category, date_time, date, time, location, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Bind parameters and execute the statement
        $stmt->bindParam(1, $user_id);
        $stmt->bindParam(2, $event_name);
        $stmt->bindParam(3, $relativeImagePath);
        $stmt->bindParam(4, $organizer);
        $stmt->bindParam(5, $category);
        $stmt->bindParam(6, $date_time);
        $stmt->bindParam(7, $date);
        $stmt->bindParam(8, $time);
        $stmt->bindParam(9, $location);
        $stmt->bindParam(10, $description);

        if ($stmt->execute()) {
            echo "Event uploaded successfully!";
            header("Location: userViewEvents.php");
        } else {
            echo "Failed to upload the event.";
        }
    }
}

?>
