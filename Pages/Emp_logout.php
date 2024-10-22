<?php
session_start();

// Destroy the session to log out the student
session_unset();
session_destroy();

// Redirect to the login page
header('Location: employee_login.php');
exit();
?>
