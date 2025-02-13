<?php
session_start();
require '../config/database.php'; // Include your database connection

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    die(json_encode(["status" => "error", "message" => "Unauthorized access."]));
}

$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $current_password = $_POST['current_password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Validate passwords
    if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
        die(json_encode(["status" => "error", "message" => "All fields are required."]));
    }

    if (strlen($new_password) < 6) {
        die(json_encode(["status" => "error", "message" => "New password must be at least 6 characters long."]));
    }

    if ($new_password !== $confirm_password) {
        die(json_encode(["status" => "error", "message" => "New password and confirm password do not match."]));
    }

    try {
        // Fetch current password hash from DB
        $stmt = $pdo->prepare("SELECT password_hash FROM users WHERE user_id = ?");
        $stmt->execute([$user_id]);
        $user = $stmt->fetch();

        if (!$user || !password_verify($current_password, $user['password_hash'])) {
            die(json_encode(["status" => "error", "message" => "Current password is incorrect."]));
        }

        // Hash the new password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Update the password in the database
        $update_stmt = $pdo->prepare("UPDATE users SET password_hash = ? WHERE user_id = ?");
        $update_stmt->execute([$hashed_password, $user_id]);

        echo json_encode(["status" => "success", "message" => "Password updated successfully."]);
    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => "Database error: " . $e->getMessage()]);
    }
} else {
    die(json_encode(["status" => "error", "message" => "Invalid request."]));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="styles.css">
    <style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.change-password-container {
    max-width: 380px;
    background: white;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    text-align: left;
}

.form-group {
    margin-bottom: 14px;
}

.form-group label {
    display: block;
    font-weight: 600;
    margin-bottom: 5px;
    color: #333;
    font-size: 14px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

#password-strength {
    font-size: 12px;
    font-weight: bold;
    margin-top: 4px;
}

.weak { color: red; }
.medium { color: orange; }
.strong { color: green; }

.button-group {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
}

button {
    border: none;
    padding: 10px 18px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 5px;
    font-weight: 600;
    transition: all 0.3s ease-in-out;
}

.save-btn { background: #6c1ed7; color: white; }
.save-btn:hover { background: #4e0fbf; }
.cancel-btn { background: #d9534f; color: white; text-decoration: none; padding: 10px 18px; border-radius: 5px; }
.cancel-btn:hover { background: #c9302c; }
</style>
</head>
<body>

    <div class="change-password-container">
        <h2>Change Password</h2>
        
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <?php if ($success): ?>
            <p class="success"><?php echo $success; ?></p>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="form-group">
                <label for="current_password">Current Password:</label>
                <input type="password" id="current_password" name="current_password" required>
            </div>

            <div class="form-group">
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" required oninput="checkPasswordStrength()">
                <div id="password-strength"></div>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm New Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <div class="button-group">
                <button type="submit" class="save-btn">Save Changes</button>
                <a href="profile.php" class="cancel-btn">Cancel</a>
            </div>
        </form>
    </div>

    <script src="script.js">function checkPasswordStrength() {
    let password = document.getElementById("new_password").value;
    let strengthIndicator = document.getElementById("password-strength");

    if (password.length < 6) {
        strengthIndicator.textContent = "Weak";
        strengthIndicator.className = "weak";
    } else if (password.match(/[a-z]/) && password.match(/[0-9]/) && password.length >= 8) {
        strengthIndicator.textContent = "Medium";
        strengthIndicator.className = "medium";
    } else if (password.match(/[A-Z]/) && password.match(/[a-z]/) && password.match(/[0-9]/) && password.match(/[@$!%*?&]/) && password.length >= 10) {
        strengthIndicator.textContent = "Strong";
        strengthIndicator.className = "strong";
    } else {
        strengthIndicator.textContent = "";
    }
}
</script>
</body>
</html>
