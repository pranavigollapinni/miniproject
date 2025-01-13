<?php
include 'db.php';

// Get package ID from query string (assume it is passed via URL)
$package_id = isset($_GET['package_id']) ? $_GET['package_id'] : 1;  // Default to package 1 if not provided

// Query to fetch rooms based on package ID
$room_query = "SELECT * FROM rooms WHERE package_id = $package_id";
$room_result = mysqli_query($conn, $room_query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Goa Hotels</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .content {
            padding: 20px;
        }
        .hotel-section {
            margin: 20px 0;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .hotel-section h3 {
            margin-bottom: 15px;
        }
        .room-list {
            list-style-type: none;
            padding-left: 0;
        }
        .room-list li {
            margin: 20px 0;
        }
        .room-list img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            margin-right: 15px;
        }
        .room-details {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>

    <div class="content">
        <header>
            <h1>Hotels and Rooms for Package <?php echo $package_id; ?></h1>
        </header>

        <!-- Hotel Section displaying rooms -->
        <section class="hotel-section">
            <h3>Rooms Available</h3>
            <?php
            if (mysqli_num_rows($room_result) > 0) {
                echo '<ul class="room-list">';
                while ($room = mysqli_fetch_assoc($room_result)) {
                    echo '<li>';
                    echo '<div class="room-details">';
                    // Display image if available (you can add a column in rooms table for image paths)
                    echo '<img src="' . (isset($room['image_url']) ? $room['image_url'] : 'default-room.jpg') . '" alt="Room Image">';
                    echo '<div>';
                    echo '<strong>' . $room['hotel_name'] . ' - ' . $room['room_type'] . '</strong><br>';
                    echo 'Price: ' . $room['price'] . '<br>';
                    echo 'Availability: ' . $room['availability'] . '<br>';
                    echo '</div>';
                    echo '</div>';
                    echo '</li>';
                }
                echo '</ul>';
            } else {
                echo '<p>No rooms available for this package.</p>';
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </section>
    </div>

</body>
</html>
