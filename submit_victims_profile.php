<?php
// Include your database connection script
include 'config/db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $chief_complain = $_POST['chief_complain'];

    // Prepare and execute SQL query to insert data into the VICTIMS_PROFILE table
    $sql = "INSERT INTO VICTIMS_PROFILE (Name, Age, Email, Phone, Chief_Complain) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $age, $email, $phone, $chief_complain);
    
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
