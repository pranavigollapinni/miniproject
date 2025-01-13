<?php
// Include the database connection
include('db.php');

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $num_people = $_POST['num_people'];

    // Redirect to another page if "Others" is selected
    if ($destination === 'Others') {
        header('Location: other_destination.php');
        exit;
    }

    // Prepare SQL query to insert data into the bookings table
    $sql = "INSERT INTO bookings (name, email, phone, address, destination, travel_date, num_people)
            VALUES ('$name', '$email', '$phone', '$address', '$destination', '$date', '$num_people')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect to confirm_booking.php
        header('Location: confirm_booking.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Booking Details - The Infinite Road</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Start Travelling</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="booking.php">Booking</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Booking Details Section -->
    <section class="booking-section" id="booking">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-center mb-4">Booking Details</h2>
                    <!-- Booking Form -->
                    <form action="booking.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="mb-3">
                            <label for="destination" class="form-label">Destination</label>
                            <select class="form-control" id="destination" name="destination" required>
                                <option value="">-- Select a Destination --</option>
                                <option value="Goa">Goa</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Mysore">Mysore</option>
                                <option value="Ladakh">Ladakh</option>
                                <option value="Manali">Manali</option>
                                <option value="Kanyakumari">Kanyakumari</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Travel Dates</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="num_people" class="form-label">Number of People</label>
                            <input type="number" class="form-control" id="num_people" name="num_people" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Booking</button>
                    </form>
                    <a href="index.php" class="btn btn-secondary mt-4">Back to Home</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap core JS and other scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
