<?php
$servername = "localhost"; // Your server name
$username = "root";        // Default XAMPP username
$password = "";            // Default XAMPP password
$dbname = "ak_wedding_planner"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
