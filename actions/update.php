<?php
include "../config/db.php";

$stmt = $test->prepare("UPDATE pdos 
SET first_name=?, last_name=?, specialty=?, years_experience=?, preferred_lang=?, email=?
WHERE id=?");

$stmt->execute([
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['specialty'],
    $_POST['years_experience'],
    $_POST['preferred_lang'],
    $_POST['email'],
    $_POST['id']
]);

header("Location: ../index.php");
exit;
