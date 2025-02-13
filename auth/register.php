<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';

// Generate CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = generateToken();
}

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyToken($_POST['csrf_token'])) {
        die('CSRF token validation failed');
    }

    // Validate input
    $name = sanitizeInput($_POST['username']);
    $email = sanitizeInput($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = sanitizeInput($_POST['role']);
    $full_name = sanitizeInput($_POST['full_name']);
    $phone = sanitizeInput($_POST['phone']);

    // Validation checks
    if (empty($name) || strlen($name) < 3) {
        $errors[] = "Username must be at least 3 characters long";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($password) || strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
    }

    if (empty($role)) {
        $errors[] = "Please select a role";
    }

    // Check if username or email already exists
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE name = ? OR email = ?");
    $stmt->execute([$name, $email]);
    if ($stmt->fetchColumn() > 0) {
        $errors[] = "Username or email already exists";
    }

    // If no errors, proceed with registration
    if (empty($errors)) {
        try {
            $pdo->beginTransaction();

            // Insert user
            $stmt = $pdo->prepare("INSERT INTO users (name, email, password_hash, role) VALUES (?, ?, ?, ?)");
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt->execute([$name, $email, $hashed_password, $role]);

            $user_id = $pdo->lastInsertId();

            // Insert user profile
            $stmt = $pdo->prepare("INSERT INTO user_profiles (user_id, full_name, phone) VALUES (?, ?, ?)");
            $stmt->execute([$user_id, $full_name, $phone]);

            $pdo->commit();
            $_SESSION['success_message'] = 'Registration successful! Please login.';
            header('Location: login.php');
            exit();

        } catch (Exception $e) {
            $pdo->rollBack();
            $errors[] = "Registration failed: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <div class="container">
        <div class="auth-form">
            <h2>Create an Account</h2>

            <?php if (!empty($errors)): ?>
                <div class="alert alert-error">
                    <?php foreach ($errors as $error): ?>
                        <p><?php echo $error; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="register.php" class="registration-form">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                <div class="form-group">
                    <label for="username">Username *</label>
                    <input type="text" id="username" name="username"
                        value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>"
                        required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email"
                        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
                </div>

                <div class="form-group">
                    <label for="full_name">Full Name *</label>
                    <input type="text" id="full_name" name="full_name"
                        value="<?php echo isset($_POST['full_name']) ? htmlspecialchars($_POST['full_name']) : ''; ?>"
                        required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone"
                        value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="role">Register as *</label>
                    <select id="role" name="role" required>
                        <option value="">Select Role</option>
                        <option value="user" <?php echo (isset($_POST['role']) && $_POST['role'] === 'user') ? 'selected' : ''; ?>>Regular User</option>
                        <option value="freelancer" <?php echo (isset($_POST['role']) && $_POST['role'] === 'freelancer') ? 'selected' : ''; ?>>Freelancer</option>
                        <option value="delivery_partner" <?php echo (isset($_POST['role']) && $_POST['role'] === 'delivery_partner') ? 'selected' : ''; ?>>Delivery Partner</option>
                        <option value="service_provider" <?php echo (isset($_POST['role']) && $_POST['role'] === 'service_provider') ? 'selected' : ''; ?>>Service Provider</option>
                        <option value="instructer" <?php echo (isset($_POST['role']) && $_POST['role'] === 'instructer') ? 'selected' : ''; ?>>Instructer</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password *</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>

            <div class="auth-links">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </div>
    </div>

    <script src="../js/main.js"></script>
</body>

</html>
