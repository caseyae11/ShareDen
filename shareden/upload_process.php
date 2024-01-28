<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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



        
        ////// INSERT INTO DATABSE PART 
       
        //get user and form data
       
        $event_name = $_POST["event_name"];
        $organizer = $_POST["organizer"];
        $category = $_POST["category"];
        $date_time = $_POST["date_time"];
        $location = $_POST["location"];
        $description = $_POST["description"];

        //connect to databse
        $dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
        $db_username = "root";
        $db_password = "";

        //create pdo instance
        $pdo = new PDO($dsn, $db_username, $db_password);

        //prepare stmt
        $stmt = $pdo->prepare("INSERT INTO events (event_name, image_path, organizer, category, date_time, location, description) VALUES (?, ?, ?, ?, ?, ?, ?)");

        // Bind parameters and execute the statement
        $stmt->bindParam(1, $event_name);
        $stmt->bindParam(2, $relativeImagePath);
        $stmt->bindParam(3, $organizer);
        $stmt->bindParam(4, $category);
        $stmt->bindParam(5, $date_time);
        $stmt->bindParam(6, $location);
        $stmt->bindParam(7, $description);


        if ($stmt->execute()) {
            echo "event uploaded successfully!";
        } else {
            echo "Failed to upload the event.";
        }

    }
}


?>