<?php
session_start();
require '../includes/config.php'; // Database connection

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    die("Unauthorized access.");
}

$user_id = $_SESSION['user_id'];

// Fetch user details from the database
$stmt = $pdo->prepare("SELECT name, email, phone, address, bio FROM users WHERE user_id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch();

if (!$user) {
    die("User not found.");
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate inputs
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $address = trim($_POST['address'] ?? '');
    $bio = trim($_POST['bio'] ?? '');

    if (empty($name) || empty($email) || empty($phone) || empty($address)) {
        die("All fields except bio are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    try {
        // Update user details
        $update_stmt = $pdo->prepare("UPDATE users SET name = ?, email = ?, phone = ?, address = ?, bio = ? WHERE user_id = ?");
        $update_stmt->execute([$name, $email, $phone, $address, $bio, $user_id]);

        echo "<script>alert('Profile updated successfully!'); window.location.href='profile.php';</script>";
    } catch (PDOException $e) {
        die("Database error. Please try again.");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
    text-align: center;
}

/* Edit Profile Container */
.edit-profile-container {
    max-width: 400px;
    margin: 50px auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    text-align: left;
}

/* Form Labels */
.edit-profile-container label {
    display: block;
    font-weight: bold;
    margin-top: 10px;
}

/* Form Inputs */
.edit-profile-container input,
.edit-profile-container textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Button Group */
.button-group {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
}

/* Save Button */
.save-btn {
    background: #6c1ed7;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    font-weight: bold;
    transition: background 0.3s ease-in-out;
}

.save-btn:hover {
    background: #4e0fbf;
}

/* Cancel Button */
.cancel-btn {
    background: #d9534f;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    font-weight: bold;
    transition: background 0.3s ease-in-out;
}

.cancel-btn:hover {
    background: #c9302c;
}
</style>
    <link rel="stylesheet" href="../css/style.css"> <!-- Linking External CSS -->
</head>
<body>

    <div class="edit-profile-container">
        <h2>Edit Profile</h2>
        <form method="POST" action="./../editprofile.php">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" required><?php echo htmlspecialchars($user['address']); ?></textarea>

            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio"><?php echo htmlspecialchars($user['bio']); ?></textarea>

            <div class="button-group">
                <button type="submit" class="save-btn">Save Changes</button>
                <button type="button" class="cancel-btn" onclick="cancelEdit()">Cancel</button>
            </div>
        </form>
    </div>

    <script>
        function cancelEdit() {
            window.location.href = 'profile.php'; // Redirect to profile page
        }
    </script>

</body>
</html>
