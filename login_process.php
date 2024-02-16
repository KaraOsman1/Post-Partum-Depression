<?php
// login_process.php

// Include your database connection file
include 'db_connection.php';

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];
$user_type = $_POST['user_type'];

// Perform authentication against the database
$sql = "SELECT * FROM $user_type WHERE Username = '$username' AND Password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // Authentication successful, redirect to the appropriate page based on user type
    switch ($user_type) {
        case 'victims':
            header('Location: victims/index.php');
            break;
        case 'therapist':
            header('Location: therapists/index.php');
            break;
        case 'admin':
            header('Location: admin/index.php');
            break;
        default:
            // Invalid user type
            header('Location: login.php');
            break;
    }
} else {
    // Authentication failed, redirect back to login page with error message
    header('Location: login.php?error=1');
}
?>
