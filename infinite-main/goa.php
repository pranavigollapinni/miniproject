
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Explore Goa</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            margin: 0;
        }
        .sidebar {
            width: 250px;
            background-color: #f8f9fa;
            height: 100vh;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #007bff;
            color: white;
        }
        .info-section {
            margin: 20px 0;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .info-section h2 {
            margin-bottom: 15px;
        }
        .register-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="goa-packages.php">Packages</a>
        <a href="hotels.php">Hotels</a>
    </div>
    <div class="content">
        <header>
            <h1>Explore Goa</h1>
        </header>

        <section class="info-section">
            <h2>About Goa</h2>
            <p>Goa, located on the western coast of India, is renowned for its stunning beaches, vibrant nightlife, and rich cultural heritage. It's a perfect destination for travelers seeking a mix of relaxation and adventure.</p>
            <h3>Attractions:</h3>
            <ul>
                <li>Baga Beach</li>
                <li>Calangute Beach</li>
                <li>Fort Aguada</li>
                <li>Dudhsagar Waterfalls</li>
                <li>Old Goa Churches</li>
            </ul>
            <h3>Best Time to Visit:</h3>
            <p>November to February is the best time to explore Goa due to its pleasant weather and lively festivals.</p>
            <h3>Activities:</h3>
            <ul>
                <li>Water sports like parasailing and jet-skiing</li>
                <li>Beach parties</li>
                <li>Cruises on the Mandovi River</li>
                <li>Exploring Goan markets</li>
            </ul>
        </section>

        <!-- Register Button -->
        <a href="register.php" class="btn btn-primary register-button">Register</a>
    </div>
</body>
</html>
