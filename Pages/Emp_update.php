<?php
session_start();
include 'db.php';

// Ensure the student is logged in
if (!isset($_SESSION['student_id'])) {
    header('Location: student_login.php');
    exit();
}

$student_id = $_SESSION['student_id'];

// Fetch the current student's details
$sql = "SELECT * FROM students WHERE id = '$student_id'";
$result = $conn->query($sql);
$student = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Update student profile
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $process = $_POST['process'];
    $empid = $_POST['empid'];
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : $student['password'];

    $update_sql = "UPDATE students SET 
                   name = '$name', 
                   email = '$email', 
                   course = '$course', 
                   process = '$process',
                   empid = '$empid',
                   password = '$password'
                   WHERE id = '$student_id'";

    if ($conn->query($update_sql)) {
        echo "Profile updated successfully!";
        // Optionally, redirect to the profile page
        header('Location: Employee_profile.php');
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!-- Profile edit form -->
<form method="POST">
    <div class="form-group">
        <label for="name">Full Name</label>
        <input class="form-control" name="name" type="text" id="name" required value="<?= $student['name'] ?>">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" name="email" type="email" id="email" required value="<?= $student['email'] ?>">
    </div>

    <div class="form-group">
        <label for="course">Course</label>
        <input class="form-control" name="course" type="text" id="course" required value="<?= $student['course'] ?>">
    </div>

    <div class="form-group">
        <label for="process">Process</label>
        <input class="form-control" name="process" type="text" id="process" value="<?= $student['process'] ?>">
    </div>

    <div class="form-group">
        <label for="empid">Employee ID</label>
        <input class="form-control" name="empid" type="text" id="empid" value="<?= $student['empid'] ?>">
    </div>

    <div class="form-group">
        <label for="password">Password (Leave blank if you don't want to change)</label>
        <input class="form-control" name="password" type="password" id="password" placeholder="New Password">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </div>
</form>
