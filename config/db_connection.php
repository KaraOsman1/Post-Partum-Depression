<?php
// Replace these values with your actual database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ppd';

// Create a connection to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set the character set to UTF-8
mysqli_set_charset($conn, 'utf8');
?>
