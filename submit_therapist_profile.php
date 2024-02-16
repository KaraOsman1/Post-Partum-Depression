<?php
// Include your database connection script
include 'config/db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $level_of_education = $_POST['level_of_education'];
    $years_of_experience = $_POST['years_of_experience'];

    // Prepare and execute SQL query to insert data into the database
    $sql = "INSERT INTO THERAPIST_PROFILE (Name, Email, Phone, Level_of_education, Years_of_experience) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $phone, $level_of_education, $years_of_experience);
    
    if ($stmt->execute()) {
        // Insertion successful, redirect to success page or back to form
        header("Location: success.php"); // Change 'success.php' to your success page
        exit();
    } else {
        // Insertion failed, handle error
        echo "Error: " . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
