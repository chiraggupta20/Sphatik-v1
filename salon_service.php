<?php
// Start session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Services</title>
    <link rel="stylesheet" href="./css/salon.css">
</head>
<body>
    <header>
        <h1>Salon Services</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="salon.php">Salon</a></li>
                <li><a href="painting.php">Home Painting</a></li>
                <li><a href="cleaning.php">Home Cleaning</a></li>
            </ul>
        </nav>
    </header>

    <section class="services">
        <h2>Our Services</h2>
        <div class="service-list">
            <div class="service">
                <img src="images/haircut.jpg" alt="Haircut">
                <h3>Haircut</h3>
                <p>Professional haircut services for men and women.</p>
                <span class="price">$15</span>
                <button>Book Now</button>
            </div>

            <div class="service">
                <img src="images/facial.jpg" alt="Facial">
                <h3>Facial Treatment</h3>
                <p>Relaxing and rejuvenating facial treatments.</p>
                <span class="price">$30</span>
                <button>Book Now</button>
            </div>

            <div class="service">
                <img src="images/massage.jpg" alt="Massage">
                <h3>Body Massage</h3>
                <p>Experience a full-body relaxing massage.</p>
                <span class="price">$50</span>
                <button>Book Now</button>
            </div>

            <div class="service">
                <img src="images/manicure.jpg" alt="Manicure">
                <h3>Manicure & Pedicure</h3>
                <p>Get your nails done by professionals.</p>
                <span class="price">$25</span>
                <button>Book Now</button>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Sphatik. All Rights Reserved.</p>
    </footer>
</body>
</html>