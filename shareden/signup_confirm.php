<?php
$dsn = "mysql:host=localhost;dbname=debug_demons;charset=utf8mb4";
$db_username = "root";
$db_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $pdo = new PDO($dsn, $db_username, $db_password);

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')");
    $stmt->execute();

    
  echo "<h1>Registration Successful</h1>";
  header("Location: login.php");
    exit();
 
}
?>

