<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pest Control Services</title>
    <style>
        /* Updated Color Palette */
        :root {
            --primary-color: #6d28d9; /* Main Purple */
            --secondary-color: #f5f3ff; /* Light Lavender (for backgrounds) */
            --text-color: #333; /* Dark Gray/Black for text */
            --light-text-color: #f8f9fa; /* Off-white for light backgrounds */
        }

        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--secondary-color); /* Light background */
        }

        header {
            background-color: #fff; /* White header */
            padding: 1rem 0;
            border-bottom: 1px solid #eee; /* Subtle border */
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 960px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo a {
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2rem;
            color: var(--primary-color); /* Purple logo */
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav li {
            margin-left: 20px;
        }

        nav a {
            text-decoration: none;
            color: var(--text-color);
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s; /* Smooth transitions */
        }

        nav a:hover {
            background-color: var(--primary-color); /* Purple hover */
            color: var(--light-text-color); /* White text on purple */
        }

        .hero {
            background-image: url("images/hero-image.jpg");
            background-size: cover;
            background-position: center;
            color: var(--light-text-color); /* White text on hero */
            text-align: center;
            padding: 100px 0;
            background-color: rgba(0, 0, 0, 0.4); /* Dark overlay for better contrast */
        }

        .hero-content {
            max-width: 600px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: var(--primary-color); /* Purple button */
            color: var(--light-text-color);
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #551a8b; /* Darker purple on hover */
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .about-us {
            background-color: var(--secondary-color);
        }

        .about-us .container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .about-image {
            flex: 1 1 300px;
            margin-right: 20px;
        }

        .about-image img {
            max-width: 100%;
            height: auto;
        }

        .about-text {
            flex: 1 1 500px;
        }

        .services {
            background-color: #fff;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
        }

        .service {
            border: 1px solid #eee; /* Light border */
            padding: 20px;
            text-align: center;
            transition: transform 0.2s; /* Add a hover effect */
        }

        .service:hover {
            transform: translateY(-5px); /* Move up slightly on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
        }

        .service img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .service h3 {
            margin-bottom: 10px;
            color: var(--primary-color); /* Purple service titles */
        }

        .contact-us {
            background-color: var(--secondary-color);
            padding: 60px 0;
        }

        .contact-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .contact-form textarea {
            height: 120px;
        }

        footer {
            background-color: var(--primary-color); /* Purple footer */
            color: var(--light-text-color);
            text-align: center;
            padding: 1rem 0;
        }
    </style>
</head>
<body>

<?php // PHP start tag here ?>

    <header>
        <nav>
            <div class="logo">
                <a href="index.php">Sphatik</a>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="freelance.php">Freelance</a></li>
                <li><a href="local-services.php">Local Services</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Effective Pest Control Solutions</h1>
            <img src="../sphatik v2/images/pestbanner.jpg" alt="Pest Banner">
            <p>Protecting your home and business from unwanted pests.</p>
            <a href="#contact" class="btn">Get a Free Quote</a>
        </div>
    </section>

    <section class="about-us">
        <div class="container">
            <div class="about-image">
                <img src="images/about-us.jpg" alt="About Us">
            </div>
            <div class="about-text">
                <h2>About Us</h2>
                <p>We are a leading pest control company with years of experience. Our team of experts is dedicated to providing effective and safe pest control solutions for residential and commercial properties. We use the latest technology and eco-friendly products to ensure the best results.</p>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2>Our Services</h2>

            <div class="service-grid">
                <div class="service">
                    <img src="images/residential.jpg" alt="Residential Pest Control">
                    <h3>Residential Pest Control</h3>
                    <p>Protect your home and family from common household pests.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>

                <div class="service