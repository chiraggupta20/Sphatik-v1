<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Partner</title>
    <link rel="stylesheet" href="./css/delivery_style.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include './includes/header.php'; ?>
<section class="services">
    <div class="container">
        <h2>Join as a Delivery Partner</h2>
        <div class="services-grid">
            <div class="service-card">
                <i class="fas fa-truck"></i>
                <h3>Flexible Hours</h3>
                <p>Work at your convenience and earn extra income.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-money-bill-wave"></i>
                <h3>Guaranteed Earnings</h3>
                <p>Competitive pay and performance-based incentives.</p>
            </div>
        </div>

        <h2>Register Now</h2>
        <form action="/submit_delivery.php" method="POST" class="service-form">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="full_name" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone_number" required>

            <label for="vehicle">Vehicle Type:</label>
            <select id="vehicle" name="vehicle_type">
                <option value="bike">Bike</option>
                <option value="car">Car</option>
                <option value="truck">Truck</option>
            </select>

            <button type="submit">Register Now</button>
        </form>
    </div>
</section>

</body>
</html>
