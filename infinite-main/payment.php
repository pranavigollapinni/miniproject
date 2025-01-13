<?php
session_start();

// Retrieve booking details
$destination = isset($_SESSION['destination']) ? $_SESSION['destination'] : null;

if ($destination) {
    echo "<h1>Payment for Your Trip</h1>";
    echo "<p>You are about to pay for your trip to <strong>$destination</strong>.</p>";

    // Integrate payment gateway button here (example with PayPal)
    echo '
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <!-- PayPal business account email -->
        <input type="hidden" name="business" value="your-paypal-email@example.com">
        
        <!-- Payment details -->
        <input type="hidden" name="item_name" value="Trip to ' . htmlspecialchars($destination) . '">
        <input type="hidden" name="amount" value="100.00"> <!-- Replace with dynamic amount -->
        <input type="hidden" name="currency_code" value="USD">
        
        <!-- Return and cancel URLs -->
        <input type="hidden" name="return" value="success.php">
        <input type="hidden" name="cancel_return" value="cancel.php">
        
        <!-- PayPal command -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <input type="submit" value="Pay with PayPal">
    </form>';
} else {
    echo "<h1>Error</h1>";
    echo "<p>Missing booking details. Please go back and try again.</p>";
}
?>
