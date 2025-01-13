<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Infinite Road</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#projects">Places</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="booking.php">Booking</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
                    <?php
                        if (isset($_SESSION["username"])) {
                            $usname = $_SESSION['username'];
                            echo "<li class='nav-item'><a class='nav-link' href='bucketlist.php'>Bucketlist</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='profile.php'>$usname</a></li>";
                            echo "<li class='nav-item'>
                                    <form action='' method='POST' style='display:inline;'>
                                        <button type='submit' name='logout' class='btn btn-danger' style='background-color: transparent; border: none; color: inherit; padding: 0; cursor: pointer;'>Logout</button>
                                    </form>
                                  </li>";
                            if (isset($_POST['logout'])) {
                                session_unset();
                                session_destroy();
                                header("Location: index.php");
                                exit;
                            }
                        } else {
                            echo "<li class='nav-item'><a class='nav-link' href='login.php'>Sign Up</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase">The Infinite Road</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Embark on a journey where the road never ends.</h2>
                <a href="post.php" class="btn btn-primary">Post Feed</a>
            </div>
        </div>
    </header>

    <!-- Projects -->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Goa -->
            <div class="row gx-0 mb-5 justify-content-center">
                <div class="col-lg-6"><a href="goa.php"><img class="img-fluid" src="assets/img/goa.jpg" alt="Goa"></a></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white"><a href="goa.php" class="text-white">Goa</a></h4>
                                <p class="mb-0 text-white-50">Life is always better at the beach.</p>
                                <p class="text-white-50">Package: 5 Days, 4 Nights</p>
                                <p class="text-white-50">Price: ₹20,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kerala -->
            <div class="row gx-0 mb-5 justify-content-center">
                <div class="col-lg-6"><a href="kerala.php"><img class="img-fluid" src="assets/img/kerala.jpg" alt="Kerala"></a></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white"><a href="kerala.php" class="text-white">Kerala</a></h4>
                                <p class="mb-0 text-white-50">God's own country.</p>
                                <p class="text-white-50">Package: 7 Days, 6 Nights</p>
                                <p class="text-white-50">Price: ₹25,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional destinations follow similar structure -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>Email: <a href="mailto:info@theinfiniteroad.com" class="text-white">info@theinfiniteroad.com</a></p>
            <p>Contact: +91 12345 67890</p>
            <div class="social-icons">
                <a href="https://facebook.com" target="_blank" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com" target="_blank" class="text-white me-3"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
