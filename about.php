About Us php

<?php
$team_members = [
    ["name" => "Shaan Mansuri", "role" => "Team Leading", "image" => "shaan.jpg"],
    ["name" => "Mann Makhecha", "role" => "Coder", "image" => "mann.jpg"],
    ["name" => "Krish Jain", "role" => "Content Analyst", "image" => "krish.jpg"],
    ["name" => "Dhiraj Jagwani", "role" => "Executor", "image" => "dhiraj.jpg"],
    ["name" => "Chirag Gupta", "role" => "Specified Task", "image" => "chirag.jpg"],
    ["name" => "Het Malvaniya", "role" => "Specified Task", "image" => "het.jpg"],
];

$testimonials = [
    ["name" => "Emily R.", "feedback" => "Amazing company! Their services exceeded my expectations."],
    ["name" => "David P.", "feedback" => "A dedicated and talented team. Highly recommend!"],
    ["name" => "Sarah W.", "feedback" => "Professional and efficient. Absolutely loved working with them."],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/about_styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<?php include 'includes/header.php'; ?>
    <!-- <header class="header">
        <h1>About Us</h1>
        <p>Learn more about who we are and what we do</p>
    </header> -->

    <div class="container">
        <h2>Company Overview</h2>
        <p>We are a passionate team dedicated to providing top-quality services in web development, digital marketing, and business solutions. With over a decade of experience, we have successfully worked with startups and enterprises worldwide.</p>
        
        <div class="mission">
            <h2>Our Mission</h2>
            <p>To empower businesses with cutting-edge technology and innovative digital solutions that drive growth and success.</p>
        </div>

        <h2>Meet Our Team</h2>
        <div class="team">
            <?php foreach ($team_members as $member): ?>
                <div class="team-member">
                    <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
                    <h3><?php echo $member['name']; ?></h3>
                    <p><?php echo $member['role']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <h2>What Our Clients Say</h2>
        <div class="testimonials">
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="testimonial">
                    <h3><?php echo $testimonial['name']; ?></h3>
                    <p>"<?php echo $testimonial['feedback']; ?>"</p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="contact-info">
            <h2>Contact Us</h2>
            <p>Email: <a href="mailto:xyz@gmail.com">xyz@gmail.com</a></p>
            <p>Phone: +91 97370213XX</p>
            <p>Address: LJ Innovation village, LJ Polytechnic, Near Sanad Circle, Ahmedabad, Gujarat, IN</p>
        </div>
    </div>
</body>
</html>