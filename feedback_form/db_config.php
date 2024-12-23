<?php
// db_config.php

// Database credentials
$host = 'localhost';  // Database server (usually localhost)
$user = 'root';       // Username (default for XAMPP is root)
$password = '';       // Password (default for XAMPP is empty)
$database = 'feedback_db'; // Your database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
