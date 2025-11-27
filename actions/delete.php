<?php
include "../config/db.php";

$id = $_GET['id'];
$stmt = $test->prepare("DELETE FROM pdos WHERE id=?");
$stmt->execute([$id]);

header("Location: ../index.php");
exit;
