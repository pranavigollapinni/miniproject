<?php
include 'db.php';

$id = $_GET['id'];

// Fetch registration details from the database
$stmt = $conn->prepare("SELECT * FROM registrations WHERE id = ?");
$stmt->execute([$id]);
$registration = $stmt->fetch(PDO::FETCH_ASSOC);

if ($registration) {
    echo "<h2>Registration Details</h2>";
    echo "<p>Name: {$registration['name']}</p>";
    echo "<p>Email: {$registration['emailid']}</p>";
    echo "<p>Phone: {$registration['phonenumber']}</p>";
    echo "<p>Date of Birth: {$registration['dob']}</p>";
    echo "<p>Country: {$registration['country']}</p>";
    echo "<p>Package: {$registration['package']}</p>";
    echo "<p>Hotel: {$registration['hotel']}</p>";
    echo "<p>Room: {$registration['room']}</p>";
    echo "<p>Persons: {$registration['persons']}</p>";
    echo "<p>Total Amount: ₹" . number_format($registration['total_amount']) . "</p>";
    echo "<a href='payment.php' class='btn btn-primary'>Proceed to Payment</a>";
} else {
    echo "<p>Registration not found.</p>";
}
?>
