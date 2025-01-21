<?php
$goa_packages = [
    [
        "name" => "Hotel Sea View",
        "location" => "Near Baga Beach",
        "price_per_night" => 4000,
        "rooms" => [
            [
                "type" => "Standard Room",
                "price" => 4000,
                "max_persons" => 2,
                "images" => [
                    "images/s1.jpg",
                    "images/s2.jpg",
                    "images/s3.jpg"
                ]
            ],
            [
                "type" => "Deluxe Room",
                "price" => 6000,
                "max_persons" => 2,
                "images" => [
                    "images/sea-view-deluxe1.jpg",
                    "images/sea-view-deluxe2.jpg",
                    "images/sea-view-deluxe3.jpg"
                ]
            ]
        ]
    ],
    [
        "name" => "Grand Goa Resort",
        "location" => "Near Calangute Beach",
        "price_per_night" => 7000,
        "rooms" => [
            [
                "type" => "Luxury Suite",
                "price" => 7000,
                "max_persons" => 3,
                "images" => [
                    "images/grand-goa-suite1.jpg",
                    "images/grand-goa-suite2.jpg",
                    "images/grand-goa-suite3.jpg"
                ]
            ],
            [
                "type" => "Presidential Suite",
                "price" => 12000,
                "max_persons" => 4,
                "images" => [
                    "images/grand-goa-presidential1.jpg",
                    "images/grand-goa-presidential2.jpg",
                    "images/grand-goa-presidential3.jpg"
                ]
            ]
        ]
    ],
    [
        "name" => "Coastal Retreat",
        "location" => "Near Vagator Beach",
        "price_per_night" => 3000,
        "rooms" => [
            [
                "type" => "Budget Room",
                "price" => 3000,
                "max_persons" => 2,
                "images" => [
                    "images/coastal-retreat-budget1.jpg",
                    "images/coastal-retreat-budget2.jpg",
                    "images/coastal-retreat-budget3.jpg"
                ]
            ],
            [
                "type" => "Family Room",
                "price" => 5000,
                "max_persons" => 4,
                "images" => [
                    "images/coastal-retreat-family1.jpg",
                    "images/coastal-retreat-family2.jpg",
                    "images/coastal-retreat-family3.jpg"
                ]
            ]
        ]
    ],
    [
        "name" => "Luxury Beachside Resort",
        "location" => "Near Colva Beach",
        "price_per_night" => 9000,
        "rooms" => [
            [
                "type" => "Premium Ocean View Room",
                "price" => 9000,
                "max_persons" => 2,
                "images" => [
                    "images/luxury-beachside-premium1.jpg",
                    "images/luxury-beachside-premium2.jpg",
                    "images/luxury-beachside-premium3.jpg"
                ]
            ],
            [
                "type" => "Exclusive Penthouse Suite",
                "price" => 15000,
                "max_persons" => 4,
                "images" => [
                    "images/luxury-beachside-penthouse1.jpg",
                    "images/luxury-beachside-penthouse2.jpg",
                    "images/luxury-beachside-penthouse3.jpg"
                ]
            ]
        ]
    ],
    [
        "name" => "City Center Resort",
        "location" => "Panjim City Center",
        "price_per_night" => 6000,
        "rooms" => [
            [
                "type" => "Business Room",
                "price" => 6000,
                "max_persons" => 2,
                "images" => [
                    "images/city-center-business1.jpg",
                    "images/city-center-business2.jpg",
                    "images/city-center-business3.jpg"
                ]
            ],
            [
                "type" => "Presidential Office Suite",
                "price" => 10000,
                "max_persons" => 3,
                "images" => [
                    "images/city-center-presidential1.jpg",
                    "images/city-center-presidential2.jpg",
                    "images/city-center-presidential3.jpg"
                ]
            ]
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Goa Packages</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f7f7f7;
        }
        .package {
            margin-bottom: 30px;
            padding: 15px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .package h2 {
            color: #007bff;
        }
        .room {
            margin-top: 15px;
            padding: 15px;
            background-color: #f1f8ff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .room img {
            max-width: 150px;
            border-radius: 5px;
            margin-right: 10px;
        }
        .room-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }
        .room-details {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="package-list">
        <?php foreach ($goa_packages as $package): ?>
            <div class="package">
                <h2><?php echo $package['name']; ?></h2>
                <p><strong>Location:</strong> <?php echo $package['location']; ?></p>
                <p><strong>Starting Price per Night:</strong> ₹<?php echo number_format($package['price_per_night']); ?></p>

                <h3>Room Types:</h3>
                <?php foreach ($package['rooms'] as $room): ?>
                    <div class="room">
                        <div class="room-details">
                            <p><strong>Type:</strong> <?php echo $room['type']; ?></p>
                            <p><strong>Price per Night:</strong> ₹<?php echo number_format($room['price']); ?></p>
                            <p><strong>Maximum Occupancy:</strong> <?php echo $room['max_persons']; ?> persons</p>
                        </div>
                        <div class="room-gallery">
                            <?php foreach ($room['images'] as $image): ?>
                                <img src="<?php echo $image; ?>" alt="<?php echo $room['type']; ?>">
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Add the "Back to Goa" button at the bottom -->
    <footer>
        <a href="goa.php" class="btn btn-primary">Back to Goa</a>
    </footer>
</body>
</html>
