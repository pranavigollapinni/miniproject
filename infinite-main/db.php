<?php
$servername = "localhost"; // Server name
$username = "root";        // Default MySQL username for XAMPP
$password = "";            // Default MySQL password for XAMPP (empty by default)
$dbname = "travel_bookings"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
