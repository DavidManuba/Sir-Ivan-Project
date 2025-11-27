<?php
include "../config/db.php";

$id = $_GET['id'];
$stmt = $test->prepare("SELECT * FROM pdos WHERE id=?");
$stmt->execute([$id]);
$row = $stmt->fetch();
?>

<form action="../actions/update.php" method="POST">
    <h2>Edit Programmer</h2>

    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    First Name: <input type="text" name="first_name" value="<?= $row['first_name'] ?>"><br><br>
    Last Name: <input type="text" name="last_name" value="<?= $row['last_name'] ?>"><br><br>
    Specialty: <input type="text" name="specialty" value="<?= $row['specialty'] ?>"><br><br>
    Years Experience: <input type="number" name="years_experience" value="<?= $row['years_experience'] ?>"><br><br>
    Preferred Language: <input type="text" name="preferred_lang" value="<?= $row['preferred_lang'] ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $row['email'] ?>"><br><br>

    <button type="submit">Update</button>
</form>
