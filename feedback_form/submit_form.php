<?php
// Database credentials
$host = 'localhost';
$user = 'root'; // Default username for XAMPP
$password = ''; // Default password for XAMPP
$database = 'feedback_db'; // Use your actual database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO feedback (name, email, feedback) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $feedback); // "sss" for three strings

// Execute the statement
if ($stmt->execute()) {
    echo "Thank you for your feedback!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
