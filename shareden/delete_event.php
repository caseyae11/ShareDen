<?php
$dsn = "mysql:host=localhost;dbname=Database;charset=utf8mb4";
$db_username = "root";
$db_password = "";

$pdo = new PDO($dsn, $db_username, $db_password);

    $event_id = $_POST["event_id"];
    
        // Prepare and execute the DELETE statement
        $stmt = $pdo->prepare("DELETE FROM events WHERE event_id = $event_id;");
        if($stmt->execute()){
            ?><p>Record deleted</p><?php
        }else{
            ?><p>Could not delete record</p><?php
        }
        
        if ($stmt->rowCount() > 0) {
            echo "Article deleted!";
        } else {
            echo "Article not found or already deleted!";
        }
?>
