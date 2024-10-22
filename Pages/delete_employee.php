<?php
include 'db.php';
$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id='$id'";
if ($conn->query($sql)) {
    header('Location: Employees.php');
} else {
    echo "Error: " . $conn->error;
}
?>
