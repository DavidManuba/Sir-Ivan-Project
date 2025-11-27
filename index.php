<?php include "config/db.php"; ?>

<h2>Programmer Registration List</h2>
<a href="views/create_form.php">Add Programmer</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Specialty</th>
        <th>Experience</th>
        <th>Preferred Language</th>
        <th>Email</th>
        <th>Date Added</th>
        <th>Actions</th>
    </tr>

<?php
$stmt = $test->prepare("SELECT * FROM pdos");
$stmt->execute();
$data = $stmt->fetchAll();

foreach ($data as $row):
?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['first_name'] . " " . $row['last_name'] ?></td>
        <td><?= $row['specialty'] ?></td>
        <td><?= $row['years_experience'] ?></td>
        <td><?= $row['preferred_lang'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['date_added'] ?></td>
        <td>
            <a href="views/edit_form.php?id=<?= $row['id'] ?>">Edit</a> | 
            <a href="actions/delete.php?id=<?= $row['id'] ?>" 
               onclick="return confirm('Delete this?')">Delete</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>
