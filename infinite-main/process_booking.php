<?php
session_start();

// Check if the user is logged in
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Check if the form was submitted
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $num_people = $_POST['num_people'];

    // Here you would typically save the booking details to a database
    // For now, we'll just show a confirmation message

    echo "<h2>Booking Confirmed!</h2>";
    echo "<p>Destination: " . htmlspecialchars($destination) . "</p>";
    echo "<p>Date: " . htmlspecialchars($date) . "</p>";
    echo "<p>Number of People: " . htmlspecialchars($num_people) . "</p>";
} else {
    echo "Invalid request.";
}
?>
