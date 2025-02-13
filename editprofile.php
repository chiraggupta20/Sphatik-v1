<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles.css"> <!-- Linking External CSS -->
</head>
<body>

    <div class="profile-container">
        <img src="https://via.placeholder.com/120" alt="User Profile Picture" class="profile-img">
        <div class="user-name">John Doe</div>
        <div class="user-info">📧 johndoe@example.com</div>
        <div class="user-info">📍 New York, USA</div>
        <div class="user-info">📖 Web Developer | Designer</div>
        
        <div class="profile-options">
            <button class="profile-btn" onclick="editProfile()">✏️ Edit Profile</button>
            <button class="profile-btn" onclick="changePassword()">🔒 Change Password</button>
            <button class="profile-btn" onclick="manageAddresses()">📍 Manage Addresses</button>
            <button class="profile-btn" onclick="paymentMethods()">💳 Payment Methods</button>
            <button class="logout-btn" onclick="logout()">🚪 Logout</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
