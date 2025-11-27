<?php
include "../config/db.php";  // Correctly include your database connection

try {
    // Prepare the SQL statement
    $stmt = $test->prepare("INSERT INTO pdos (first_name, last_name, specialty, years_experience, preferred_lang, email)
    VALUES (?,?,?,?,?,?)");

    // Execute the statement
    $stmt->execute([
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['specialty'],
        $_POST['years_experience'],
        $_POST['preferred_lang'],
        $_POST['email']
    ]);

    // Redirect after successful insertion
    header("Location: ../index.php");
    exit;
} catch (PDOException $e) {
    echo "Error inserting data: " . $e->getMessage();  // For debugging
}
?>