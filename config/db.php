<?php
$host = "localhost";
$db = "test"; // Notice the space // Ensure this matches the current database name
$user = "root";        // Default user for XAMPP
$pass = "";            // Default password is usually empty in XAMPP

try {
    // Create a new PDO instance
$test = new PDO("mysql:host=$host;dbname=$db", username:$user, password: $pass);
    $test->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Set the PDO error mode to exception
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>