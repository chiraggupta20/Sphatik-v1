<?php
// Dummy user data (Replace with actual database data)
$user = [
    "name" => "Dhiraj Jagwani",
    "email" => "jagwanidhiraj22@gmail.com",
    "phone" => "8866596787",
    "address" => "Gujarat,Ahmedabad",
    "joined" => "January 2025"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="../css/profile_style.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include 'includes/header.php'; ?>

<section class="profile-container">
    <div class="profile-header">
        <h2>Welcome, <?php echo $user['name']; ?></h2>
        <p>Member since: <?php echo $user['joined']; ?></p>
    </div>

    <div class="profile-content">
        <div class="profile-info">
            <h3>Account Information</h3>
            <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
            <p><strong>Phone:</strong> <?php echo $user['phone']; ?></p>
            <p><strong>Address:</strong> <?php echo $user['address']; ?></p>
        </div>

        <div class="account-settings">
            <h3>Account Settings</h3>
            <ul>
                <li><a href="auth/editprofile.php">Edit Profile</a></li>
                <li><a href="../auth/update_password.php">Change Password</a></li>
                <li><a href="#">Manage Addresses</a></li>
                <li><a href="#">Payment Methods</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</section>

</body>
</html>
